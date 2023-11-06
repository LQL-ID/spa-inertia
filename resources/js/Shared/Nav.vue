<template>
    <nav class="p-8">
        <ul class="list-disc">
            <li>
                <NavLink
                    href="/"
                    :active="$page.component == 'Home'"
                >
                    Home
                </NavLink>
            </li>
            <li>
                <NavLink
                    href="/user"
                    :active="$page.component == 'User'"
                >
                    User
                </NavLink>
            </li>
            <li>
                <NavLink
                    href="/setting"
                    :active="$page.component == 'Setting'"
                >
                    Setting
                </NavLink>
            </li>
        </ul>
    </nav>
</template>

<script>

import NavLink from '../Shared/NavLink.vue';

export default {
    components: { NavLink }
};
</script>
