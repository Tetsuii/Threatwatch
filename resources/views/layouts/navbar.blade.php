<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Responsive Drop Down Navigation Menu | CodingLab </title>
  <link rel="stylesheet" href="style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><img src="{{ asset('images/TWLogo.png') }}" alt="Logo"></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">
            <img src="{{ asset('images/TWLogo.png') }}" alt="Logo">
          </span>
          <i class='bx bx-x'></i>
        </div>
        <ul class="links">
          <li><a href="{{ route('home') }}">HOME</a></li>
          <li><a href="{{ route('about') }}">ABOUT US</a></li>
          <li>
            <a href="{{ route('services') }}">SERVICES</a>
            <i class='bx bxs-chevron-down js-arrow arrow'></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="{{ route('LETD') }}">Log Enrichment & Threat Detection</a></li>
              <li><a href="{{ route('enhance') }}">Enhanced Reporting</a></li>
              <li><a href="{{ route('THT') }}">Threat Hunting Detection</a></li>
            </ul>
          </li>
          <li><a href="{{ route('contact') }}">CONTACT US</a></li>
        </ul>
  </nav>
  <script src="script.js"></script>
</body>

</html>