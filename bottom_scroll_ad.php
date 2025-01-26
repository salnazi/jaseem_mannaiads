 <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Premium Ad</span></h2>
                <div class="owl-carousel vendor-carousel">
                    
                    <?php
                        $sql = mysqli_query($_Conn, "SELECT * FROM $sal_add_com WHERE id ORDER BY rand() LIMIT 0,12 ");
                        while($row = mysqli_fetch_object($sql))
                        {
                            $cat_cat = $row->category;
                            $randid = $row->rand_id;
                            $title = $row->title;
                            echo '<div class="bg-light p-4" style="text-align:center;"> 
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <a href="ads_details.php?rid='.$randid.'">
                                            <h6 style="color:var(--teal);">'.$title.'</h6>
                                            <img src="img/jaf_market.png" alt="'.$title.'"> 
                                        </a>  
                                  
                                    </div>                      
                                </div>';
                        }
                    ?>                   
                </div>
            </div>
        </div>
    </div>