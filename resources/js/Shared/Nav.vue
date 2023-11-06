<template>
    <nav class="p-8">
        <ul class="list-disc">
            <li><Link class="text-lg text-blue-800 hover:underline" href="/">Home</Link></li>
            <li><Link class="text-lg text-blue-800 hover:underline" href="/user">User</Link></li>
            <li><Link class="text-lg text-blue-800 hover:underline" href="/setting">Setting</Link></li>
            <li><Link class="text-lg text-blue-800 hover:underline" href="/logout" method="post" as="button">Log out</Link></li>
        </ul>
    </nav>
</template>

<script>

import { Link } from '@inertiajs/vue3';

export default {
    components: { Link }
};
</script>
