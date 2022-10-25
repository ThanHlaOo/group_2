<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,  initial-scale=1.0" />
  <title>CodeCamp</title>
  <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.2.0-web/css/all.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
  <script src="{{ asset('js/libraries/chart.min.js') }}"></script>
  <script src="{{ asset('js/libraries/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>
  <section class="l-container clearfix">
    <div class="aside">
      <div class="nav">
        <h1>
          <a href="#">
            <i class="fa-solid fa-school"></i>
            <span>CoderCamp</span>
          </a>
        </h1>
        <div class="menu-btn right">
          <div class="menu-burger"></div>
        </div>
      </div>
      <ul class="menu">
        <li class="menu-ttl">
           <span>System</span>
        </li>
        <li id="dashboard">
          <a href="">
            <i class="fa-solid fa-table-columns"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li id="language">
          <a href="{{ route('language.get') }}">
            <i class="fa-solid fa-earth-asia"></i>
            <span>Language</span>
          </a>
        </li>
        <li id="course">
          <a href="{{ route('course.get') }}">
            <i class="fa-solid fa-layer-group"></i>
            <span>Courses</span>
          </a>
        </li>
        <li id="user">
          <a href="#">
            <i class="fa-solid fa-users"></i>
            <span>Users</span>
            <i class="fa-solid fa-angle-down down"></i>
          </a>
          <ul>
            <li>
              <a href="">
                <i class="fa-regular fa-user"></i>
                <span>Admin</span>
              </a>
              <a href="{{ route('user.get') }}">
                <i class="fa-regular fa-user"></i>
                <span>User</span>
              </a>
            </li> 
          </ul>
        </li>
        <li id="blog">
          <a href="{{ route('blog.get') }}">
            <i class="fa-solid fa-blog"></i>
            <span>Blogs</span>
          </a>
        </li>
        <li class="menu-ttl">
          <span>Personal</span>
       </li>
        <li id="profile">
          <a href="">
            <i class="far fa-user-circle"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li id="setting">
          <a href="">
            <i class="fa-solid fa-gears"></i>
            <span>Setting</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="content">
      @yield('content')
    </div>
  </section>
</body>

</html>
