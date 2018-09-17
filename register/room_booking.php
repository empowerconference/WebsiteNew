
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
                    
                    <form method="post" action="//submit.form" onSubmit="return validateForm();">
            <div style="width: 400px;">
            </div>
            <div style="padding-bottom: 18px;font-size : 24px;">Hotel Reservation</div>
            <div style="display: flex; padding-bottom: 18px;width : 450px;">
            <div style=" margin-left : 0; margin-right : 1%; width : 49%;">First name<span style="color: red;"> *</span><br/>
            <input type="text" id="data_2" name="data_2" style="width: 100%;" class="form-control"/>
            </div>
            <div style=" margin-left : 1%; margin-right : 0; width : 49%;">Last name<span style="color: red;"> *</span><br/>
            <input type="text" id="data_3" name="data_3" style="width: 100%;" class="form-control"/>
            </div>
            </div><div style="padding-bottom: 18px;">Phone<span style="color: red;"> *</span><br/>
            <input type="text" id="data_4" name="data_4" style="width : 450px;" class="form-control"/>
            </div>
            <div style="padding-bottom: 18px;">Email<span style="color: red;"> *</span><br/>
            <input type="text" id="data_5" name="data_5" style="width : 450px;" class="form-control"/>
            </div>
            <div style="padding-bottom: 18px;">Arrival date<span style="color: red;"> *</span><br/>
            <input type="text" id="data_6" name="data_6" style="width : 250px;" class="form-control"/>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/pikaday.min.js" type="text/javascript"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/css/pikaday.min.css" rel="stylesheet" type="text/css" />
            <script type="text/javascript">new Pikaday({ field: document.getElementById('data_6') });</script>
            <div style="padding-bottom: 18px;">Departure date<span style="color: red;"> *</span><br/>
            <input type="text" id="data_7" name="data_7" style="width : 250px;" class="form-control"/>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/pikaday.min.js" type="text/javascript"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/css/pikaday.min.css" rel="stylesheet" type="text/css" />
            <script type="text/javascript">new Pikaday({ field: document.getElementById('data_7') });</script>
            <div style="padding-bottom: 18px;">Number of adults<span style="color: red;"> *</span><br/>
            <input type="number" id="data_8" name="data_8" style="width : 250px;" class="form-control"/>
            </div>
            <div style="padding-bottom: 18px;">Number of children<br/>
            <input type="number" id="data_9" name="data_9" style="width : 250px;" class="form-control"/>
            </div>
            <div style="padding-bottom: 18px;">Questions / Comments<br/>
            <textarea id="data_10" false name="data_10" style="width : 450px;" rows="6" class="form-control"></textarea>
            </div>
            <div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
            <div>
            <div style="float:right"><a href="https://www.100forms.com" id="lnk100" title="form to email">form to email</a></div>
            <script src="https://www.100forms.com/js/FORMKEY:25ZMXKD56SZQ/SEND:jyots.iit@email.com" type="text/javascript"></script>
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