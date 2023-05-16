<template>
    <Head title="Dashboard Admin"></Head>

    <Sidebar></Sidebar>

    <div class="p-4 md:ml-64">
        <div class="relative-padding container mx-auto my-8">
            <section
                class="flex flex-wrap flex-col lg:flex-row justify-between gap-6"
            >
                <div class="">
                    <h1 class="text-2xl font-bold">DAFTAR KUIS</h1>
                </div>

                <div class="w-3/4 lg:w-1/4">
                    <input
                        type="text"
                        id="small-input"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Cari Kata Kunci"
                        v-model="search"
                    />
                </div>
            </section>

            <section
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4 mt-8"
            >
                <div
                    class="w-full flex flex-col md:!max-w-xs bg-white border border-gray-200 rounded-lg shadow mx-auto md:mx-0"
                    v-for="kuis in kuiss.data"
                    :key="kuis.id_kuis"
                >
                    <ItemKuis :kuis="kuis"></ItemKuis>
                </div>
            </section>

            <section class="mt-8 flex justify-end">
                <LaraPagination :data="kuiss" />
            </section>
        </div>
    </div>
</template>


<script>
import { Head, Link } from "@inertiajs/vue3";
import { initFlowbite } from "flowbite";

import LaraPagination from "/resources/pages/components/paginate/LaraPagination.vue";

import Sidebar from "./components/Sidebar.vue";
import ItemKuis from "./components/ItemKuis.vue";

export default {
    props: {
        kuiss: {
            type: Object,
            default: {},
        },
    },
    methods: {},
    created() {},
    computed: {},
    components: {
        Head,
        Link,
        Sidebar,
        LaraPagination,
        ItemKuis,
    },
    data() {
        return {
            search: "",
        };
    },
    mounted: () => {
        initFlowbite();
    },
};
</script>

<style>
</style>
