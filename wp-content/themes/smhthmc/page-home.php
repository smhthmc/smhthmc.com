<?php
/* 
 Template Name: Home Page
*/

get_header() ?>

<!-- Header Back -->
<div class="header-back header-back-home header-back-full-page js-full-page">
    <div class="header-back-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Page Info -->
                    <div class="page-info helper center">
                        <h1 class="page-title">Öğren. Yap. İz Bırak.</h1>
                        <h2 class="page-description">Web Yazılım ve Tasarım Hakkında Herşey</h2>
                    </div>
                    <!-- End Page Info -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Header Back -->

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Promo Title -->
                <div class="promo-title-wrapper helper pt60">
                    <h2 class="promo-title"> Hoşgeldiniz </h2>
                    <p class="promo-description"> Herkese merhaba, ben Semih Tohumcu... <br>
                        Web siteme hoşgeldiniz... <br>
                        Bu sitenin amacı sizlere, web yazılımı ve tasarımı öğretmek... <br>
                        Sitemde bulabileceğiniz bazı içerikler...</p>
                </div>
                <!-- End of Promo Title -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Box -->
                        <div class="box box-small-icon-alt">
                            <i class="pe-7s-plugin box-icon"></i>
                            <h3 class="box-title">Detaylı Eğitimler</h3>
                            <p class="box-description">Baştan sona, tüm detayları size, web yazılım ve tasarım anlatıyorum.</p>
                        </div>
                        <!-- End of Box -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Box -->
                        <div class="box box-small-icon-alt">
                            <i class="pe-7s-eyedropper box-icon"></i>
                            <h3 class="box-title">Uygulamalar</h3>
                            <p class="box-description">Gerçek hayatta kullanacağabileceğiniz ve sizi bir adım öne taşıyacak uygulamaları birlikte yapıyoruz.</p>
                        </div>
                        <!-- End of Box -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <!-- Box -->
                        <div class="box box-small-icon-alt">
                            <i class="pe-7s-tools box-icon"></i>
                            <h4 class="box-title">İpuçları</h4>
                            <p class="box-description">Yazılım ve tasarım hakkında bildiğim tüm ipuçlarını sizlerle paylaşıyorum.</p>
                        </div>
                        <!-- End of Box -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Promo Title -->
                <div class="promo-title-wrapper ">
                    <h2 class="promo-title"> Detaylı Eğitimler </h2>
                    <p class="promo-description"> Sizler için hazırladığım detaylı web yazılım ve tasarım eğitimleri...</p>
                </div>
                <!-- End of Promo Title -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="button-list helper center" id="course-menu-filter">
                    <a href="#" class="button small black" data-filter="*">Tümü</a>
                    <a href="#" class="button stroke small orange" data-filter=".html">HTML</a>
                    <a href="#" class="button stroke small blue" data-filter=".css">CSS</a>
                    <a href="#" class="button stroke small yellow" data-filter=".js">Javascript</a>
                    
                </div>
            </div>
        </div>
        <div class="row course-filter">

            <?php $custom_query = new WP_Query('cat=1'); // category eğitimler = 1 ,uygulamalar=2 ,ipuçları=3
                while($custom_query->have_posts()) : $custom_query->the_post(); 
            ?>
        
            <div class="col-lg-4 col-md-6 course-item<?php $posttags = get_the_tags(); if ($posttags) {foreach($posttags as $tag) {echo ' '.$tag->name;}}?>">
                <!-- Course Item -->
                <div class="panel">
                    <section class="panel-content">
                        <div class="helper center">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'image remove-border')); ?></a>
                        </div>
                    </section>
                    <h2 class="panel-header"><?php the_title(); ?></h2>
                </div>
                <!-- End of Course Item -->
            </div>

            

            <?php endwhile; ?>
            <?php wp_reset_postdata(); // reset the query ?>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Promo Title -->
                <div class="promo-title-wrapper ">
                    <h2 class="promo-title"> Uygulamalar </h2>
                    <p class="promo-description"> Birlikte baştan sona yapacağımız gerçek hayattan uygulamalar ile tecrübenizi arttıracaksınız.</p>
                </div>
                <!-- End of Promo Title -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="button-list helper center" id="tutorial-menu-filter">
                    <a href="#" class="button small black" data-filter="*">Tümü</a>
                    <a href="#" class="button stroke small orange" data-filter=".html">HTML</a>
                    <a href="#" class="button stroke small blue" data-filter=".css">CSS</a>
                    <a href="#" class="button stroke small yellow" data-filter=".js">Javascript</a>
                    
                </div>
            </div>
        </div>
        <div class="row tutorial-filter">

            <?php $custom_query = new WP_Query('cat=2'); // category eğitimler = 1 ,uygulamalar=2 ,ipuçları=3
                while($custom_query->have_posts()) : $custom_query->the_post(); 
            ?>
        

            <div class="col-lg-4 col-md-6 tutorial-item<?php $tags = get_tags(array('hide_empty' => false));foreach ($tags as $tag) {echo " ".$tag->name;}?>">
                <!-- Course Item -->
                <div class="panel">
                    <section class="panel-content">
                        <div class="helper center">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'image remove-border')); ?></a>
                        </div>
                    </section>
                    <h2 class="panel-header"><?php the_title(); ?></h2>
                </div>
                <!-- End of Course Item -->
            </div>

            

            <?php endwhile; ?>
            <?php wp_reset_postdata(); // reset the query ?>

        </div>
    </div>
</div>

<?php get_footer() ?>