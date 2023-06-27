<?php require_once"template/header.php"  ?>
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-white p-2 mb-4">
                                <li class="breadcrumb-item"><a href="<?php echo $url ?>/index.php" class="text-decoration-none">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href=" <?php echo $url  ?>/item_list.php" class="text-decoration-none">Item_list</a> </li>
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
                                        <i class="feather-plus-circle text-primary"></i> Add Item
                                    </h4>
                                    <a href="item_list.html" class="btn btn-outline-primary">
                                        <i class="feather-list"></i>
                                    </a>
                                </div>
                                <hr>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-12 col-md-6 ">
                                            <div class="form-group mb-3">
                                                <label for="photo">Photo Upload
                                                </label>
                                                <i class="feather-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Available only jpg & png"></i>

                                                <input type="file" name="photo" id="photo" required class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Name" >Item Name</label>
                                                <input type="text" id="Name" name="Name" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="t">Type</label>
                                                <select name="type" id="t" class="form-control dropdown-toggle">
                                                    <option value="0">Mote</option>
                                                    <option value="1">Tha yay sar</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="c">Categoary</label>
                                                <select name="type" id="c" class="form-control ">
                                                    <option value="" selected disabled>Select Categoary</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="sc">Sub Categoary</label>
                                                <select name="type" id="sc" class="form-control ">
                                                    <option value="" selected disabled>Select Sub-Categoary</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="row">
                                                <div class="col-6 mb-3 ">
                                                    <label for="iq">Item Quantity</label>
                                                    <input type="text" id="iq" name="iq" class="form-control">
                                                </div>
                                               <div class="col-6">
                                                   <div class="form-group mb-3">
                                                       <label for="type">Unit</label>
                                                       <select name="type" id="type" class="form-control dropdown-toggle">
                                                           <option value="0">Pork stick</option>
                                                           <option value="1">donut</option>
                                                       </select>
                                                   </div>
                                               </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Name" >price</label>
                                                <input type="number" id="price" name="price" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="des" >Description</label>
                                                <textarea type="number" id="des" name="des" rows="8" class="form-control"></textarea>
                                            </div>

                                        </div>
                                        <hr>
                                        <button class="btn btn-primary">Add Item</button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
<?php require_once"template/footer.php" ?>