<template>
    <div
        class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-kuis-blue-800 to-kuis-blue-500 i justify-around items-center hidden"
    >
        <div>
            <h1 class="text-white font-bold text-4xl font-sans">Kuis</h1>
            <p class="text-white mt-1">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Adipisci, quo.
            </p>
        </div>
        <div
            class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"
        ></div>
        <div
            class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"
        ></div>
        <div
            class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"
        ></div>
        <div
            class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"
        ></div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    props: {},
    computed: {},
    components: {
        Link: Link,
    },
    data() {
        return {};
    },
    mounted: () => {},
};
</script>

<style>
</style>
