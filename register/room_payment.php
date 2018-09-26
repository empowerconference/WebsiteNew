<html>
  <head>
  <script>
  history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
<?php
session_start();
$net = $_SESSION["amount"];
$del = $_SESSION["type1"];

?>



  <title>Thank You !</title>
   <meta name="robots" content="noindex, nofollow" />
    
	    <!--------- include css file here ---------->
	 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../bower_components/ionicons/css/ionicons.min.css">
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/redirect_form.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
	.jumbotron h1, .jumbotron .h1 {
    font-size: 57px;
    color: steelblue;
	}
	
	.panel-title{
		text-align:left;
	}
	
	#accordion8 .panel-body{
		background: aliceblue;
    color: #000;
    font-size: 12pt;
    }
	
	#accordion8 .panel-title a:after, #accordion8 .panel-title a.collapsed:after{
		background: #337ab7!important;
}
	
	
	</style>
	    
</head>
<body>
	        
        <div class="jumbotron text-xs-center"> 
        <div class="container center-block" style="text-align:center;">
          <h1 class="display-3">Thank You !</h1>
                  
        </p>
          <p class="lead">Your Total Payable amount is <strong>INR <?php echo $net; ?></strong></p>
          <p style="font-size:10pt;">We will get back to you within 24 Hrs with the payment link. After your payment is successful your room booking will be complete.</p>
          
        <!--  
		<p>
		  <button type="button" onclick="location.href='https://www.instamojo.com/@fitt_iitd/ldca00f4bb6d640fb892441dd50dd7f06/'" id="gen_full" class="btn btn-warning center-block" style="display:none;">Make Payment</button>
		  <button type="button" onclick="location.href='https://www.instamojo.com/@fitt_iitd/lc0c2315bd7da4183b4a9929c77333a08/'" id="da_full" class="btn btn-warning center-block" style="display:none;">Make Payment</button>
		  <button type="button" onclick="location.href='https://www.instamojo.com/@fitt_iitd/ld64b379302904d079d42d8ec2d6b3600/'" id="student_full" class="btn btn-warning center-block" style="display:none;">Make Payment</button>
		  <button type="button" onclick="location.href='https://www.instamojo.com/@fitt_iitd/ld7eebfefa4f0421194da267b13578ef5/'" id="ap_full" class="btn btn-warning center-block" style="display:none;">Make Payment</button>
		  
		  <button type="button" onclick="location.href='https://www.instamojo.com/@fitt_iitd/l5e25143d42f94e2589d11aa7a9ff8486/'" id="gen_one" class="btn btn-primary center-block" style="display:none;">Make Payment</button>
		  <button type="button" onclick="location.href='https://www.instamojo.com/@fitt_iitd/l10ac970437cf456abdca6a7b88920071/'" id="da_one" class="btn btn-primary center-block" style="display:none;">Make Payment</button>
		  <button type="button" onclick="location.href='https://www.instamojo.com/@fitt_iitd/lc8bf868bf1bf49c3922f47d2c0f7cc06/'" id="student_one" class="btn btn-primary center-block" style="display:none;">Make Payment</button>
		  <button type="button" onclick="location.href='https://www.instamojo.com/@fitt_iitd/lbcf04d92ef6e4acebfea3b854e8be917/'" id="ap_one" class="btn btn-primary center-block" style="display:none;">Make Payment</button>
		  
		  <span style="color:red; font-size:10pt; margin-top:15px;"><em>You will be redirected to Payment Gateway for payment</em></span>
<script>
	var xyz = '<?php echo $net ?>';
	var abc = '<?php echo $del ?>';
	
		if (xyz == 5900){
			
			 
			document.getElementById('gen_full').setAttribute("style", "display:block");
			document.getElementById('da_full').setAttribute("style", "display:none");
			document.getElementById('student_full').setAttribute("style", "display:none");
			document.getElementById('ap_full').setAttribute("style", "display:none");
			
			document.getElementById('gen_one').setAttribute("style", "display:none");
			document.getElementById('da_one').setAttribute("style", "display:none");
			document.getElementById('student_one').setAttribute("style", "display:none");
			document.getElementById('ap_one').setAttribute("style", "display:none");
		}
		
		else if ((xyz == 3540)&&(abc == "Differently_Abled")){
			
			document.getElementById('gen_full').setAttribute("style", "display:none");
			document.getElementById('da_full').setAttribute("style", "display:block");
			document.getElementById('student_full').setAttribute("style", "display:none");
			document.getElementById('ap_full').setAttribute("style", "display:none");
			
			document.getElementById('gen_one').setAttribute("style", "display:none");
			document.getElementById('da_one').setAttribute("style", "display:none");
			document.getElementById('student_one').setAttribute("style", "display:none");
			document.getElementById('ap_one').setAttribute("style", "display:none");
		}
		
		else if ((xyz == 3540)&&(abc == "Student")){
			
			document.getElementById('gen_full').setAttribute("style", "display:none");
			document.getElementById('da_full').setAttribute("style", "display:none");
			document.getElementById('student_full').setAttribute("style", "display:block");
			document.getElementById('ap_full').setAttribute("style", "display:none");
			
			document.getElementById('gen_one').setAttribute("style", "display:none");
			document.getElementById('da_one').setAttribute("style", "display:none");
			document.getElementById('student_one').setAttribute("style", "display:none");
			document.getElementById('ap_one').setAttribute("style", "display:none");
		}
		
		else if (xyz == 1770){
			
			document.getElementById('gen_full').setAttribute("style", "display:none");
			document.getElementById('da_full').setAttribute("style", "display:none");
			document.getElementById('student_full').setAttribute("style", "display:none");
			document.getElementById('ap_full').setAttribute("style", "display:block");
			
			document.getElementById('gen_one').setAttribute("style", "display:none");
			document.getElementById('da_one').setAttribute("style", "display:none");
			document.getElementById('student_one').setAttribute("style", "display:none");
			document.getElementById('ap_one').setAttribute("style", "display:none");
		}
		
		
		
		else if (xyz == 2360){
			
			document.getElementById('gen_full').setAttribute("style", "display:none");
			document.getElementById('da_full').setAttribute("style", "display:none");
			document.getElementById('student_full').setAttribute("style", "display:none");
			document.getElementById('ap_full').setAttribute("style", "display:none");
			 
			document.getElementById('gen_one').setAttribute("style", "display:block");
			document.getElementById('da_one').setAttribute("style", "display:none");
			document.getElementById('student_one').setAttribute("style", "display:none");
			document.getElementById('ap_one').setAttribute("style", "display:none");
		}
		
		else if ((xyz == 1180)&&(abc == "Differently_Abled")){
			
			document.getElementById('gen_full').setAttribute("style", "display:none");
			document.getElementById('da_full').setAttribute("style", "display:none");
			document.getElementById('student_full').setAttribute("style", "display:none");
			document.getElementById('ap_full').setAttribute("style", "display:none");
			 
			document.getElementById('gen_one').setAttribute("style", "display:none");
			document.getElementById('da_one').setAttribute("style", "display:block");
			document.getElementById('student_one').setAttribute("style", "display:none");
			document.getElementById('ap_one').setAttribute("style", "display:none");
		}
		
		else if ((xyz == 1180)&&(abc == "Student")){
			
			document.getElementById('gen_full').setAttribute("style", "display:none");
			document.getElementById('da_full').setAttribute("style", "display:none");
			document.getElementById('student_full').setAttribute("style", "display:none");
			document.getElementById('ap_full').setAttribute("style", "display:none");
			 
			document.getElementById('gen_one').setAttribute("style", "display:none");
			document.getElementById('da_one').setAttribute("style", "display:none");
			document.getElementById('student_one').setAttribute("style", "display:block");
			document.getElementById('ap_one').setAttribute("style", "display:none");
		}
		
		else if (xyz == 590){
			
			document.getElementById('gen_full').setAttribute("style", "display:none");
			document.getElementById('da_full').setAttribute("style", "display:none");
			document.getElementById('student_full').setAttribute("style", "display:none");
			document.getElementById('ap_full').setAttribute("style", "display:none");
			 
			document.getElementById('gen_one').setAttribute("style", "display:none");
			document.getElementById('da_one').setAttribute("style", "display:none");
			document.getElementById('student_one').setAttribute("style", "display:none");
			document.getElementById('ap_one').setAttribute("style", "display:block");
		}
		
		

</script>
		</p>-->
		
		  

        </div>
        </div>
        <div class="container">
        	<p style="margin-bottom:0px;"><strong>You can also pay via NEFT/Account Transfer:</strong></p>
        	
            <div class="container mt-10" style="background:#fff;">
            <div class="col-md-12">
                
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion8" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne8">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion8" href="#collapseOne8" aria-expanded="true" aria-controls="collapseOne8">
                                           Valid only for Money Transfers from within India - Account Details
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne8">
                                    <div class="panel-body">
                                    	<p style="padding:5px; border:1px solid #F00; font-size:11pt; line-height:13pt;">
                                        <span style="color:#F00; font-weight:bold; font-size:10pt;">Instructions:</span><br>
										1. Please mention "Your Full Name: Empower 2018" as a reference when you make the payment via a/c transfer.<br>
										2. Once the payment is made, please send an e-mail at <a href="mailto:Himanshu.Garg@cse.iitd.ac.in?Subject=Payment%20Related"> 
										   Himanshu.Garg@cse.iitd.ac.in </a> mentioning the <strong>UTR Number, Amount, and Bank Name.</strong></br>
										3. The amount is inclusive of 18% GST, if you wish to claim a receipt for the same, write an E-mail to
											<a href="mailto:Himanshu.Garg@cse.iitd.ac.in?Subject=Payment%20Related"> Himanshu.Garg@cse.iitd.ac.in </a>
                                        </p>
                                        <p>
											<strong>Option 1: HDFC Bank</strong></br>											
											Beneficiary Name : FITT, IIT Delhi</br>
											Bank account no : 00321110000040</br>
											Bank address : HDFC Bank Ltd., C-5/32, Safdarjung Development Area, New Delhi-110016</br>
											Branch Bank : 0032</br>
											IFSC : HDFC0000032</br>
											Via - Swift Code : HDFCINBB</br>
											MICR Code : 110240004</br>
											Account type : Saving Account</br>
											Bank Tel. Fax : +91-11-41392100</br>
											GSTIN No. : 07AAAJF0001G1Z3
										
										
										</p>
										
										<p>
											<strong>Option 2: State Bank of India</strong></br>	
											Beneficiary Name : Foundation for Innovation and Technology Transfer</br>
											Bank Account No. : 10773571968 </br>
											Bank Address : State Bank of India, IIT Delhi, Hauz Khas, New Delhi-110016</br>
											IFSC : SBIN0001077</br>
											MICR Code : 110002156</br>
											Bank Telephone Fax : +91-11-26521719</br>
											Account Type : Saving</br>
											PAN No. : AAAJF0001G</br>
											GSTIN No. : 07AAAJF0001G1Z3
										
										</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo8">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion8" href="#collapseTwo8" aria-expanded="false" aria-controls="collapseTwo8">
                                            Valid for Money Transfers from Outside India -  Account Details
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                    <p style="padding:5px; border:1px solid #F00; font-size:11pt; line-height:13pt;">
                                        <span style="color:#F00; font-weight:bold; font-size:10pt;">Instructions:</span><br>
										1. Please mention "Your Full Name: Empower 2018" as a reference when you make the payment via a/c transfer.<br>
										2. Once the payment is made, please send an e-mail at <a href="mailto:Himanshu.Garg@cse.iitd.ac.in?Subject=Payment%20Related"> 
										   Himanshu.Garg@cse.iitd.ac.in </a> mentioning the <strong>UTR Number, Amount, and Bank Name.</strong></br>
										3. The amount is inclusive of 18% GST, if you wish to claim a receipt for the same, write an E-mail to
											<a href="mailto:Himanshu.Garg@cse.iitd.ac.in?Subject=Payment%20Related"> Himanshu.Garg@cse.iitd.ac.in </a>
                                    </p>
                                        <p>
											<strong>Option 1: State Bank of India</strong></br>
											Beneficiary Name : Foundation for Innovation and Technology Transfer</br>
											Bank Account No. : 10773572123</br>
											Bank Address : State Bank of India, IIT Delhi, Hauz Khas, New Delhi-110016
											Bank Code : 1077</br>
											Via Swift No. : SBI NIN BB 547</br>
											Bank Telephone Fax : +91-11-26521719</br>
											GSTIN No. : 07AAAJF0001G1Z3
										</p>
                                    </div>
                                </div>
                            </div>
							
							
                            
                        </div>
                    </div>
                
            </div>
        </div>
            
            
        <p>
            Having trouble? <a href="../contact.php">Contact us</a>
          </p>
          <p class="lead">
            <a class="btn btn-primary btn-sm" href="../index.php" role="button">Continue to homepage</a>
          </p>
          
        </div>

	
 
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
		
<?php include 'include/footer-2.php' ?>  