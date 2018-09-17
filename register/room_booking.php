
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
                <li class="breadcrumb-item active" aria-current="page">Registration</li>
              </ol>
            </nav>		
            
            <section>
            <div class="bootstrap-iso">
             <div class="container wrap" >
                <div class="col-md-8 col-sm-12">
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
			
				<div class="form_css">
				<label for="sel1">Occupancy Type<span style="color:red;">*</span></label><br>
				  <select id="sel" name="type" class="form-control" required>
					<option id ="a" value="single">Single Occupancy</option>
					<option id="b" value="double">Double Occupancy</option>
					
				  </select>
			    </div>
				
				<div class="form_css">Check-In<span style="color: red;"> *</span><br/>
				<input type="date" id="pick_date" name="check-in" placeholder='Enter Check-In date' required class="form-control" onchange="cal()"/>
				</div>				
      
			
				<div class="form_css"> Check-Out <span style="color: red;"> *</span><br/>
				<input type="date" id="drop_date" name="check-out" class="form-control" placeholder='Enter Check-Out date' onchange="cal()" class="form-control" required />
				</div>
				
				<div class="form_css">Number of Days<span style="color: red;"> *</span><br/>
				<input type="number"  id="numdays2" name="numdays" class="form-control"/>
				</div>
				
				 
	
				<div class="form_css">
				<label>Total Amount (in INR)<span style="color:red;">*</span></label>
				<input type="text" name="amount" class="form-control" id="amount" value="" readonly/>
				</div>
				
				
				<div class="form_css">Questions / Comments<br/>
				<textarea id="data_10" false name="comment" class="form-control"></textarea>
				</div>
				
				<div class="form_css" style="display:none;">
				<label>Booking Date</label>
				<input type="text" name="date" class="form-control" readonly value="<?php echo date('d/m/y');?>"/>
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
   <script type="text/javascript">
   
    </script>

<script>
     function GetDays(){
                var dropdt = new Date(document.getElementById("drop_date").value);
                var pickdt = new Date(document.getElementById("pick_date").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }

        function cal(){
        if(document.getElementById("drop_date")){
            document.getElementById("numdays2").value=GetDays();
        }  
    }


function displayVals() {    
    
	
  var singleValues = $( "#sel" ).val();

  	if ((singleValues == "single") & (days == 1)){
			alert("1 day");
			$("#amount").val("2950");	
			document.getElementById("ref").style.display = "none";
		}  
	
	else if ((singleValues == "single") & (days == 2)){
		alert("2 days");
			$("#amount").val("5900");	
			document.getElementById("ref").style.display = "none";
		}  
	

	else if ((singleValues == "single") & (days == "3")){
			$("#amount").val("8850");	
			document.getElementById("ref").style.display = "none";
		}
		
	else if ((singleValues == "double") & (days == "1")){
			$("#amount").val("1592");	
			document.getElementById("ref").style.display = "none";
		}	 
		
	else if ((singleValues == "double") & (days == "2")){
			$("#amount").val("3186");	
			document.getElementById("ref").style.display = "none";
		}
		
	else if ((singleValues == "double") & (days == "3")){
			$("#amount").val("4776");	
			document.getElementById("ref").style.display = "none";
		}	 
		
		
}    



$( "select" ).change(displayVals );    
displayVals();    
</script>   
 

</div>
   </section>
   
 



<?php include '../assets/includes/footer.php' ?>  