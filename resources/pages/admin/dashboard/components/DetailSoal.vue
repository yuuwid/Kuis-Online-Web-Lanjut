<template>
    <div class="mt-3">
        <div class="mb-3">
            <h5 class="text-sm">Soal</h5>
        </div>

        <div class="mb-3">
            <h1 class="text-lg font-semibold">
                {{ soal_jawaban.pertanyaan }}
            </h1>
        </div>

        <h1 class="text-base font-semibold">Atur Kunci Jawaban</h1>
        <div class="flex items-center">
            <div class="w-4 h-4 bg-green-500 inline-block"></div>
            <span class="ml-1">Kunci</span>
        </div>
        <div class="my-3 grid grid-cols-1 md:grid-cols-2 gap-4">
            <a
                :href="
                    option.iskunci
                        ? '#'
                        : 'toggle-jawaban/' +
                          soal_jawaban.id_soal +
                          '/' +
                          option.id_option +
                          '#soal-' +
                          soal_jawaban.id_soal
                "
                class="px-3 py-2 border rounded-md"
                v-for="option in soal_jawaban.jawaban"
                :key="option.id_option"
                :class="
                    option.iskunci
                        ? 'bg-green-500 text-white'
                        : 'bg-white text-slate-900'
                "
            >
                {{ option.option }}
            </a>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    props: {
        soal_jawaban: {
            type: Object,
            default: null,
        },
    },
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
