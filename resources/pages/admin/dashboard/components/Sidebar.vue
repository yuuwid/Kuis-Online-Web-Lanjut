<template>
    <button
        data-drawer-target="sidebar"
        data-drawer-toggle="sidebar"
        aria-controls="sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
    >
        <span class="sr-only">Open sidebar</span>
        <svg
            class="w-6 h-6"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                clip-rule="evenodd"
                fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
            ></path>
        </svg>
    </button>

    <aside
        id="sidebar"
        class="fixed top-0 left-0 z-40 w-72 h-screen transition-transform -translate-x-full md:translate-x-0"
        aria-label="Sidebar"
    >
        <div class="h-full px-6 py-8 overflow-y-auto bg-gray-50">
            <section class="mb-6">
                <h1 class="text-2xl font-bold">ADMIN PAGE</h1>
                <h1 class="text-lg">Kuis</h1>
            </section>

            <ul class="space-y-2 font-medium">
                <li>
                    <Link
                        href="/admin/dashboard"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100"
                    >
                        <i class="bi bi-house text-lg"></i>
                        <span class="ml-3">Dashboard</span>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/admin/dashboard/list-kuis"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100"
                    >
                        <i class="bi bi-grid-1x2 text-lg"></i>
                        <span class="ml-3">Daftar Kuis</span>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/admin/dashboard/ranks"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100"
                    >
                        <i class="bi bi-bullseye text-lg"></i>
                        <span class="ml-3">Peringkat</span>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/admin/dashboard/users"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100"
                    >
                        <i class="bi bi-people text-lg"></i>
                        <span class="ml-3">Users</span>
                    </Link>
                </li>
            </ul>

            <ul
                class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200"
            >
                <li>
                    <a
                        href="/admin/auth/logout"
                        class="flex items-center p-2 text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group"
                    >
                        <i class="bi bi-box-arrow-right text-lg"></i>
                        <span class="ml-4">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    props: {},
    computed: {},
    components: {
        Link,
    },
    data() {
        return {};
    },
    mounted: () => {},
};
</script>

<style>
</style>

