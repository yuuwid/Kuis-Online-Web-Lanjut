<template>
    <Head title="Dashboard Admin"></Head>

    <Sidebar></Sidebar>

    <div class="p-4 md:ml-64">
        <div class="relative-padding container mx-auto my-8">
            <!-- TOP SECTION -->
            <section class="flex flex-wrap lg:gap-4">
                <div
                    class="block w-full sm:w-1/2 lg:w-64 py-8 bg-kuis-blue-500 border border-gray-200 rounded-lg shadow hover:bg-gray-100 text-center"
                >
                    <h5
                        class="mb-6 text-xl font-bold tracking-tight text-white"
                    >
                        KUIS
                    </h5>
                    <p class="font-bold text-white text-5xl">100</p>
                </div>
                <div
                    class="block w-full sm:w-1/2 lg:w-64 py-8 bg-kuis-purple border border-gray-200 rounded-lg shadow hover:bg-gray-100 text-center"
                >
                    <h5
                        class="mb-6 text-xl font-bold tracking-tight text-white"
                    >
                        USERS
                    </h5>
                    <p class="font-bold text-white text-5xl">100</p>
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
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="px-6 py-4">1</td>
                                    <td class="px-6 py-4">Test</td>
                                    <td class="px-6 py-4">1</td>
                                    <td class="px-6 py-4">100</td>
                                    <td class="px-6 py-4">Active</td>
                                    <td class="px-6 py-4 l">
                                        <Link
                                            href="/admin/dashboard/kuis/"
                                            class="border rounded-lg bg-kuis-blue-800 p-2 hover:bg-kuis-blue-500"
                                        >
                                            <i
                                                class="bi bi-pencil text-white"
                                            ></i>
                                        </Link>
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
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="px-6 py-4">1</td>
                                    <td class="px-6 py-4">Test</td>
                                    <td class="px-6 py-4">1</td>
                                    <td class="px-6 py-4">100</td>
                                    <td class="px-6 py-4">Active</td>
                                    <td class="px-6 py-4 l">
                                        <Link
                                            href="/admin/dashboard/kuis/"
                                            class="border rounded-lg bg-kuis-blue-800 p-2 hover:bg-kuis-blue-500"
                                        >
                                            <i
                                                class="bi bi-pencil text-white"
                                            ></i>
                                        </Link>
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
    props: {},
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
