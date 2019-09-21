  <!--   Core JS Files   -->
  <script src="<?php echo base_url('assets/js/core/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/core/popper.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/core/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url('assets/js/plugins/chartjs.min.js')?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url('assets/js/plugins/bootstrap-notify.js')?>"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url('assets/js/Paper-dashboard.min.js?v=2.0.0')?>" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url('assets/demo/demo.js')?>"></script>

  <script src="<?php echo base_url(); ?>assets/jquery.dataTables.min.js"></script>

    <!-- <script src="<?php echo base_url('assets/js/lib/data-table/datatables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/data-table/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/data-table/dataTables.buttons.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/data-table/buttons.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/data-table/jszip.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/data-table/pdfmake.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/data-table/vfs_fonts.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/data-table/buttons.html5.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/data-table/buttons.print.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/data-table/buttons.colVis.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/data-table/datatables-init.js')?>"></script> -->

     <!-- <script type="text/javascript">
      $(document).ready(function() {
       $('#example').DataTable({
        "processing":true,
        "serverSide":true,
        // "dom"       :"lBrtip",
        //         "buttons"   : [
        //             'copy', 'excel', 'pdf' ],
        "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]],
        "ajax":{
          url : "<?php echo site_url('Wisata2/data_server')?>",
          type : "POST"
        },
        "columnDefs":
        [
         {
            "targets":0,
            "data":"idwisata",
          },

          {
            "targets":1,
            "data":"nama_wisata",
          },

          {
            "targets":2,
            "data":"informasi",
          },  

          {
          "targets":3,
          "data":null,
          "searchable":false,
          "render":function(data,type,full,meta){
            return '<a href="<?=site_url()?>/Wisata2/update/'+data["idwisata"]+'"><button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button></a><a href="<?=site_url()?>/Wisata2/delete/'+data["idwisata"]+'"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash" ></i></button></a>';
          }
          },
          
          ]
       });
       });
  </script> -->

  <script type="text/javascript">
    $(document).ready(function()
    {
      $('#table').DataTable();
    } );
  </script>
</body>

</html>
