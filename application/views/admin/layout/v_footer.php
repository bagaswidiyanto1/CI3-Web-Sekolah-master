 </div>
 <!-- /.col-lg-12 -->
 </div>
 <!-- /.row -->
 </div>
 <!-- /.container-fluid -->
 </div>
 <!-- /#page-wrapper -->

 </div>
 <!-- /#wrapper -->
 <!-- jQuery -->
 <script src="<?= base_url(); ?>template/back-end/js/jquery.min.js"></script>

 <!-- Bootstrap Core JavaScript -->
 <script src="<?= base_url(); ?>template/back-end/js/bootstrap.min.js"></script>

 <!-- Metis Menu Plugin JavaScript -->
 <script src="<?= base_url(); ?>template/back-end/js/metisMenu.min.js"></script>

 <!-- Custom Theme JavaScript -->
 <script src="<?= base_url(); ?>template/back-end/js/startmin.js"></script>

 <!-- DataTables JavaScript -->
 <script src="<?= base_url(); ?>template/back-end/js/dataTables/jquery.dataTables.min.js"></script>
 <script src="<?= base_url(); ?>template/back-end/js/dataTables/dataTables.bootstrap.min.js"></script>

 <!-- Date Picker JavaScript -->
 <script src="<?= base_url(); ?>datepicker/js/bootstrap-datepicker.js"></script>
 <!-- Page-Level Demo Scripts - Tables - Use for reference -->
 <script>
     initSample();


     $(function() {
         $("#tanggal").datepicker({
             format: 'yyyy/dd/mm'
         });
     });
     $(document).ready(function() {
         $('#dataTables-example').DataTable({
             responsive: true
         });
     });

     // Time out Alert
     window.setTimeout(function() {
         $(".alert").fadeTo(500, 0).slideUp(500, function() {
             $(this).remove();
         });
     }, 3000);
 </script>
 </body>

 </html>