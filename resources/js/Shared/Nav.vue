<template>
    <nav>
        <ul>
            <li><Link href="/">Home</Link></li>
            <li><Link href="/user">User</Link></li>
            <li><Link href="/setting">Setting</Link></li>
        </ul>
    </nav>
</template>

<script>

import { Link } from '@inertiajs/vue3';

export default {
    components: { Link }
};
</script>
