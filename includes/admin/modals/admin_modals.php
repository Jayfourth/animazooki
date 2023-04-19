<!-- MODALS -->
<!-- Spinner Modal -->
<div id="adminSpinner" class="spinner-border text-danger" style="display: none;"></div>

<!-- Sign out Modal -->
<div class="modal" id="signoutModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">


            <div class="modal-header">
                <h4 class="modal-title">SIGN OUT</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
                Are you sure you want to sign out?
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-info" id="yes-signout">YES</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
            </div>

        </div>
    </div>
</div>

<!-- PRODUCTS MODAL -->

<div class="modal" id="addProductModal">
    <div class="modal-dialog">
        <div class="modal-content p-4 cpborder modalbg">

            <div class="add-list-cont">
                <h3 class="txtc mb-4">Product Info</h3>

                <div class="form-outline mb-3">
                    <label for="">Product Code</label>
                    <input type="text" id="adminProdCode" class="form-control" />
                </div>

                <div class="form-outline mb-3">
                    <label for="">Product Name</label>
                    <input type="text" id="adminProdName" class="form-control" />
                </div>

                <div class="form-outline mb-3">
                    <label for="">Product Price</label>
                    <input type="number" id="adminProdPrice" class="form-control" />
                </div>

                <div class="form-outline mb-3">
                    <label for="">Product Quantity</label>
                    <input type="number" id="adminProdQty" class="form-control" />
                </div>

                <div class="form-outline mb-3">
                    <label for="">Product Description</label>
                    <textarea type="text" id="adminProdDesc" rows="10" cols="50" class="form-control pDescription"></textarea>
                </div>

                <div class="form-outline mb-2">
                    <label for="">Product Image</label>
                    <input type="file" id="adminProdImage" class="form-control" accept="image/*" />
                </div>
                <div class="flex-row d-flex justify-content-between">
                <button type="button" id="saveProduct" class="btn btn-info mb-1 mt-3">Add Product</button>
                <button type="button" class="btn btn-danger mb-1 mt-3" data-bs-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- MODIFY PRODUCT MODAL -->

<div class="modal" id="modifyModal">
    <div class="modal-dialog">
        <div class="modal-content modalbg">

            <div class="modal-header">
                <h4 class="modal-title">Modify</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <input id="indexer" style="display: none;">
                <div class="row">
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" id="productCat" name="productCat" class="form-control form-control-lg" />
                            <label class="form-label" for="productCat">Product Category</label>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" id="productName" name="productName" class="form-control form-control-lg" />
                            <label class="form-label" for="productName">Product Name</label>
                        </div>

                    </div>
                </div>


                <div class="row">

                    <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <input type="email" id="productPrice" name="productPrice" class="form-control form-control-lg" />
                            <label class="form-label" for="productPrice">Product Price</label>
                        </div>

                    </div>

                    <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <input type="email" id="productQuantity" name="productQuantity" class="form-control form-control-lg" />
                            <label class="form-label" for="productQuantity">Product Quantity</label>
                        </div>

                    </div>

                    <div class="form-outline mb-1">
                        <label for="">Product Description</label>
                        <textarea type="text" id="productDescription" rows="10" cols="50" class="form-control pDescription"></textarea>
                    </div>

                    <div class="form-outline mb-1">
                        <label for="">Replace Image</label>
                        <input type="file" id="productPhoto" class="form-control" accept="image/*" />
                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <div class="">
                    <button class="btn btn-primary" id="Modify">Modify</button>
                </div>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<div class="modal" id="confirm-delete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">


            <div class="modal-header">
                <h4 class="modal-title">DELETE</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
                Delete this product?
            </div>


            <div class="modal-footer">
                <button type="button" id="yes-delete" class="btn btn-info">YES</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
            </div>

        </div>
    </div>
</div>


<!-- CUSTOMER MODAL -->

<!-- CUSTOMER ACTIVATE -->
<div class="modal" id="confirm-cusAct">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">


            <div class="modal-header">
                <h4 class="modal-title">ACTIVATE</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
                Activate this user?
            </div>


            <div class="modal-footer">
                <button type="button" id="yes-activate" class="btn btn-info">YES</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
            </div>

        </div>
    </div>
</div>

<!-- CUSTOMER DEACTIVATE -->
<div class="modal" id="confirm-cusDeact">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">


            <div class="modal-header">
                <h4 class="modal-title">DEACTIVATE</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
                Deactivate this user?
            </div>


            <div class="modal-footer">
                <button type="button" id="yes-deactivate" class="btn btn-info">YES</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
            </div>

        </div>
    </div>
</div>

<!-- ADMIN USERS MODAL -->

<!-- ADMIN USER ACTIVATE -->
<div class="modal" id="confirm-admAct">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">


            <div class="modal-header">
                <h4 class="modal-title">ACTIVATE</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
                Activate this admin user?
            </div>


            <div class="modal-footer">
                <button type="button" id="yes-admActivate" class="btn btn-info">YES</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
            </div>

        </div>
    </div>
</div>

<!-- ADMIN USER DEACTIVATE -->
<div class="modal" id="confirm-admDeact">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">


            <div class="modal-header">
                <h4 class="modal-title">DEACTIVATE</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
                Deactivate this admin user?
            </div>


            <div class="modal-footer">
                <button type="button" id="yes-admDeactivate" class="btn btn-info">YES</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
            </div>

        </div>
    </div>
</div>

<!-- ADD ADMIN USER -->
<div class="modal" id="addAdminModal">
    <div class="modal-dialog">
        <div class="modal-content p-4 border-0 modalbg">

            <div class="add-list-cont">
                <h3 class="txtc mb-4">Admin User Info</h3>

                <div class="form-outline mb-3 w-75 ms-5">
                    <label for="">First Name</label>
                    <input type="text" id="admRegFirstName" class="form-control" />
                </div>

                <div class="form-outline mb-3 w-75 ms-5">
                    <label for="">Last Name</label>
                    <input type="text" id="admRegLastName" class="form-control" />
                </div>

                <div class="form-outline mb-3 w-75 ms-5">
                    <label for="">Username</label>
                    <input type="text" id="admRegUserame" class="form-control" />
                </div>

                <div class="form-outline mb-3 w-75 ms-5">
                    <label for="">Email</label>
                    <input type="text" id="admRegEmail" class="form-control" />
                </div>
                <div class="flex-row d-flex justify-content-between">
                <button type="button" id="btn-addAdmin" class="btn btn-info mb-1 mt-3">Add Admin</button>
                <button type="button" class="btn btn-danger mb-1 mt-3" data-bs-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ACCESS MODAL -->

<div class="modal" id="confirm-access">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">


            <div class="modal-header">
                <h4 class="modal-title">CHANGE ACCESS</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
                WARNING! You are about to change the access level of this admin user.
                <br>
                <br>
                Are you sure of this change?
            </div>


            <div class="modal-footer">
                <button type="button" id="yes-access" class="btn btn-info">YES</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
            </div>

        </div>
    </div>
</div>

<!-- CHANGE PASSWORD MODAL -->

<div class="modal" id="admChangePassModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">


            <div class="modal-header">
                <h4 class="modal-title">CHANGE PASSWORD</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
                WARNING! You are about to change the password of this admin user.
                <br>
                <br>
                Are you sure of this change?
            </div>


            <div class="modal-footer">
                <button type="button" id="yes-changePass" class="btn btn-info">YES</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
            </div>

        </div>
    </div>
</div>