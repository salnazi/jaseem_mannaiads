<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include_once("head.php");
    ?>
</head>

<body>
    <!-- Topbar Start -->
    <?php
        //include_once("top_bar.php");
    ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php
        include_once("top_menu.php");
    ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <?php
        //include_once("top_banner_slide.php");
    ?>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <?php
        //include_once("features.php");
    ?>
    <!-- Featured End -->


    <!-- Categories Start -->
    <?php
        //include_once("category.php");
    ?>
    <!-- Categories End -->


    <!-- Shop Detail Start -->
    <?php
    $sql = mysqli_query($_Conn, "SELECT * FROM $sal_add_com WHERE rand_id='".$_REQUEST['rid']."' ");
    while($row = mysqli_fetch_object($sql))
    {
        //$cat_cat = $row->category;
        $title = $row->title;
        $phone = ($row->phone == '') ? 'Not Specified' : $row->phone;
        $email = ($row->email == '') ? 'Not Specified' : $row->email;
        $website = ($row->website == '') ? 'Not Specified' : $row->website;

        $address = ($row->address == '') ? 'Not Specified' : $row->address;
        $otherinfo = ($row->otherinfo == '') ? 'Not Specified' : $row->otherinfo;
        $tags = explode("," , $row->tags);
        foreach($tags as $nTag)
        {
            $tags = "<a href='#' style='color:var(--teal);'>".$nTag."</a>" ;
        }
    ?>

        <div class="container-fluid pb-5" >
            <div class="row px-xl-5">

                <div class="col-lg-3 mb-30"  >
                    <img class="w-100 h-100" src="img/jaf_market.png" alt="Image">
                </div>

                <div class="col-lg-6 mb-30"  style='background:white;padding:20px;'>
                    <h3 style='color:var(--orange);text-transform:uppercase;' ><?php echo $title; ?></h3>
                        <div class="d-flex mb-3">
                            <div class="text-primary mr-2" >
                                <small class="fas fa-phone" style='color:red;font-size:15px;'>  &nbsp;<span style='color:var(--teal);'> <?php echo $phone; ?> <span> </small>
                                &nbsp; &nbsp;<small class="fas fa-envelope" style='color:red;font-size:15px;'>  &nbsp; <span style='color:var(--teal);'> <?php echo $email; ?> <span> </small>
                                &nbsp; &nbsp;<small class="fas fa-globe" style='color:red;font-size:15px;'>  &nbsp; <span style='color:var(--teal);'> <?php echo $website; ?> <span> </small>
                            </div>                           
                        </div>
                        <br><h3 class="font-weight-semi-bold mb-4" style='font-size:15px;'>Address</h3>
                        <p class="mb-4">
                            <?php 
                                echo nl2br($address);
                            ?>
                        </p>
                        <h3 class="font-weight-semi-bold mb-4" style='font-size:15px;'>Additional Information</h3>
                        <p class="mb-4">
                            <?php 
                                echo nl2br($otherinfo);
                            ?>
                        </p>
                        <h3 class="font-weight-semi-bold mb-4" style='font-size:15px;'>Tags </h3>
                        <p class="mb-4">
                            <?php 
                                echo nl2br($tags);
                            ?>
                        </p>

                        <h3 class="font-weight-semi-bold mb-4" style='font-size:12px;'>Calling Code : 04367 | Pincode : 614001 </h3>
                </div>

                <div class="col-lg-3 mb-30"  >
                    <img class="w-100 h-100" src="img/right_ad.jpg" alt="Image">
                </div>
              
            </div>
        </div>
       <?php
    }
    ?>

  
    <!-- Shop Detail End -->


    <!-- Offer Start -->
    <?php
        //include_once("offer.php");
    ?>
    <!-- Offer End -->


    <!-- Products Start -->
    <?php
        //include_once("recent_projects.php");
    ?>
    <!-- Products End -->


    <!-- Vendor Start -->
    <?php
        include("bottom_scroll_ad.php");
    ?>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <?php
        include_once("footer.php");
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top" style='background:var(--teal);'><i class="fa fa-angle-double-up" ></i></a>


    <!-- JavaScript Libraries -->
    <?php
        include("footer_js.php");
    ?>
</body>

</html>