  <!--header-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">&times;</a>
      <a href="{{ route('home') }}">Home</a>
      <a href="#">About Us</a>
      <a class="dropdown-btn">Academics
          <i class="fa fa-caret-down"></i>
      </a>
      <div class="dropdown-container">
          <a href="{{ route('course-details') }}">Course</a>
          <a href="#">Faculty</a>
          <a href="#">Staff</a>
          <a href="#">Study Center</a>
          <a href="#">Exam Center</a>
          <a href="#">Administration</a>
          <a href="#">Rules & Regulation</a>
      </div>
      <a href="#">Student Supports</a>
      <a href="{{ route('contact') }}">Contact</a>

      <a class="dropdown-btn">Extra
          <i class="fa fa-caret-down"></i>
      </a>
      <div class="dropdown-container">
          <a href="#">Feefbacks</a>
          <a href="#">Downloads</a>
          <a href="">Fee COllection</a>
          <a href="#">Galleries</a>
      </div>
  </div>

  <header class="main-header clearfix" role="header">
      {{-- <span style="cursor:pointer; color:#fff; font-size:35px"onclick="toggleNav()" class="bbb">&#9776;</span> --}}
      <div class="logo">
          <img src="images/1.png" alt="" class="img">

      </div>
      <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
      <nav id="menu" class="main-nav" role="navigation">
          <ul class="main-menu">
              <li><a href="{{ route('home') }}">Home</a></li>

              <li class="has-submenu"><a href="#section2">About Us</a>
                  <ul class="sub-menu">
                      <li><a href="{{ route('about') }}">Who we are?</a></li>
                      <li><a href="#section3">What we do?</a></li>
                      <li><a href="#section3">How it works?</a></li>
                      <li><a href="https://templatemo.com/about" rel="sponsored" class="external">External URL</a></li>
                  </ul>
              </li>
              <li class="has-submenu"><a href="#section2"> Academic</a>
                  <ul class="sub-menu">
                      <li><a href="{{ route('course-details') }}">Course</a></li>
                      <li><a href="{{ route('study-center') }}">Study Centers</a></li>
                      <li><a href="{{ route('exam-center') }}">Exam Centers</a></li>
                      <li><a href="{{ route('rules') }}">Rules & Regulation</a></li>
                  </ul>


                </li>

              <li class="has-submenu"><a href="#section2"> people</a>
                  <ul class="sub-menu">
                      <li><a href="{{ route('faculty') }}">Faculty</a></li>
                      <li><a href="{{ route('staff') }}">Staff</a></li>
                      <li><a href="#section3">Administration</a></li>
                  </ul>


              </li>
             
              <li class="has-submenu"><a href="{{ route('student-support') }}"> Student Supports</a>
                  <ul class="sub-menu">
                      <li><a href="{{ route('profile-update') }}">Update Profile</a></li>
                      <li><a href="{{ route('faculty') }}">Radio Luit</a></li>
                      <li><a href="{{ route('staff') }}">Radio Counselling</a></li>
                      <li><a href="{{ route('study-center') }}">Data Center</a></li>
                      <li><a href="{{ route('exam-center') }}">E Portal</a></li>
                      <li><a href="#section3">Study Material</a></li>
                      <li><a href="{{ route('rules') }}">Campus Placement</a></li>
                      <li><a href="{{ route('rules') }}">Grievance Redressal</a></li>

                  </ul>
              </li>
              <!-- <li><a href="#section5">Video</a></li> -->
              <li><a href="{{ route('contact') }}">Contact</a></li>



              <li class="has-submenu"><a href="#section2"> Extra</a>
                  <ul class="sub-menu">
                      <li><a href="{{ route('feedback') }}">Feedbacks</a></li>
                      <li><a href="#section3">Downloads</a></li>
                      <li><a href="{{ route('fees') }}">Fee Collection</a></li>
                      <li><a href="{{ route('gallery') }}">Galleries</a></li>

                  </ul>
              </li>


      </nav>


  </header>
  <script>
      function toggleNav() {
          var nav = document.getElementById("mySidenav");
          if (nav.style.width === "100%" || nav.style.width === "") {
              nav.style.width = "0";
          } else {
              nav.style.width = "100%";
          }
      }


      var dropdown = document.getElementsByClassName("dropdown-btn");
      var i;

      for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
              this.classList.toggle("active");
              var dropdownContent = this.nextElementSibling;
              if (dropdownContent.style.display === "block") {
                  dropdownContent.style.display = "none";
              } else {
                  dropdownContent.style.display = "block";
              }
          });
      }
  </script>
