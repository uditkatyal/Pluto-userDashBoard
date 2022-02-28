<?Php
include('class.php');
	$conn = new db_class();

 include('include/profile_header.php');?>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Profile</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>User profile</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- user profile section --> 
                                    <!-- profile image -->
                                    <div class="col-lg-12">
                                       <div class="full dis_flex center_text">
                                          <div class="profile_img"><img width="180" class="rounded-circle" src="images/layout_img/dp.jpeg" alt="#" /></div>
										  
										  
									<?php 	
									
									  $user_profile=$conn->view_userprofile($_SESSION['userid']);
									
										  ?>
										  
										  
                                          <div class="profile_contant">
                                             <div class="contact_inner">
                                                <h3><?php echo  $user_profile['name'];?></h3>
                                               <!-- <p><strong>About: </strong>UI Developer</p>-->
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : <?php echo  $user_profile['email'];?></li>
                                                   <li><i class="fa fa-phone"></i> : <?php echo  $user_profile['mobile'];?></li>
                                                </ul>
                                             </div>
                                           <!--  <div class="user_progress_bar">
                                                <div class="progress_bar">
                                                   <!-- Skill Bars -->
                                                  <!-- <span class="skill" style="width:85%;">Date of Birth </span>                   
                                                   
                                                      <p><?php echo date('d/m/Y',strtotime($user_profile['dob']))?></p>
                                                  
                                                   <span class="skill" style="width:78%;">Address </span>   
                                                   <p><?php echo $user_profile['address']?><br> PIN:<?php echo $user_profile['pincode']?>
                                                   </p>
                                                   </div>
                                                   <span class="skill" style="width:47%;">Country <span class="info_valume"></span></span>
                                                   <p><?php echo $user_profile['country_name'];?>
                                                   </p>
                                                   </div>
                                                   <span class="skill" style="width:65%;">Highest Education Qualification </span>
                                                   <div>
                                                      <p><?php echo $user_profile['education'];?>
                                                      </p>
                                                   </div>
                                                </div>-->
                                             </div>
                                          </div>
                                       </div>
                                       <!-- profile contant section -->
                                       
                                       <!-- end user profile section -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-2"></div>
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- footer -->
                    <!-- <div class="container-fluid">
                        <div class="footer">
                         <!--  <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                              Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                           </p>-->
                       <!-- </div>
                     </div>-->
                  </div>
                  <!-- end dashboard inner -->
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
<?php include('include/profile_footer.php');?>