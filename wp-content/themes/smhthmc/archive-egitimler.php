<?php

get_header() ?>

<!-- Header Back -->
<div class="header-back header-back-courses header-back-small">
    <div class="header-back-container helper center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Page Info -->
                    <div class="page-info page-info-simple">
                        <h1 class="page-title">Detaylı Eğitimler</h1>
                        <p class="page-description">Baştan sona, konuların tüm detaylarına inerek, sizler için hazırladığım eğitimler ile sıfırdan bir web yazılımcı olabilirsiniz... </p>
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
        <div class="row course-filter">

            <?php $custom_query = new WP_Query(array( 'post_type' => 'egitimler'));
                while($custom_query->have_posts()) : $custom_query->the_post(); 
            ?>

            <div class="col-lg-4 col-md-6 course-item <?php
                $taxonomy = 'course-cat';
                $terms = get_the_terms($post->ID, $taxonomy ); // Get all terms of a taxonomy

                if ( $terms && !is_wp_error( $terms ) ) :
                 foreach ( $terms as $term ) {
                    echo $term->name.' '; }
                endif;
                ?>">
        
                <!-- Course Item -->
                <div class="panel">
                    <section class="panel-content">
                        <div class="helper center">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'image remove-border')); ?></a>
                        </div>
                    </section>
                    <h2 class="panel-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <!-- End of Course Item -->
            </div>

            

            <?php endwhile; ?>
            <?php wp_reset_postdata(); // reset the query ?>

        </div>
    </div>
</div>

<?php get_footer() ?>