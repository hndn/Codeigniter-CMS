<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Ürünlerin Listesi
            <a href="<?php print base_url("product/new_form") ?>" class="btn btn-outline btn-primary btn-sm pull-right"><i
                        class="fa fa-plus"></i> Yeni Ürün Ekle</a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if (isset($add_error)) { ?><p class="alert alert-danger">Ekleme İşlemi Esnasında Sorun Yaşandı Lütfen
                Tekrar Deneyiniz..</p><?php } ?>
            <?php if (isset($add_success)) { ?><p class="alert alert-success">Ekleme İşlemi Başarılı Bir Şekilde
                Tamamlandı..</p><?php } ?>

            <?php if (isset($update_error)) { ?><p class="alert alert-danger">Düzenleme İşlemi Sırasında bir Sorun
                Oluştu..</p><?php } ?>
            <?php if (isset($update_success)) { ?><p class="alert alert-success">Düzenleme İşlemi Başarılı Bir Şekilde
                Gerçekleşti..</p><?php } ?>

            <?php if (empty($items)) { ?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir kayıt bulunamadı yeni ürün ekleyerek bu sayfası doldurabilirsiniz..</p>
                </div>
            <?php } else { ?>

                <div class="table-responsive">
                    <table class="table table-hover table-striped">

                        <thead>
                            <th><i class="fa fa-reorder"></i></th>
                            <th>ID</th>
                            <th>URL</th>
                            <th>BAŞLIK</th>
                            <th>AÇIKLAMA</th>
                            <th>DURUMU</th>
                            <th>İŞLEM</th>
                        </thead>
                        <tbody class="sortable" data-url="<?php print base_url("product/rankSetter"); ?>">
                        <?php foreach ($items as $item) { ?>

                            <tr id="ord-<?php print $item->id; ?>">
                                <td><i class="fa fa-reorder"></i></td>
                                <td><?php print $item->id; ?></td>
                                <td><?php print $item->url; ?></td>
                                <td><?php print $item->title; ?></td>
                                <td><?php print $item->description; ?></td>
                                <td>
                                    <input class="isActive"
                                           data-url="<?php print base_url("product/isActiveSet/$item->id") ?>" id=""
                                           type="checkbox" data-switchery
                                           data-color="#10c469" <?php print ($item->isActive) ? "checked" : ""; ?> />
                                </td>
                                <td>
                                    <button data-url="<?php print base_url("product/delete/$item->id") ?>"
                                            class="btn btn-sm btn-outline btn-danger remove-btn"><i
                                                class="fa fa-trash"></i> Sil
                                    </button>
                                    <a href="<?php print base_url("product/update_form/$item->id") ?>"
                                       class="btn btn-sm btn-outline btn-primary"><i class="fa fa-edit"></i> Düzenle</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->
</div>