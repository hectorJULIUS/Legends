
    <?php include 'navbar.php' ;?>
    
    <?php include 'header.php' ;?>
    <head><link rel="icon" href="images/kisspng-car-the-academy-driving-school-drivers-education-driver-education-community-ed-at-pcc-5ba348bed6c0f4.6574446615374276468796.png" type="image/jpg"></head>
    <section>
        <div id="carouselExampleControls" class="carousel_slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/adrian-dascal-Ar4uu5YKLK4-unsplash.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/alex-jumper-JgEtmgOjoew-unsplash.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/eduardo-casajus-gorostiaga-qjmEuyFIoe4-unsplash.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>

   <?php include 'icons.php'; ?>

    

    <section class="marketingSection">
        <h2 class="text-center mt-5">
            <strong>This is what we offer</strong>
        </h2>
        <center>
            <div class="border"></div>
            <p class="py-3">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
            </p>
            <div class="row mt-5 marketingRow">
               <div class="col-md-4">
                  <i class="fa fas fa-hands-helping fa-3x"></i>
                  <h4 class="mt-4">
                      <strong>Brighter Future</strong>
                    </h4>
                  <div class="border"></div>
                  <p>
                      Lorem Ipsum is simply dummy text of the printing and 
                      typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                   </p>
               </div>

               <div class="col-md-4">
                   <i class="fa fas fa-people-carry fa-3x"></i>
                   <h4 class="mt-4"><strong>Qualified Teachers</strong></h4>
                   <div class="border"></div>
                   <p>
                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                       Lorem Ipsum has been the industry's standard dummy text ever
                   </p>
                </div>

                <div class="col-md-4">
                   <i class="fa fa-book fa-3x"></i>
                   <h4 class="mt-4"><strong>State-of-The-Art Facilities</strong></h4>
                   <div class="border"></div>
                   <p>
                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                       Lorem Ipsum has been the industry's standard dummy text ever
                   </p>
                </div>



            </div>
        </center>
    </section>
    <section class="container-fluid bg-grey mt-5">
        <h2 style="padding-top: 50px;" class="text-center mt-5">Our Excellence</h2>
        <center>
            <div class="border-ex"></div>
            <div class="row achievementSpotRow">
                <div class="col-md-5 mt-5">
                    <img src="images/new.jpg" class="img-fliud mb-5">
                </div>
                <div class="col-md-7">
                    <h5 class="ml-4 py-3">Ultra Pro-Driving</h5>
                    <p>
                     Frederica Academy admits students of any race, color, national origin, religion, and sex to all the rights, privileges, programs, and activities generally accorded or made available to students at the school.  It does not discriminate because of race, color, national origin, religion, sex, or any other category protected by law in the administration of its education policies, admissions policies, scholarship and loan programs, and athletic and other school-administered programs.
                     <br><br>
                     <span>
                         <strong style="color: #0c10fe;">
                             <i  class="fas fa-calendar-alt"></i>&nbsp;Awarded on:12th may 2021
                         </strong>
                     </span>
                 </p>
                   

                </div>

            </div>
        </center>
        <section class=" memberSection">
            <div class="innerSection">
                <center>
                <div class="row membersRow">
    
                    <div class="col-md-4">
                        <h4>
                            <?php 
                            include 'db_connect.php';
                                 // Getting all users from db
                                 $students = 'SELECT id from registrer';

                                 // Execting the query
                                 $query_run = mysqli_query($conn, $students);

                                 echo mysqli_num_rows($query_run);                            
                            ?>
                        </h4>
                        <div class="border"></div>
                        <h5>
                            <small>students</small>
                        </h5>
                    </div>
                    
                    <div class="col-md-4">
                      <h4><?php 
                            include 'db_connect.php';
                                 // Getting all users from db
                                 $teachers = 'SELECT id from teachers';

                                 // Execting the query
                                 $query_run = mysqli_query($conn, $teachers);

                                 echo mysqli_num_rows($query_run);                            
                            ?></h4>
                      <div class="border"></div>
                      <h5>
                          <small>Teachers</small>
                      </h5>
                  </div>
                  <div class="col-md-4">
                      <h4> <?php 
                            include 'db_connect.php';
                                 // Getting all users from db
                                 $dep = 'SELECT id from dep';

                                 // Execting the query
                                 $query_run = mysqli_query($conn, $dep);

                                 echo mysqli_num_rows($query_run);                            
                            ?></h4>
                      <div class="border"></div>
                      <h5>
                          <small>Departments</small>
                      </h5>
                  </div>
                </div>
                </center>
            </div>
    
        </section>
    
        <!--News section-->
        <section class="newsSection ">
            <center>
                <h2 class="text-center mt-5 ">Latest News</h2>
                <div class="border" style="background:  #0c10fe;
                height: 4px !important;
                width: 40px;
                height: 3px;
                margin: 10px 0px;"></div>
                <div class="row newsSectionRow mt-5">
                    <div class="col-md-4">
                        <div class="card newsCard">
                            <div class="card-header">
                                <img src="images/maxime-agnelli-6neOO6DmkiY-unsplash.jpg" height="300px" width="100%">
                            </div>
    
                            <div class="card-body">
                                <span id="newsDate">17th Jul 2021</span> &nbsp;
                                <span class="poster">By Muoka</span>
                                <hr>
                                <h5 class="py-3">
                                    <strong>Rally Camping</strong>
                                </h5>
                                <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                </p>
                            </div>
    
                        </div>
    
                    </div>
                    <!--end of column1-->
                    
                    <div class="col-md-4">
                      <div class="card newsCard">
                          <div class="card-header">
                              <img src="images/george-brynzan-x5M3IFKmdxk-unsplash.jpg" height="300px" width="100%">
                          </div>
    
                          <div class="card-body">
                              <span id="newsDate">10th Aug 2021</span> &nbsp;
                              <span class="poster">By Julius</span>
                              <hr>
                              <h5 class="py-3">
                                  <strong>Streets Benefits</strong>
                              </h5>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                              </p>
                          </div>
    
                      </div>
    
                  </div>
                  <div class="col-md-4">
                      <div class="card newsCard">
                          <div class="card-header">
                              <img src="images/nick-fewings-RgJqQPZupgM-unsplash.jpg" height="300px" width="100%">
                          </div>
    
                          <div class="card-body">
                              <span id="newsDate">26th Sept 2021</span> &nbsp;
                              <span class="poster">By Hector</span>
                              <hr>
                              <h5 class="py-3">
                                  <strong>Race Track competitions</strong>
                              </h5>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                  
                              </p>
                          </div>
    
                      </div>
    
                  </div>
                </div>
                <a href="News.php">
                  <button style="border-radius: 40px;
                  margin: 40px;
                  width: 14%;
                  padding: 10px;
                  color: #fff;
                  font-family:calibri;
                  transition: 0.5s linear;
                  background-color:  #0c10fe;" class="btn btn-lg btn-default site_btn">
                      <i class="fa fa-eye"></i> &nbsp;
                      View More
                  </button>
              </a>
            </center>
    
        </section>
    </section>

    
    <!--End of News section-->

     

    <?php include 'footer.php' ;?>
    
