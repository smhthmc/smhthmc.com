<?php get_header(); ?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<!-- Header Back -->
		<div class="header-back header-back-courses header-back-small">
			<div class="header-back-container helper center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<!-- Page Info -->
							<div class="page-info page-info-simple">
								<h1 class="page-title"><?php the_title(); ?></h1>
								<p class="page-description"><?php echo get_the_excerpt(); ?></p>

								
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
				<div class="layout with-right-sidebar js-layout">
					<div class="row">
						<div class="col-md-8">
							<div class="main-content">
								<ul class="article-meta">
									<li>
										<span class="article-meta-date article-meta-item">Ocak 08, 2019</span>
									</li>
									<li>
                                        <span class="article-meta-category article-meta-item">
                                            <?php
                                                $taxonomy = 'course-cat';
												$terms = get_the_terms($post->ID, $taxonomy );
												
												if (is_array($terms) || is_countable($terms)) {
													$len = count($terms);
												}

												foreach( $terms as $term ) {

													if ($len == 1) {
														echo '<a href="blog-grid.html">'.strtoupper($term->name).'</a>';
														
													}else {
														echo '<a href="blog-grid.html">'.strtoupper($term->name).'</a>';
														echo '<span> | </span>';
													}
													
												}
												
                                                
                                            ?>
										</span>
                                    </li>						
								</ul>
								<!-- End of Article Meta -->

                                <?php the_content(); ?>


                                <div class="panel">
                                    <header class="panel-header"> Yorumlarınız ve Sorularınız</header>
                                    <section class="panel-content">
                                        <p>Yorumlar</p>
                                    </section>
                                </div>
							</div>
						</div>
						<div class="col-md-4 hidden-sm hidden-xs">
							<div class="sidebar js-sidebar-wrapper">
								<div class="widget">
									<h3 class="widget-title helper center">Bazı Eğitimler</h3>
									<?php $custom_query = new WP_Query(array( 'post_type' => 'egitimler', 'post__not_in' => array(get_the_ID()), 'posts_per_page' => '3'));
										while($custom_query->have_posts()) : $custom_query->the_post(); 
									?>
										<div class="helper center">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'image remove-border')); ?></a>
										</div>
									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
								</div>				
							</div>
							<div class="sidebar js-sidebar-fixed">
								<?php echo do_shortcode(get_post_meta(get_the_ID(), '_toc_value_key', true ));?>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>

 <?php endwhile; endif; ?>


<?php get_footer(); ?>