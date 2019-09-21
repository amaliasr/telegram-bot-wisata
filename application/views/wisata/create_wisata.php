

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Wisata</h4>
        </div>
        <div class="modal-body">
         <?php echo form_open_multipart('wisata/create'); ?>
            <?php echo validation_errors();  ?>

            <div class="form-group">
              <label for="nama_wisata">Nama Wisata</label>
              <input type="text" class="form-control" name="nama_wisata" placeholder="Nama wisata">
            </div>

            <div class="form-group">
              <label for="informasi">Informasi </label>
              <input type="text" class="form-control" name="informasi" placeholder="informasi">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>

            <?php echo form_close(); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>