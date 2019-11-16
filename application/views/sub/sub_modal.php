<div class="modal fade" id="modalForm" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="formData">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalForm">Form Input </h4>
                </div>
                <div class="modal-body">
                    <div class="body">
                        <div class="form-group form-group-lg">
                            <div class="form-line">
                                <input type="hidden" class="form-control" name="id">
                                <input type="text" class="form-control" name="nama_sub" required placeholder="Masukkan Nama Kategori...">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="form-line">
                                <label>kategori</label>
                                <select class="form-control show-tick form-group-lg" name="kategori">                            
                                    <option value="">-- Pilih kategori --</option>
                                    <?php foreach ($kategori as $a) { ?>
                                        <option value="<?php echo $a->id_kategori ?>"><?php echo $a->nama_kategori; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="form-line">
                                <label>Foto</label><br>
                                <input type="file" accept="image/*" name="foto"/>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="form-line">
                                <label>Keterangan</label><br>
                                <textarea  required="required" class="form-control summernote" name="keterangan" id=""></textarea>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!--<div id="summernote"></div>-->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info btn-sm"><li class="glyphicon glyphicon-print"></li> SAVE</button>
                            <button type="button" class="btn btn-danger  btn-sm" data-dismiss="modal"><i class="fa fa-close"></i>CLOSE</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#formData').submit(function (e) {
        e.preventDefault();
        var url;
        if (save_method === "add") {
            url = "<?php echo site_url('simpan-sub') ?>";
        } else {
            url = "<?php echo site_url('update-sub') ?>";
        }

        var data = new FormData($(this)[0]);
        $.ajax({
            url: url,
            data: data,
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {
                alert(textStatus);
                location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
            }
        });
    });

</script>