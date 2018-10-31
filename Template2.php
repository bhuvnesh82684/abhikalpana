<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="ABHIKALPANA is an NGO in India. Our main aim is to provide education for underprivileged
	children, girl child, and give support for poor children's health.">
	<META name="keywords" content="NGO, NGO in India,education for underprivileged children, education, ABHIKALPANA">	
    <title>ABHIKALPANA</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	.fa {
  padding: 10px;
  font-size: 20px;
  width: 40px;
  text-align: center;
  text-decoration: none;
  margin: 3px 1px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

	</style>
	
	
  </head>
  <body>

    <div class="wrap" >
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark sidebarNavigation "  data-sidebarClass="navbar-dark">
        <a class="navbar-brand ml-4" href="intro3.html"> <img src="img/tlogo.png" alt="ABHIKALPANA" class="img-fluid"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
          <span class="navbar-toggler-icon"></span>
        </button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item mr-5 dropdown ">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Our Story<span class="caret"></span></a>
				<ul class="dropdown-menu bg-dark" style="border: none;">
					<li><a class="dropdown-item nav-link" href="intro3.html#history" onmouseover='this.style.color="black"' onmouseout='this.style.color="rgba(255,255,255,0.5)"'>History</a></li>
					<li><a class="dropdown-item nav-link" href="intro3.html#vision" onmouseover='this.style.color="black"' onmouseout='this.style.color="rgba(255,255,255,0.5)"'>Vision</a></li>
					<li><a class="dropdown-item nav-link" href="intro3.html#mission" onmouseover='this.style.color="black"' onmouseout='this.style.color="rgba(255,255,255,0.5)"'>Mission</a></li>
				</ul>
				</li>
				<li class="nav-item mr-5"><a class="nav-link" href="#">Pillars of Action</a></li>
				<li class="nav-item mr-5"><a class="nav-link" href="Template2.php">Volunteership</a></li>
				<li class="nav-item mr-5"><a class="nav-link" href="events.html">Events</a></li>
				<li class="nav-item mr-5"><a class="nav-link" href="#">Gallery</a></li>
				<li class="nav-item mr-5"><a class="nav-link" href="template.html">Contact Us</a></li>
			</ul>
		</div>
     </nav>
   
	
			
				<h2 style="padding-left:30px" >Volunteer Form</h2>
				
				<div class="row" style="padding:0px;margin:0px;" >
					<div class="col-sm-5 col-md-5 col-lg-5 text-left "style="padding-left:60px;">
					<form  action="vol_dp2.php" method="POST" style="font-size:16px;">
						<div class="form-group">
						  <label for="uname"><b>FULL NAME</b></label>
						  <input type="text" class="form-control" id="uname" name='uname' required placeholder="FULL NAME" >
						</div>
						<div class="form-group">
						  <label for="gen"><b>Gender</b></label>
							<select name="gender"  id="gen">
							<option value="shine">Male</option>
							<option value="scream">Female</option>
							<option value="smile">Other</option>
							</select>
						</div>
						<div class="form-group">
							  <label for="email"><b>EMAIL:</b></label>
							  <input type="email" id="email" name ='email' class="form-control" placeholder="EMAIL" required="require">
						</div>	  
						<div class="form-group">	  
							  <label for="phone"><b>Mobile No.:</b></label>
							  <input type="tel" name='phone' id="phone" class="form-control" pattern="[1-9]{1}[0-9]{9}" maxlength="10"  minlength="10" placeholder="PHONE"  required="require">
			
						</div>
						<div class="form-group">
						   <label for="add"><b>Address</b></label>
						  <input type="text" class="form-control" id="add"name='add' required="require" placeholder="Address" ></input>
						  
						</div>
						<div class="form-group">
						   <label for="cname"><b>Occupation</b></label>
						  <input type="text" class="form-control" id="occ"name='occ' required="require" placeholder="Occupation" >  
						</div>
						<div class="form-group">
						  <label for="cat"><b>Categories:</b></label>
							<select name="cate"  id="cat" >
							<option value="shine">SHINE</option>
							<option value="scream">SCREAM</option>
							<option value="smile">SMILE</option>
							<option value="smile">All</option>
							
							</select>
						</div>
						<div class="form-group">
						  <label for="bg"><b>Bood Group:</b></label>
							<select name="bg"  id="bg">
							<option value="shine">A+</option>
							<option value="shine">A-</option>
							<option value="shine">B+</option>
							<option value="shine">B-</option>
							<option value="shine">AB+</option>
							<option value="shine">AB-</option>
							<option value="shine">O+</option>
							<option value="shine">O-</option>
							
							
							</select>
						</div>
						<div class="form-group">	
							<label for="doj"><b>Date of Joining:</b></label>
							<input type="date" id="doj" name="doj" placeholder="	date" required="require">
						
						</div>
							
						<div class="form-group">
							<label for="MESSAGE"><b>Do you have any previous experience ? if yes tell us in short.</b></label>
							<textarea rows="4" class="form-control" cols="30"  id="MESSAGE1" name="m1" ></textarea>
						</div>
						<div class="form-group">
							<label for="MESSAGE"><b>Why do you want to join us?</b></label>
							<textarea rows="4" class="form-control" cols="30"  id="MESSAGE2" name="m2" ></textarea>
						</div>
						<div class="form-group">
							<label for="MESSAGE"><b>How much time you can share with us?</b></label>
							<textarea rows="2" class="form-control" cols="30"  id="MESSAGE3" name="m3" ></textarea>
						</div>
							  <button class="btn pull-right" style="border:1px solid black"  type="submit">APPLY</button>
						
					</form>
				</div>
					
				</div>
				
				<script>
				var d=new Date(); 
				var dd=d.getDate();
				var mm=d.getMonth()+1;
				var yy=d.getFullYear();
				if(dd<10) {
					dd = '0'+dd;
				} 

				if(mm<10) {
					mm = '0'+mm;
				} 

				var today= yy+"-"+mm+"-"+dd;
				document.getElementById("doj").min=today;
				
				
				
				</script>
			
			</div>
		
	</div>
		<footer>
      <div class="container-fluid foot">
        <div class="row">

          <div class="col-sm-2 col-md-2 col-lg-2">
            <p>Copyright &copy; 2018 ABHIKALPANA</p>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4">
            <p>About Us</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-sm-2 col-md-2 col-lg-2">
            <p>Navigation</p>
            <ul class="unstyled">
              <li> <a href="intro3.html">Home</a> </li>
              <li> <a href="#">Categories</a> </li>
              <li> <a href="Template2.php">Volunteer Registration</a> </li>
              <li> <a href="events.html">Events</a> </li>
              <li> <a href="#">Gallery</a> </li>
              <li> <a href="template.html">Contact Us</a> </li>
            </ul>
          </div>
          <div class="col-sm-2 col-md-2 col-lg-2 " >
            <p>Follow Us</p>
            <ul class="unstyled" style="margin-left:10px;">
              <li> <a class="fa fa-facebook" href="https://www.facebook.com/abhikalpanatrust/"></a> </li>
              <li> <a class="fa fa-instagram" href="https://www.instagram.com/abhikalpanatrust/"></a> </li>
            </ul>
          </div>
          <div class="col-sm-2 col-md-2 col-lg-2">
            <p>Register above to be a part of ABHIKALPANA</p>
          </div>

        </div>

      </div>
      <div class="container-fluid baseline">
        <h6><span class="oi oi-code"></span> with <span class="oi oi-heart"></span> by Team ABHIKALPANA</h6>
      </div>
    </footer>



    <!-- js scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script  src="sidebarscript.js"></script>
  </body>
</html>
