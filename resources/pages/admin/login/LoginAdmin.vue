<template>
    <Head title="Admin Login"></Head>

    <div class="h-screen md:flex">
        <LeftSection></LeftSection>
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
            <FormLogin></FormLogin>
        </div>
    </div>
</template>

<script>
import { Head, Link } from "@inertiajs/vue3";
import LeftSection from "./components/LeftSection.vue";
import FormLogin from "./components/FormLogin.vue";

export default {
    props: {},
    computed: {},
    components: {
        Head,
        Link,
        LeftSection,
        FormLogin,
    },
    data() {
        return {};
    },
    mounted: () => {},
};
</script>

<style>
</style>
