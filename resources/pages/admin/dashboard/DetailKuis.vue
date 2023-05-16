<template>
    <Head title="Detail Kuis"></Head>

    <Sidebar></Sidebar>

    <div class="p-4 md:ml-64">
        <div class="relative-padding container mx-auto my-8">
            <!-- Back Button -->
            <section class="mb-5">
                <Link href="/admin/dashboard/list-kuis">
                    <i class="bi bi-caret-left"></i> Kembali
                </Link>
            </section>

            <section class="rounded-lg overflow-hidden shadow border">
                <!-- THUMBNAIL -->
                <div class="w-full relative">
                    <img
                        src="/assets/images/no-image.jpg"
                        alt=""
                        class="h-48 w-full object-cover"
                    />
                    <button
                        class="absolute top-2 right-2 rounded-full bg-gray-50/20 hover:!bg-gray-200/70 border px-3 py-2"
                    >
                        <i class="bi bi-pencil"></i>
                    </button>
                </div>

                <div class="py-3 px-6">
                    <section class="mb-5">
                        <h1 class="text-base font-bold">Judul Kuis</h1>
                        <h1 class="text-lg">
                            {{ kuis.title }}
                        </h1>
                    </section>
                    <section class="mb-5">
                        <h1 class="text-base font-bold">Deskripsi</h1>
                        <h1 class="text-lg">
                            {{ kuis.description }}
                        </h1>
                    </section>
                    <section class="mb-5">
                        <div>
                            <h1 class="text-base font-bold">Status</h1>
                            <h1
                                class="text-lg animate-pulse"
                                :class="
                                    kuis.status
                                        ? 'text-green-500'
                                        : 'text-red-500'
                                "
                            >
                                {{ kuis.status ? "Aktif" : "Expired" }}
                            </h1>
                        </div>
                    </section>
                </div>
            </section>

            <div class="relative">
                <section
                    class="rounded-md shadow border mt-8"
                    v-for="sj in soal_jawaban"
                    :key="sj.id_soal"
                >
                    <div class="py-3 px-6" :id="'soal-' + sj.id_soal">
                        <DetailSoal :soal_jawaban="sj"></DetailSoal>
                    </div>
                </section>
                <button
                    data-modal-target="editSoalModal"
                    data-modal-toggle="editSoalModal"
                    class="absolute top-2 right-2 rounded-full bg-gray-50/20 hover:!bg-gray-200/70 border px-3 py-2"
                    type="button"
                >
                    <i class="bi bi-pencil"></i>
                </button>
            </div>

            <!-- Modal Update Data -->
            <div
                id="editSoalModal"
                tabindex="-1"
                aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
            >
                <div class="relative w-full max-w-4xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div
                            class="flex items-start justify-between p-4 border-b rounded-t"
                        >
                            <h3
                                class="text-xl font-semibold text-gray-900 dark:text-white"
                            >
                                Edit Data Soal
                            </h3>
                            <button
                                type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                data-modal-hide="editSoalModal"
                            >
                                <svg
                                    class="w-5 h-5"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p
                                class="text-base leading-relaxed text-gray-500 dark:text-gray-400"
                            >
                                With less than a month to go before the European
                                Union enacts new consumer privacy laws for its
                                citizens, companies around the world are
                                updating their terms of service agreements to
                                comply.
                            </p>
                            <p
                                class="text-base leading-relaxed text-gray-500 dark:text-gray-400"
                            >
                                The European Union’s General Data Protection
                                Regulation (G.D.P.R.) goes into effect on May 25
                                and is meant to ensure a common set of data
                                rights in the European Union. It requires
                                organizations to notify users as soon as
                                possible of high-risk data breaches that could
                                personally affect them.
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b"
                        >
                            <button
                                data-modal-hide="editSoalModal"
                                type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            >
                                Simpan
                            </button>
                            <button
                                data-modal-hide="editSoalModal"
                                type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10"
                            >
                                Batal
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Head, Link } from "@inertiajs/vue3";
import Sidebar from "./components/Sidebar.vue";
import DetailSoal from "./components/DetailSoal.vue";

import { useForm } from "@inertiajs/vue3";

export default {
    props: {
        kuis: Object,
        soal_jawaban: {
            type: Object,
            default: null,
        },
    },
    computed: {},
    components: {
        Head,
        Link,
        Sidebar,
        DetailSoal,
    },
    data() {
        return {
            i: 1,
            form: useForm({
                title: "",
                desc: "",
                poin: "",
                options: {},
            }),
        };
    },
    mounted: () => {},
};
</script>

<style>
</style>
