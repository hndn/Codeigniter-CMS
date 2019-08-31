<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Yeni Eğitim Ekleme
            <a href="<?php print base_url("courses/new_form"); ?>" class="btn btn-outline btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Yeni Eğitim Ekle</a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body">

                <form action="<?php print base_url("courses/save") ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Başlık</label>
                        <input type="text" class="form-control" name="title" placeholder="Başlık">
                            <?php if(isset($form_error)){ ?><small class="pull-right" style="color: orangered;"> Boş geçilemez alan..</small><?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Açıklama</label>
                        <textarea class="m-0" name="aciklama" data-plugin="summernote" data-options="{height: 250}"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="control-demo-6" class="">Haber Türü</label>
                    </div><!-- .form-group -->
                    <div class="form-group" style="position: relative;">
                        <label for="datetimepicker5">Simple input with default date</label>
                        <input type="text" id="datetimepicker5" name="event_date" class="form-control" data-plugin="datetimepicker" data-options="{ defaultDate: Date(), format: 'YYYY-MM-DD HH:mm:ss' }">
                    </div><!-- .form-group -->
                        <div class="form-group image_upload_container">
                            <label for="exampleInputFile">Görsel Seçiniz</label>
                            <input type="file" id="exampleInputFile" name="img-url" class="form-control">
                        </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php print base_url("courses"); ?>" class="btn btn-danger btn-md btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->