<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Southern University College Virtual Open Day</title>

  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/maicons.css')}}">

  <link rel="stylesheet"type="text/css" href="{{asset('assets/css/bootstrap.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet"type="text/css" href="{{asset('assets/css/theme.css')}}">
<style>
.logo-img{
    float: left;
    position: relative;
    margin: 10px 15px 20px -73px;
}
.img{
  width: 475px;  
  height: 520px;
}

.btnregister {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  margin: 300px 98px 10px 140px;
}

.btncontactus{

  background-color: #04AA6D;
  color:  white;
  font-size: 16px;
  padding: 16px;
  border: none;
  cursor: pointer;
  text-align: center;
  margin: 120px 128px 10px -357px;
}
.btn:hover {
  background-color: black;
}

.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.btnapplynow {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.btnabout{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  margin: 110px 348px 10px -357px;
}

.btnhome{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  margin: 310px 348px 10px -337px;
}

.btnlogin{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.footer {
   position: relative;
   left: 0;
   bottom: 10;
   height:35%;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}

.btncampustour{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  margin: 110px 348px 10px -357px;
}

.btncareer{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  margin: 110px 348px 10px -357px;
}
.btnscholarship{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  margin: 110px 348px 10px -357px;
}

.btnhostel{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  margin: 110px 348px 10px -357px;
}

.btnfacilities{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  margin: 110px 348px 10px -357px;
}

.btnlearn{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
/* .dropdown {
  position: relative;
  display: inline-block;
} */

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

h1{
  text-align: top;
  display: inline-block;
  margin-top:  -398px;
  margin-bottom: -73px;
  margin-right: -76px;
  margin-left: -19px;

}

h2{
    text-align: center;
    display: inline-block;
    margin-top:  -9px;
  margin-bottom: 17px;
  margin-right: 56px;
  margin-left: -7px;

}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

</style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <img class="logo-img"  src="{{ asset('assets/img/logo.png') }}" width= "225"  height="115" style="float:left"/>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li><a href= "http://127.0.0.1:8000/" class = "btnhome">Home</a></li>
            <li><a href= "http://127.0.0.1:8000/about" class = "btnabout">About</a></li>
            <li><a href="http://127.0.0.1:8000/virtualcampustour" class = "btncampustour">Virtual Campus Tour</a></li>
            <li><a href="http://127.0.0.1:8000/career&experttalks" class = "btncareer">Career and Expert Talks</a></li>
            <li><a href="http://127.0.0.1:8000/contact" class="btncontactus">Contact Us</a></li>
            
              {{-- <li class="nav-item">
              <a class="btn btn-primary ml-lg-2" href="#">Enquire Now</a>
            </li> --}}

          
             
          </ul>
        </div>
      </div>
    </nav>
  <div class="page-section" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <h1>Welcome to our Virtual Open Day</h1>
          <br><br>
          <h2 class="title-section">Virtual Open Day 2022</h2>
          <p><b>19 January 2022 </b></p>
          <p>Date:19 January 2022 </p>
          <p>Time:10am -5pm</p>
          <p>Venue:Online</p>
          
          <p>We’re bringing the pride of Southern University College to you! EXPLORE a world of opportunities through chats with our counsellors, CONNECT with our University LIVE via video and EXPERIENCE our campus with our 360 Virtual platform.</p>
          {{-- <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p> --}}
          <a href="http://127.0.0.1:8000/about" class="btn btn-primary mt-3">Read More about our Open Day Event</a>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img src="{{ asset('assets/img/VirtualOpenDay.png') }}" width= "684"  height="336" style="float:left"/>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

</div>
<a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
</div>
</div>
</header>

    
  <div class="page-section banner-info">
    <div class="wrap bg-image" style="background-image: url(../assets/img/bg_pattern.svg);">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
            <h2 class="title-section">Events</h2>
       
            <p></p>
            
            <ul class="theme-list theme-list-light text-white">
              
                <div class="h5">19/01/2022(WEDNESDAY)</div>
                <p><b>Living the Southern University College(10:15am)</b></p>
                <p>Hear from our students themselves on what it's like to study & play at Southern University College. You can ask them anything from what are people like, where to eat on campus, how are classes and the facilities... anything!</p>
                
                <p><b>Beyond classrooms: The  Active Southerners (11:00 am)</b></p>
                <p>It's not all about books and assignments, we have a directory filled with all sorts of clubs and societies. Come chat with our club reps and see how finding people who share your interest (making friends) is so easy!</p>
 
                <p><b>Explore the world of Information Technology (1:30 pm)</b></p>
                <p>Come to join our live webinar if you are interested to know more about Information Technology</p>

                <p><b>Introduction to Business Administration(3:00 pm)</b></p>
                <p>Come to join our live webinar if you are interested to know more business</p>

                <a href="http://127.0.0.1:8000/career&experttalks"class="btnlearn">Learn More</a>

                

                {{-- <p>Mark your calendars,  17th of October 2021. Stay tuned for more details!</p> --}}
              
            </ul>
          </div>
          <div class="col-lg-6 py-3 wow fadeInRight">
            <div class="img-fluid text-center">
              <img src="../assets/img/banner_image_2.svg" alt="">
             
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .wrap -->
  </div> <!-- .page-section -->

  <!-- Blog -->
  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
      
       
          <h2><b>Preview Courses and Meet the Masterminds</b></h2>
          <p>Already have an idea of what you think you want to do as a career?

            Take a closer look at what it holds by attending live sessions with members of the faculties. Engage with the lecturers to discover the most suitable courses that would add value to your life.</p>
        

    
      </div>
    </div>
  </div>

  <div class="footer">
    <p>JOEL MATHEW 2021/C FINAL YEAR PROJECT</p>
  </div>

@yield('script')
  
</body>

{{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}
<script>
  var botmanWidget = {
  aboutText: 'Write Something',
  introMessage: "✋ Hi! I'm from Southern University College"
  };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
  
</html>