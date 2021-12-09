<template>
  <div style="width: 100%; height: 70px; background-color: black; color: white">
    <el-row>
      <el-col :span="20" class="nav">
        <router-link style="color: white; text-decoration: none" to="/"
          ><h2 style="margin-left: 30px">StocksWatcher</h2>
        </router-link>
      </el-col>
      <el-col :span="2" class="nav">
        <router-link style="color: white; text-decoration: none" to="/login"
          >Login
        </router-link></el-col
      >
      <el-col :span="2" class="nav">
        <router-link v-if="!token" style="text-decoration: none" to="/register">
          <el-button size="small" style="margin-right: 30px">
            Sign-Up
          </el-button></router-link
        >
      </el-col>
    </el-row>
  </div>
</template>

<script>
export default {
  data(){
    return{
      token: this.$store.state.token,
    }
  }
 
}
</script>

<style>
.nav {
  display: flex;
  flex-wrap: wrap;
  align-content: center;
}
</style>