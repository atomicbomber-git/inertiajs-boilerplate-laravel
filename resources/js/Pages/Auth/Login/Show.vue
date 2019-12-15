<template>
  <div>
    <navbar></navbar>

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
                :class="{'is-invalid': get(this.$page.errors, 'errors.username[0]', false)}"
                type="text"
                id="username"
                placeholder="Username"
              />
              <div class="invalid-feedback">{{ get(this.$page.errors, 'username[0]', false) }}</div>
            </div>

            <div class="form-group">
              <label for="password">Password:</label>
              <input
                v-model="password"
                class="form-control"
                :class="{'is-invalid': get(this.error_data, 'errors.password[0]', false)}"
                type="text"
                id="password"
                placeholder="Password"
              />
              <div class="invalid-feedback">{{ get(this.error_data, 'errors.password[0]', false) }}</div>
            </div>

            <div class="form-group">
              <label for="password_confirmation">Password Confirmation:</label>
              <input
                v-model="password_confirmation"
                class="form-control"
                :class="{'is-invalid': get(this.error_data, 'errors.password_confirmation[0]', false)}"
                type="text"
                id="password_confirmation"
                placeholder="Password Confirmation"
              />
              <div
                class="invalid-feedback"
              >{{ get(this.error_data, 'errors.password_confirmation[0]', false) }}</div>
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
import Navbar from "../../../Components/Navbar";

export default {
  components: {
    Navbar
  },

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
            error_data: this.error_data,
          }
      }
  },

  methods: {
    get: require("lodash").get,

    onFormSubmit() {
        alert("TEST")
        this.$inertia.post("/login", this.formData)
    },
  }
};
</script>
