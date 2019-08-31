<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
        <th><i class="fa fa-reorder"></i></th>
        <th>ID</th>
        <th>RESİM</th>
        <th>RESİM ADI</th>
        <th>DURUMU</th>
        <th>KAPAK</th>
        <th>İŞLEM</th>
        </thead>

        <tbody class="sortable" data-url="<?php print base_url("product/resrankSetter"); ?>">
        <?php foreach ($resim as $item){ ?>
            <tr id="ord-<?php print $item->id; ?>">
                <td><i class="fa fa-reorder"></i></td>
                <td><?php print $item->id ?></td>
                <td>
                    <img width="30" src="<?php print base_url("uploads/{$viewFolder}/$item->img_url"); ?>" class="img-responsive">
                </td>
                <td><?php print $item->img_url; ?></td>
                <td>
                    <input class="isActive"
                           data-url="<?php print base_url("product/resActiveSet/$item->id"); ?>" id=""
                           type="checkbox" data-switchery
                           data-color="#10c469" <?php print ($item->isActive) ? "checked" : ""; ?> />
                </td>
                <td>
                    <input class="isCover"
                           data-url="<?php print base_url("product/isCoverSet/$item->id/$item->product_id"); ?>" id=""
                           type="checkbox" data-switchery
                           data-color="#ff5b5b" <?php print ($item->isCover) ? "checked" : ""; ?> />
                </td>
                <td>
                    <button data-url="<?php print base_url("product/resdelete/$item->id/$item->product_id") ?>"
                            class="btn btn-sm btn-outline btn-danger remove-btn"><i
                            class="fa fa-trash"></i> Sil
                    </button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>