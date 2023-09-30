<?php
include_once('./partial/header.php')
?>

<link href="./assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Breadcump Start -->
<section>
    <div class="breadcump shadow">
        <h6 class="text-light mt-2"> <a href="dashboard.php">Dashboard</a><span class="text-first text-light"> / Brand
            </span></h6>
    </div>
</section>
<!-- Breadcump End -->
<section>
    <div class="container">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header d-flex justify-content-between">
                    <div class=""><i class="fa fa-pencil-square-o fs-w" aria-hidden="true"></i> Manage Brand</div>
                </div>
                <div class="card-body">
                <div class="form-group row">
                        <div class="col-md-2">
                            <label for="inputPassword" class="">Start Date :</label>
                        </div>
                        <div class="col-md-10">
                            <input type="date" class="form-control" id="Quantity">
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="inputPassword" class="">End Date :</label>
                        </div>
                        <div class="col-md-10">
                            <input type="date" class="form-control" id="Quantity" placeholder="Quantity">
                          <div class = "mt-2">
                        <button type="button" class="btn shadow btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i> Save Change</button>
                        </div>
                        </div>
                    </div>
                    
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
                <h5 class="modal-title" id="exampleModalLabel">Add Band</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="brandname">Brand Name <span class="text-danger">*</span></label>
                        <input type="text" name="brandname" id="brandname" class="form-control"
                            placeholder="Brand Name">
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
                        <label for="brandname"><i class="fa fa-plus" aria-hidden="true"></i> Brand Name <span class="text-danger">*</span></label>
                        <input type="text" name="brandname" id="brandname" class="form-control"
                            placeholder="Brand Name">
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
<?php
include_once('./partial/footer.php');
?>