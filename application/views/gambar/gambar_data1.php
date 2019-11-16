<?php $this->load->view('headfoot/header'); ?> 
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Media Gallery</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>

            <div class="clearfix"></div>
          </div>
          <button type="button" id="btnAdd" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i>Add gambar</button>
          <div class="x_content">

            <div class="row">
             <?php
             $no = 1;
             foreach ($data as $d) {
              ?>
              <div class="col-md-55">
                <div class="thumbnail">
                  <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="<?php echo base_url('assets/gambar/'). $d->gambar?>" />
                    <div class="mask">
                      <p><?php echo $d->nama_gambar?></p>
                      <p><?php echo date_format(date_create($d->tgl_add), "d-m-Y H:i:s") ?></p>

                    </div>
                  </div>
                  <div class="caption">
                   <button onclick="update('<?php echo $d->id_gambar ?>')" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i>Edit</button>
                   <button onclick="remove('<?php echo $d->id_gambar ?>')" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i>Delete</button> 
                 </div>
                 
               </div>
             </div>
           <?php }?>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
<?php $this->load->view('gambar/gambar_modal'); ?>
</div>
<?php $this->load->view('headfoot/footer'); ?>
<script>
  var save_method;
  $("#btnAdd").click(function () {
    $("#modalForm").modal('show');
    $("#formData")[0].reset();
    save_method = "add";
  });
  function remove(id) {
    var con = confirm("Hapus Data?");
    if (con) {
      var del = "<?php echo site_url('hapus-gambar/') ?>";
      $.ajax({
        url: del,
        type: 'POST',
        data: {id: id},
        success: function (data, textStatus, jqXHR) {
          alert(data);
          location.reload();
        },
        error: function (jqXHR, textStatus, errorThrown) {
          alert("error :" + errorThrown);
        }
      });
    }
  }
  function update(id) {
    save_method = 'update';
    $('#formData')[0].reset();

    $.ajax({
      url: "<?php echo site_url('gambar-id') ?>/" + id,
      type: "GET",
      dataType: "JSON",
      success: function (data)
      {
        $('[name="id"]').val(data.id_gambar);
        $('[name="gambar"]').val(data.nama_gambar);
        $('#modalForm').modal('show');
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        alert('Error get data from ajax');
      }
    });
  }
</script>