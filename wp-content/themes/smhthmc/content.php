<!-- Header Back -->
<div class="header-back header-back-html header-back-small">
    <div class="header-back-container helper center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Page Info -->
                    <div class="page-info page-info-simple">
                        <h1 class="page-title">HTML5 Eğitimi - Başlangıç Seviyesi [Detaylı Anlatım]</h1>
                        <p class="page-description">HTML5'i baştan sona tüm detayları ile adım adım öğrenebilmeniz için sizlere bu eğitimi hazırladım. Bu yazıyı başlangıç noktanız olarak kabul ederek web tasarım ve yazılıma hızlı bir giriş yapabilirsiniz. </p>
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

            <?php if( has_post_thumbnail()): ?>

                <div class="col-xs-12 col-sm-4">
                    <div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
                </div>

                <div class="col-xs-12 col-sm-8">
                    <p><?php the_content(); ?></p>
                </div>

            <?php else: ?>

                <div class="col-xs-12">
                    <p><?php the_content(); ?></p>
                </div>

            <?php endif; ?>
        </div>
    </div>  
</div>
