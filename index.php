<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>Covid Health Care</title>
    

</head>

<body>

<div id='OptionsWrapper'>
  
  <div id='Options' >

    <header>
        <div class="container">
            <input type="checkbox" name="" id="check">
            
            <div class="logo-container">
                <h3 class="logo">COVID HEALTH CARE</h3>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="#">Home</a>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="#">About</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">Hospitals<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="#">Public</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="#">Private</a>
                                    </li>
                                   
                                                
                                      
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="#">Services<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="#">Bookings</a>
                                    </li>
                              
                                    <li class="dropdown-link">
                                        <a href="#">Covid info<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                            <ul>
                                                <li class="dropdown-link">
                                                    <a href="#">Corona Symptoms</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="#">Corona Test</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="#">Post Covid Care</a>
                                                </li>
                                                
                                                <div class="arrow"></div>
                                            </ul>
                                        </div>
                                    </li>
                                   
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        
                         <li class="nav-link" style="--i: 1.35s">
                            <a href="#">Helpline</a>
                        </li>
                    </ul>
                </div>

                <div class="log-sign" style="--i: 1.8s">
                    <a href="#" class="btn transparent">Log in</a>
                    <a href="#" class="btn solid">Sign up</a>
                </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>
<div class="galleryContainer">
    <div class="slideShowContainer">
        <div id="playPause" onclick="playPauseSlides()"></div>
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
            <img src="IMAGES/corona.jpg">1366X768
            <p class="captionText">Caption Text-01</p>
        </div>
        <div class="imageHolder">
            <img src="IMAGES/doctor.jpg">
            <p class="captionText">Caption Text-02</p>
        </div>
        <div class="imageHolder">
            <img src="IMAGES/doctor1.jpg">
            <p class="captionText">Caption Text-03</p>
        </div>
        
    </div>
    <div id="dotsContainer"></div>
</div>
<script src="myScript.js"></script>

</div>


<section class="info">
    <h1 style="text-align: center !important;">HOSPITALS AND SERVICES</h1>
</section>
<section class="cards-wrapper">
  <div class="card-grid-space">
    <div class="num">01</div>
    <a class="card" href="https://codetheweb.blog/2017/10/06/html-syntax/" style="--bg-img: url(https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&resize_w=1500&url=https://codetheweb.blog/assets/img/posts/html-syntax/cover.jpg)">
      <div>
        <h1>HTML Syntax</h1>
        <p>The syntax of a language is how it works. How to actually write it. Learn HTML syntax…</p>
        <div class="date">6 Oct 2017</div>
        <div class="tags">
          <div class="tag">HTML</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    <div class="num">02</div>
    <a class="card" href="https://codetheweb.blog/2017/10/09/basic-types-of-html-tags/" style="--bg-img: url('https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&resize_w=1500&url=https://codetheweb.blog/assets/img/posts/basic-types-of-html-tags/cover.jpg')">
      <div>
        <h1>Basic types of HTML tags</h1>
        <p>Learn about some of the most common HTML tags…</p>
        <div class="date">9 Oct 2017</div>
        <div class="tags">
          <div class="tag">HTML</div>
        </div>
      </div>
    </a>
  </div>
  <!-- https://images.unsplash.com/photo-1520839090488-4a6c211e2f94?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=38951b8650067840307cba514b554ba5&auto=format&fit=crop&w=1350&q=80 -->
</section>


  </div>
</div>

</body>

</html>