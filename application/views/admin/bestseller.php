<div class="container">
    <div class="row">
        <h5 class="text-center"></h5>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Products</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display">
                            <thead class="text-center">
                                <tr>
                                    <th>id</th>
                                    <th>Varieties</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php foreach ($products as $product): ?>
                                <?php if ($product['bestselling'] === '0'): ?>
                                <tr>
                                    <td><img class="rounded-circle" width="35"
                                            src="<?php echo base_url(); ?>assets/admin/products/<?php echo $product['image']; ?>"
                                            alt="" /></td>
                                    <td><?php echo $product['varieties']; ?></td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input  text-center" type="checkbox" role="switch"
                                                id="flexSwitchCheck_<?php echo $product['id']; ?>"
                                                <?php echo ($product['bestselling'] == '1') ? 'checked' : ''; ?>
                                                onchange="updateStatus(<?php echo $product['id']; ?>, this.checked);">
                                        </div>
                                    </td>
                                </tr>
                                <?php endif;?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Products For Bestseller Section</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                            <thead class="text-center">
                                <tr>
                                    <th>id</th>
                                    <th>Varieties</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php foreach ($products as $product): ?>
                                <?php if ($product['bestselling'] === '1'): ?>
                                <tr>
                                    <td><img class="rounded-circle" width="35"
                                            src="<?php echo base_url(); ?>assets/admin/products/<?php echo $product['image']; ?>"
                                            alt="" /></td>
                                    <td><?php echo $product['varieties']; ?></td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input  text-center" type="checkbox" role="switch"
                                                id="flexSwitchCheck_<?php echo $product['id']; ?>"
                                                <?php echo ($product['bestselling'] == '1') ? 'checked' : ''; ?>
                                                onchange="updateStatus(<?php echo $product['id']; ?>, this.checked);">
                                        </div>
                                    </td>
                                </tr>
                                <?php endif;?>
                                <?php endforeach; ?>
                                <script>
                                function updateStatus(productId, isChecked) {
                                    $.ajax({
                                        url: "<?php echo site_url('admin/updatebestselling'); ?>",
                                        type: "POST",
                                        data: {
                                            productId: productId,
                                            isChecked: isChecked ? 1 : 0
                                        },
                                        success: function(response) {
                                            // Handle success response if needed
                                            console.log(response);
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('There was a problem with the AJAX request:',
                                                error);
                                            // Handle error if needed
                                        }
                                    });
                                }
                                </script>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>