<div class="right_col" role="main">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Kategori</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Kategori</th>
                                            <th>Gambar</th>
                                            <th>Di Post Pada</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                      <?php
                                $no = 1;
                                foreach ($berita as $b) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $b->jdl_news ?></td>
                                        <td><?php echo $b->ket_news ?></td>
                                        <td><?php echo $b->nama_kategori ?></td>
                                        <td><img src="<?php echo base_url('assets/news/') . $b->foto_news ?>" class="img-thumbnail" /></td>
                                        <td><?php echo $b->post_on ?></td>
                                        <td>
                                            <a href="<?php echo site_url('update-berita/'.$b->id_news)?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Edit</a>
                                              <butto<button id="hapus" onclick="remove('<?php echo $b->id_news ?>')" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i>Delete</button>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>

</div>
<script>
    function remove(id) {
        var con = confirm("Hapus Data?");
        if (con) {
            var del = "<?php echo site_url('news/hapus_berita/') ?>";
            $.ajax({
                url: del,
                type: 'POST',
                data: {'id': id},
                success: function (data, textStatus, jqXHR) {
                    alert(textStatus);
                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        } else {

        }
    }
</script>