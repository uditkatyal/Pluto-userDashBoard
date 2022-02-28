<?php include('class.php');
$conn = new db_class();

if(isset($_POST['update_butt']))
{
		$userid = $conn->real_escape_string(trim($_POST['userid']));		

		$mobile = $conn->real_escape_string(trim($_POST['mobile']));		
		$email = $conn->real_escape_string(trim($_POST['email']));		
		$service = $conn->real_escape_string(trim($_POST['service']));
		$website = $conn->real_escape_string(trim($_POST['website']));
		$startupname = $conn->real_escape_string(trim($_POST['startupname']));
				$address_city_state = $conn->real_escape_string(trim($_POST['address_city_state']));

		
				$result=$conn->updatedetails($userid,$mobile,$email,$service,$website,$startupname,$address_city_state);
				
				if($result==true)
{
		echo '<script>window.location= "settings.php?success=successfully login"</script>';

}

		else
		{
				echo '<script>window.location= "settings.php?error=Not Updated;"</script>';

		}



}




include('include/settings_header.php');
?>
                 <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <!-- <div class="s_left_section">
                                    <div class="setting-img"><img src="./images/layout_img/user-img.jfif" alt="">
                                        <li>
                                            <h2>Swati Mandal</h2>
                                            <p>Your Personal Account</p>
                                        </li>
                                    </div>
                                    <div class="settings_particular">
                                        <ul>
                                            <li>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <p>Profile</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                                                <p>Account</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-paint-brush" aria-hidden="true"></i>
                                                <p>Appearance</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-universal-access" aria-hidden="true"></i>
                                                <p>Accessibility</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bell" aria-hidden="true"></i>
                                                <p>Notifications</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <h5>Access</h5>
                                            <li>
                                                <i class="fa fa-paypal" aria-hidden="true"></i>
                                                <p>Billing and Plans</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <p>Emails</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-shield" aria-hidden="true"></i>
                                                <p>Password and Authentication</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-key" aria-hidden="true"></i>
                                                <p>SSH and GPS Keys</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-building" aria-hidden="true"></i>
                                                <p>Organizations</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-exclamation" aria-hidden="true"></i>
                                                <p>Moderation</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
								<form name="form1" id="form1"  method="post" action="">
								
										<?php   if(ISSET($_GET['error']))
	{
    		echo '<span  style="color:red;font-size:12px;font-weight:bold;">Not Updated</span>';

    }   if(ISSET($_GET['success']))
	{
    		echo '<span class="success" style="color:green;font-weight:bold;font-size:12px">Successfully Updated</span>';

    }
	
	
	?>

								
								
								<input type="hidden" name="userid" id="userid" value="<?php echo $_SESSION['uid'];?>"/>
								<?php $user_details=$conn->edit_user_details($_SESSION['uid']);
								$user_data=mysqli_fetch_array($user_details);
								?>
                                <div class="settings">
                                    
                                    <div class="setting_section">
                                        <h4>Public Profile</h4>
                                        <div class="s_s">
                                            <li>
                                                <h5>Contact Number (Ph. no) </h5>
                                                <input type="text" placeholder="Your Mobile" id="mobile" name="mobile" value="<?php echo $user_data['mobile'];?>" required/>
                                                <p>Your name may appear around dashboard where you contribute or are
                                                    mentioned. You can remove it at any time.</p>

                                            </li>
                                            <li>
                                                <h5>Public Email</h5>
                                                <input type="email" placeholder="Email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $user_data['email'];?>"required/>
                                                <p>You have set your email address to private. To toggle email privacy,
                                                    go to email settings and uncheck "Keep my email
                                                    address private."</p>
                                            </li>
                                            <li>
                                                <h5>Product Details</h5>
                                                <input id="about" type="text" name="service"  value="<?php echo $user_data['service'];?>  " required/>
                                            </li>
                                            <li>
                                                <h5>Website link</h5>
                                                <input type="text" placeholder="Website Link" name="website"  id="website" value="<?php echo  $user_data['website'];?>" required>
                                            </li>

                                            <li>
                                                <h5>Company Name</h5>
                                                <input type="text" placeholder="Startup Name" name="startupname" id="startupname" value="<?php echo $user_data['startupname']?>" required>
                                                <p>You can @mention your company’s / organization website to link it to your profile</p>
                                            </li>
                                            <li>
                                                <h5>Location</h5>
                                                <input type="text" placeholder="Location"  name="address_city_state" id="address_city_state" value="<?php echo $user_data['address_city_state']?>"required>
                                            </li>
                                            <li>
                                                <p>All of the fields on this page are optional and can be deleted at any
                                                    time, and by filling them out, you're giving us
                                                    consent to share this data wherever your user profile appears.
                                                    Please see our privacy statement to learn more about how
                                                    we use this information.</p>
                                            </li>
                                        </div>
                                    </div>
									
									<script>
function ClearFields() {

     document.getElementById("mobile").value = "";
	 
	      document.getElementById("email").value = "";
		  	      document.getElementById("about").value = "";
				  	      document.getElementById("website").value = "";	
						        document.getElementById("startupname").value = "";
									      document.getElementById("address_city_state").value = "";


						  



    // document.getElementById("textfield2").value = "";
}						
									
													
									</script>
                                    <div class="settings_profile">
                                        <div class="user">
                                            <div class="setting-img"><img src="./images/layout_img/user-img.jfif"
                                                    alt=""></div>
                                            <li>
                                                <h2><?php echo $_SESSION['name'];?></h2>
                                                <input  type="button" class="button" name="reset_butt"  value="Reset" onclick="ClearFields();" />
                                                <button type="submit"  class="button" name="update_butt">Save Changes</button>
                                            </li>
                                        </div>
                                    </div>
                                </div>
								</form>
								
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <!-- footer -->
               <!-- <div class="container-fluid">
                    <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                            Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                        </p>
                    </div>
                </div>-->
            </div>
            <!-- end dashboard inner -->
        </div>
    </div>
    </div>
               <!-- end topbar -->
    <!-- jQuery -->
<?php include('include/settings_footer.php');?>