@extends('layouts.auth')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Welcome To Admin
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="/admin">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/getpro">
              <i class="material-icons">content_paste</i>
              <p>Products</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/getblog">
              <i class="material-icons">library_books</i>
              <p>Blogs</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/getcat">
              <i class="material-icons">bubble_chart</i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/gettag">
              <i class="material-icons">bubble_chart</i>
              <p>Tags</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/orderview">
              <i class="material-icons">notifications</i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/orderview">
              <i class="material-icons">notifications</i>
              <p>Contracts</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/getabout">
              <i class="material-icons">library_books</i>
              <p>About</p>
            </a>
          </li>
        
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      
            </div>
        </div>
    </div>
    @endsection
