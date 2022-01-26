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
  margin-top:  -9px;
  margin-bottom: -73px;
  margin-right: -76px;
  margin-left: 3px;

}

h2{
    text-align: center;
    display: inline-block;
    margin-top:  -45px;
  margin-bottom: -10px;
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
            
            
           
              </ul>
            </div>
          </div>
        </nav>
    
    </header>
  

    <h1><b>Contact Us</b></h1>

   

    <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <form action="#" class="contact-form py-5 px-lg-5">
            <h2 class="mb-4 font-weight-medium text-secondary">Get in touch</h2>
            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">Full Name</label>
                <input type="text" id="fname" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="text-black" for="lname">Phone Number</label>
                <input type="text" id="lname" class="form-control">
              </div>
            </div>
    
            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="email">Email Address</label>
                <input type="email" id="email" class="form-control">
              </div>
            </div>

            <div class="row form-group mt-4">
              <div class="col-md-12">
                <input type="submit" value="Submit" class="btn btn-primary">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6 px-0">
          <div class="maps-container"><div id="google-maps"></div></div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">
    <p>JOEL MATHEW 2021/C FINAL YEAR PROJECT</p>
  </div>
    


  </body>
  </html>
