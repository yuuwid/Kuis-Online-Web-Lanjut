<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KuisController extends Controller
{

    public function detail_kuis($slug)
    {
        $kuis = DB::table('kuis')->where('slug', '=', $slug)->get()->first();

        $soal = DB::table('soal')->where('id_kuis', '=', $kuis->id_kuis)->get();

        $soal_jawaban = [];

        foreach ($soal as $s) {
            $temp = DB::table('options')->where('options.id_soal', '=', $s->id_soal)->get();
            $s->jawaban = $temp;
            $soal_jawaban[] = $s;
        }

        $soal_jawaban = collect($soal_jawaban);


        return render('admin.dashboard.DetailKuis', [
            'kuis' => $kuis,
            'soal_jawaban' => $soal_jawaban,
        ]);
    }

    public function toggle_jawaban($id_soal, $id_jawaban)
    {
        DB::table('options')->where('id_soal', '=', $id_soal)->update(['iskunci' => 0]);

        DB::table('options')->where('id_option', '=', $id_jawaban)->update(['iskunci' => 1]);

        return redirect()->back();
    }
}
