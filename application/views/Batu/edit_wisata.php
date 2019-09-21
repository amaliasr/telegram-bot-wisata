                    <div class="card">

                      <div class="card-header">
                        Edit <strong> Data Wisata </strong>
                      </div>

                      <div class="card-body card-block">

                        <?php echo validation_errors();  ?>
                        <?php echo form_open_multipart('Wisata2/edit/'.$this->uri->segment(3)); ?>

                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="nama_wisata" class=" form-control-label">Nama Wisata</label></div>
                            <div class="col-12 col-md-9"><input autocomplete="off" type="text" id="nama_wisata" name="nama_wisata" value="<?php echo $Wisata2[0]->nama_wisata?>" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="informasi" class=" form-control-label">Informasi </label></div>
                            <div class="col-12 col-md-9"><input autocomplete="off" type="text" id="informasi" name="informasi" value="<?php echo $Wisata2[0]->informasi?>" class="form-control"></div>
                          </div>

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                              <i class="fa fa-dot-circle-o"></i>Simpan
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>