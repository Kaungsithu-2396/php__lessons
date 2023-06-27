<div class="col-12  col-lg-3 col-xl-2 vh-100 sidebar ">
            <div class="d-flex align-items-center justify-content-between py-2 mt-2 nav-brand">
                <div class="d-flex  align-items-center">
                   <span class="bg-primary  rounded d-flex justify-content-center align-items-center me-2 " >
                       <i class="feather-shopping-bag text-white h4 p-2"></i>
                   </span>
                    <span class="font-weight-bold h4 mb-0 text-uppercase text-primary"> My Shop</span>
                </div>
                <div class="">
                    <button class="hide-sidebar-btn btn d-block d-lg-none  ">
                        <i class="feather-x text-dark ms-2" style="font-size: 2em"></i>
                    </button>
                </div>
            </div>
            <div class="nav-menu">
                <ul>

                    <li class="menu-item">
                        <a href="<?php echo $url  ?>/index.php" class="menu-item-link " style="text-decoration: none">
                           <span>
                               <i class="feather-home"></i>
                              Dashboard
                           </span>
                        </a>
                    </li>

                    <li class="menu-spacer"></li>

                    <li class="menu-title">
                        <span>Manage Item</span>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo $url ?>/item_add.php" class="menu-item-link" style="text-decoration: none">
                           <span>
                               <i class="feather-plus-circle"></i>
                               Add Item
                           </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo $url;?>/item_list.php" class="menu-item-link" style="text-decoration: none">
                           <span>
                               <i class="feather-list"></i>
                               Item list
                           </span>
                            <span class="badge rounded-pill bg-white text-primary p-1 ">15</span>
                        </a>
                    </li>
                    <li class="menu-spacer"></li>

                    


                    
                    <li class="menu-item">
                        <a href="<?php echo $url ?>/category_create.php" class="menu-item-link" style="text-decoration: none">
                           <span>
                               <i class="feather-plus-circle"></i>
                               Add Category
                           </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo $url;?>/category_list.php" class="menu-item-link" style="text-decoration: none">
                           <span>
                               <i class="feather-list"></i>
                               Category list
                           </span>
                            <span class="badge rounded-pill bg-white text-primary p-1 ">15</span>
                        </a>
                    </li>
                    <li class="menu-spacer"></li>

                   

                   



                </ul>
            </div>
        </div>