<?php $this->load->view('widget/breadcums'); ?>
<section class="space">
    <div class="container">
        <div class="row gy-4">
            <?php foreach($testimonials as $testi):?>
            <div class="col-xl-4 col-lg-6 ">
                <div class="testi-box bg-smoke2">
                    <div class="testi-box_icon"><img src="<?php echo base_url();?>assets/img/icons/quote_left.svg" alt="quote" /></div>
                    <p class="testi-box_text">“<?php echo $testi['testimonial'];?>”</p>
                    <div class="testi-box_profile">
                        <div class="testi-box_avater"><img src="https://ik.imagekit.io/7vdby4475/images/tr:w-62/test.png?updatedAt=1714458488235" alt="Avater" /></div>
                        <div class="media-body">
                            <h3 class="testi-box_name"><?php echo $testi['name'];?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
