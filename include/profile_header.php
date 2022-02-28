<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Incutopia.com User Dashboard</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="style2.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page profile_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.php"><img class="logo_icon img-responsive" src="images/logo/logo.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/dp.jpeg" alt="#" /></div>
                        <div class="user_info">
                           <h6><?php echo $_SESSION['name'];?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  
                  <ul class="list-unstyled components">
<li class="active">
                       <a href="index.php">&nbsp;<i class="fa fa-envelope orange_color"></i>&nbsp;<span>Dashboard</span></a>
                     </li>
					 
					                      <li><a  href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">&nbsp;<i class="fa fa-clock-o orange_color"></i>&nbsp;<span>Enterprise Setup</span></a>
					 
					 
					                         <ul class="collapse list-unstyled" id="element">
                           <li><a href="#">&nbsp;>&nbsp;<span>Bussiness Model</span></a></li>
                           <li><a href="#">&nbsp;>&nbsp;<span>Detailed Project report</span></a></li>
                           <li><a href="#">&nbsp;>&nbsp;<span>Investors Pitch</span></a></li>
                           <li><a href="#">&nbsp;>&nbsp;<span>StartupIndiaRecognition</span></a></li>
                           <li><a href="#">&nbsp;>&nbsp;<span>Investor pool linkage</span></a></li>   </ul>

					 
					 
					 </li>
                     <li>
                        <a href="#element1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">&nbsp;<i class="fa fa-book orange_color"></i>&nbsp;<span>Compliance Management</span></a>
                        <ul class="collapse list-unstyled" id="element1">
                           <li><a href="#">&nbsp;>&nbsp;<span>Company Formation</span></a></li>
                           <li><a href="#">&nbsp;>&nbsp;<span>Tax Registration</span></a></li>
                           <li><a href="#">&nbsp;>&nbsp;<span>Tax Management</span></a></li>
                           <li><a href="#">&nbsp;>&nbsp;<span>Compliance Management</span></a></li>
                        </ul>
                     </li>
                     <li><a href="#element2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">&nbsp;<i class="fa fa-envelope orange_color"></i>&nbsp;<span> Profile Building & Sales</span></a>
					 
					 
					                         <ul class="collapse list-unstyled" id="element2">
                           <li><a href="#">&nbsp;>&nbsp;<span>Profile building </span></a></li>
                           <li><a href="#">&nbsp;>&nbsp;<span>SalesLeadGeneration</span></a></li>
						                              <li><a href="pricing.php">&nbsp;>&nbsp;<span>Pricing Plans</span></a></li>
													  
						                              <li><a href="#">&nbsp;>&nbsp;<span>Invoices</span></a></li>

						   
						   
                        </ul>

					 
					 
					 
					 
					 </li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">&nbsp;<i class="fa fa-money orange_color"></i>&nbsp;<span>Financial Management</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="#">&nbsp;>&nbsp;<span>Bank Linkage</span></a></li>
                           <li><a href="#">&nbsp;>&nbsp;<span>Investor Linkage</span></a></li>
                           <li><a href="#">&nbsp;>&nbsp;<span>Subsidy / Grant Linkage</span></a></li>
                        </ul>
                     </li>
                    
                    
                     <!-- <li><a href="settings.php"><i class="fa fa-cog yellow_color"></i> <span>settings</span> </a></li>-->
					 
					 
                  </ul>
				  
				  
				  
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
			
			            <div class="popup" id="popup" style="display:none;">
               <input type="button" name="Close" class="s3-btn-close" onClick="popupClose();" value="&times">
               <div class="faq_section">
                  <h2>Frequently Asked Questions for Log in Issues :</h2>
                  <ul>
                     <li>
                        <h4>I had an account on <a href="https://incutopia.com/">https://incutopia.com/</a> but I am unable to
                           log in now</h4>
                        <p>The quickest way to resolve this is by select the forgot password option. <a href="#">Click</a> here
                           to reset your
                           password and continue
                           with your Incutopia journey</p>
                     </li>
                     <li>
                        <h4>I made an account previously, but I do not remember my email ID and password:</h4>
                        <p>Please create a new account OR email us at support@incutopia.com and share your Company Name with us
                           so that we can help
                           you to access your old account.</p>
                     </li>
                  </ul>
               </div>
            </div>

			
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.php"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 
                                 <li><a href="#" onClick="popupOpen()"><i class="fa fa-question-circle"></i></a></li>
                                
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/dp.jpeg" alt="#" /><span class="name_user"><?php echo $_SESSION['name'];?></span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.php">My Profile</a>
                                       <a class="dropdown-item" href="settings.php">Settings</a>
                                       <a class="dropdown-item" href="help.php">Help</a>
                                       <a class="dropdown-item" href="logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
