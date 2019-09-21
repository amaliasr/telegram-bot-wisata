

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Data Wisata</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="form-horizontal form-label-left" >

                      <?php echo validation_errors();  ?>
                      <?php echo form_open_multipart('wisata/Update/'.$this->uri->segment(3)); ?>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_wisata">Nama Wisata <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_wisata" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama_wisata" value="<?php echo $wisata[0]->nama_wisata?>"  type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="informasi">Informasi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="informasi" name="informasi" value="<?php echo $wisata[0]->informasi?>"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <!-- <button type="submit" class="btn btn-primary">Cancel</button> -->
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                      </div>

                   

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->