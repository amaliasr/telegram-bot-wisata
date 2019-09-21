<footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                <script>
                  document.write(new Date().getFullYear())
                </script>
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url()?>/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url()?>/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url()?>/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url()?>/assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url()?>/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>

  <script type="text/javascript">
      $(document).ready(function() {
       $('#example').DataTable({
        "processing":true,
        "serverSide":true,
        // "dom"       :"lBrtip",
        //         "buttons"   : [
        //             'copy', 'excel', 'pdf' ],
        "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]],
        "ajax":{
          url : "<?php echo site_url('wisata/data_server')?>",
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
            return '<a href="<?=site_url()?>/wisata/update/'+data["idwisata"]+'"><button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button></a><a href="<?=site_url()?>/wisata/delete/'+data["idwisata"]+'"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash" ></i></button></a>';
          }
          },
          
          ]
       });
       });
</script>

  </body>
</html>