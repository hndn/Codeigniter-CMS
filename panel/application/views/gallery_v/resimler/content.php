<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <hr class="widget-separator">
            <div class="widget-body">
                <form data-url="<?php print base_url("product/refresh_image_list/$items->id"); ?>" action="<?php print base_url("product/images_upload/$items->id"); ?>" id="dropzone" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php print base_url("product/images_upload/$items->id"); ?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Dosyalarınızı buraya bırakabilir veya yüklemek için tıklayabilirsiniz.</h3>
                        <p class="m-b-lg text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title"><b><?php print $items->title; ?></b> Ürün Resimleri</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body image_list_v">
                <?php $this->load->view("{$viewFolder}/{$subViewFolder}/refresh/images_list_v"); ?>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->
</div>