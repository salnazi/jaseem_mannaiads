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
        include_once("top_bar.php");
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


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent Listing</span></h2>
        <div class="row px-xl-5">
            <?php
                //$q = '%'.$_REQUEST['q'].'%';

                $q = $_REQUEST['q'].'%';
                $column = ($_REQUEST['q'] == '') ? 'title' : 'category';
                
                //echo "SELECT * FROM $sal_add_com WHERE title LIKE '".$q."' OR category LIKE '".$q."'  ";

                $sql = mysqli_query($_Conn, "SELECT * FROM $sal_add_com WHERE title LIKE '".$q."' OR category LIKE '".$q."'  ");
                while($row = mysqli_fetch_object($sql))
                {
                    $cat_cat = $row->category;
                    $title = $row->title;
                    $randid = $row->rand_id;
                    $img_url = ($row->img_url == '') ? 'jaf_market.png' : 'ads/'.$row->img_url;


                    echo '<div class="col-lg-2 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4" style="width:250px;">
                            <div class="product-img position-relative overflow-hidden">
                                <a href="ads_details.php?rid='.$randid.'"> <img class="img-fluid w-100" src="img/'.$img_url.'" alt="'.$title.'" style="height:200px;"></a>
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="ads_details.php?rid='.$randid.'"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="search_ads.php?q='.$cat_cat.'" style="color:var(--orange);font-size:13px;" >'.$cat_cat.'</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h6 ><a href="ads_details.php?rid='.$randid.'" style="color:var(--teal);">'.$title.'</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            ?>
          

        </div>
    </div>
    <!-- Products End -->


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
