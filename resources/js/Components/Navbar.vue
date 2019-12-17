<template>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">{{ $page.app.name }}</a>
            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-toggle="collapse"
                data-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation"
            ></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li
                        class="nav-item"
                        :class="{ active: $page.app.route === 'admin/dashboard/show' }">
                        <inertia-link
                            class="nav-link"
                            href="/admin/dashboard/show"
                            preserve-scroll>
                            Dashboard
                            <span
                                v-if="$page.app.route === 'admin/dashboard/show'"
                                class="sr-only">
                                (current)
                            </span>
                        </inertia-link>
                    </li>

                    <li class="nav-item">
                        <li
                            class="nav-item"
                            :class="{ active: $page.app.route === 'admin/help/show' }">
                            <inertia-link
                                class="nav-link"
                                href="/admin/help/show"
                                preserve-scroll>
                                Help
                                <span
                                    v-if="$page.app.route === 'admin/help/show'"
                                    class="sr-only">
                                    (current)
                                </span>
                            </inertia-link>
                        </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {};
</script>
