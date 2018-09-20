
<?php include 'assets/includes/header2.php' ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrations</li>
  </ol>
</nav>	

<style>

table{
	width:100%;
	padding:5px;
	margin:5px 0;
}

table tr td{
	padding:5px;
	word-wrap: break-word;	
	max-width:100px; 
	font-size:9pt;

}

table tr th{
	padding:5px;
	font-size:12pt;
	text-align:center;
	font-size:9pt;
}



</style>

<a class="anchor" id="about"></a>
    <section class="section about" style="margin:20px 30px;">
       
                
	
                    <h3 class="section-title">Registration Details</h3>
                    
                    	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Time</th>
									<th>Name</th>			
									<th>Email</th>
									<th>Contact</th>
									<th>Address</th>
									<th>Affiliation</th>
									<th>Assistance</th>
									<th>Date of Registration</th>
                                    <th>Delegate Type</th>
                                    <th>Reference Id<span style="color:#F00; font-size:12pt;">*</span></th>
                                    <th>Registration Type</th>
                                    <th>Amount</th>
									<th>Payment Status</th>


								</tr>
							</thead>
							<?php 
							$db = mysqli_connect("localhost","assistech","64d0991d","assistech");
							$sql = "SELECT * FROM  conference ORDER BY ID DESC";
							$res= mysqli_query($db, $sql);
							if (mysqli_num_rows($res) > 0) {
								while($result = mysqli_fetch_assoc($res)) {
							?>
							<tbody>
								<tr class="odd gradeX" >
 
									<td>
										<?php echo $result["Time"];?>
									</td>
                                    <td>
										<?php echo $result["name"];?>
									</td>

									<td>
										<?php echo $result["email"];?>
									</td>
									<td>
										<?php echo $result["contact"];?>
									</td>
									<td>
										<?php echo $result["address"];?>
									</td>

									<td>
										<?php echo $result["affiliation"];?>
									</td>
									<td>
										<?php echo $result["assistance"];?>
									</td>
									<td>
										<?php echo $result["date"];?>
									</td>
									<td>
										<?php echo $result["type1"];?>
									</td>
                                    <td>
										<?php echo $result["reference"];?>
									</td>
                                    
                                    
                                    <td>
										<?php echo $result["type2"];?>
									</td>
                                    <td>
										<?php echo $result["amount"];?>
									</td>
									
									<td>
										<?php echo $result["paymentstatus"];?>
									</td>
								</tr> 
							</tbody>
							<?php

							} 

							} 

							?>
						</table>
                    
                    <span style= "color:#F00; font-size:10pt; line-height:7pt; text-decoration:italics;">
					*Applicable for Complimentary Registrations for Exhibits</span>
                    
                                        
        
        
    </section>

    

   

<?php include 'assets/includes/footer.php' ?>   