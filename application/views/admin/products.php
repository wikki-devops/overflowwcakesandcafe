<div class="container">
    <div class="row">
        <div class="col-xl-6 col-xxl-6 col-sm-6">
            <div class="card overflow-hidden">
                <div class="social-graph-wrapper widget-facebook">
                    <span class="s-icon">Total Active Products (<?php echo $count4; ?>)</span>
                </div>
                <div class="row">
                    <div class="col-4 border-end">
                        <div class="pt-3 pb-3 ps-0 pe-0 text-center">
                            <h4 class="m-1"><span class="counter"><?php echo $count1; ?></h4>
                            <p class="m-0">Cakes</p>
                        </div>
                    </div>
                    <div class="col-4 border-end">
                        <div class="pt-3 pb-3 ps-0 pe-0 text-center">
                            <h4 class="m-1"><span class="counter"><?php echo $count2; ?></h4>
                            <p class="m-0">Bakery</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="pt-3 pb-3 ps-0 pe-0 text-center">
                            <h4 class="m-1"><span class="counter"><?php echo $count3; ?></h4>
                            <p class="m-0">Cafe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-6 col-sm-6">
            <div class="card overflow-hidden">
                <div class="social-graph-wrapper widget-facebook">
                    <span class="s-icon">Total In-Active Products (<?php echo $count8; ?>)</span>
                </div>
                <div class="row">
                    <div class="col-4 border-end">
                        <div class="pt-3 pb-3 ps-0 pe-0 text-center">
                            <h4 class="m-1"><span class="counter"><?php echo $count5; ?></h4>
                            <p class="m-0">Cakes</p>
                        </div>
                    </div>
                    <div class="col-4 border-end">
                        <div class="pt-3 pb-3 ps-0 pe-0 text-center">
                            <h4 class="m-1"><span class="counter"><?php echo $count6; ?></h4>
                            <p class="m-0">Bakery</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="pt-3 pb-3 ps-0 pe-0 text-center">
                            <h4 class="m-1"><span class="counter"><?php echo $count7; ?></h4>
                            <p class="m-0">Cafe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap">
                <div class="input-group search-area2" style="border: none">
                    <h3>Menu</h3>
                </div>
                <button type="button" class="btn btn-primary mt-3 mt-sm-0" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Add New Menu
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <?php echo form_open_multipart('admin/add_product/'); ?>
                            <div class="modal-body">
                                <div class="modal-inside">
                                    <div class="container" style="padding: 10px; margin: 0px">
                                        <label class="form-label">Category (select one):</label>
                                        <select id="category-select" class="default-select form-control wide ms-0"
                                            name="category">
                                            <option value="" selected disabled>Please select</option>
                                            <?php foreach ($categories as $category): ?>
                                            <option value="<?php echo $category['id']; ?>">
                                                <?php echo $category['category']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-inside">
                                    <div class="container" style="padding: 10px; margin: 0px">
                                        <label class="form-label">Product Type (select one):</label>
                                        <select id="product-type-select" class="default-select form-control wide ms-0"
                                            name="type_name">
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-inside">
                                    <div class="container" style="padding: 10px; margin: 0px">
                                        <label class="form-label">Product Name</label>
                                        <input type="text" class="form-control" name="varieties" placeholder="" />
                                    </div>
                                </div>
                                <div class="modal-inside">
                                    <div class="container" style="padding: 10px; margin: 0px">
                                        <label class="form-label">Product Image</label>
                                        <input class="form-control" type="file" name="userfile" id="imgInp">
                                    </div>
                                </div>
                                <div class="modal-inside">
                                    <div class="container" style="padding: 10px; margin: 0px">
                                        <label class="form-label">Preview</label>
                                        <p><img id="blah" src="<?php echo base_url(); ?>assets/images/dummy.jpg"
                                                alt="Image Preview" style="max-width: 100%; max-height: 200px;"></p>
                                    </div>
                                </div>
                                <div class="modal-inside">
                                    <div class="container" style="padding: 10px; margin: 0px">
                                        <label class="form-label">Product Price 500gm Cake / Single Product</label>
                                        <div class="input-group mb-3  input-info">
                                            <span class="input-group-text border-0">₹</span>
                                            <input type="text" class="form-control" name="price1">
                                            <span class="input-group-text border-0">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-inside">
                                    <div class="container" style="padding: 10px; margin: 0px">
                                        <label for="exampleInputText" class="form-label">Product Price 1kg Cake</label>
                                        <div class="input-group mb-3  input-info">
                                            <span class="input-group-text border-0">₹</span>
                                            <input type="text" class="form-control" name="price2">
                                            <span class="input-group-text border-0">.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update New Product</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card" style="border: none">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#cakes">
                                <div class="card-body">
                                    <img src="<?php echo base_url(); ?>assets/admin/images/cake.png" width="60px" />
                                    <h6 class="mb-0 font-w500 text-center">cakes</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#bakery">
                                <div class="card-body">
                                    <img src="<?php echo base_url(); ?>assets/admin/images/bread.png" width="60px" />
                                    <h6 class="mb-0 font-w500 text-center">bakery</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#cafe">
                                <div class="card-body">
                                    <img src="<?php echo base_url(); ?>assets/admin/images/cafe.png" width="60px" />
                                    <h6 class="mb-0 font-w500 text-center">cafe</h6>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane fade show active" id="cakes" role="tabpanel">
                            <div class="row">
                                <?php foreach ($products as $product): ?>
                                <?php if ($product['category'] === '1' && $product['status'] === '1'): ?>
                                <div class="col-md-3" style="margin: 20px 0px;">
                                    <div class="card dishe-bx b-hover review menu-bx">
                                        <div class="card-body text-center py-3">
                                            <?php if ($product['bestselling'] === '1'): ?><span
                                                class="badge badge-lg badge-danger side-badge style-1">Best
                                                Seller</span><?php endif;?>
                                            <img src="<?php echo base_url(); ?>assets/admin/products/<?php echo $product['image']; ?>?timestamp=<?php echo time(); ?>"
                                                alt="" />
                                            <div class="dropdown dropstart c-heart">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <img src="<?php echo base_url(); ?>assets/admin/images/more.png"
                                                        style="width: 24px;height: 24px;" />
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="<?php echo base_url(); ?>admin/editproduct/<?php echo $product['id']; ?>">Edit</a>
                                                    <a class="dropdown-item"
                                                        href="<?php echo base_url(); ?>admin/delete/<?php echo $product['id']; ?>?table=<?php echo base64_encode('products'); ?>">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer pt-0 border-0 text-center">
                                            <div>
                                                <a href="javascript:void(0);">
                                                    <h4 class="mb-0"></h4>
                                                </a>
                                                <h3 class="font-w700 text-primary mb-4">
                                                    <?php echo $product['varieties']; ?>
                                                </h3>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <p class="mb-0 pe-2 border-right">500g</p>
                                                    <p class="mb-0 ps-2 text-success font-w600">₹
                                                        <?php echo $product['price1']; ?>
                                                    </p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <p class="mb-0 pe-2 border-right">1Kg</p>
                                                    <p class="mb-0 ps-2 text-success font-w600">₹
                                                        <?php echo $product['price2']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bakery" role="tabpanel">
                            <div class="row">
                                <?php foreach ($products as $product): ?>
                                <?php if ($product['category'] === '2' && $product['status'] === '1'): ?>
                                <div class="col-md-3" style="margin: 20px 0px;">
                                    <div class="card dishe-bx b-hover review menu-bx">
                                        <div class="card-body text-center py-3">
                                            <?php if ($product['bestselling'] === '1'): ?><span
                                                class="badge badge-lg badge-danger side-badge style-1">Best
                                                Seller</span><?php endif;?>
                                            <img src="<?php echo base_url(); ?>assets/admin/products/<?php echo $product['image']; ?>?timestamp=<?php echo time(); ?>"
                                                alt="" />
                                            <div class="dropdown dropstart c-heart">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <img src="<?php echo base_url(); ?>assets/admin/images/more.png"
                                                        style="width: 24px;height: 24px;" />
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="<?php echo base_url(); ?>admin/editproduct/<?php echo $product['id']; ?>">Edit</a>
                                                    <a class="dropdown-item"
                                                        href="<?php echo base_url(); ?>admin/delete/<?php echo $product['id']; ?>?table=<?php echo base64_encode('products'); ?>">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer pt-0 border-0 text-center">
                                            <div>
                                                <a href="javascript:void(0);">
                                                    <h4 class="mb-0"></h4>
                                                </a>
                                                <h3 class="font-w700 text-primary mb-4">
                                                    <?php echo $product['varieties']; ?>
                                                </h3>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <p class="mb-0 pe-2 border-right">500g</p>
                                                    <p class="mb-0 ps-2 text-success font-w600">₹
                                                        <?php echo $product['price1']; ?>
                                                    </p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <p class="mb-0 pe-2 border-right">1Kg</p>
                                                    <p class="mb-0 ps-2 text-success font-w600">₹
                                                        <?php echo $product['price2']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cafe" role="tabpanel">
                            <div class="row">
                                <?php foreach ($products as $product): ?>
                                <?php if ($product['category'] === '3' && $product['status'] === '1'): ?>
                                <div class="col-md-3" style="margin: 20px 0px;">
                                    <div class="card dishe-bx b-hover review menu-bx">
                                        <div class="card-body text-center py-3">
                                            <?php if ($product['bestselling'] === '1'): ?><span
                                                class="badge badge-lg badge-danger side-badge style-1">Best
                                                Seller</span><?php endif;?>
                                            <img src="<?php echo base_url(); ?>assets/admin/products/<?php echo $product['image']; ?>?timestamp=<?php echo time(); ?>"
                                                alt="" />
                                            <div class="dropdown dropstart c-heart">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <img src="<?php echo base_url(); ?>assets/admin/images/more.png"
                                                        style="width: 24px;height: 24px;" />
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="<?php echo base_url(); ?>admin/editproduct/<?php echo $product['id']; ?>">Edit</a>
                                                    <a class="dropdown-item"
                                                        href="<?php echo base_url(); ?>admin/delete/<?php echo $product['id']; ?>?table=<?php echo base64_encode('products'); ?>">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer pt-0 border-0 text-center">
                                            <div>
                                                <a href="javascript:void(0);">
                                                    <h4 class="mb-0"></h4>
                                                </a>
                                                <h3 class="font-w700 text-primary mb-4">
                                                    <?php echo $product['varieties']; ?>
                                                </h3>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <p class="mb-0 pe-2 border-right">500g</p>
                                                    <p class="mb-0 ps-2 text-success font-w600">₹
                                                        <?php echo $product['price1']; ?>
                                                    </p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <p class="mb-0 pe-2 border-right">1Kg</p>
                                                    <p class="mb-0 ps-2 text-success font-w600">₹
                                                        <?php echo $product['price2']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>