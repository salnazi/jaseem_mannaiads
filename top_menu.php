<div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <!--<div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>-->
                        <div class="nav-item dropdown dropright">
                            <?php
                                $sql = mysqli_query($_Conn, "SELECT category FROM $sal_main_cat WHERE id ");
            
                                while($row = mysqli_fetch_object($sql))
                                {
                                    echo '<a href="search_ads.php?q='.$row->category.'" class="nav-item nav-link">'.$row->category.'</a>';
                                }
                            ?>
                        </div>                       
                    </div>
                </nav>
            </div>

            <div class="col-lg-6" >
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <img src="img/logo.png" style='background:var(--teal);'>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light" style='background-color:var(--orange);color:var(--white);font-weight:bold;padding:12px;'>Submit your Ad</button>
                    </div> 
                </a>
                
                <form action="search_ads.php" method='POST'>
                    <div class="input-group" style='margin-top:2px;' >
                        <input type="text" name='q' class="form-control" placeholder="Search by category or keywords" style='height:48px;margin-top:7px;'>
                       
                            <span class="input-group-text bg-transparent text-primary" style='border:none;'>
                                <input type='submit' value='Search' class='form-control' style='background:var(--orange);color:white;height:49px;font-weight:bold;'>
                            </span>
                       
                    </div>
                </form>
                           
            </div>

             <div class="col-lg-3" >
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
             
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block" style='margin-top:10px;'>
                            <div class="nav-item dropdown">
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light" style='background-color:var(--orange);color:var(--white);font-weight:bold;padding:12px;'>Submit your Ad</button>
                            </div> 
                            
                        </div>    
                    </div>
                </nav>
            </div>

        </div>
    </div>