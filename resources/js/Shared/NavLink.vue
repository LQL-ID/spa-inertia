<template>
    <Link
        class="text-lg text-blue-800 hover:underline"
        href="/"
        :class="{ 'font-bold underline': active }"
    >
        <slot />
    </Link>
</template>

<script>

import { Link } from '@inertiajs/vue3';

export default {
    components: { Link },
    props: {
        active: Boolean,
    },
};

</script>
