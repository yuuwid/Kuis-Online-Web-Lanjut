<template>
    <img
        class="rounded-t-lg h-40 md:h-32 w-full object-cover object-center"
        src="https://source.unsplash.com/random/"
        alt=""
    />
    <div class="flex-1 flex flex-col justify-between">
        <section class="flex-1 p-3">
            <Link :href="'/admin/dashboard/list-kuis/d/' + kuis.slug">
                <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900">
                    {{ kuis.title }}
                </h5>
            </Link>
            <p class="mb-3 text-sm font-normal text-gray-700">
                Lorem ipsum dolor sit amet.
            </p>
        </section>
        <section class="mt-3 flex justify-between bg-gray-50 border-t p-3">
            <h5 class="text-xs text-gray-500">
                <i class="bi bi-clock mr-1"></i>
                Created at:
            </h5>
            <h5 class="text-xs text-gray-500">
                <i class="bi bi-activity mr-1"></i>
                Dikerjakan:
            </h5>
        </section>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    props: {
        kuis: Object,
    },
    computed: {},
    components: {
        Link,
    },
    data() {
        return {
        };
    },
    mounted: () => {},
};
</script>

<style>
</style>

