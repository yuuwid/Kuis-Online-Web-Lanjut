<template>
    <form
        class="w-full relative-padding"
        @submit.prevent="form.post('/admin/auth/login')"
    >
        <div
            id="alert-2"
            class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 items-center"
            role="alert"
            v-if="$page.props.flash_err.flash_err"
        >
            <i class="bi bi-exclamation-circle-fill text-lg"></i>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ $page.props.flash_err.flash_err }}
            </div>
            <button
                type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8"
                data-dismiss-target="#alert-2"
                aria-label="Close"
            >
                <span class="sr-only">Close</span>
                <i class="bi bi-x text-xl p-0"></i>
            </button>
        </div>
        <section>
            <h1 class="text-3xl mb-6 font-bold text-center lg:text-left">
                ADMIN LOGIN
            </h1>
            <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello!</h1>
            <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
        </section>

        <!-- EMAIL INPUT -->
        <section class="mb-4">
            <div
                class="flex items-center border-2 py-1 px-3 rounded-2xl"
                :class="
                    $page.props.flash_err.flash_err
                        ? 'border-red-500 border-1'
                        : ''
                "
            >
                <i class="bi bi-envelope-at text-lg text-gray-600"></i>
                <input
                    class="ml-2 outline-none border-none w-full rounded-md"
                    type="text"
                    placeholder="Email"
                    required
                    v-model="form.email"
                />
            </div>
            <div v-if="form.errors.email" class="text-sm text-red-500 italic">
                {{ form.errors.email }}
            </div>
        </section>

        <section class="mb-4">
            <div
                class="flex items-center border-2 py-1 px-3 rounded-2xl"
                :class="
                    $page.props.flash_err.flash_err
                        ? 'border-red-500 border-1'
                        : ''
                "
            >
                <i class="bi bi-shield-lock text-lg text-gray-600"></i>

                <input
                    class="ml-2 outline-none border-none w-full rounded-md"
                    type="password"
                    placeholder="Password"
                    required
                    v-model="form.password"
                />
            </div>
            <div
                v-if="form.errors.password"
                class="text-sm text-red-500 italic"
            >
                {{ form.errors.password }}
            </div>
        </section>

        <button
            type="submit"
            class="block w-full bg-kuis-blue-500 hover:bg-kuis-blue-800 mt-4 py-2 rounded-2xl text-white font-semibold mb-2"
            :disabled="form.processing"
        >
            Login
        </button>
    </form>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import { useForm } from "@inertiajs/vue3";
import { initDismisses } from "flowbite";

export default {
    props: {},
    computed: {},
    components: {
        Link,
    },
    data() {
        const form = useForm({
            email: null,
            password: null,
        });
        return {
            form,
        };
    },
    mounted: () => {
        initDismisses();
    },
};
</script>

<style>
</style>

