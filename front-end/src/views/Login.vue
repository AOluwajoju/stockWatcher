<template>
  <div class="forms">
    <el-card
      style="
        background-color: #171717;
        max-width: 30%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5%;
        padding: 30px;
      "
    >
      <template #header>
        <div class="card-header">
          <h3 style="color: white">Sign In</h3>
        </div>
      </template>
      <el-input v-model="loginData.email" placeholder="E-mail" />

      <el-input
        v-model="loginData.password"
        placeholder="Your Password"
        show-password
        style="margin-top: 10px"
        :prefix-icon="Calendar"
      />

      <el-button size="small" @click="login()" style="margin-top: 30px">
        Login
      </el-button>
    </el-card>
  </div>
</template>

<style>
.forms {
  text-align: center;
}
</style>

<script>
import axios from "axios";
export default {
  data() {
    return {
      loginData: {
        email: "",
        password: "",
      },
    };
  },
  methods: {
    login() {
      axios
        .post("http://127.0.0.1:8000/api/login", this.loginData)
        .then((response) => {
          console.log(response);
          this.$store.commit("token", response.data.token);
          this.$router.push("/");
        });
    },
  },
};
</script>