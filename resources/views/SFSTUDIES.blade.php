<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Programmes</title>

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

    .button {
      background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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
       position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      background-color: #f44336;
      color: orange;
      font-size: 16px;
      padding: 12px 24px;
      border: none;
      cursor: pointer;
      border-radius: 12px;
      text-align: center;
      margin: 6px 67px 41px 714px;
    }
    
    h1{
    text-align: center;
    display: inline-block;
    margin-top:  -9px;
  margin-bottom: 17px;
  margin-right: 56px;
  margin-left: 232px;
  border: 15px solid black;
  background-color: black;
  color:white;
}

h2{
    text-align: center;
    display: inline-block;
    margin-top:  -9px;
  margin-bottom: 17px;
  margin-right: 56px;
  margin-left: 139px;

}

h3{
  text-align: center;
    display: inline-block;
    margin-top:  -86px;
  margin-bottom: 17px;
  margin-right: -20px;
  margin-left: 445px;
  border: 15px solid black;
  background-color: black;
  color:white;
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

    
  
.btnhome{
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
    }
    
    .btnlogin{
      background-color: #04AA6D;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }
    
    .btnprogrammes{
      background-color: #04AA6D;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    .btn-block{
      text-align: center;
      background-color:#000000;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      width: 1254px;
    }
    
    .btncampustour{
      background-color: #04AA6D;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }
    
    .btnevents{
      background-color: #04AA6D;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }
    .btnscholarship{
      background-color: #04AA6D;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }
    
    .btnhostel{
      background-color: #04AA6D;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    .lblFA{
  text-align: center;
  display: inline-block;
  margin-top:  -300px;
  margin-bottom: 17px;
  margin-right: 580px;
  margin-left: 110px;
  color: red;  
    }

    .lblFS{
  text-align: center;
  display: inline-block;
  margin-top:  -280px;
  margin-bottom: 17px;
  margin-right: 552px;
  margin-left: 110px;
  color: red;
    }
    
    .btnfacilities{
      background-color: #04AA6D;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }
    
    .footer {
   position: relative;
   padding-top: 20px;
    display: block;
    margin-top: 250px;
    margin-bottom:10px;
   width: 100%;
   height:810px;
   background-image: url("assets/img/footer.jpg");
   color: white;
   text-align: center;
}

    .dropdown {
      position: relative;
      display: inline-block;
    }
    
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
            <img class="logo-img"  src="{{ asset('assets/img/logo.png') }}" width= "225"  height="115" />
    
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="navbar-collapse collapse" id="navbarContent">
              <ul class="navbar-nav ml-auto">
                <li><a href= "http://127.0.0.1:8000/" class = "btnhome">Home</a></li>
                <li><a href= "http://127.0.0.1:8000/login" class = "btnlogin">Login</a></li>
                <li><a href= "http://127.0.0.1:8000/about" class = "btnabout">About</a></li>
                <li><a href= "http://127.0.0.1:8000/applynow" class = "btnapplynow">Apply Now</a></li>
                  {{-- <a class="nav-link" href="http://127.0.0.1:8000/applynow">Apply Now</a> --}}
    
                  <div class="dropdown">
                    <button class="btnprogrammes">Programmes</button>
                    <div class="dropdown-content">
                  <li><a href="http://127.0.0.1:8000/faculty">By Faculty</a></li>
                </div>
              </div>
            
               
              <li><a href= "http://127.0.0.1:8000/scholarshipform" class = "btnscholarship">Scholarship</a></li>
            
              <li><a href= "http://127.0.0.1:8000/hostel" class = "btnhostel">Hostel Booking</a></li>
    
              <li><a href= "http://127.0.0.1:8000/campusfacilities" class = "btnfacilities">Campus Facilities</a></li>
      
              <li><a href="http://127.0.0.1:8000/virtualcampustour" class = "btncampustour">Virtual Campus Tour</a></li>
                
    
              <li><a href="http://127.0.0.1:8000/events" class = "btnevents">Events</a></li>
          
            
              <li><a href="http://127.0.0.1:8000/contact" class="btncontactus">Contact Us</a></li>
                
                  {{-- <li class="nav-item">
                  <a class="btn btn-primary ml-lg-2" href="#">Enquire Now</a>
                </li> --}}
              </ul>
            </div>
          </div>
        </nav>
    
          <h1>SCHOOL OF FOUNDATION STUDIES</h1>

          <p>School of Foundation Studies in Southern University College (Southern UC) integrates the variety of fields such as Business, Humanities, Arts, Information Technology, Science and other fundamental knowledge.

            The Southern UC Foundation Programme is a one-year programme that prepares student with SPM or equivalent qualifications before entering degree programmes offered by Southern UC.
            
             
            
            The programme provides students a series of selections of core and major elective courses which will enhance their academic knowledge in the respective areas of study and at the same time, will develop their understanding of other basic courses.</p>

          <div class="anchortabcontainer aem-GridColumn aem-GridColumn--default--12">

            <section class="container-fluid">
              <div class="row t-pt"></div>
              <div class="row">
                <div class="section-scroll-dropdown-nav w-100" id="section-scroll-dropdown2">
                  <button class="btn btn-simple btn-red dockable d-lg-none btn-selector no-hover">
                    <span class="button-text"></span><i class="t-icon-down pull-right white  mx-3"></i>
                  </button>
                  <div class="btn-group btn-dropdown">
                    
                      <a href="#our-new-programmes" class="btn-block">
                        <span class="button-text"> COURSES</span><i class="d-lg-none t-icon-right pull-right white ml-3"></i>
                        {{-- <a href="#explore-more" class="btn-black">
                          <span class="button-text">EXPLORE MORE</span><i class="d-lg-none t-icon-right pull-right white ml-3"></i> --}}
                      </a>
                  
                    
                  </div>
                </div>
                <div class="white-gap w-100"></div>
              </div>
              <div class="row d-block">
                
            
            
            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                
                <div class="sectioncontainer aem-GridColumn aem-GridColumn--default--12">
            <div class="container-fluid">
              <section class="row t-px select select" style="background-color: select;">
                <div class="col-12">
                  <div>
            
            
            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                
                <div class="title aem-GridColumn aem-GridColumn--default--12">
            
            
              <div id="our-new-programmes"></div>
                    <div class="black-header-with-text t-pt">
                        <div class="bg-black d-inline-block py-2 px-4">
                            <h2 class="d-inline text-white">OUR NEW PROGRAMMES</h2>
                        </div>
                        <p class="py-3"></p>
                    </div>
            
           <h3>  COURSES</h3>
          
           <nav>
            <ul>
                <img src="{{ asset('assets/img/FOUNDATION.jpg') }}" width= "475"  height="320" style="float:top"/>
                <a href="http://127.0.0.1:8000/FA"  class="lblFA" style="float:right">Foundation in Arts</a>
                <a href="http://127.0.0.1:8000/FS"  class="lblFS" style="float:right">Foundation in Science</a>
                
                
                
                


                
                

                
         

        
              </ul>
            </nav>


      <div class="footer">
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
 
