<?php require_once "template/header.php"; ?>

<link rel="stylesheet" href="<?php echo $url  ?>/assets/vendor/data_table/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?php echo $url  ?>/assets/vendor/data_table/dataTables.bootstrap5.min.css">

<div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white p-2 mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo $url  ?>/index.php" class="text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo $url ?>/item_add.php" class="text-decoration-none">Item</a></li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-12 ">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="mb-0">
                                            <i class="feather-list text-primary"></i> Item List
                                        </h4>
                                       <div class="">
                                           <a href="#" class="btn btn-outline-primary full-screen-btn">
                                               <i class="feather-maximize-2 btn-outline-secondary"></i>
                                           </a>
                                           <a href="<?php echo $url  ?>/item_add.php" class="btn btn-outline-primary">
                                               <i class="feather-plus-circle"></i>
                                           </a>
                                       </div>
                                    </div>
                                    <hr>
                                    <h1 class="text-center">Full-Page Card</h1>

                                    <table id="list" class="display table table-striped table-hover" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category_Name</th>
                                            <th>Control</th>
                                            <th>Created_at</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                                <?php 
                                                        $sql="SELECT * FROM web_list ORDER BY created_at DESC";
                                                        $fecthMessage= mysqli_query($conn,$sql);
                                                        $total_row=mysqli_num_rows($fecthMessage);
                                                
                                                        while($data=mysqli_fetch_assoc($fecthMessage)){

                                                           
                                                            $d=strtotime($data['created_at']);
                                                            $date=date('h:i',$d);
                                                           //  print_r( $data['id'] ." -"  . $data['message'] ." -" . $date ) ;
                                                ?>
                                                    <tr>
                                                        <td><?php echo $data['id'] ?></td>
                                                        <td><?php echo $data['message'] ?></td>
                                                        <td>
                                                            <a href=category_update.php?id=<?php echo $data['id'] ?> class="btn btn-warning" name='UpdateBtn'>Update</a>
                                                            <a href=category_delete.php?id=<?php echo $data['id'] ?> class="btn btn-danger" name='DeleteBtn'>Delete</a>
                                                        </td>
                                                        
                                                        <td><?php echo $date ?></td>
                                                    </tr>    
                                                <?php       

                                                         
                                                           }
                                                ?>
                                        </tbody>
                                       
                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
<?php require_once"template/footer.php" ?>
<script src="<?php echo $url   ?>/assets/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="<?php echo $url   ?>/assets/vendor/data_table/dataTables.bootstrap5.min.js"></script>

<script>
     $(document).ready(function() {
        $('#list').DataTable();
    } );
</script>