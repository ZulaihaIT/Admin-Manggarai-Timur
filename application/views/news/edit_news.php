<?php $this->load->view('headfoot/header'); ?>
<div class="right_col" role="main">
 <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Berita</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                     <?php echo form_open_multipart(site_url('News/insert')) ?>
                  <div class="x_content">
                    <br />
                    <form data-parsley-validate class="form-horizontal form-label-left">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">JUDUL
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                         <input type="text" name="judul" value="<?php echo $berita->jdl_news ?>" class="form-control" placeholder="Judul" required/>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Kategori
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <select class="form-control show" required name="kategori">
                                        <option value="">--Silahkan Pilih--</option>
                                        <?php foreach ($kate as $l) { ?>
                                            <option value="<?php echo $l->id_kategori ?>" <?php echo ($l->id_kategori == $berita->id_kategori ? 'selected' : "") ?>><?php echo $l->nama_kategori ?></option>
                                        <?php } ?>
                                    </select>
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Gambar
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                         <input type="file" name="file_gambar" value="" class="form-control" required="" placeholder="Masukan Gambar">
		        <img class="img-responsive thumbnail" src="<?php echo base_url('assets/news/') .$berita->foto_news ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Konten
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea id="ckeditor" name="konten-berita" required=""><?php echo $berita->ket_news ?></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
			  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                   <?php echo form_close() ?>
                  </div>
                </div>
              </div>
            </div>
</div>
<?php $this->load->view('headfoot/footer'); ?>

