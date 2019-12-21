<template>
    <div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h1>Login</h1>

                    <hr />

                    <form @submit.prevent="onFormSubmit" method="POST">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input
                                v-model="username"
                                class="form-control"
                                :class="{'is-invalid': $page.errors.username }"
                                type="text"
                                id="username"
                                placeholder="Username"
                            />
                            <div
                                v-if="$page.errors.username"
                                class="invalid-feedback"
                            >{{ $page.errors.username[0] }}</div>
                        </div>

                        <div class="form-group">
                            <label for="password"> Password: </label>
                            <input
                                v-model="password"
                                class="form-control"
                                :class="{'is-invalid': $page.errors.password }"
                                type="password"
                                id="password"
                                placeholder="Password"
                            />
                            <div
                                v-if="$page.errors.password"
                                class="invalid-feedback"
                            >{{ $page.errors.password[0] }}</div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary">
                                Log In
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    layout: require("@/Components/Layout").default,

    data() {
        return {
            username: null,
            password: null,
            password_confirmation: null,
            error_data: null
        };
    },

    computed: {
        formData() {
            return {
                username: this.username,
                password: this.password,
                password_confirmation: this.password_confirmation,
                error_data: this.error_data
            };
        }
    },

    methods: {
        get: require("lodash").get,

        onFormSubmit() {
            this.$inertia.post("/login", this.formData);
        }
    }
};
</script>
