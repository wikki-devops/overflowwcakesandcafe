<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gallery</h4>
                </div>
                <div class="card-body pb-1">
                    <div id="lightgallery" class="row dlab-lightgallery">
                        <div class="row">
                            <?php foreach ($galleries as $gallery): ?>
                                <div class="col-md-4" style="padding: 10px">
                                    <img src="<?php echo base_url(); ?>assets/admin/images/gallery/<?php echo $gallery['image']; ?>"
                                        alt="" style="width:100%;" />
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>