<div class="container">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <nav class="order-tab">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-cakes-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-cakes" type="button" role="tab" aria-controls="nav-cakes"
                                aria-selected="true">Cakes</button>
                            <button class="nav-link" id="nav-bakery-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-bakery" type="button" role="tab" aria-controls="nav-bakery"
                                aria-selected="false">Bakery</button>
                            <button class="nav-link" id="nav-cafe-tab" data-bs-toggle="tab" data-bs-target="#nav-cafe"
                                type="button" role="tab" aria-controls="nav-cafe" aria-selected="false">Cafe</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-cakes" role="tabpanel"
                            aria-labelledby="nav-order-tab">
                            <?php foreach ($categories as $category): ?>
                                <?php if ($category['category'] === '1'): ?>
                                    <div class="orderin-bx d-flex align-items-center justify-content-between">
                                        <div>
                                            <h4><?php echo $category['type_name']; ?></h4>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <h4 class="text-primary mb-0">(<?php echo $category['product_count']; ?>)</h4>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="tab-pane fade" id="nav-bakery" role="tabpanel" aria-labelledby="nav-order-tab">
                            <?php foreach ($categories as $category): ?>
                                <?php if ($category['category'] === '2'): ?>
                                    <div class="orderin-bx d-flex align-items-center justify-content-between">
                                        <div>
                                            <h4><?php echo $category['type_name']; ?></h4>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <h4 class="text-primary mb-0">(<?php echo $category['product_count']; ?>)</h4>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="tab-pane fade" id="nav-cafe" role="tabpanel" aria-labelledby="nav-order-tab">
                            <?php foreach ($categories as $category): ?>
                                <?php if ($category['category'] === '3'): ?>
                                    <div class="orderin-bx d-flex align-items-center justify-content-between">
                                        <div>
                                            <h4><?php echo $category['type_name']; ?></h4>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <h4 class="text-primary mb-0">(<?php echo $category['product_count']; ?>)</h4>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="setting-right">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4">Update New Product Type</h3>
                        <div class="row">
                            <?php echo form_open_multipart('admin/add_producttype/'); ?>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="setting-input">
                                        <label for="producttype" class="form-label">Product Type</label>
                                        <input type="text" name="type_name" class="form-control" id="producttype"
                                            placeholder="Enter New Product Type" />
                                    </div>
                                    <div class="setting-input">
                                        <label for="category" class="form-label">Category</label>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="category"
                                                    value="1" />
                                                <label class="form-check-label">Cakes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="category"
                                                    value="2" />
                                                <label class="form-check-label">Bakery</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="category"
                                                    value="3" />
                                                <label class="form-check-label">Cafe</label>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary float-end w-50 btn-md">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>