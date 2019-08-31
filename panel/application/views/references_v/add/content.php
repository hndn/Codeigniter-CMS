<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Yeni Haber Ekleme
            <a href="<?php print base_url("news/new_form"); ?>" class="btn btn-outline btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Yeni Haber Ekle</a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body">

                <form action="<?php print base_url("news/save") ?>" method="post" enctype="multipart/form-data">
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
                        <div id="control-demo-6" class="">
                            <select class="form-control news_types" name="news_type">
                                <option value="images" <?php print (isset($news_type) && $news_type == "images") ? "selected" : ""; ?>>Resim</option>
                                <option value="video" <?php print (isset($news_type) && $news_type == "video") ? "selected" : ""; ?>>Video</option>
                            </select>
                        </div>
                    </div><!-- .form-group -->
                    <?php if(isset($form_error)){ ?>
                        <div class="form-group image_upload_container" style="display: <?php print ($news_type == "images") ? "block" : "none"; ?>">
                            <label for="exampleInputFile">Görsel Seçiniz</label>
                            <input type="file" id="exampleInputFile" name="img-url" class="form-control">
                        </div>
                        <div class="form-group video_upload_container" style="display: <?php print ($news_type == "video") ? "block" : "none"; ?>">
                            <label for="exampleInputEmail1">Video URL</label>
                            <input type="text" class="form-control" name="video-url" placeholder="Video linkini buraya yapıştırınız.">
                            <small class="pull-right" style="color: orangered;"><?php print form_error("video_url")?> Boş geçilemez alan..</small>
                        </div>
                    <?php }else{ ?>
                        <div class="form-group image_upload_container">
                            <label for="exampleInputFile">Görsel Seçiniz</label>
                            <input type="file" id="exampleInputFile" name="img-url" class="form-control">
                        </div>
                        <div class="form-group video_upload_container">
                            <label for="exampleInputEmail1">Video URL</label>
                            <input type="text" class="form-control" name="video-url" placeholder="Video linkini buraya yapıştırınız.">
                        </div>
                    <?php } ?>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php print base_url("news"); ?>" class="btn btn-danger btn-md btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->