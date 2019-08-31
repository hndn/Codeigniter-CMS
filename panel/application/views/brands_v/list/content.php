<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Referanslar Listesi
            <a href="<?php print base_url("references/new_form") ?>" class="btn btn-outline btn-primary btn-sm pull-right"><i
                        class="fa fa-plus"></i> Yeni Referans Ekle</a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if (empty($items)) { ?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir kayıt bulunamadı yeni referans ekleyerek bu sayfası doldurabilirsiniz..</p>
                </div>
            <?php } else { ?>

                <div class="table-responsive table-middle">
                    <table class="table table-hover table-striped content-container">

                        <thead>
                            <th><i class="fa fa-reorder"></i></th>
                            <th>ID</th>
                            <th>URL</th>
                            <th>BAŞLIK</th>
                            <th>AÇIKLAMA</th>
                            <th>GÖRSEL</th>
                            <th>DURUMU</th>
                            <th>İŞLEM</th>
                        </thead>
                        <tbody class="sortable" data-url="<?php print base_url("references/rankSetter"); ?>">
                        <?php foreach ($items as $item) { ?>

                            <tr id="ord-<?php print $item->id; ?>">
                                <td><i class="fa fa-reorder"></i></td>
                                <td><?php print $item->id; ?></td>
                                <td><?php print $item->url; ?></td>
                                <td><?php print $item->title; ?></td>
                                <td><?php print $item->description; ?></td>
                                <td>
                                    <div class="gallery-item" style="background: transparent;">
                                        <div class="thumb avatar-md" style="width: 30px;">
                                            <a href="<?php print base_url("uploads/$viewFolder/$item->img_url")?>" data-lightbox="gallery-1" data-title="<?php print $item->img_url; ?>">
                                                <img class="img-responsive" src="<?php print base_url("uploads/$viewFolder/$item->img_url")?>" alt=""></a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <input class="isActive"
                                           data-url="<?php print base_url("references/isActiveSet/$item->id") ?>" id=""
                                           type="checkbox" data-switchery
                                           data-color="#10c469" <?php print ($item->isActive) ? "checked" : ""; ?> />
                                </td>
                                <td>
                                    <button data-url="<?php print base_url("references/delete/$item->id") ?>"
                                            class="btn btn-sm btn-outline btn-danger remove-btn"><i
                                                class="fa fa-trash"></i> Sil
                                    </button>
                                    <a href="<?php print base_url("references/update_form/$item->id") ?>"
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