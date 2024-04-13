<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legendary Motorsport</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="card.css">
    <link rel="icon" href="resources/LM-icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/5e0c6ec25d.js" crossorigin="anonymous"></script>
    <script src="side-navbar.js"></script>
</head>
<body>
    <div>
      <div class="bg-video-container" id="top">
        <video class="bg-video" autoplay loop muted>
            <source src="resources/bg-videeo.mp4" type="video/mp4">
        </video>
          <div class="text">
            <a id="Home-Page"></a>
            <h1>Legendary Motorsport</h1>
            <h2>What we drive says a lot about who we are</h2>
          </div>
      </div>

      <div class="top">
        <div class="search-container">
          <i class="fa fa-search" id="search-icon"></i>
          <input type="text" id="search-input" placeholder="Search...">
        </div>
        <i class="fa fa-user"><a href="signup.html"></a></i>
        <i class="fa fa-shopping-cart"></i>
      </div>

      <div class="container">
        <div class="bg-img">
          <img src="resources/background.png" alt="Background Image">
        </div>

        <div class="card-container">
          <div class="card">
            <img src="resources/2doors/Bmw M4 CSL/Cover Photo.png" alt="">
            <div class="card-content">
              <h1>Bmw M4 CSL</h1>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
          <div class="card">
            <img src="resources/2doors/Bugatti Chiron/Cover.png" alt="">
            <div class="card-content">
              <h1>Bugatti Chiron</h1>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
          <div class="card">
            <img src="resources/2doors/Ferrai 488 Pista/Cover.png" alt="">
            <div class="card-content">
              <h1>Ferrai 488 Pista</h1>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
          <div class="card">
            <img src="resources/2doors/Lamborghini Revuelto/cover.png" alt="">
            <div class="card-content">
              <h1>Lamborghini Huracan Performante</h1>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
          <div class="card">
            <img src="resources/2doors/koenigsegg jesko/cover.png" alt="">
            <div class="card-content">
              <h1>Koenigsegg Jesko</h1>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
          <div class="card">
            <img src="resources/2doors/Lamborghini Huracan Performante/cover.png" alt="">
            <div class="card-content">
              <h1>Lamborghini Performante</h1>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>

      </div>
    </div>

    <div class="fixed top-0 left-0 flex h-screen">
      <nav class="side-nav">
          <ul class="flex flex-col justify-center h-screen space-y-10">
            <div class="topNav">
              <section id="home-section">
                <li>
                    <a class="flex items-start">
                        <svg id="toggle-nav" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="250" height="50" fill="currentColor" className="w-6 h-6" class="double-arrow">
                            <path fillRule="evenodd" d="M10.72 11.47a.75.75 0 0 0 0 1.06l7.5 7.5a.75.75 0 1 0 1.06-1.06L12.31 12l6.97-6.97a.75.75 0 0 0-1.06-1.06l-7.5 7.5Z" clipRule="evenodd" />
                            <path fillRule="evenodd" d="M4.72 11.47a.75.75 0 0 0 0 1.06l7.5 7.5a.75.75 0 1 0 1.06-1.06L6.31 12l6.97-6.97a.75.75 0 0 0-1.06-1.06l-7.5 7.5Z" clipRule="evenodd" />
                          </svg>                              
                        <span class="whitespace-nowrap text-2xl ml-4 nav-text text-red-600 duration-200 absolute" id="up-level"><br>Legendary<br>Motorsports</span>
                    </a>
                </li>
              </section>  
            </div>
                <li>
                    <a onclick="topFunction()" class="flex items-start hover:text-red-600 relative active home">
                        <span class="icon-container">
                            <i class="icon icon1">
                                <img src="resources/icons/home-icon.png" alt="" class="w-8 h-8">
                            </i>
                        </span>
                        <span class="whitespace-nowrap text-2xl ml-4 nav-text hidden duration-200 absolute left-12">Home</span>
                    </a>
                </li>
              <section id="2door-section">
                <li>
                    <a href="#2DoorCars" class="flex items-start hover:text-red-600 relative">
                        <span class="icon-container">
                            <i class="icon icon2">
                                <img src="resources/icons/2-door-icon.png" alt="" class="w-8 h-8">
                            </i>
                        </span>
                        <span class="whitespace-nowrap text-2xl ml-4 nav-text hidden duration-200 absolute left-12">2 Door</span>
                    </a>
                </li>
              </section>
              <section id="4door-section">
                <li>
                    <a href="#4DoorCars" class="flex items-start hover:text-red-600 relative">
                        <span class="icon-container">
                            <i class="icon icon2">
                                <img src="resources/icons/4-door-icon.png" alt="" class="w-8 h-8">
                            </i>
                        </span>
                        <span class="whitespace-nowrap text-2xl ml-24 nav-text hidden duration-200 absolute left-12">  4 Door</span>
                    </a>
                </li>
              </section> 
              <section id="motorcycle-section">
                <li>
                    <a href="#Motorcycle" class="flex items-start hover:text-red-600 relative">
                        <span class="icon-container">
                            <i class="icon icon2">
                                <img src="resources/icons/motorcycle-icon.png" alt="" class="w-8 h-8">
                            </i>
                        </span>
                        <span class="whitespace-normal text-2xl ml-4 nav-text hidden duration-200 absolute left-12">Motorcycle</span>
                    </a>
                </li>
              </section>
              <section id="about-section">
                <li>
                    <a href="#About-Us" class="flex items-start hover:text-red-600 relative">
                        <span class="icon-container">
                            <i class="icon icon1">
                                <img src="resources/icons/about-icon.png" alt="" class="w-8 h-8">
                            </i>
                        </span>
                        <span class="whitespace-nowrap text-2xl ml-4 nav-text hidden duration-200 absolute left-12">About Us</span>
                    </a>
                </li>
              </section>
          </ul>
      </nav>
  </div>
    <script>
      let mybutton = document.getElementById("home");
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <script>
      const searchIcon = document.getElementById('search-icon');
      const searchInput = document.getElementById('search-input');

      searchIcon.addEventListener('click', function() {
        searchInput.classList.toggle('expanded');
        if (searchInput.classList.contains('expanded')) {
          searchInput.focus();
        } else {
          searchInput.value = '';
        }
      });
    </script>

    <script src="scroll-script.js"></script>
    <script src="script.js"></script>
</body>
</html>
