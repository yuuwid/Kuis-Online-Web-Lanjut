<template>
    <div>
        <p v-for="user in users.data" :key="user.id_user">
            {{ user.id_user }}
        </p>
    </div>

    <LaraPagination :data="users" />
</template>

<script>
import LaraPagination from "./paginate/LaraPagination.vue";

export default {
    props: {
        users: {
            type: Object,
            default: {},
        },
    },
    computed: {},
    components: {
        LaraPagination,
    },
    data() {
        return {};
    },
    mounted: () => {},
};
</script>

<style>
</style>
