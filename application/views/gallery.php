<?php $this->load->view('widget/breadcums'); ?>
<section class="space">
    <div class="container">
        <div class="gallery-thumb-area">
            <div class="row">
                <?php if (empty($galleries)): ?>
                    <div class="container">
                        <div class="error-content">
                            <h2 class="error-title">We're sorry</h2>
                            <p class="error-text">The gallery images will update soon..</p>
                            <a href="index.html" class="th-btn rounded-2"><i class="far fa-home me-2"></i>Back To Home</a>
                        </div>
                    </div>
                <?php else: ?>
                    <?php foreach ($galleries as $gallery): ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                                <img src="assets/admin/images/gallery/<?php echo $gallery['image']; ?>" alt="Gallery Image" />
                                <a href="assets/admin/images/gallery/<?php echo $gallery['image']; ?>"
                                    class="gallery-btn popup-image">
                                    <i class="fa-solid fa-image"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('widget/cta'); ?>