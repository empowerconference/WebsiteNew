
<html>
<head>
<?php 
 session_start();
 ?>
  
  <title>Register for EMPOWER2018</title>
   <meta name="robots" content="noindex, nofollow" />
    <script src="js/jquery.min.js"></script>
	    <!--------- include css file here ---------->
	
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/ionicons/css/ionicons.min.css">
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/redirect_form.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css">
 
	<style>
    	.intro{
			top:67px;
		}
		
		.site{
			min-height: 300px;
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
 <div class="container wrap" >
	<div class="col-md-8 col-sm-12">
	    <h2 class="section-title">Registration</h2></br>
		
		<form method="post" id="form" action="index.php" >        
		
        <div class="form_css">
        <label>Name<span style="color:red;">*</span> </label> 
		<input type='text' name="name" class="form-control" id="name" placeholder='Enter your full name' required/>
		</div>
             
        
         <div class="form_css"> 
		<label>Email<span style="color:red;">*</span></label> 
		<input type='email' name="email" id="email" class="form-control" placeholder='Enter a valid email address' required/>
        
		</div>
        
        <div class="form_css">
     	<label>Registration Date</label>
       <input type="text" name="date" class="form-control" readonly value="<?php echo date('d/m/y');?>"/>
        </div>
        
        <div class="form_css">
		<label>Contact Number<span style="color:red;">*</span> </label> <br />
		<input type='number' name="contact" class="form-control"  id="contact" placeholder='Enter contact number' required/>
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
         <label for="sel1">Delegate Type<span style="color:red;">*</span></label><br>
 		  <select id="sel" name="type1" class="form-control" required>
            <option id ="a" value="General">General</option>
            <option id="b" value="Differently_Abled">Differently Abled</option>
            <option id="c" value="Student">Student</option>
            <option id="d" value="AP">Accompanying Person </option>
            <option id="E" value="Exhibit">Exhibitor</option>
          </select>
		</div>
        
        <div class="form_css" id="ref" style="display:none;">
        <label>Reference Id<span style="color:red;">*</span></label>
        <input type="text" name="reference" class="form-control" value="" placeholder="Please enter your unique reference ID "/>
		
        </div>
        
        <div class="form_css">
          <label for="sel2">Register For<span style="color:red;">*</span></label><br>
 		  <select id="reg" name="type2" class="form-control" required>
            <option id ="a" value="Full">Full Workshop</option>
            <option id="b" value="OneDay">One Day</option>
           </select>
           </div>
        	
        <div class="form_css">
        <label>Registration Amount (in INR)<span style="color:red;">*</span></label>
        <input type="text" name="amount" class="form-control" id="amount" value="" readonly/>
		<span style="color:red;">*</span>These are Early-Bird charges when you register before 7th October 2018
        </div>
		
        <div class="form_css" style="text-align:center">
		<input type='submit' id='btn' class="btn btn-primary" name="submit" Value='Submit' /><br />
	 	</div>
	<?php
		include "include/redirect.php";
	?>
	
	</form>
    </div>
	</div>
<script>    
function displayVals() {    
	
  var singleValues = $( "#sel" ).val();
  var doubleValues = $( "#reg" ).val();
  	if ((singleValues == "General") & (doubleValues == "Full")){
			$("#amount").val("5900");	
			document.getElementById("ref").style.display = "none";
		}  
	
	else if ((singleValues == "General") & (doubleValues == "OneDay")){
			$("#amount").val("2360");	
			document.getElementById("ref").style.display = "none";
		}  
	

	else if ((singleValues == "Differently_Abled") & (doubleValues == "Full")){
			$("#amount").val("3540");	
			document.getElementById("ref").style.display = "none";
		}
		
	else if ((singleValues == "Differently_Abled") & (doubleValues == "OneDay")){
			$("#amount").val("1180");	
			document.getElementById("ref").style.display = "none";
		}	 
		
	else if ((singleValues == "Student") & (doubleValues == "Full")){
			$("#amount").val("3540");	
			document.getElementById("ref").style.display = "none";
		}
		
	else if ((singleValues == "Student") & (doubleValues == "OneDay")){
			$("#amount").val("1180");	
			document.getElementById("ref").style.display = "none";
		}	 
		
		
		else if ((singleValues == "AP") & (doubleValues == "Full")){
			$("#amount").val("1770");	
			document.getElementById("ref").style.display = "none";
		}
		else if ((singleValues == "AP") & (doubleValues == "OneDay")){
			$("#amount").val("590");	
			document.getElementById("ref").style.display = "none";
		}
		
	else if (singleValues == "Exhibit"){
			$("#amount").val("0");	
			document.getElementById("ref").style.display = "block";
		}		  		  
        
}    
$( "select" ).change(displayVals );    
displayVals();    
</script>
   </section>

<?php include 'include/footer-2.php' ?>  