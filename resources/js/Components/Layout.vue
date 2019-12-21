<template>
    <main>
        <header>
            <component
                :is="currentNavbar"
                >
            </component>
        </header>
        <article>
            <slot/>
        </article>
    </main>
</template>

<script>

import Navbar from "@/Components/Navbar"
import PlainNavbar from "@/Components/PlainNavbar"

export default {
    components: {
        Navbar,
        PlainNavbar,
    },

    computed: {
        currentNavbar() {
            return this.$page.app.user ?
                Navbar :
                PlainNavbar
        }
    }
};
</script>
