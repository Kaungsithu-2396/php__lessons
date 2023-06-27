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

                                <?php 
    
                        // echo "<pre>";
                        // print_r($_GET);
                        
                        $id=$_GET['id'];
                        $sql="SELECT * FROM web_list WHERE id=$id";
                        $query=mysqli_query($conn,$sql);
                        $data=mysqli_fetch_assoc($query);
                        // echo "<pre>";
                        // print_r($data);
                        // echo "</pre>";

                        if(isset($_GET['btnUpdate'])){
                           
                            category_update();
                            
                        };

                        ?>

                                <form action="" class="row">
                                    <div class="col-auto">
                                        <input type="hidden" name="id" value="<?php echo $data['id']  ?>">
                                        <input type="text" class="form-control" name="txt" value="<?php echo $data['message'] ?>">
                                    </div>
                                    <div class="col-auto">
                                        <button name="btnUpdate" class="btn btn-info">Update</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>

              

<!-- <h1>this is index page of    </h1> -->

<?php require_once "template/footer.php" ?>