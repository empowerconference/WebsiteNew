
<html>
<head>
<?php 
 session_start();
 ?>
  
  <title>Room Bookings for EMPOWER2018</title>
   <meta name="robots" content="noindex, nofollow" />
    <script src="js/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                <li class="breadcrumb-item active" aria-current="page">Room Booking</li>
              </ol>
            </nav>		
            
            <section>
            <div class="bootstrap-iso">
             <div class="container wrap" >
                <div class="col-md-10 col-sm-12">
                    <h2 class="section-title">Room Booking</h2></br>
                    
                    <form method="post" action="room_booking.php">
           
                <div class="form_css">Full Name<span style="color: red;"> *</span><br/>
				<input type='text' name="name" class="form-control" id="name" placeholder='Enter your full name' required/>
				</div>
				
				<div class="form_css">
				<label>Gender </label>        
				 <div class="form-check">
				  <input type="radio" name="gender" value="male" checked> Male<br>
				  <input type="radio" name="gender" value="female"> Female<br>
				  <input type="radio" name="gender" value="other"> Other 
				  </label>
				  </div>
				</div>
				
				<div class="form_css">Contact Number<span style="color: red;"> *</span><br/>
				<input type='number' name="contact" class="form-control"  id="contact" placeholder='Enter contact number' required/>
				</div>
				
				<div class="form_css">Email<span style="color: red;"> *</span><br/>
				<input type='email' name="email" id="email" class="form-control" placeholder='Enter a valid email address' required />
				</div>
				
				<div class="form_css">
				<label>Address<span style="color:red;">*</span> </label> <br />
				<textarea name="address" class="form-control" id="address" value="" placeholder='Enter complete address' required/></textarea>
				</div>
				
				<div class="form_css">
				<label>Affiliation<span style="color:red;">*</span> </label> <br />
				<input name="affiliation" class="form-control" id="address" value="" placeholder='Enter your organization name' required />
				</div>
				
				
				<div class="row form_css" style="margin:35px 20px;">	
				<div style="font-family: 'Tahoma', sans-serif!important; font-weight: 100!important; font-size: 12pt; padding: 5px;">Booking Dates</div>
				 <div class="col-md-12" style="margin: 4px 0px; border: 1px solid #CCC!important; border-radius: 2px!important; padding: 20px 0;">
					<div class=" col-md-6">
					<label style="font-size:10pt;">Enter Check-In Date<span style="color: red;"> *</span><br/></label>
					<input type="text" id="check-in" class="input_date" name="checkin" placeholder='Check-In' required onchange="displayVals();" />
					Oct 2018				
					</div>				
					
				
					<div class="col-md-6">
					<label style="font-size:11pt;">Enter Check-Out Date <span style="color: red;"> *</span><br/></label>
					<input type="text" id="check-out" class="input_date" name="checkout" placeholder='Check-Out' required onchange="displayVals();" />
					Oct 2018
					</div>
				 </div>
				</div>
				
				<div class="form_css">
				<label for="sel1">Occupancy Type<span style="color:red;">*</span></label><br>
				  <select id="sel" name="type" class="form-control" required>
					<option id ="o" value="select">Select</option>
					<option id ="a" value="single">Single Occupancy</option>
					<option id="b" value="double">Double Occupancy</option>
					
				  </select>
			    </div>
								 
				<div class="form_css">Questions / Comments<br/>
				<input type="text" name="questions" class="form-control" />
				</div>
				
				
				<div class="form_css">
				<label class="col-md-3">Total Amount (in INR) :</label>
				<input type="text" name="amount" class="col-md-6" style=" color: darkgreen; border: none!important; background: none;  font-size: 13pt;
                 width: 50%; font-weight: bold; padding:5px;" id="amount" value="" readonly/>
				</div>
				
				
				
				
				<div class="form_css" style="display:none;" >No. of Days<br/>
				<input id="days" name="days" class="form-control" />
				</div>
				
				<div class="clearfix"></div>
				          
			  <div class="form_css" style="text-align:center">
				<input type='submit' id='btn' class="btn btn-primary" name="submit" Value='Submit' /><br />
			  </div>  
		 
<?php
		include "include/redirect_bookings.php";
	?>
</form>
    
    </div>
	</div>
   <script type="text/javascript">
   
    </script>

<script>
     
function displayVals() {    
  
	var datein = $("#check-in").val();
	var dateout = $("#check-out").val();
	var days = dateout - datein;
	var am;
  var singleValues = $( "#sel" ).val();
	if (singleValues == "select") {
			var am = days * 0
			$("#amount").val(am);
			$("#days").val(days);			
			
		}  
	
	
	
  	else if (singleValues == "single") {
			var am = days * 2950
			$("#amount").val(am);	
			$("#days").val(days);
			
		}  
	
		
	else if (singleValues == "double"){
			var am = days * 1592
			$("#amount").val(am);	
			$("#days").val(days);
			
		}	 
}    



$( "select" ).change(displayVals );    
displayVals();    
</script>   
 

</div>
   </section>
   
 



<?php include '../assets/includes/footer.php' ?>  