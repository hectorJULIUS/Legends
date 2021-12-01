<?php include 'navbar.php' ;?>
<?php include 'header.php' ;?>
<?php include 'icons.php'; ?>

 <!--register section-->
 <section class="contactSpot bg-white">
            <h2 class="text-center mt-5">
                <strong>
                    Login to your account
                </strong>
            </h2>
            <center><div class="border"></div></center>
            <br>
            <br>
            <center>
                <div class="row contactSpotRow">
                    <!---column one-->
                    <div class="col-md-8 mb-5">
                        <div class="card formItem">
                            <div class="card-body text-left">
                                <form method="POST" action="#">
                                    <div class="row">
                   
                                         <!--column two-->
                                         <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="bassic-addon1">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                </div>
                                                <input type="email" name="emailadress" class="form-control inputFields" autofocus="" placeholder="Email Adress">
                                            </div> 
                                    </div>
                                         <!--end of column two-->
                                       
                                         <!--column four-->
                                         <div class="col-md-12">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="bassic-addon1">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="password" name="password" class="form-control inputFields" autofocus="" placeholder="password">
                                            </div> 
                                      </div>
                                         <!--end of column four-->
                                        
                                    </div>
                                    <button type="submit" class="btn btn-default btn-lg form-btn">
                                        <i class="fas fa-paper-plane"></i>&nbsp; Login
                                    </button>
                                </form>
                            </div>
                        </div> 
                    </div>
                    <!--end of column one-->
                    <!--column two-->
                    <div class="col-md-4 mb-5">
                         <div class="card bg-light contactItem">
                               <div class="card-body">
                                   <h4 class="text-left">Contact Details</h4>
                                   <hr>
                                   <!--first row-->
                                   <div class="row">
                                       <div class="col-md-4">
                                            <i class="fas fa-home fa-2x mt-2"></i>
                                       </div>
                                       <div class="col-md-8">
                                               <p>
                                                   Lengends, School
                                                   <br>
                                                   <small>Adress 585858</small>
                                               </p>
                                       </div>
                                   </div>
                                   <!--end of first row-->
                                   <!--second row-->
                                   <div class="row">
                                    <div class="col-md-4">
                                         <i class="fa fa-phone-alt fa-2x mt-2"></i>
                                    </div>
                                    <div class="col-md-8">
                                            <p>
                                                +2547166565513
                                                <br>
                                                <small>Mon to Fri 8.00am-6.00pm</small>
                                            </p>
                                    </div>
                                </div>
                                   <!--end of second row-->
                                   <!--row three-->
                                   <div class="row">
                                    <div class="col-md-4">
                                         <i class="fas fa-envelope fa-2x mt-2"></i>
                                    </div>
                                    <div class="col-md-8">
                                            <p>
                                                www.LegendsDrivingSchool.edu
                                                <br>
                                                <small>Always there to help</small>
                                            </p>
                                    </div>
                                </div>
                                   <!--end of row three-->
                               </div>
                         </div>
                    </div>
                    <!--end of column two-->
                </div>
            </center>

        </section>
         <!--end of register section-->

<?php include 'footer.php' ;?>