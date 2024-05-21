<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Cake Products</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Product Type</th>
                                    <th>Varieties</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product): ?>
                                <?php if ($product['category'] === '1'): ?>
                                <tr>
                                    <td><img class="rounded-circle" width="35"
                                            src="<?php echo base_url(); ?>assets/admin/products/<?php echo $product['image']; ?>"
                                            alt="" /></td>
                                    <td>
                                        <?php foreach ($categories as $type): ?>
                                        <?php if ($type['id'] === $product['type_name']): ?>
                                        <?php echo $type['type_name']; ?>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td><?php echo $product['varieties']; ?></td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheck_<?php echo $product['id']; ?>"
                                                <?php echo ($product['status'] == '1') ? 'checked' : ''; ?>
                                                onchange="updateStatus(<?php echo $product['id']; ?>, this.checked);">
                                        </div>
                                    </td>
                                </tr>
                                <?php endif;?>
                                <?php endforeach; ?>
                                <script>
                                function updateStatus(productId, isChecked) {
                                    $.ajax({
                                        url: "<?php echo site_url('admin/updateStatus'); ?>",
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bakery Products</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Type Name</th>
                                    <th>Varieties</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product): ?>
                                <?php if ($product['category'] === '2'): ?>
                                <tr>
                                    <td><img class="rounded-circle" width="35"
                                            src="<?php echo base_url(); ?>assets/admin/products/<?php echo $product['image']; ?>"
                                            alt="" /></td>
                                    <td>
                                        <?php foreach ($categories as $type): ?>
                                        <?php if ($type['id'] === $product['type_name']): ?>
                                        <?php echo $type['type_name']; ?>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td><?php echo $product['varieties']; ?></td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheck_<?php echo $product['id']; ?>"
                                                <?php echo ($product['status'] == '1') ? 'checked' : ''; ?>
                                                onchange="updateStatus(<?php echo $product['id']; ?>, this.checked);">
                                        </div>
                                    </td>
                                </tr>
                                <?php endif;?>
                                <?php endforeach; ?>
                                <script>
                                function updateStatus(productId, isChecked) {
                                    $.ajax({
                                        url: "<?php echo site_url('admin/updateStatus'); ?>",
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">cafe Products</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Type Name</th>
                                    <th>Varieties</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product): ?>
                                <?php if ($product['category'] === '3'): ?>
                                <tr>
                                    <td><img class="rounded-circle" width="35"
                                            src="<?php echo base_url(); ?>assets/admin/products/<?php echo $product['image']; ?>"
                                            alt="" /></td>
                                    <td>
                                        <?php foreach ($categories as $type): ?>
                                        <?php if ($type['id'] === $product['type_name']): ?>
                                                <?php echo $type['type_name']; ?>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td><?php echo $product['varieties']; ?></td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheck_<?php echo $product['id']; ?>"
                                                <?php echo ($product['status'] == '1') ? 'checked' : ''; ?>
                                                onchange="updateStatus(<?php echo $product['id']; ?>, this.checked);">
                                        </div>
                                    </td>
                                </tr>
                                <?php endif;?>
                                <?php endforeach; ?>
                                <script>
                                function updateStatus(productId, isChecked) {
                                    $.ajax({
                                        url: "<?php echo site_url('admin/updateStatus'); ?>",
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