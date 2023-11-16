<?php include "process.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

                <!-- <link rel="stylesheet"-->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <title>Register Now</title>
</head>

<body>
     <!-- Topbar Start -->
     <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>xxxxxx@xxxx.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>xxxxxx</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-success px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-success px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-success px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-success px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-success pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

 <!-- Navbar Start -->
 <div class="container-fluid position-relative nav-bar p-0" style= " z-index: 9;">
    
    <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
        <a href="" class="navbar-brand">
            <h1 class="m-0 text-success"><span class="text-dark">SÁ</span>LÒ</h1>
            <p>Bringing Nigeria To You!</p>
        </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0 dropcont">
                    <a href="index.html" class="nav-item nav-link" style="font-size:12px">Home</a>
                    <div class="nav-item dropdown" id="navdrop">                                    
                        <div class="nav-link dropdown-toggle" onclick="funcTog('navdrop')" style="font-size:12px">About</div>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="about.html" class="dropdown-item">SÁLÒ</a>
                            <a href="nigeria.html" class="dropdown-item">Nigeria </a>
                        </div>
                    </div>
                    <a href="comingSoon.html" class="nav-item nav-link" style="font-size:12px">Services</a>
                    <div class="nav-item dropdown" id="navdropCv">
                        <div class="nav-link dropdown-toggle" onclick="funcTog('navdropCv')" style="font-size:12px">Caves</div>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="/SaloTourGuide/Sites/Caves/ogbunike_caves.html" class="dropdown-item">Ogbunike Caves</a>
                            <a href="Sites/Caves/Ezeagucvs.html" class="dropdown-item">Ezeagu Cave </a>
                            <a href="Sites/Caves/iho_eleru.html" class="dropdown-item">Iho Eleru Cave</a>
                            <a href="Sites/Caves/Awhum_caves.html" class="dropdown-item"> Awhum Cave</a>
                            <a href="Sites/Caves/marshallcvs.html" class="dropdown-item">Marshall Caves</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown" id="navdropFw"><!--forest and wildlife dropown-->
                        <div class="nav-link dropdown-toggle" onclick="funcTog('navdropFw')" style="font-size:12px">Forests and<br>wildlife Reserves</div>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="Sites/Forests_and_Wildlife_Reserves/idanrehls.html" class="dropdown-item">Idanre Forest Reserves </a>
                            <a href="Sites/Forests_and_Wildlife_Reserves/lcc.html" class="dropdown-item"> Lekki conservation center</a>
                            <a href="/SaloTourGuide/comingSoon.html" class="dropdown-item">Akure Forest Reserve</a>
                            <a href="Sites/Forests_and_Wildlife_Reserves/yankari_reserve.html" class="dropdown-item">Yankari National Park</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown" id="navdropMh"><!--Mountains and Hills dropdown-->
                        <div class="nav-link dropdown-toggle" onclick="funcTog('navdropMh')" style="font-size:12px">Mountains &amp;<br>Hills</div>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="Sites/Mountains_and_hills/mambillapltx.html" class="dropdown-item">Mambilla Plateau</a>
                            <a href="Sites/Mountains_and_hills/sherehls.html" class="dropdown-item">Shere Hills </a>
                            <a href="Sites/Mountains_and_hills/idanrehls.html" class="dropdown-item">Idanre Hills</a>
                            <a href="Sites/Mountains_and_hills/zumarock.html" class="dropdown-item">Zuma Rock</a>
                            <a href="Sites/Mountains_and_hills/olumorock.html" class="dropdown-item">Olumo Rock</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown" id="navdropCh">
                        <div class="nav-link dropdown-toggle" onclick="funcTog('navdropCh')" style="font-size:12px">Cultural Heritage<br> &amp; History sites</div>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="Sites/Cultural_heritage_and_history_sites/badagryslavetradecamp.html" class="dropdown-item">Badagry slave trade camp</a>
                            <a href="Sites/Cultural_heritage_and_history_sites/buguma.html" class="dropdown-item">Buguma city </a>
                            <a href="/comingSoon.html" class="dropdown-item">Tafawa Balewa Square</a>
                            
                            
                        </div>
                    </div><div class="nav-item dropdown" id="navdropRp">
                        <div class="nav-link dropdown-toggle" onclick="funcTog('navdropRp')" style="font-size:12px">Resorts &amp;<br> parks</div>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="comingSoon.html" class="dropdown-item">Lakowe Resort</a>
                            <a href="comingSoon.html" class="dropdown-item">Tinapa </a>
                            <a href="comingSoon.html" class="dropdown-item">Obudu Cattle Ranch</a>
                            <a href="comingSoon.html" class="dropdown-item"> Whispering Palms Resort</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown" id="navdropSv">
                        <div class="nav-link dropdown-toggle" onclick="funcTog('navdropSv')" style="font-size:12px">Camp sites &amp;<br> Villages</div>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            
                            <a href="Sites/Camp_Sites_and_Villages/sukur_landscape.html" class="dropdown-item"> Sukur Landscape</a>
                            <a href="Sites/Camp_Sites_and_Villages/ilesha.html" class="dropdown-item">Ilesha, Osun State</a>
                            <a href="Sites/Camp_Sites_and_Villages/abiriba.html" class="dropdown-item">Abiriba, Abia State</a>
                            
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link active" style="font-size:12px">Contact Us</a>
                </div>
            </div>
    </nav>

</div>
<!-- Navbar End -->>
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Contact</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.html">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contact</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    

    <!-- Contact Start -->
    <div class="container py-5" id="pgchange">
            <div class="text-center mt-5 mb-1" style="align-items: center">
                <h6 class="text-success text-uppercase" style="letter-spacing: 5px;">Contact</h6>
                <h1>Contact For Any Question</h1>
            </div>

            <div class="row ">
                <div class="col-lg-9 m-auto">
                <?php if (count($errors) > 0): ?>
                <div class="alert alert-danger">
                  <?php foreach ($errors as $error): ?>
                  <li>
                    <?php echo $error; ?>
                  </li>
                  <?php endforeach;?>
                </div>
              <?php elseif(!empty($success)):?>    
              <div class="alert alert-success">
                  <li>
                    <?php echo $success; ?>
                  </li>
                </div>

              <?php endif;?>    
                  <div class="card mt-2">
                        <div class="card-title bg-success ">
                            <h4 class="text-white text-center py-3">Get In Touch!</h4>
                        </div>
                        <div class="card-body" style="background-color: #cfeaae;">

                            <form class="form-control text-white" style="background-color: #cfeaae;" action="contact.php" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <select id="title" name="title" class="form-control my-2" required>
                                            <option value="" selected>--Select Title--</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Miss.">Miss.</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Mr.">Mr.</option>
                                        </select>
                                        <!-- <input type="text" id="title" placeholder="Title" class="form-control my-2"> -->
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" id="fname" name="fname" placeholder="Firstname" class="form-control my-2" spellcheck="false" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" id="lname" name="lname" placeholder="Lastname" class="form-control my-2" spellcheck="false" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <input type="email" id="email" name="email" placeholder="Email" class="form-control mb-2" spellcheck="false" required>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <input type="text" id="plinterest" name="plinterest" onmouseup="Populate(this.value)" placeholder="--Select Places of interest--" class="form-control dropdown-toggle" spellcheck="false">
                                        <div id="pldropdown" class="dropdown-menu" style="position:absolute; width:auto; max-height:200px; overflow: scroll" name="pldropdown"></div>
                                    </div> -->
                                    <div class="col-md-6" id="select-menu" class="select-menu" >
                                        <div id="plinterest" name="plinterest" class="form-control" onclick="funcTogg()">
                                            <span class="drpText">--Select Sites of Interest--</span>
                                        </div>
                                        <div id="pldropdown" name="pldropdown"></div>
                                    </div>
                            
                                </div>
                                <div class="row mb-2 text-dark">
                                    <div class="col-md-1">
                                        <p>Size: </p>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="radio" id="s_size" name="size" value="single" required>
                                        <label for="s_size">single</label><br>
                                    </diV>
                                    <div class="col-md-1">
                                        <input type="radio" id="g_size" name="size" value="group" required>
                                        <label for="g_size">group</label><br>
                                    </div>
                                </div>
                                <div class="row mb-2 text-dark">
                                    <div class="col-md-3">
                                        <p>Do you require accomodation ?</p>                                    
                                        <input type="radio" id="p_accommodation" name="accommodation" value="yes" required>
                                        <label for="p_accommodation">yes</label><br>
                                        <input type="radio" id="n_accommodation" name="accommodation" value="no" required>
                                        <label for="n_accommodation">no</label><br>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Do you require transportation services ?</p>
                                        <input type="radio" id="p_transportation" name="transportation" value="yes" required>
                                        <label for="p_transportation">yes</label><br>
                                        <input type="radio" id="n_transportation" name="transportation" value="no" required>
                                        <label for="n_transportation">no</label><br>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Do you require specific tour activities ?</p>
                                        <input type="radio" id="p_activities" name="activities" value="yes" required>
                                        <label for="p_activities">yes</label><br>
                                        <input type="radio" id="n_activities" name="activities" value="no" required>
                                        <label for="n_activities">no</label><br>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Do you have any health complications ?</p>
                                        <input type="radio" id="p_health" name="health" value="yes" required>
                                        <label for="p_health">yes</label><br>
                                        <input type="radio" id="n_health" name="health" value="no" required>
                                        <label for="n_health">no</label><br>
                                    </div>
                                </div>
                            <textarea id="msg" placeholder="Other Information" name="msg" class="form-control mb-2 text-dark"></textarea>
                                <input type="submit" id="submit" name="submit" class="btn btn-success" value="Submit">
                            </form>
                            <span id="successMsg"></span>


                            <!-- <form>
                                <input type="text" id="user" placeholder="Fullname" class="form-control my-2">
                                <input type="text" id="email" placeholder="Email" class="form-control mb-2">
                                <input type="text" id="health" placeholder="Message" class="form-control mb-2">
                                <button type="button" id="btn" class="btn btn-success">Submit</button>
                            </form>
                            <div id="msg"></div> -->
                            <!-- <form action="process.php" method="post">
                                <input type="text" name="name" placeholder="Fullname" class="form-control my-2">
                                <input type="text" name="email" placeholder="Email" class="form-control mb-2">
                                <input type="text" name="language" placeholder="Spoken languages" class="form-control mb-2">
                                <input type="number" name="pplcnt" placeholder="Number of people" class="form-control mb-2">
                                <input type="number" name="budget" placeholder="Budget range" class="form-control mb-2">
                                <input type="text" name="activities" placeholder="Interested Activities" class="form-control mb-2">
                                <input type="text" name="health" placeholder="Health Considerations" class="form-control mb-2">
                                <button name="submit" class="btn btn-success">Submit</button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
            <div class="row pt-5">
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="" class="navbar-brand">
                        <h1 class="text-success"><span class="text-white">SÁ</span>LÒ</h1>
                        <p>Bringing Nigeria To You!</p>                        
                    </a>
                    <p>Bringing the best tourism in Nigeria to you. Explore Nigeria with us and be forever amazed by the beauty in our diversity.</p>
                    <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                    <div class="d-flex justify-content-start">
                        <a class="btn btn-outline-success btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-success btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-success btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-success btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2 link-no-underline" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                        <a class="text-white-50 mb-2 link-no-underline" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                        <a class="text-white-50 mb-2 link-no-underline" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                        <a class="text-white-50 mb-2 link-no-underline" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                        <a class="text-white-50 mb-2 link-no-underline" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                        <a class="text-white-50 mb-2 link-no-underline" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                        <a class="text-white-50 link-no-underline" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Useful Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2 link-no-underline" href="about.html"><i class="fa fa-angle-right mr-2"></i>About</a>
                        <a class="text-white-50 mb-2 link-no-underline" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                        <a class="text-white-50 mb-2 link-no-underline" href="comingSoon.html"><i class="fa fa-angle-right mr-2"></i>Services</a>
                        <a class="text-white-50 mb-2 link-no-underline" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                        <a class="text-white-50 mb-2 link-no-underline" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                        <a class="text-white-50 mb-2 link-no-underline" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        <a class="text-white-50 link-no-underline" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>XXX Street, City, Nigeria</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>XXXX XXX XXXX</p>
                    <p><i class="fa fa-envelope mr-2"></i>XXXX@XXXXXX.XXX</p>
                    <h6 class="text-white text-uppercase mt-5 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                    <div class="w-100">
                        <a style="text-decoration: none; color: white" href="contact.php">
                            <div class="input-group">
                                <!-- <input type="text" class="form-control border-light" style="padding: 10px;" placeholder="Your Email"> -->
                                    <button class="btn btn-success px-3 form-control" style="padding: 10px;"> Sign Up</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="row">
                <div class="col-lg-12 text-center text-md-center mb-3 mb-md-0">
                    <p class="m-0 text-white-50">Copyright &copy; <a href="#">SALO-2022</a>. All Rights Reserved.</a>
                    </p>
                </div>
            </div>
        </div>
    <!-- Footer End -->
    <script src="js/registerjs.js"></script>
    <script src="js/menu.js"></script>
</body>

</html>