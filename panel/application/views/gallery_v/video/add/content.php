<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Yeni Marka Ekleme
            <a href="<?php print base_url("brands/new_form"); ?>" class="btn btn-outline btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Yeni Marka Ekle</a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body">

                <form action="<?php print base_url("brands/save") ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Başlık</label>
                        <input type="text" class="form-control" name="title" placeholder="Başlık">
                            <?php if(isset($form_error)){ ?><small class="pull-right" style="color: orangered;"> Boş geçilemez alan..</small><?php } ?>
                    </div>
                    <div class="form-group image_upload_container">
                        <label for="exampleInputFile">Görsel Seçiniz</label>
                        <input type="file" id="exampleInputFile" name="img-url" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php print base_url("brands"); ?>" class="btn btn-danger btn-md btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->