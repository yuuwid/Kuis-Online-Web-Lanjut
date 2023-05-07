<template>
    <Head title="Dashboard Admin"></Head>

    <Sidebar></Sidebar>

    <div class="p-4 md:ml-64">
        <div class="relative-padding container mx-auto my-8">
            <!-- TOP SECTION -->
            <section class="flex flex-wrap lg:gap-4">
                <div
                    class="block w-full sm:w-1/2 lg:w-64 py-8 bg-kuis-blue-500 border border-gray-200 rounded-lg shadow group hover:bg-kuis-blue-500/80 text-center"
                >
                    <h5
                        class="mb-6 text-xl font-bold tracking-tight text-white"
                    >
                        KUIS
                    </h5>
                    <p class="font-bold text-white text-5xl">{{ n_kuis }}</p>
                </div>
                <div
                    class="block w-full sm:w-1/2 lg:w-64 py-8 bg-kuis-purple border border-gray-200 rounded-lg shadow group hover:bg-kuis-purple/80 text-center"
                >
                    <h5
                        class="mb-6 text-xl font-bold tracking-tight text-white"
                    >
                        USERS
                    </h5>
                    <p class="font-bold text-white text-5xl">{{ n_users }}</p>
                </div>
            </section>

            <!-- BOTTOM SECTION -->
            <section
                class="flex flex-wrap flex-col gap-y-8 lg:gap-x-8 lg:flex-row justify-evenly mt-12"
            >
                <div class="flex-1 relative overflow-x-auto">
                    <h1 class="text-xl font-bold">List Kuis</h1>

                    <div class="relative overflow-x-auto custom-scrollbar mt-6">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50"
                            >
                                <tr>
                                    <th scope="col" class="px-6 py-3">#</th>
                                    <th scope="col" class="px-6 py-3">Judul</th>
                                    <th scope="col" class="px-6 py-3">
                                        User yang menjawab
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Skor Tertinggi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="kuis in latest_kuis"
                                    :key="kuis.id_kuis"
                                    class="bg-white border-b hover:bg-gray-50"
                                >
                                    <td class="px-6 py-4">
                                        {{ kuis.id_kuis }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ kuis.title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ kuis.id_kuis }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ kuis.best_score }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ kuis.status == 1 ? "Aktif" : "-" }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex-1 relative overflow-x-auto">
                    <h1 class="text-xl font-bold">Skor Tertinggi</h1>

                    <div class="relative overflow-x-auto custom-scrollbar mt-6">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50"
                            >
                                <tr>
                                    <th scope="col" class="px-6 py-3">#</th>
                                    <th scope="col" class="px-6 py-3">User</th>
                                    <th scope="col" class="px-6 py-3">Judul</th>
                                    <th scope="col" class="px-6 py-3">Skor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="user_score in users_score"
                                    :key="user_score.id_result"
                                    class="bg-white border-b hover:bg-gray-50"
                                >
                                    <td class="px-6 py-4">
                                        {{ user_score.id_result }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ user_score.nama }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ user_score.title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ user_score.score }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import { Head, Link } from "@inertiajs/vue3";
import { initFlowbite } from "flowbite";

import Sidebar from "./components/Sidebar.vue";

export default {
    props: {
        n_kuis: Int32Array,
        n_users: Int32Array,
        latest_kuis: Array,
        users_score: Array,
    },
    computed: {},
    components: {
        Head,
        Link,
        Sidebar,
    },
    data() {
        return {};
    },
    mounted: () => {
        initFlowbite();
    },
};
</script>

<style>
</style>
