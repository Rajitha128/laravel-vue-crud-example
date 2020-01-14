<template>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link to="/" class="nav-link">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/create" class="nav-link">Create Event</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/events" class="nav-link">Events</router-link>
        </li>
      </ul>
    </nav><br />
    <transition name="fade">
      <router-view></router-view>
    </transition>
  </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
    .navbar-expand-lg {
      border-radius: 10px;
      margin-top: 10px;
      margin-bottom: 20px;
    }
</style>

<script>

    export default{
    }
</script>