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
  margin: 110px 348px 10px -47px;
}

.btnlogin{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}



.btncampustour{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
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
  margin-top:  -178px;
  margin-bottom: 23px;
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
            <li><a href= "http://127.0.0.1:8000/scholarshipform" class = "btnscholarship">Scholarship</a></li>
            {{-- <li><a href= "http://127.0.0.1:8000/campusfacilities" class = "btnfacilities">Campus Facilities</a></li>
            <li><a href="http://127.0.0.1:8000/virtualcampustour" class = "btncampustour">Virtual Campus Tour</a></li> --}}
            

          <li><a href="http://127.0.0.1:8000/career&experttalks" class = "btncareer">Career and Expert Talks</a></li>
      
        
          <li><a href="http://127.0.0.1:8000/contact" class="btncontactus">Contact Us</a></li>
            
              {{-- <li class="nav-item">
              <a class="btn btn-primary ml-lg-2" href="#">Enquire Now</a>
            </li> --}}
              </ul>
            </div>
          </div>
        </nav>
    
    </header>
    
      <footer class="page-footer bg-image" style="background-image: {{ asset('assets/img/footer.jpg') }};">
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-3 py-3">
                <h5>Learn</h5>
                <ul class="footer-menu">
                  <li><a href="#">Our Programmes</a></li>
                  <li><a href="#">Faculties & School</a></li>
                  <li><a href="#">Scholarships & Financial Aid</a></li>
                  <li><a href="#">E-Learning & Innovation</a></li>
                </ul>
            
              {{-- <div class="social-media-button">
                <a href="#"><span class="mai-logo-facebook-f"></span></a>
                <a href="#"><span class="mai-logo-twitter"></span></a>
                <a href="#"><span class="mai-logo-google-plus-g"></span></a>
                <a href="#"><span class="mai-logo-instagram"></span></a>
                <a href="#"><span class="mai-logo-youtube"></span></a>
              </div> --}}
            </div>
            <div class="col-lg-3 py-3">
              <h5>Experience</h5>
              <ul class="footer-menu">
                <li><a href="#">Take a Virtual Tour</a></li>
                <li><a href="#">Around the Campus</a></li>
                <li><a href="#">Activities & Clubs</a></li>
              </ul>
            </div>
            <div class="col-lg-3 py-3">
              <h5>Admissions</h5>
              <ul class="footer-menu">
                <li><a href="#">Undergraduate</a></li>
                <li><a href="#">Postgraduate</a></li>
                <li><a href="#">International</a></li>
                <li><a href="#">Financial Assistance & Bursaries</a></li>
                {{-- <li><a href="#">Help & Support</a></li> --}}
              </ul>
            </div>
            <div class="col-lg-3 py-3">
              <h5>Connect</h5>
              <ul class="footer-menu">
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Media Contact</a></li>
                <li><a href="#">Career Opportunities</a></li>
              </ul>
            </div>
            
            {{-- <div class="col-lg-3 py-3">
              <h5>Contact Us</h5>
              <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
              <a href="#" class="footer-link">+00 1122 3344 5566</a>
              <a href="#" class="footer-link">seogram@temporary.com</a>
            </div> --}}
            
            <div class="col-lg-3 py-3">
              <h5>Find Us On</h5>
              <div class="social-media-button">
                <a href="#"><span class="mai-logo-facebook-f"></span></a>
                <a href="#"><span class="mai-logo-twitter"></span></a>
                <a href="#"><span class="mai-logo-google-plus-g"></span></a>
                <a href="#"><span class="mai-logo-instagram"></span></a>
                <a href="#"><span class="mai-logo-youtube"></span></a>
              </div>
            </div>
          </div>
    
          <p class="text-center" id="copyright">Copyright &copy; 2021. Southern University College JB 
        </div>
      </footer>
   


    </body>
    </html>
  