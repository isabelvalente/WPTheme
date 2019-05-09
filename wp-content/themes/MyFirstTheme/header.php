<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Basic Theme </title>
    <link href="<?php bloginfo('template_url'); ?> css/bootstrap.css" rel"stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Animated Dropdown</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Click Me!
        </a>
          <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">
  <h1 class="mt-5 text-white font-weight-light">Animated Bootstrap Navbar Dropdowns</h1>
  <p class="lead text-white-50">An attractive yet subtle dropdown animation for dropdown menus loacated within a Bootstrap navbar</p>
</div>
