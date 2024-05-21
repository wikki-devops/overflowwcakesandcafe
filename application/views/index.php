<?php $this->load->view('banner'); ?>
<!-- End Slider -->


<section class="space">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 pe-xxl-5">
                <div class="img-box2">
                    <div class="img1"><img src="https://ik.imagekit.io/7vdby4475/images/tr:w-562/about.png?updatedAt=1714458484691" alt="About" loading="lazy" /></div>
                </div>
            </div>

            <div class="col-xl-6 space-top space-xl">
                <div class="title-area mb-30">
                    <h2 class="sec-title">
                        <img class="icon" src="https://ik.imagekit.io/7vdby4475/images/icons/tr:w-48/home-about.png?updatedAt=1714458496424" alt="icon" width="48px" loading="lazy" />
                        Know Overfloww<span class="font-style fw-normal text-theme"><br>Crafting Sweet Moments Since
                            2022</span>
                    </h2>
                </div>
                <p class="mt-n2 mb-20">We are the first to whisk the exceptional European patisserie experience into
                    Salem and beyond! To have your sweet cravings quenched and your hearts warmed, we aim to bring our
                    creamy cakes to every nook of Tamil Nadu at affordable prices and uncompromising quality.</p>
                <p class="mb-4">
                    As a proud family-owned venture, we kicked off our cakes-traordinary journey in Salem back in 2022.
                    Armed with savvy insights and cumulative experiences from our first shop, we were super-thrilled to
                    launch the second outlet in 2024, choosing to make life sweeter & sugary for you!
                </p>
                <a href="<?php echo base_url(); ?>about" class="th-btn">Explore our Sweet Beginnings</a>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->


<section class="space z-index-common">
    <div class="bg-img shape_style1" data-bg-src="assets/img/feature_bg_1.png"></div>
    <div class="container z-index-common">
        <div class="title-area text-center">
            <h2 class="sec-title">
                <img class="icon" src="https://ik.imagekit.io/7vdby4475/images/icons/tr:w-80/who.png?updatedAt=1714458499154" alt="icon" width="80px" loading="lazy"/>
                <span class="font-style fw-normal text-theme">3 Wonders of Overfloww</span>
            </h2>
        </div>
        <div class="feature-grid-wrap">
            <div class="feature-grid">
                <div class="feature-grid_img"><img src="https://ik.imagekit.io/7vdby4475/images/cakes.png?updatedAt=1714458484391" alt="Food" width="200px" loading="lazy" /></div>
                <div>
                    <h3 class="feature-grid_title box-title">Cakes</h3>
                    <p class="feature-grid_text">From our Signature Cakes to our American Butter Cream Cakes, we offer
                        sweet deals, and sweeter treats, at the sweetest price. Forget the fork, and dig into the
                        deliciousness!</p>
                </div>
            </div>
            <div class="feature-grid">
                <div class="feature-grid_img"><img src="https://ik.imagekit.io/7vdby4475/images/bakery.png?updatedAt=1714458484318" alt="Food" width="200px" loading="lazy" />
                </div>
                <div>
                    <h3 class="feature-grid_title box-title">Breads</h3>
                    <p class="feature-grid_text">Just when you think that loaves of bread are boring, we crust, crumb
                        and knead them into pizzas, burgers, sandwiches, and breadsticks to satisfy your bulky bread
                        cravings!</p>
                </div>
            </div>
            <div class="feature-grid">
                <div class="feature-grid_img"><img src="https://ik.imagekit.io/7vdby4475/images/cafe.png?updatedAt=1714458484380" alt="Food" width="200px" loading="lazy" /></div>
                <div>
                    <h3 class="feature-grid_title box-title">Cafe</h3>
                    <p class="feature-grid_text">Chill in our cafe’s cosy nooks, and fill in your plates with yummy food
                        to spill into casual conversations amidst our cool and click-worthy ambience.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Cat Section -->


<section class="space">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">
                <img class="icon" src="https://ik.imagekit.io/7vdby4475/images/icons/tr:w-80/menu.png?updatedAt=1714458497730" alt="icon" width="80px" loading="lazy" />
                <span class="font-style fw-normal text-theme">Explore Our Best-Selling Treats!</span>
            </h2>
            <div class="nav nav-tabs menu-tabs" id="nav-tab" role="tablist" style="margin-bottom: 40px">
                <?php foreach ($category as $category): ?>
                <a class="nav-link text-uppercase" id="nav-<?php echo $category['id']; ?>-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-<?php echo $category['id']; ?>">
                    <?php echo $category['category']; ?>
                </a>
                <?php endforeach; ?>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-1" role="tabpanel">
                    <div class="row">
                        <?php $count = 0; foreach ($products as $product): if ($count >= 4) break;?>
                        <?php if ($product['category'] === '1' && $product['bestselling'] === '1'): ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6" style="margin-bottom: 10px">
                            <div class="th-product product_style1">
                                <div class="product-img">
                                    <img src="assets/admin/products/<?php echo $product['image']; ?>?timestamp=<?php echo time(); ?>"
                                        alt="Product Image" />
                                </div>
                                <div class="product-content">
                                    <?php foreach ($categories as $type): ?>
                                    <?php if ($type['id'] === $product['type_name']): ?>
                                    <p class="category text-capitalize">
                                        <?php echo $type['type_name']; ?>
                                    </p>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                    <h3 class="product-title text-capitalize">
                                        <?php echo $product['varieties']; ?>
                                    </h3>
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
                                        <a href="https://api.whatsapp.com/send?phone=919994713337&amp;text=Hello%2C%20I%27d%20like%20to%20place%20an%20order%20for%20a%20<?php echo urlencode($product['varieties']); ?>.%20Could%20you%20please%20confirm%20the%20availability%20and%20the%20total%20cost%3F" target="_blank" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $count++; endif; endforeach; ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-2" role="tabpanel">
                    <div class="row">
                        <?php $count = 0; foreach ($products as $product): if ($count >= 4) break;?>
                        <?php if ($product['category'] === '2' && $product['bestselling'] === '1'): ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6" style="margin-bottom: 10px">
                            <div class="th-product product_style1">
                                <div class="product-img">
                                    <img src="assets/admin/products/<?php echo $product['image']; ?>?timestamp=<?php echo time(); ?>"
                                        alt="Product Image" />
                                </div>
                                <div class="product-content">
                                    <?php foreach ($categories as $type): ?>
                                    <?php if ($type['id'] === $product['type_name']): ?>
                                    <p class="category text-capitalize">
                                        <?php echo $type['type_name']; ?>
                                    </p>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                    <h3 class="product-title text-capitalize">
                                        <?php echo $product['varieties']; ?>
                                    </h3>
                                    <span class="price">₹
                                        <?php 
                                                if (!empty($product['price1'])) {
                                                    echo $product['price1'];
                                                } else {
                                                    echo $product['price2'];
                                                }
                                            ?>
                                    </span>
                                    <div class="actions">
                                        <a href="https://api.whatsapp.com/send?phone=919994713337&amp;text=Hello%2C%20I%27d%20like%20to%20place%20an%20order%20for%20a%20<?php echo urlencode($product['varieties']); ?>.%20Could%20you%20please%20confirm%20the%20availability%20and%20the%20total%20cost%3F" target="_blank" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $count++; endif; endforeach; ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-3" role="tabpanel">
                    <div class="row">
                        <div class="row">
                            <?php $count = 0; foreach ($products as $product): if ($count >= 4) break;?>
                            <?php if ($product['category'] === '3' && $product['bestselling'] === '1'): ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6" style="margin-bottom: 10px">
                                <div class="th-product product_style1">
                                    <div class="product-img">
                                        <img src="assets/admin/products/<?php echo $product['image']; ?>?timestamp=<?php echo time(); ?>"
                                            alt="Product Image" />
                                    </div>
                                    <div class="product-content">
                                        <?php foreach ($categories as $type): ?>
                                        <?php if ($type['id'] === $product['type_name']): ?>
                                        <p class="category text-capitalize">
                                            <?php echo $type['type_name']; ?>
                                        </p>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                        <h3 class="product-title text-capitalize">
                                            <?php echo $product['varieties']; ?>
                                        </h3>
                                        <span class="price">₹
                                            <?php 
                                                if (!empty($product['price1'])) {
                                                    echo $product['price1'];
                                                } else {
                                                    echo $product['price2'];
                                                }
                                            ?>
                                        </span>
                                        <div class="actions">
                                        <a href="https://api.whatsapp.com/send?phone=919994713337&amp;text=Hello%2C%20I%27d%20like%20to%20place%20an%20order%20for%20a%20<?php echo urlencode($product['varieties']); ?>.%20Could%20you%20please%20confirm%20the%20availability%20and%20the%20total%20cost%3F" target="_blank" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $count++; endif; endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5"><a href="<?php echo base_url(); ?>cakes" class="th-btn">View All Menus</a></div>
    </div>
</section>
<!-- menu section end -->


<?php $this->load->view('widget/widget-banner'); ?>


<section class="space bg-smoke2">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">
                <img class="icon" src="https://ik.imagekit.io/7vdby4475/images/icons/tr:w-80/cafe.png?updatedAt=1714458495175" alt="icon" width="80px" loading="lazy" />
                <span class="font-style fw-normal text-theme">Overfloww’s Cafe Pitstop</span>
            </h2>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-4">
                <div class="feature-list-wrap">
                    <div class="feature-list">
                        <div class="feature-list_icon"><img src="https://ik.imagekit.io/7vdby4475/images/icons/tr:w-100/smokey-grilled-chicken.png?updatedAt=1714458497790"
                                alt="Icon" loading="lazy" />
                        </div>
                        <h3 class="box-title">Smokey Grilled Chicken</h3>
                        <p class="feature-list_text">With stripes of hotness, spiciness and sauciness, our Smokey
                            Grilled Chicken are just ‘Smoki-licious’.</p>
                    </div>
                    <div class="feature-list">
                        <div class="feature-list_icon"><img src="https://ik.imagekit.io/7vdby4475/images/icons/tr:w-100/fried-crispy-chicken.png?updatedAt=1714458496372"
                                alt="Icon" loading="lazy" />
                        </div>
                        <h3 class="box-title">Fried Crispy Chicken</h3>
                        <p class="feature-list_text">Bite into our golden, perfectly seasoned Fried Crispy Chicken that
                            is simply irresistible and mouthwatering!</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="feature-list-img"><img src="https://ik.imagekit.io/7vdby4475/images/cafe-shop.png?updatedAt=1714458484636" alt="Coffee" loading="lazy" />
                </div>
            </div>
            <div class="col-xl-4">
                <div class="feature-list-wrap right-align">
                    <div class="feature-list">
                        <div class="feature-list_icon"><img src="https://ik.imagekit.io/7vdby4475/images/icons/tr:w-100/sandwiches.png?updatedAt=1714458497716" alt="Icon" loading="lazy"/>
                        </div>
                        <h3 class="box-title">Sandwiches</h3>
                        <p class="feature-list_text">Love and layers of veggies and meats smushed between the crispy
                            triangular hot breads.</p>
                    </div>
                    <div class="feature-list">
                        <div class="feature-list_icon"><img src="https://ik.imagekit.io/7vdby4475/images/icons/tr:w-100/mojitos-juices.png?updatedAt=1714458497713" alt="Icon" loading="lazy" />
                        </div>
                        <h3 class="box-title">Mojitos/Juices</h3>
                        <p class="feature-list_text">On a steaming hot day, take a sip of our ice-cold drink that sounds
                            splash-ing and tastes amazing!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Bakkery -->


<section class="space">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">
                <img class="icon" src="https://ik.imagekit.io/7vdby4475/images/icons/tr:w-80/testi.png?updatedAt=1714458498023" alt="icon" width="80px" loading="lazy" />
                <span class="font-style fw-normal text-theme">Sweet Words from Our Happy Customers</span>
            </h2>

            </h2>
        </div>
        <div class="row th-carousel number-dots" id="testiSlide4" data-slide-show="3" data-lg-slide-show="2"
            data-md-slide-show="1" data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true"
            data-md-dots="true" data-sm-dots="true">
            <?php foreach ($testimonials as $testi): ?>
            <div class="col-xl-4 col-lg-6">
                <div class="testi-block bg-smoke2">
                    <div class="testi-block_shape">
                        <img src="https://ik.imagekit.io/7vdby4475/images/testi-bg.png?updatedAt=1714458487521" loading="lazy" alt="BG" />
                    </div>
                    <div class="testi-block_profile">
                        <div class="testi-block_avater">
                            <img src="https://ik.imagekit.io/7vdby4475/images/tr:w-62/test.png?updatedAt=1714458488235" loading="lazy" alt="Avater" />
                            <div class="testi-block_quote"><img src="assets/img/icons/quote_1.svg" alt="Icon" />
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="testi-block_name"><?php echo $testi['name']; ?></h3>
                        </div>
                        <p class="testi-block_text text-center"><?php echo $testi['testimonial']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Testimonials -->


<?php $this->load->view('widget/cta'); ?>
<!-- End CTA -->