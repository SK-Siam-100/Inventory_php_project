<?php
include_once('./partial/header.php')
?>
<!-- Breadcump Start -->
<section>
    <div class="breadcump shadow">
        <h6 class="text-light mt-2"> <a href="dashboard.php">Dashboard</a><span class="text-first text-light"> / Order / Add Order
            </span></h6>
    </div>
</section>
<!-- Breadcump End -->
<section>
    <div class="container mt-5 mr-5 fs-w">
        <div><i class="fa fa-plus-circle fs-w" aria-hidden="true"></i> Add Order</div>
    </div>
</section>
<section>
    <div class="container">
        <div class="col-md-12 mb-4">
            <div class="card mt-4">
                <div class="card-header d-flex justify-content-between">
                    <div class=""><i class="fa fa-plus-circle fs-w" aria-hidden="true"></i> Add Order</div>
                </div>
                <div class="card-body">

                    <div class="form-group row">
                        <div class="col-md-2 align-center">
                            <label for="text" class="">Order Date :</label>
                        </div>
                        <div class="col-md-10">
                            <input type="dete" class="form-control" id="Rate" placeholder="Order Date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2 align-center">
                            <label for="text" class="">Client Name :</label>
                        </div>
                        <div class="col-md-10">
                            <input type="dete" class="form-control" id="Rate" placeholder="Client Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2 align-center">
                            <label for="text" class="">Client Contact :</label>
                        </div>
                        <div class="col-md-10">
                            <input type="dete" class="form-control" id="Rate" placeholder="Client Contact">
                        </div>
                    </div>

                    <table id="example" class="table table-striped table-bordered mt-5" style="width:100%">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Pack Size</th>
                                <th>M.R.P</th>
                                <th>Flat Rate</th>
                                <th>Available Quantity</th>
                                <th>Quantity</th>
                                <th>Sample Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div>
                                        <select name="isActive" id="isActive" class="form-group">
                                            <option value="">~SELECT~</option>
                                            <option value="">Walton</option>
                                            <option value="">Minister</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <select name="isActive" id="isActive" class="form-group">
                                            <option value="">~SELECT~</option>
                                            <option value="">Walton</option>
                                            <option value="">Minister</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <input type="number" class="form-group" id="Attribute" placeholder="" style="width: 90px;">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <input type="text" class="form-group" id="Attribute" placeholder="" style="width: 90px;">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <input type="number" class="form-group" id="Attribute" placeholder="" style="width: 90px;">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <input type="number" class="form-group" id="Attribute" placeholder="" style="width: 90px;">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <input type="number" class="form-group" id="Attribute" placeholder="" style="width: 90px;">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <input type="number" class="form-group" id="Attribute" placeholder="" style="width: 90px;">
                                    </div>
                                </td>
                                <td class="align-center">
                                    <a href="#deleteBandModal" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row mt-5">
                        <div class="col-md-6 ">

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="text" class="fs-w">Sub Amount</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" id="SubAmount" placeholder="Sub Amount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="text" class="fs-w">Total Amount</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" id="TotalAmount" placeholder="Total Amount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="text" class="fs-w">Discount</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" id="Discount" placeholder="Discount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="text" class="fs-w">Grand Total</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" id="GrandTotal" placeholder="Grand Total">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="text" class="fs-w">GST 18%</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" id="GST" placeholder="GST">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="">

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="text" class="fs-w">Paid Amount</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" id="PaidAmount" placeholder="Paid Amount">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="text" class="fs-w">Due Amount</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" id="DueAmount" placeholder="Due Amount">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="text" class="fs-w">Payment Type</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="isActive" id="isActive" class="form-control">
                                            <option value="">~~SELECT~~</option>
                                            <option value="">Cash</option>
                                            <option value="">Card</option>
                                            <option value="">Chake</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="text" class="fs-w">Payment Status</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="isActive" id="isActive" class="form-control">
                                            <option value="">~~SELECT~~</option>
                                            <option value="">Cash</option>
                                            <option value="">Card</option>
                                            <option value="">Chake</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="text" class="fs-w">Payment Please</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="isActive" id="isActive" class="form-control">
                                            <option value="">~~SELECT~~</option>
                                            <option value="">Cash</option>
                                            <option value="">Card</option>
                                            <option value="">Chake</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "mt-3 mb-4 align-center">
                        <a href="#addBandModal" class="btn shadow"><i class="fa fa-plus-circle"></i> Add Row</a>
                        <button type="button" class="btn shadow btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i> Save Change</button>
                        <button type="button" class="btn shadow btn-info" data-dismiss="modal"><i class="fa fa-exchange" aria-hidden="true"></i> Reset</button>
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
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus" aria-hidden="true"></i> Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="brandname">Category Name <span class="text-danger">*</span></label>
                        <input type="text" name="brandname" id="brandname" class="form-control" placeholder="Category Name">
                        <small class="bandname_msg"></small>
                    </div>
                    <div class="form-group">
                        <label for="isActive">Category Active <span class="text-danger">*</span></label>
                        <select name="isActive" id="isActive" class="form-control">
                            <option value="">~~SELECT~~</option>
                            <option value="0">Deactive</option>
                            <option value="1">Active</option>

                        </select>
                        <small class="isActive_msg"></small>
                    </div>
                    <div class="form-group">
                        <label for="status">Category Status <span class="text-danger">*</span></label>
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


<?php
include_once('./partial/footer.php')
?>