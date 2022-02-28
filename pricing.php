     <?php include('class.php');
	$conn = new db_class();?>

<?php include('include/pricing_header.php');?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-btn {float:left;margin-bottom:10px; background-color:#AF4311; color:#FFFFFF; margin-left:100px; margin-top:-60px;width:100px; height:40px; text-align:center; padding-top:5px;}

.w3-btn1 {float:left;margin-bottom:10px; background-color:#AF4311; color:#FFFFFF; margin-left:200px; margin-top:-60px; width:100px; height:40px; text-align:center; ;padding-top:5px;}
.w3-btn2 {float:left;margin-bottom:10px; background-color:#AF4311; color:#FFFFFF; margin-left:230px; margin-top:-60px;width:100px; height:40px; text-align:center; padding-top: 5px;}

</style>
          <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
								 <?php 
								 $result=$conn->view_pricing();
								 while($result_data=mysqli_fetch_array($result))
								 {
								 echo $result_data['content'];
								 
								 }
								 
								 
								 ?><a href="#" ><div  class="w3-btn  w3-border w3-round-large">Get Quote</div></a>
								 
								 <a href="#" ><div  class="w3-btn1  w3-border w3-round-large">Get Quote</div></a>
								 
								 <a href="#" ><div  class="w3-btn2  w3-border w3-round-large">Get Quote</div></a>
                                    <!-- column price --> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- footer -->
               <!--   <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
                     </div>
                  </div>-->
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
<?php include('include/pricing_footer.php');?>