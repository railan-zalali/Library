
<?php 
include 'proses/connection.php';
if (isset($_GET['page']) && $_GET['page']=='details' && isset($_GET['data']) && $_GET['data']==='pinjam') { 

  include 'pinjam.php';

} elseif (isset($_GET['page']) && $_GET['page']=='details' && isset($_GET['data']) && $_GET['data']==='kembali') {

  include 'kembali.php';

} elseif (isset($_GET['page']) && $_GET['page']=='details' && isset($_GET['data']) && $_GET['data']==='induk') {

  include 'induk.php';

}
mysqli_close($conn);
?>

