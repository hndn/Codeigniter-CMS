<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Yeni Kullanıcı Ekleme
            <a href="<?php print base_url("users/new_form"); ?>" class="btn btn-outline btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Yeni Kullanıcı Ekle</a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body">

                <form action="<?php print base_url("users/save") ?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kullanıcı Adı</label>
                        <input type="text" class="form-control" name="user_name" placeholder="Kullanıcı Adı">
                            <?php if(isset($form_error)){ ?><small class="pull-right" style="color: orangered;"><?php print form_error("user_name"); ?></small><?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ad Soyad</label>
                        <input type="text" class="form-control" name="full_name" placeholder="Ad Soyad">
                        <?php if(isset($form_error)){ ?><small class="pull-right" style="color: orangered;"><?php print form_error("full_name"); ?></small><?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <?php if(isset($form_error)){ ?><small class="pull-right" style="color: orangered;"><?php print form_error("email"); ?></small><?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Şifre</label>
                        <input type="password" class="form-control" name="password" placeholder="Şifre">
                        <?php if(isset($form_error)){ ?><small class="pull-right" style="color: orangered;"><?php print form_error("password"); ?></small><?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Şifre Tekrarı</label>
                        <input type="password" class="form-control" name="re_password" placeholder="Şifre Tekrarı">
                        <?php if(isset($form_error)){ ?><small class="pull-right" style="color: orangered;"><?php print form_error("re_password"); ?></small><?php } ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php print base_url("users"); ?>" class="btn btn-danger btn-md btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->