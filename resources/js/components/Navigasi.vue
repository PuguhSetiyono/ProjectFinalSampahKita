<template>
    <nav class="navbar navbar-expand-lg custom_nav-container">
      <a class="navbar-brand">
        <span>Sampah Kita</span>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="s-1"></span>
        <span class="s-2"></span>
        <span class="s-3"></span>
      </button>
  
      <div class="bg-green-200 collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item">
              <router-link to="landingpage" class="nav-link">Beranda</router-link>
            </li>
            <li class="nav-item">
              <router-link to="pemesanan" class="nav-link">Pemesanan</router-link>
            </li>
            <li class="nav-item">
              <router-link to="layanan" class="nav-link">Layanan</router-link>
            </li>
            <li class="nav-item">
              <router-link to="contact" class="nav-link">Contact</router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </template>
  
  <script>
  export default {
    // You can add data, methods, lifecycle hooks, etc.
  };
  </script>
  
  <style scoped>
  /* Add scoped styles if needed */
  </style>
  