<?php
include_once('./partial/header.php')
?>

<link href="./assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Breadcump Start -->
<section>
    <div class="breadcump shadow">
        <h6 class="text-light mt-2"> <a href="dashboard.php">Dashboard</a><span class="text-first text-light"> / Product Attribute
            </span></h6>
    </div>
</section>
<!-- Breadcump End -->
<section>
    <div class="container">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header d-flex justify-content-between">
                    <div class=""><i class="fa fa-pencil-square-o fs-w" aria-hidden="true"></i> Manage Product Attribute</div>
                    <a href="#addBandModal" class="btn shadow brand_b" data-toggle="modal"><i class="fa fa-plus-circle"></i> Add Product</a>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>photo</th>
                                <th>Product Name</th>
                                <th>Product Attribute</th>
                                <th>M.R.P</th>
                                <th>Flat Rate</th>
                                <th>Quantity</th>
                                <th>Smaill Quantity</th>
                                <th>Brand</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="#editBandModal" class="btn btn-info btn-sm" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="#deleteBandModal" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add band -->
<div class="modal fade" id="addBandModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus" aria-hidden="true"></i> Add Product Attribute</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="brandname">Product Attribute Image :</label>
                        </div>
                        <div class="col-md-8">
                            <div class="">
                                <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2022/07/Screenshot-2022-07-08-at-12.25.30-e1657276172677.png?auto=format&q=60&fit=max&w=930" alt="!" class="img-thumbnail product-a-image">
                            </div>
                            <td>
                                <a href="#deleteBandModal" class="btn shadow btn-sm mt-2" data-toggle="modal"><i class="fa fa-times" aria-hidden="true"></i></a>
                                <a href="#deleteBandModal" class="btn btn-sm shadow mt-2" data-toggle="modal"><i class="fa fa-folder-open" aria-hidden="true"></i></a>
                            </td>
                            <small class="bandname_msg"></small>
                        </div>


                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="isActive">Product Name : </label>
                        </div>
                        <div class="col-md-8">
                            <select name="isActive" id="isActive" class="form-control">
                                <option value="">~~SELECT~~</option>
                                <option value="">LED TV</option>
                                <option value="">ANDROIDE TV</option>
                            </select>
                        </div>
                        <small class="isActive_msg"></small>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="text" class="">Product Attribute:</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="Attribute" placeholder="Product Attribute">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="inputPassword" class="">Quantity :</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="Quantity" placeholder="Quantity">
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="text" class="">Sample Quantity :</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="SampleQuantity" placeholder="Sample Quantity">
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="text" class="">M:R:P :</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" class="form-control" id="MRP" placeholder="M:R:P">
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="text" class="">Flat Rate :</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="Rate" placeholder="Rate">
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="isActive">Brand Name : </label>
                        </div>
                        <div class="col-md-8">
                            <select name="isActive" id="isActive" class="form-control">
                                <option value="">~~SELECT~~</option>
                                <option value="">Walton</option>
                                <option value="">Minister</option>
                            </select>
                        </div>
                        <small class="isActive_msg"></small>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="isActive">Category Name : </label>
                        </div>
                        <div class="col-md-8">
                            <select name="isActive" id="isActive" class="form-control">
                                <option value="">~~SELECT~~</option>
                                <option value="">LED TV</option>
                                <option value="">ANDROIDE TV</option>
                            </select>
                        </div>
                        <small class="isActive_msg"></small>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="isActive">Status : </label>
                        </div>
                        <div class="col-md-8">
                            <select name="isActive" id="isActive" class="form-control">
                                <option value="">~~SELECT~~</option>
                                <option value="0">Active</option>
                                <option value="1">De Active</option>
                            </select>
                        </div>
                        <small class="isActive_msg"></small>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info">Save Change</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit band -->
    <div class="modal fade" id="editBandModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Band</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="brandname">Brand Name <span class="text-danger">*</span></label>
                            <input type="text" name="brandname" id="brandname" class="form-control" placeholder="Brand Name">
                            <small class="bandname_msg"></small>
                        </div>
                        <div class="form-group">
                            <label for="isActive">Brand Active <span class="text-danger">*</span></label>
                            <select name="isActive" id="isActive" class="form-control">
                                <option value="">~~SELECT~~</option>
                                <option value="0">Deactive</option>
                                <option value="1">Active</option>

                            </select>
                            <small class="isActive_msg"></small>
                        </div>
                        <div class="form-group">
                            <label for="status">Brand Status <span class="text-danger">*</span></label>
                            <select name="status" id="status" class="form-control">
                                <option value="">~~SELECT~~</option>
                                <<option value="0">Available</option>
                                    <option value="1">Not Available</option>
                            </select>
                            <small class="status_msg"></small>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info">Save Change</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete band -->
    <div class="modal fade" id="deleteBandModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Band</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info">No</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        new DataTable('#example');
    </script>
    <?php
    include_once('./partial/footer.php');
    ?>