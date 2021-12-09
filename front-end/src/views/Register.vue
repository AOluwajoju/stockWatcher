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
          <h3 style="color: white;">Register</h3>
        </div>
      </template>
      <el-input v-model="email" placeholder="E-mail" />
      <el-input
        v-model="name"
        placeholder="Full Name"
        style="margin-top: 10px"
      />
      <el-input
        v-model="password"
        placeholder="Password"
        show-password
        style="margin-top: 10px"
      />
      <el-input
        v-model="passwordConfirm"
        placeholder="Confirm Password"
        show-password
        style="margin-top: 10px"
      />
      <el-button size="small" style="margin-top: 30px"> Sign Up </el-button>
    </el-card>
  </div>
</template>

<style>
.forms {
  text-align: center;
}
.card-header {
    text-align: left;
}
</style>

<script>
export default {
  data() {
    return {
      email: "",
      password: "",
    };
  },
};
</script>