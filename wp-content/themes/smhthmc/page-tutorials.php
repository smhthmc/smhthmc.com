<?php
/* 
 Template Name: Tutorial Page
*/

get_header() ?>

<!-- Header Back -->
<div class="header-back header-back-tutorials header-back-small">
    <div class="header-back-container helper center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Page Info -->
                    <div class="page-info page-info-simple">
                        <h1 class="page-title">Uygulamalar</h1>
                        <p class="page-description">Gerçek hayattan, sıfırdan sonuna kadar web yazılım ve tasarım uygulamaları...  </p>
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
                <div class="button-list helper center" id="course-menu-filter">
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