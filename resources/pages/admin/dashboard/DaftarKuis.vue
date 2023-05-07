<template>
    <Head title="Dashboard Admin"></Head>

    <Sidebar></Sidebar>

    <div class="p-4 md:ml-64">
        <div class="relative-padding container mx-auto my-8"></div>
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
