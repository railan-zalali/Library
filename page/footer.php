<!-- Optional JavaScript; choose one of the two! -->
<script>
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();

  today = yyyy + '-' + mm + '-' + dd;
  document.getElementById("tanggal").value = today;
  document.getElementById("tahun").value = today;


  // document.getElementById("tahun").addEventListener("input", function() {
  //   this.value = this.value.slice(0, 4);
  // });

// const date = new Date("2022-07-25");
// const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
// const formattedDate = date.toLocaleDateString("id-ID", options);
// console.log(formattedDate);


</script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="dist/dist/js/bootstrap.bundle.min.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  // $(document).ready(function(){
  //   $('#myModal').on('show.bs.modal', function (event) {
  //     var button = $(event.relatedTarget)
  //     var id_pinjam = button.data('id_pinjam')
  //     var nmsiswa = button.data('nmsiswa')
  //     var kelas = button.data('kelas')
  //     var jmlpinjam = button.data('jmlpinjam')
  //     var jmlkembali = button.data('jmlkembali')
  //     var keterangan = button.data('keterangan')
  //     var modal = $(this)
  //     modal.find('.modal-body #id_pinjam').val(id_pinjam)
  //     modal.find('.modal-body #nmsiswa').val(nmsiswa)
  //     modal.find('.modal-body #kelas').val(kelas)
  //     modal.find('.modal-body #jmlpinjam').val(jmlpinjam)
  //     modal.find('.modal-body #jmlkembali').val(jmlkembali)
  //     modal.find('.modal-body #keterangan').val(keterangan)
  //   })
  // });
</script>





</script>





<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

</body>
</html>