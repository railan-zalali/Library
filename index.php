<?php 
include 'page/header.php';

if (empty($_GET['message'])){ 
  echo "";
} elseif ($_GET['message']=='success') {
  echo "<script>
  Swal.fire({
    position: 'center',
    icon: '" . $_GET['message'] . "',
    title: 'Data " . $_GET['message'] . " disimpan',
    showConfirmButton: false,
    timer: 1200
    });
    </script>";
  } elseif ($_GET['message']=='error') {
    echo "<script>
    Swal.fire({
      position: 'center',
      icon: '" . $_GET['message'] . "',
      title: '" . $_GET['message'] . " terjadi kesalahan',
      showConfirmButton: false,
      timer: 1200
      });
      </script>";
    } elseif ($_GET['message']=='berhasil_hapus') {
      echo "<script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Data behasil dihapus',
        showConfirmButton: false,
        timer: 1200
        });
        </script>";
      }elseif ($_GET['message']=='gagal_hapus') {
        echo "<script>
        position: 'center',
        icon: 'error',
        title: 'Data gagal dihapus',
        showConfirmButton: false,
        timer: 1200
        });
          </script>";

        }


        if (empty($_GET['page'])) {
         include 'page/beranda.php';	
       } elseif ($_GET['page']=='input' && $_GET['data']==='input'){
         include 'page/perpustakaan.php';
       } elseif ($_GET['page']=='input' && $_GET['data']==='induk'){
         include 'page/buku_induk.php';
       } elseif ($_GET['page']=='details' && $_GET['data']==='pinjam'){
         include 'page/details.php';
       } elseif ($_GET['page']=='details' && $_GET['data']==='kembali'){
         include 'page/details.php';
       } elseif ($_GET['page']=='details' && $_GET['data']==='induk'){
         include 'page/details.php';
       } elseif ($_GET['page']=='input_induk'){
         include 'page/buku_induk.php';
       } elseif ($_GET['page']=='detail_induk'){
         include 'page/buku_induk.php';
       } elseif ($_GET['page']=='laporan' && $_GET['data']==='buku'){
        include 'page/laporan.php';
      } elseif ($_GET['page']=='laporan' && $_GET['data']==='induk'){
        include 'page/laporan_buku_induk.php';
      } elseif ($_GET['page']=='ubah'){
        include 'proses/update.php';
      }

      include 'page/footer.php';
      ?>
