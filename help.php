<?php include('class.php');
	$conn = new db_class();?>

<?php include('include/help_header.php');?>               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2 >Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     
                     
                     <!-- graph -->
                     <div class="row column2 graph margin_bottom_30">
                        <div class="col-md-l1 col-lg-11">
                           <div class="white_shd full">
                            
                                 <div class="heading1 margin_0">
                                    <div>

                                   
                                     <div class="help-head"><br><br>
                                        
                                            <img src="images/logo/logo.png" height="40px" width="40px">
                                        <br><br>
                                        <div class="help_line">
                                          <p>How can we help you?</p>
                                        </div>
                                        
                                        <br>
                                      <input type="text" placeholder="Describe your issue"><br>
                                     </div>
                                   
                                 </div>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>
                     <!-- end graph -->
                    
                        <!-- end progress bar -->
                     </div>
                     
                  <!-- footer -->
              
                  <br>
                   
                  <div class="product-card">
                     <div class="badge">Reach to us</div>
                     <div class="product-tumb">
                        <img src="images/logo/logo.png" alt="">
                     </div>
                     <div class="product-details">
                        <span class="product-catagory">Contact us</span>
                        <h4><a href="#">Our contact Details</a></h4>
						
						<?php $result=$conn->view_contact();
						
						while($result_data=mysqli_fetch_array($result))
						{?>
                        <p>Email id: <?php echo $result_data['email'];?>
                           <br>
                           phone number: <?php echo $result_data['phone'];?>
                        </p>
						<?php } ?>
                        <div class="product-bottom-details">
                           <div class="product-price"><a href="https://www.incutopia.com" style="color:#FBB747">Our website</a></div>
                           
                        </div>
                     </div>
                  </div>
                 
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
<?php include('include/help_footer.php');?>