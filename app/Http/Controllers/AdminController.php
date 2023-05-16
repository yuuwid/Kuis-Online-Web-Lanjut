<?php

namespace App\Http\Controllers;

use App\Models\Kuis;
use App\Models\Results;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index_login()
    {
        if (Auth::guard('webadmin')->check()) {
            return redirect()->route('admin.dashboard');
        } else if (Auth::guard('web')->check()) {
            redirect('/');
        } else {
            return render('admin.login.LoginAdmin');
        }
    }

    public function login_req(Request $request)
    {
        $credentials = [
            'email' => "required",
            'password' => "required|min:6",
        ];
        $request->validate($credentials);

        $data = $request->only(['email', 'password']);

        if (Auth::guard('webadmin')->attempt($data)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('flash_err', 'Email or Password Invalid !');
        }
    }

    public function logout()
    {
        Auth::guard('webadmin')->logout();

        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        $kuiss = Kuis::latest()->limit(5)->get();
        $latest_kuis = [];
        foreach ($kuiss as $kuis) {
            $temp = [
                'id_kuis' => $kuis->id_kuis,
                'slug' => $kuis->slug,
                'title' => $kuis->title,
                'status' => $kuis->status,
                'users_jawab' => Results::all()->where('id_kuis', $kuis->id_kuis)->count(),
                'best_score' => Results::where('id_kuis', $kuis->id_kuis)->max('score'),
            ];
            array_push($latest_kuis, $temp);
        }

        $users_score = DB::table('results')
            ->join('users', 'results.id_user', '=', 'users.id_user')
            ->join('kuis', 'results.id_kuis', '=', 'kuis.id_kuis')
            ->limit(10)
            ->orderBy('score', 'desc')
            ->get();

        $data = [
            'n_kuis' => Kuis::all()->count(),
            'n_users' => User::all()->count(),
            'latest_kuis' => $latest_kuis,
            'users_score' => $users_score,
        ];

        return render('admin.dashboard.Dashboard', $data);
    }

    public function index_list_kuis()
    {
        return render('admin.dashboard.DaftarKuis', [
            'kuiss' => Kuis::paginate(10),
        ]);
    }

    public function api_list_kuis(Request $request)
    {
        if ($request->get('search') != null) {
            $keyword = '%' . $request->get('search')  . '%';
            return Kuis::where('title', 'like', $keyword)->paginate(5);
        } else {
            return Kuis::paginate(10);
        }
    }
}
