
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
									<th>Booking Date</th>
									<th>Name</th>		
									<th>Gender</th>	
									<th>Contact</th>
									<th>Email</th>
									<th>Address</th>
									<th>Affiliation</th>
									<th>Occupancy Type</th>
									<th>Check-in Date</th>
									<th>Check-out Date</th>
                                    <th>Number of Days</th>
                                    <th>Amount</th>
									<th>Questions/Comments</th>


								</tr>
							</thead>
							<?php 
							$db = mysqli_connect("localhost","assistech","64d0991d","assistech");
							$sql = "SELECT * FROM  room_booking ORDER BY ID DESC";
							$res= mysqli_query($db, $sql);
							if (mysqli_num_rows($res) > 0) {
								while($result = mysqli_fetch_assoc($res)) {
							?>
							<tbody>
								<tr class="odd gradeX" >
 
									<td>
										<?php echo $result["booking_date"];?>
									</td>
                                    <td>
										<?php echo $result["name"];?>
									</td>
									
									<td>
										<?php echo $result["gender"];?>
									</td>
									
									<td>
										<?php echo $result["contact"];?>
									</td>
									
									<td>
										<?php echo $result["email"];?>
									</td>
									
									<td>
										<?php echo $result["address"];?>
									</td>

									<td>
										<?php echo $result["affiliation"];?>
									</td>
									<td>
										<?php echo $result["type"];?>
									</td>
									<td>
										<?php echo $result["checkin"];?> Oct 2018
									</td>
									<td>
										<?php echo $result["checkout"];?> Oct 2018
									</td>
                                    <td>
										<?php echo $result["days"];?>
									</td>
                                    
                                    
                                    <td>
										<?php echo $result["amount"];?>
									</td>
                                    <td>
										<?php echo $result["questions"];?>
									</td>
								</tr> 
							</tbody>
							<?php

							} 

							} 

							?>
						</table>
                    
                    
    </section>

    

   

<?php include 'assets/includes/footer.php' ?>   