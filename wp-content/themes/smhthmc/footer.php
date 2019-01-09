    <!-- Footer -->
        <footer class="js-footer-is-fixed">
            <!-- Footer Default -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="footer-logo-wrapper">
                                <!-- Logo Image -->
                                <a href="/" class="logo-image">
                                    <?php 
                                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                                        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                                        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="logo">';
                                    ?>
                                </a>
                                <!-- End of Logo Image -->
                                <!-- Slogan -->
                                <p class="slogan"> Öğren.
                                    <br>Yap.
                                    <br>İz Bırak. </p>
                                <!-- End of Slogan -->
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="footer-wrapper">
                                <!-- Scroll top -->
                                <span class="scroll-top js-scroll-top">
                                    <i class="fa fa-angle-up"></i>
                                </span>
                                <!-- End of Scroll top -->
                                
                                <!-- Footer Menu -->
                                <?php 
								wp_nav_menu(array(
                                            'theme_location' =>'primary',
                                            'container' => false,
                                            'menu_class' => 'footer-menu helper right',
                                        )
                                    ); 
                                ?>	
                                <!-- <ul class="footer-menu helper right">
                                    <li>
                                        <a href="/"> Anasayfa </a>
                                    </li>
                                    <li>
                                        <a href="/egitimler"> Eğitimler </a>
                                    </li>
                                    <li>
                                        <a href="/uygulamalar"> Uygulamalar </a>
                                    </li>
                                    <li>
                                        <a href="ipuclari"> İpuçları </a>
                                    </li>
                                </ul> -->
                                <!-- End of Footer Menu -->
                                <!-- Copyright -->
                                <p class="copyright helper right">
                                    <a href="/">smhthmc.com</a>, tüm hakları saklıdır. 2018 &copy; </p>
                                <!-- End of Copyright -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Footer Default -->
        </footer>
    
    </div> <!-- end of container -->

    <?php wp_footer(); ?>
    
</body>
</html>