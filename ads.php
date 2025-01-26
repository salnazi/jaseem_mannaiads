<div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent Listing</span></h2>
        <div class="row px-xl-5">
        <?php
        
            $sql = mysqli_query($_Conn, "SELECT * FROM $sal_add_com WHERE id ORDER BY rand() LIMIT 0,18 ");
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