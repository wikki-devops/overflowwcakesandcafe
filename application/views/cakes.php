<?php $this->load->view('widget/breadcums'); ?>
<section class="th-product-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <!-- Sidebar with category buttons -->
            <div class="col-lg-3">
                <aside class="sidebar-area">
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Categories</h3>
                        <div class="nav nav-tabs menu-tabs" id="nav-tab" role="tablist" style="display: block;">
                            <?php foreach ($categories as $category): ?>
                            <?php if ($category['category'] === '1'): ?>
                            <button class="nav-link category-btn text-capitalize" data-category="<?php echo $category['id']; ?>"
                                type="button">
                                <?php echo $category['type_name']; ?>
                                <!-- <span style="color: #fff">(
                                    <?php echo $category['product_count']; ?>)
                                </span> -->
                            </button>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- Product display area -->
            <div class="col-lg-9">
                <div class="row" id="all-products">
                    <?php foreach ($products as $product): ?>
                    <?php if ($product['category'] === '1' && $product['status'] === '1'): ?>
                    <div class="col-xl-4 col-lg-4 col-sm-6 product-item"
                        data-categories="<?php echo $product['type_name']; ?>">
                        <div class="th-product" style="padding: 10px">
                            <div class="product-img"><img
                                    src="<?php echo base_url();?>assets/admin/products/<?php echo $product['image'];?>?timestamp=<?php echo time(); ?>"
                                    alt="Product Image" />
                            </div>
                            <div class="product-content">
                                <?php foreach ($categories as $type): ?>
                                <?php if ($type['id'] === $product['type_name']): ?>
                                <p class="category mt-1 text-capitalize">
                                    <?php echo $type['type_name']; ?>
                                </p>
                                <?php endif; ?>
                                <?php endforeach; ?>
                                <h3 class="product-title text-capitalize"><?php echo $product['varieties']; ?></h3>
                                <span class="price">₹
                                <?php 
                                if (!empty($product['price1'])) {
                                    echo $product['price1'];
                                } else {
                                    echo $product['price2'];
                                }
                            ?>
                                </span> Onwards
                                <div class="actions">
                                    <a href="https://api.whatsapp.com/send?phone=919994713337&amp;text=Hello%2C%20I%27d%20like%20to%20place%20an%20order%20for%20a%20<?php echo urlencode($product['varieties']); ?>.%20Could%20you%20please%20confirm%20the%20availability%20and%20the%20total%20cost%3F" target="_blank" class="th-btn"
                                        style="padding: 20px; border-radius: 40px;"><i class="fal fa-cart-plus"></i>
                                        Order Via Whatsapp</a>
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
</section>
<style>
.widget_categories {
    border-radius: 25px !important;
    border: 1px solid #0000001f !important;
    box-shadow: none !important;
}

.menu-tabs .nav-link {
    display: block;
    background-color: var(--theme-color2) !important;
    border: 1px solid var(--border-color) !important;
    margin: 0 0 10px 0 !important;
    font-size: 14px !important;
    line-height: 1.313 !important;
    color: #fff !important;
    border-radius: 99px !important;
    width: 100% !important;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px !important;
}

.icon-btn {
    width: 100% !important;
    height: 100% !important;
    padding: 10px !important;
    font-family: "Barlow", sans-serif !important;
}
</style>

<?php $this->load->view('widget/cta'); ?>