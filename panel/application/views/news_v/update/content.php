<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg"><?php print "<b>".$item->title."</b>"; ?> Kaydını Düzenliyorsunuz..
            <a href="" class="btn btn-outline btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Yeni Ürün Ekle</a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body">

                <form action="<?php print base_url("product/update/$item->id") ?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Başlık</label>
                        <input type="text" class="form-control" name="title" value="<?php print $item->title; ?>">
                            <?php if(isset($form_error)){ ?><small class="pull-right" style="color: orangered;">Hata Var..</small><?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Açıklama</label>

                        <textarea class="m-0" name="aciklama" data-plugin="summernote" data-options="{height: 250}"><?php print $item->description ?></textarea>

                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php print base_url("product"); ?>" class="btn btn-danger btn-md btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->