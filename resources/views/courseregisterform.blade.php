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

</head>
<style>
    .logo-img{
    float: left;
    position: relative;
    margin: 10px 15px 15px 10px;
}
.img{
  width: 475px;  
  height: 520px;
}
.container {
  padding: 16px;
  background-image: url({{url('images/SUC.jpg')}});
  background-size: 1290px 795px;
  

}


h1{
    text-align: center;
    display: inline-block;
    margin-top:  -7px;
  margin-bottom: 4px;
  margin-right: 70px;
  margin-left: 374px;
}

p{
    text-align: center;
    color: green;
    font-size: 28px;
}



/* Full-width input fields */
input[type=form-control], input[type=password] {
  width: 100%;
  padding: 15px;
  float:right;
  margin-top:  -9px;
  margin-bottom: 17px;
  margin-right: 3px;
  margin-left: 20px;
  display: inline-block;
  background:  #FFFFFF;
}

/* input[type=text]:focus, input[type=password]:focus {
  background-color: #FFFFFF;
  outline: none;
} */

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color:white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 12px;
  text-align: center;
}

.btncontactus{
  position: absolute;
  top: 45%;
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
  margin: 12px -55px -54px 601px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

.label {
  font-size:30px;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

.logo-img{
    float: left;
    position: relative;
    margin: 10px 10px 10px -79px;
}
.img{
  width: 475px;  
  height: 520px;
}

/* .btnregister {
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
  margin: 300px 98px 10px 140px; */
/* } */

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
 margin-left:601px;
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

.btnhome{
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

.btnfacilities{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
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
              <li><a href= "http://127.0.0.1:8000/about" class = "btnabout">About</a></li>
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
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <form action="{{ route('registerEvent')  }}" method="POST">
         @CSRF
          <h1 style="color:green;">Course Registration Form</h1>
          <p>Please fill in this form to create an account.</p>
        
          <h5>1. Personal Information</h5>
					<div class="form-group">
                        <label for="i_am" class="col-lg-2 control-label">
                            I am a:</label>
						<div class="col-lg-10">
                        <div class="radio">
                                <label for=>
                                    <input type="radio" name="RecordType" id="RecordType" value="0129000000044dd" checked="checked">
                                    Malaysian Student
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="RecordType" id="RecordType" value="0129000000044di" unchecked="">
                                    Non-Malaysian Student
                                </label>
                            </div>
						</div>
                    </div>

					<div class="form-group">
                        <label for="first_name" class="col-lg-2 control-label">
                            First Name:</label>
                       <div class="col-lg-10" style="padding:0px !Important;">
							<div class="col-md-3">
                            <select class="form-control" name="Salutation" id="Salutation">
                                <option>Mr.</option>
                                <option>Mrs.</option>
                                <option>Ms.</option>
                                <option>Dr.</option>
                                <option>Prof.</option>
                            </select>
							</div>
							<div class="col-md-9">
                           <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
						   </div>
						</div>
                    </div>

					<div class="form-group">
                        <label for="last_name" class="col-lg-2 control-label">
                           Last Name / Surname:</label>
                        <div class="col-lg-10">
                           <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                        </div>
                    </div>



					<div class="form-group">
                        <label for="Dateofbirth" class="col-lg-2 control-label">
                            Date of Birth:</label>
                       <div class="col-lg-10" style="padding:0px !Important;">
							<div class="col-md-2">
                            <select class="form-control" name="day" id="day">
                                <option selected value="-">Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
							</div>
							<div class="col-md-6">
                             <select class="form-control" name="month" id="month">
                                <option selected value="-">Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
						   </div>
						   <div class="col-md-4">
                             <select class="form-control" name="year" id="year">
                                <option selected value="-">Year</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
								</select>
						   </div>
						</div>
                    </div>

					 <div class="form-group" id="condition1">
                        <label for="NRIC__c" class="col-lg-2 control-label">
                            Identity Card No:</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="NRIC__c" id="NRIC__c" placeholder="Identity Card No">
                        <span style="color:#e83434;font-size:10px;">(Eg:870110065298)</span>
						</div>
                    </div>

                     <div class="form-group" id="condition2">
                        <label for="Nationality_International__c" class="col-lg-2 control-label">
                            Nationality:</label>
                        <div class="col-lg-10" style="margin-bottom:15px;">
                            <select class="form-control" name="Nationality_International__c" id="Nationality_International__c">
                                <option selected value="-" disabled>Please Select</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua">Antigua</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Barbuda">Barbuda</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Virgin islands">British Virgin isl.</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Rep">Central African Rep.</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Curacao">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Faeroe Islands">Faeroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Gemany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="GB">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea Bissau">Guinea Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Irak">Irak</option>
                                <option value="Iran">Iran</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Northern Ireland">Ireland, Northern</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Ivory Coast">Ivory Coast</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar/Burma</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Palau">Palau</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="People's Republic of China">People's Republic of China</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saba">Saba</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Scotland">Scotland</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovac Republic">Slovak Republic</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Korea">South Korea</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Trinidad-Tobago">Trinidad-Tobago</option>
                                <option value="Tunesia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="UK">UK</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                                <option value="USA">U.S.A.</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Urugay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City">Vatican City</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Wales">Wales</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                                <option value="(Not Specified)">(Not Specified)</option>
                            </select>
                        </div>

                        <label for="Passport_No__c" class="col-lg-2 control-label">
                            Passport Number:</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="Passport_No__c" id="Passport_No__c" placeholder="Passport Number">
                        </div>
                    </div>

					<div class="form-group">
                        <label for="gender" class="col-lg-2 control-label">
                            Gender:</label>
                        <div class="col-lg-10" id="gender">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Sex__c" id="Sex__c" value="Male" unchecked="">
                                   Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Sex__c" id="Sex__c" value="Female" unchecked="">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>

					<div class="form-group">
                        <label for="mobileno" class="col-lg-2 control-label">
                           Mobile No.:</label>
                       <div class="col-lg-10">
                              <input type="text" class="form-control" name="mobileno" id="mobileno" placeholder="Mobile No">
							  <span style="color:#e83434;font-size:10px;">(Eg:60129388829)</span>
                    </div>
					</div>

                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">
                           E-mail Address</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    </div>


					<h5>2. Permanent Address</h3>
					  <div class="form-group">
                        <label for="inputAddress1" class="col-lg-2 control-label">
                            Address</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" name="00N90000004FnMG" id="00N90000004FnMG"></textarea>
                        </div>
                    </div>


					<div class="form-group">
                        <label for="City__c" class="col-md-2 control-label" style="text-align: left;">
                           City / Town:</label>
                        <div class="col-md-4">
                           <input type="text" class="form-control" name="City__c" id="City__c" placeholder="City / Town">
                        </div>
						 <label for="Postcode_Local__c" class="col-md-2 control-label" style="text-align: left;">
                           Post Code:</label>
                        <div class="col-md-4">
                           <input type="text" class="form-control" name="Postcode_Local__c" id="Postcode_Local__c" placeholder="Post Code">
                        </div>
                    </div>

					<div class="form-group">

                       <div class="col-lg-12" style="padding:0px !Important;">
					     <label for="State__c" class="col-md-2 control-label" style="text-align: left;">
                           State:</label>
							<div class="col-md-4" id="local_state">
                            <select class="form-control" name="State__c" id="State__c">
                                <option selected value="-" disabled>Please Select</option>
                                <option value="Johor">Johor</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Kuala Lumpur">Kuala Lumpur</option>
                                <option value="Melaka">Melaka</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Pulau Pinang">Pulau Pinang</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Terengganu">Terengganu</option>
                                <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                                <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                            </select>
							</div>
                            <div class="col-md-4" id="international_state">
                                <input type="text" class="form-control" name="State_International__c" id="State_International__c" placeholder="State">
                            </div>
                        <div class = "form-group">
                          <label for="Country"><b>Country</b></label>
                          <select name="country" id="country">
                          <option value="afghanistan"> Afghanistan </option>
                          <option value="AX">Aland Islands</option>
                          <option value="AL">Albania</option>
                          <option value="DZ">Algeria</option>
                          <option value="AS">American Samoa</option>
                          <option value="AD">Andorra</option>
                          <option value="AO">Angola</option>
                          <option value="AI">Anguilla</option>
                          <option value="AQ">Antarctica</option>
                          <option value="AG">Antigua and Barbuda</option>
                          <option value="AR">Argentina</option>
                          <option value="AM">Armenia</option>
                          <option value="AW">Aruba</option>
                          <option value="AU">Australia</option>
                          <option value="AT">Austria</option>
                          <option value="AZ">Azerbaijan</option>
                          <option value="BS">Bahamas</option>
                          <option value="BH">Bahrain</option>
                          <option value="BD">Bangladesh</option>
                          <option value="BB">Barbados</option>
                          <option value="BY">Belarus</option>
                          <option value="BE">Belgium</option>
                          <option value="BZ">Belize</option>
                          <option value="BJ">Benin</option>
                          <option value="BM">Bermuda</option>
                          <option value="BT">Bhutan</option>
                          <option value="BO">Bolivia</option>
                          <option value="BA">Bosnia and Herzegovina</option>
                          <option value="BW">Botswana</option>
                          <option value="BV">Bouvet Island</option>
                          <option value="BR">Brazil</option>
                          <option value="IO">British Indian Ocean Territory</option>
                          <option value="VG">British Virgin Islands</option>
                          <option value="BN">Brunei</option>
                          <option value="BG">Bulgaria</option>
                          <option value="BF">Burkina Faso</option>
                          <option value="BI">Burundi</option>
                          <option value="KH">Cambodia</option>
                          <option value="CM">Cameroon</option>
                          <option value="CA">Canada</option>
                          <option value="CV">Cape Verde</option>
                          <option value="BQ">Caribbean Netherlands</option>
                          <option value="KY">Cayman Islands</option>
                          <option value="CF">Central African Republic</option>
                          <option value="TD">Chad</option>
                          <option value="CL">Chile</option>
                          <option value="CN">China</option>
                          <option value="CX">Christmas Island</option>
                          <option value="CC">Cocos (Keeling) Islands</option>
                          <option value="CO">Colombia</option>
                          <option value="KM">Comoros</option>
                          <option value="CG">Congo (Brazzaville)</option>
                          <option value="CD">Congo (Kinshasa)</option>
                          <option value="CK">Cook Islands</option>
                          <option value="CR">Costa Rica</option>
                          <option value="HR">Croatia</option>
                          <option value="CU">Cuba</option>
                          <option value="CW">Curaçao</option>
                          <option value="CY">Cyprus</option>
                          <option value="CZ">Czech Republic</option>
                          <option value="DK">Denmark</option>
                          <option value="DJ">Djibouti</option>
                          <option value="DM">Dominica</option>
                          <option value="DO">Dominican Republic</option>
                          <option value="EC">Ecuador</option>
                          <option value="EG">Egypt</option>
                          <option value="SV">El Salvador</option>
                          <option value="GQ">Equatorial Guinea</option>
                          <option value="ER">Eritrea</option>
                          <option value="EE">Estonia</option>
                          <option value="ET">Ethiopia</option>
                          <option value="FK">Falkland Islands</option>
                          <option value="FO">Faroe Islands</option>
                          <option value="FJ">Fiji</option>
                          <option value="FI">Finland</option>
                          <option value="FR">France</option>
                          <option value="GF">French Guiana</option>
                          <option value="PF">French Polynesia</option>
                          <option value="TF">French Southern Territories</option>
                          <option value="GA">Gabon</option>
                          <option value="GM">Gambia</option>
                          <option value="GE">Georgia</option>
                          <option value="DE">Germany</option>
                          <option value="GH">Ghana</option>
                          <option value="GI">Gibraltar</option>
                          <option value="GR">Greece</option>
                          <option value="GL">Greenland</option>
                          <option value="GD">Grenada</option>
                          <option value="GP">Guadeloupe</option>
                          <option value="GU">Guam</option>
                          <option value="GT">Guatemala</option>
                          <option value="GG">Guernsey</option>
                          <option value="GN">Guinea</option>
                          <option value="GW">Guinea-Bissau</option>
                          <option value="GY">Guyana</option>
                          <option value="HT">Haiti</option>
                          <option value="HM">Heard Island and McDonald Islands</option>
                          <option value="HN">Honduras</option>
                          <option value="HK">Hong Kong S.A.R., China</option>
                          <option value="HU">Hungary</option>
                          <option value="IS">Iceland</option>
                          <option value="IN">India</option>
                          <option value="ID">Indonesia</option>
                          <option value="IR">Iran</option>
                          <option value="IQ">Iraq</option>
                          <option value="IE">Ireland</option>
                          <option value="IM">Isle of Man</option>
                          <option value="IL">Israel</option>
                          <option value="IT">Italy</option>
                          <option value="CI">Ivory Coast</option>
                          <option value="JM">Jamaica</option>
                          <option value="JP">Japan</option>
                          <option value="JE">Jersey</option>
                          <option value="JO">Jordan</option>
                          <option value="KZ">Kazakhstan</option>
                          <option value="KE">Kenya</option>
                          <option value="KI">Kiribati</option>
                          <option value="KW">Kuwait</option>
                          <option value="KG">Kyrgyzstan</option>
                          <option value="LA">Laos</option>
                          <option value="LV">Latvia</option>
                          <option value="LB">Lebanon</option>
                          <option value="LS">Lesotho</option>
                          <option value="LR">Liberia</option>
                          <option value="LY">Libya</option>
                          <option value="LI">Liechtenstein</option>
                          <option value="LT">Lithuania</option>
                          <option value="LU">Luxembourg</option>
                          <option value="MO">Macao S.A.R., China</option>
                          <option value="MK">Macedonia</option>
                          <option value="MG">Madagascar</option>
                          <option value="MW">Malawi</option>
                          <option value="MY">Malaysia</option>
                          <option value="MV">Maldives</option>
                          <option value="ML">Mali</option>
                          <option value="MT">Malta</option>
                          <option value="MH">Marshall Islands</option>
                          <option value="MQ">Martinique</option>
                          <option value="MR">Mauritania</option>
                          <option value="MU">Mauritius</option>
                          <option value="YT">Mayotte</option>
                          <option value="MX">Mexico</option>
                          <option value="FM">Micronesia</option>
                          <option value="MD">Moldova</option>
                          <option value="MC">Monaco</option>
                          <option value="MN">Mongolia</option>
                          <option value="ME">Montenegro</option>
                          <option value="MS">Montserrat</option>
                          <option value="MA">Morocco</option>
                          <option value="MZ">Mozambique</option>
                          <option value="MM">Myanmar</option>
                          <option value="NA">Namibia</option>
                          <option value="NR">Nauru</option>
                          <option value="NP">Nepal</option>
                          <option value="NL">Netherlands</option>
                          <option value="AN">Netherlands Antilles</option>
                          <option value="NC">New Caledonia</option>
                          <option value="NZ">New Zealand</option>
                          <option value="NI">Nicaragua</option>
                          <option value="NE">Niger</option>
                          <option value="NG">Nigeria</option>
                          <option value="NU">Niue</option>
                          <option value="NF">Norfolk Island</option>
                          <option value="MP">Northern Mariana Islands</option>
                          <option value="KP">North Korea</option>
                          <option value="NO">Norway</option>
                          <option value="OM">Oman</option>
                          <option value="PK">Pakistan</option>
                          <option value="PW">Palau</option>
                          <option value="PS">Palestinian Territory</option>
                          <option value="PA">Panama</option>
                          <option value="PG">Papua New Guinea</option>
                          <option value="PY">Paraguay</option>
                          <option value="PE">Peru</option>
                          <option value="PH">Philippines</option>
                          <option value="PN">Pitcairn</option>
                          <option value="PL">Poland</option>
                          <option value="PT">Portugal</option>
                          <option value="PR">Puerto Rico</option>
                          <option value="QA">Qatar</option>
                          <option value="RE">Reunion</option>
                          <option value="RO">Romania</option>
                          <option value="RU">Russia</option>
                          <option value="RW">Rwanda</option>
                          <option value="BL">Saint Barthélemy</option>
                          <option value="SH">Saint Helena</option>
                          <option value="KN">Saint Kitts and Nevis</option>
                          <option value="LC">Saint Lucia</option>
                          <option value="MF">Saint Martin (French part)</option>
                          <option value="PM">Saint Pierre and Miquelon</option>
                          <option value="VC">Saint Vincent and the Grenadines</option>
                          <option value="WS">Samoa</option>
                          <option value="SM">San Marino</option>
                          <option value="ST">Sao Tome and Principe</option>
                          <option value="SA">Saudi Arabia</option>
                          <option value="SN">Senegal</option>
                          <option value="RS">Serbia</option>
                          <option value="SC">Seychelles</option>
                          <option value="SL">Sierra Leone</option>
                          <option value="SG">Singapore</option>
                          <option value="SX">Sint Maarten</option>
                          <option value="SK">Slovakia</option>
                          <option value="SI">Slovenia</option>
                          <option value="SB">Solomon Islands</option>
                          <option value="SO">Somalia</option>
                          <option value="ZA">South Africa</option>
                          <option value="GS">South Georgia and the South Sandwich Islands</option>
                          <option value="KR">South Korea</option>
                          <option value="SS">South Sudan</option>
                          <option value="ES">Spain</option>
                          <option value="LK">Sri Lanka</option>
                          <option value="SD">Sudan</option>
                          <option value="SR">Suriname</option>
                          <option value="SJ">Svalbard and Jan Mayen</option>
                          <option value="SZ">Swaziland</option>
                          <option value="SE">Sweden</option>
                          <option value="CH">Switzerland</option>
                          <option value="SY">Syria</option>
                          <option value="TW">Taiwan</option>
                          <option value="TJ">Tajikistan</option>
                          <option value="TZ">Tanzania</option>
                          <option value="TH">Thailand</option>
                          <option value="TL">Timor-Leste</option>
                          <option value="TG">Togo</option>
                          <option value="TK">Tokelau</option>
                          <option value="TO">Tonga</option>
                          <option value="TT">Trinidad and Tobago</option>
                          <option value="TN">Tunisia</option>
                          <option value="TR">Turkey</option>
                          <option value="TM">Turkmenistan</option>
                          <option value="TC">Turks and Caicos Islands</option>
                          <option value="TV">Tuvalu</option>
                          <option value="VI">U.S. Virgin Islands</option>
                          <option value="UG">Uganda</option>
                          <option value="UA">Ukraine</option>
                          <option value="AE">United Arab Emirates</option>
                          <option value="GB">United Kingdom</option>
                          <option value="US">United States</option>
                          <option value="UM">United States Minor Outlying Islands</option>
                          <option value="UY">Uruguay</option>
                          <option value="UZ">Uzbekistan</option>
                          <option value="VU">Vanuatu</option>
                          <option value="VA">Vatican</option>
                          <option value="VE">Venezuela</option>
                          <option value="VN">Vietnam</option>
                          <option value="WF">Wallis and Futuna</option>
                          <option value="EH">Western Sahara</option>
                          <option value="YE">Yemen</option>
                          <option value="ZM">Zambia</option>
                          <option value="ZW">Zimbabwe</option>
                        </select>
                        </div>
              
						       </div>
                    </div>



                    <h5>3. Academic Qualification</h5>
                    <div id="local_qualification">
					<div class="form-group">
                        <label for="Secondary_School_Result__c" class="col-md-2 control-label">
                            Secondary School Qualification:</label>
                       <div class="col-md-10">
                              <select class="form-control" name="Secondary_School_Result__c" id="Secondary_School_Result__c">
                                <option selected value="-" disabled>Please Select</option>
                                <option value="SPM">SPM</option>
                                <option value="STPM">STPM</option>
                                <option value="O-Level">O-Level</option>
                                <option value="UEC">UEC</option>
                            </select>
                    </div>
					</div>
          
         
        
<div class="form-item webform-component webform-component-email webform-container-inline" id="webform-component-apply-personal-details--e-mail">
            </select>
          </div>

            <div class = "form-group">
              <label for="entrylevel">Entry level</label>
              <select name="entrylevel" id="entrylevel">
                <option value="Certificate">Certificate</option>
                <option value="Foundation(Pre-University)">Foundation(Pre-University)</option>
                <option value="Diploma">Diploma</option>
                <option value="Bachelor Honours Degree">Bachelor Honours Degree</option>
                <option value="Masters Degree">Masters Degree</option>
                <option value="Phd">PhD</option>
               
              </select>
            </div>

           

					<h5>6. Programme Preferred </h5>

					<div class="form-group">
                        <label for="Program_Level_Study_1__c" class="col-md-2 control-label">
                            Programme Level / Study:</label>
                       <div class="col-md-10">
                              <select class="form-control" name="Program_Level_Study_1__c" id="Program_Level_Study_1__c">
                                <option selected value="-" disabled>Please Select</option>
                                <option value="Bachelor's Degree">Bachelor's Degree</option>
                                <option value="Certificate">Certificate</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Executive Diploma">Executive Diploma</option>
                                <option value="Pre-University">Pre-University</option>
                                <option value="Postgraduate Degree">Postgraduate Degree</option>
                                <option value="Professional Studies">Professional Studies</option>
                                <option value="Short courses">Short courses</option>
                            </select>
						</div>
					</div>

					<div class="form-group">
                        <label for="Program_Faculty_School_1__c" class="col-md-2 control-label">
                           Faculty / School:</label>
                       <div class="col-md-10">
                              <select class="form-control" name="Program_Faculty_School_1__c" id="Program_Faculty_School_1__c">
                                <option selected value="-" disabled>Please Select</option>
                            </select>
						</div>
					</div>

					<div class="form-group">
                        <label for="Program_Name_1__c" class="col-md-2 control-label">
                           Programme Name:</label>
                       <div class="col-md-10">
                              <select class="form-control" name="Program_Name_1__c" id="Program_Name_1__c">
                                <option selected value="-" disabled>Please Select</option>
                            </select>
						</div>
					</div>
          <button type="submit" class="registerbtn">Register Now</button>
        </div>
      </form>
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