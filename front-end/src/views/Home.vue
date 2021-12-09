<template>
  <div class="home" style="height: 100%">
    <el-row class="home">
      <el-col
        :span="12"
        style="background-color: white; color: black; padding: 30px"
      >
        <img src="@/assets/stock.png" style="max-width: 75%" />
        <h1>Watch your favourite stocks!</h1>
      </el-col>
      <el-col
        :span="12"
        style="background-color: #171717; color: white; padding: 30px"
      >
        <h1>Keep an eye on your investments.</h1>
        <img src="@/assets/invest.png" style="max-width: 85%" />
      </el-col>
    </el-row>
    <router-link v-if="!token" to="/register" style="color: #171717"
      ><h3>Get Started</h3></router-link
    >
    <router-view />
  </div>
</template>

<script>
// @ is an alias to /src

export default {
  name: "Home",
  data() {
    return {
      token: this.$store.state.token,
    };
  },
  components: {},
};
</script>

<style>
.home {
  text-align: center;
}
</style>
