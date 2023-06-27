<?php require_once "template/header.php"; ?>


<div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-white p-2 mb-4">
                                <li class="breadcrumb-item"><a href="<?php echo $url ?>/index.php" class="text-decoration-none">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href=" <?php echo $url  ?>/category_list.php" class="text-decoration-none">Category_list</a> </li>
                                <li class="breadcrumb-item active" aria-current="page"><a href=" <?php echo $url  ?>/category_add.php" class="text-decoration-none">Category_add</a> </li>

                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="mb-0">
                                        <i class="feather-plus-circle text-primary"></i> Add Category
                                    </h4>
                                    <a href="item_list.html" class="btn btn-outline-primary">
                                        <i class="feather-list"></i>
                                    </a>
                                </div>
                                <hr>
                                <form action="" class="row">
                                    <div class="col-auto">
                                        <input type="text" class="form-control"  name="name" required>
                                    </div>
                                    <div class="col-auto">
                                        <button name="addBtn" class="btn btn-primary">Click</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>

                <?php 
    
                    if(isset($_GET['addBtn'])){
                        category_add();
                    }

                ?>


<!-- <h1>this is index page of    </h1> -->

<?php require_once "template/footer.php" ?>