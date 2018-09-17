
<html>
<head>
<?php 
 session_start();
 ?>
  
  <title>Register for EMPOWER2018</title>
   <meta name="robots" content="noindex, nofollow" />
    <script src="js/jquery.min.js"></script>
	
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

	    <!--------- include css file here ---------->
	
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/ionicons/css/ionicons.min.css">
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/redirect_form.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <style>	
		.intro{
			top:67px;
		}
		
		.site{
			min-height: 300px;
		}
		
		.form-item{
			overflow: hidden; 
			width: 50%; 
			float: left;
			padding-left:10px;
			}
    
    </style>

</head>
<body>
<div class="site valign-center"> 
        
        <div id="intro" class="intro">
		<!-- logo -->
                
            <img src="../assets/images/logo_big.png" alt="Logo">
           
            
            <h1>ASSISTIVE TECHNOLOGY CONFERENCE</h1>
            <h2>25 - 27 October 2018</h2>
            
        
        </div>
</div>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registration</li>
  </ol>
</nav>		

<section>
<div class="bootstrap-iso">
 <div class="container wrap" >
	<div class="col-md-8 col-sm-12">
	    <h2 class="section-title">Registration</h2></br>
		
		<form method="post" id="form" action="redirect_form.php" >        
		
        <div class="form_css">
        <label>Name<span style="color:red;">*</span> </label> 
		<input type='text' name="name" class="form-control" id="name" placeholder='Enter your full name' required/>
		</div>
        
        <!--<div class="form-control">
		<label>Gender </label>        
         <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Female
          </label>
        </div>
		</div>-->      
        
         <div class="form_css"> 
		<label>Email<span style="color:red;">*</span></label> 
		<input type='email' name="email" id="email" class="form-control" placeholder='Enter a valid email address' required/>
        
		</div>
        
	 
        <div class="form_css input-daterange input-group" id="flight-datepicker">
		<label>Select Date</label>	
		</br>
            <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            <div class="form-item">
              <label>To</label><span class="fontawesome-calendar"></span>
              <input class="input-sm form-control" type="text" id="date-to" name="end" placeholder="Select return date" data-date-format="DD, MM d"/><span class="date-text date-return"></span>
            </div>
       </div>
	  
	  <div class="form_css">
		<label>Number of days<span style="color:red;">*</span> </label> <br />
		<input type='text' name="contact" class="form-control"  id="contact" value="" placeholder='Enter contact number' readonly/>
        </div>
        
		
        <div class="form_css">
		<label>Contact<span style="color:red;">*</span> </label> <br />
		<input type='text' name="contact" class="form-control"  id="contact" placeholder='Enter contact number' required/>
        </div>
        
		<div class="form_css">
		<label>Address<span style="color:red;">*</span> </label> <br />
		<textarea name="address" class="form-control" id="address" value="" placeholder='Enter complete address' required/></textarea>
        </div>
        
        <div class="form_css">
		<label>Affiliation<span style="color:red;">*</span> </label> <br />
		<input name="affiliation" class="form-control" id="address" value="" placeholder='Enter your organization name' required />
        </div>
        
		<div class="form_css">
		<label>Need Assistance? Let us know </label> <br />
		<input type="text" class="form-control" id="assistance" name="assistance" value="" placeholder='e.g., wheelchair, interpreter, sighted guide'/>
        </div>
        
        <div class="form_css">
        <label>Registration Amount (in INR)<span style="color:red;">*</span></label>
        <input type="text" name="amount" class="form-control" id="amount" value="" readonly/>
		<span style="color:red;">*</span>This is a non-editable field
        </div>
		
        <div class="form_css" style="text-align:center">
		<input type='submit' id='btn' class="btn btn-primary" name="submit" Value='Submit' /><br />
	 	</div>
	<?php
		include "include/redirect_bookings.php";
	?>
	
	</form>
    </div>
	</div>
    
 

</div>
   </section>
   
<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
</script>

<?php include '../assets/includes/footer.php' ?>  