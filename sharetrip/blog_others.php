<?php
include_once "connection.php";
$sql ="SELECT * FROM blog WHERE place_categories='others' ";
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    ?>



<!--blog start-->
<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						forest
					</h2>
                    	
				</div><!--/.gallery-header-->
				<div class="packages-content">
				<?php 
						while($row = $result->fetch_assoc()) {
                ?>
					<div class="row">
                   

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="<?php echo $row['place_image']; ?>" alt="package-place">
								<div class="single-package-item-txt">
									<h3><?php echo $row["place_name"] ;?> <span class="pull-right"><?php echo $row['place_count']; ?> places </span></h3>
									<div class="packages-para">
										
										<p>
											<span>
												<i class="fa fa-angle-right"></i><?php echo $row['place_information']; ?>
											</span>
											
										 </p>
									</div><!--/.packages-para-->
									
									<div class="about-btn">
                                        
										<button  class="about-view packages-btn">
                                        <a href="<?php echo $row['place_link']; ?>" style="color:black">more details</a>

										</button>


									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						<?php } ?>
						
						
						

					</div><!--/.row-->
					
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
        
        <?php } ?>


		<!--blog end-->