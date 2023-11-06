<template>
    <Layout>
        <h1 class="text-3xl">
            User
        </h1>
        <div style="margin-top: 400px;">
        <p>
            The Current time is {{ time }}.
        </p>
        <Link
            href="/user"
            class="text-blue-500"
            preserve-scroll
        >
            Refresh
        </Link>
    </div>
    </Layout>
</template>

<script>
import Layout from '../Shared/Layout.vue';
export default {
    components: { Layout },
    props: {
        time: String,
    }
};
</script>

