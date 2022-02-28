<?php include('class.php');
	$conn = new db_class();?>

<?php include('include/index_header.php');?>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Welcome <?php echo ucfirst($_SESSION['name']); ?></h2>
                           </div>
                        </div>
                     </div>
					 
					 
					 
					 
					 
					 
					 
					 
					 
                   <!--  <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <!-- <p class="total_no">2500</p> -->
                                  <!--  <p class="head_couter">Enterprise Setup</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-clock-o blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <!-- <p class="total_no">123.50</p> -->
                                 <!--   <p class="head_couter">Compliance Management</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-cloud-download green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <!-- <p class="total_no">1,805</p> -->
                                  <!--  <p class="head_couter">Profile Building & Sales</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-comments-o red_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <!-- <p class="total_no">54</p> -->
                                <!--    <p class="head_couter">Financial Managements</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>-->
                     
                     <!-- graph -->
          <!--           <div class="row column2 graph margin_bottom_30">
                        <div class="col-md-l2 col-lg-12">
                           <div class="white_shd full">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Extra Area Chart</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content">
                                          <div class="area_chart">
                                             <canvas height="120" id="canvas"></canvas>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>-->
                     <!-- end graph -->
                     <div class="row column3">
                        <!-- testimonial -->
                       <!-- <div class="col-md-4">
                           <div class="dark_bg full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Testimonial</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content testimonial">
									   
									   
									   <?php 	$users=$conn->view_testimonials();
									   
?>
                                          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                             <!-- Wrapper for carousel items -->
                                            <!-- <div class="carousel-inner">
											 <?php 
											 
											 $j=$conn->view_testimonials_count();
											 $k=0;
											   while($usersresult=mysqli_fetch_array($users))
									   { 
									   $k++;
									   ?>
                                                <div class="item carousel-item <?php  if($k==$j){?> active<?php } ?>">
                                                   <div class="img-box"><img src="images/layout_img/user-img.jfif" alt=""></div>
                                                   <p class="testimonial"><?php echo substr($usersresult['content'],0,310)."...";?></p>
                                                   <p class="overview"><b><?php  echo $usersresult['name'];?></b><?php echo $usersresult['designation']?></p>
                                                </div>
												<?php } ?>
                                               <!-- <div class="item carousel-item">
                                                   <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                   <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                                </div>
                                                <div class="item carousel-item">
                                                   <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                   <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                                </div>-->
                                            <!-- </div>
                                             <!-- Carousel controls -->
                                            <!-- <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                                             <i class="fa fa-angle-left"></i>
                                             </a>
                                             <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                                             <i class="fa fa-angle-right"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>-->
                        <!-- end testimonial -->
                        <!-- progress bar -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Progress Bar</h2>
                                 </div>
                              </div>
							  <?php $progress=$conn->view_completion();
							  
							  ?>
                              <div class="full progress_bar_inner">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="progress_bar">
									   
                                          <!-- Skill Bars -->
										<?php   while($userpro=mysqli_fetch_array($progress))
							  {
							  ?>
										  
                                          <span class="skill" style="width:<?php echo $userpro['completionrate']?>%"><?php echo $userpro['modulename']?><span class="info_valume"><?php echo $userpro['completionrate']?>%</span></span>                  
                                          <div class="progress skill-bar ">
                                             <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $userpro['completionrate']?>%;">
                                             </div>
                                          </div>
										  <?php } ?>
                                        <!--  <span class="skill" style="width:62%;">Compliance Management<span class="info_valume">62%</span></span>   
                                          <div class="progress skill-bar">
                                             <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;">
                                             </div>
                                          </div>
                                          <span class="skill" style="width:54%;">Profile Building & Sales<span class="info_valume">54%</span></span>
                                          <div class="progress skill-bar">
                                             <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                                             </div>
                                          </div>
                                          <span class="skill" style="width:82%;">
                                             Financial Managements<span class="info_valume">82%</span></span>
                                          <div class="progress skill-bar">
                                             <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%;">
                                             </div>
                                          </div>-->
                                         
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end progress bar -->
                     </div>
                    
                  </div>
				                       <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-table purple_color2"></i>
                                    
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <!-- <p class="total_no">2500</p> -->
                                    <p class="head_couter">Assessment Report</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-object-group blue2_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <!-- <p class="total_no">123.50</p> -->
                                    <p class="head_couter">Prototype</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-comments-o red_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <!-- <p class="total_no">1,805</p> -->
                                    <p class="head_couter">Success Story</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-briefcase green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <!-- <p class="total_no">54</p> -->
                                    <p class="head_couter">Investors</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- footer -->
                <!--  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                           Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                        </p>
                     </div>-->
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
<?php include('include/index_footer.php');?>