<div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">mannai Advertising</h5>
                <!--<p class="mb-4"></p>-->
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>mannaiadvertising@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>(+91) 84283 57459</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Sitemap</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <?php
        
                                $sql = mysqli_query($_Conn, "SELECT DISTINCT * FROM $sal_main_cat limit 0,6");
                                while($row = mysqli_fetch_object($sql))
                                {
                                    
                                    $cat_cat = $row->category;
                                 
                                    echo '<a class="text-secondary mb-2" href="search_ads.php?q='.$cat_cat.'"><i class="fa fa-angle-right mr-2"></i>'.$cat_cat.'</a> ';
                                }
                            ?>
                            
                        </div>
                    </div>

                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4"></h5>
                        <div class="d-flex flex-column justify-content-start">
                            <?php
        
                                $sql = mysqli_query($_Conn, "SELECT DISTINCT * FROM $sal_main_cat limit 7,16");
                                while($row = mysqli_fetch_object($sql))
                                {
                                    
                                    $cat_cat = $row->category;

                                    echo '<a class="text-secondary mb-2" href="search_ads.php?q='.$cat_cat.'"><i class="fa fa-angle-right mr-2"></i>'.$cat_cat.'</a> ';
                                }
                            ?>
                            
                        </div>
                    </div>

                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Marketplace</h5>
                        <div class="d-flex flex-column justify-content-start">
                            
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Submit your ad</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>

                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="https://www.facebook.com/jafmarketplace/" style='background:white;'> <i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Mannai Advertising. </a>All Rights Reserved. 
                    <br><a class="text-primary" href="https://jafmarketplace.blogspot.com">Powered by JAF Marketplace</a>
                </p>
            </div>
            <!--<div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>-->
        </div>
    </div>