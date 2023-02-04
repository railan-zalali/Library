<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    if (isset($_GET['page']) && $_GET['page']=='input' && isset($_GET['data']) && $_GET['data']==='input'){
        $nama_siswa = mysqli_real_escape_string($conn, $_POST["nama_siswa"]);
        $kelas = mysqli_real_escape_string($conn, $_POST["kelas"]);
        $abjad = mysqli_real_escape_string($conn, $_POST["abjad"]);
        $tanggal = mysqli_real_escape_string($conn, $_POST["tanggal"]);
        // $tanggal = mysqli_real_escape_string($db, trim(date('Y-m-d', strtotime($_POST['tanggal']))));
        $nama_buku = mysqli_real_escape_string($conn, $_POST["nama_buku"]);
        $jumlah_pinjam = mysqli_real_escape_string($conn, $_POST["jumlah_pinjam"]);
        $keterangan = "dipinjam";

        $sql = "INSERT INTO pinjaman (tanggal, nama_siswa, kelas, nama_buku, jumlah_pinjam, jumlah_kembali, keterangan)
        VALUES ('$tanggal', '$nama_siswa', '$kelas$abjad', '$nama_buku', '$jumlah_pinjam', '', '$keterangan')";

        if ($conn->query($sql) === TRUE) {
            header("location: ../index.php?page=input&data=input&message=success");
        } else {
        header("location: ../index.php?page=input&data=input&message=error");
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        mysqli_close($conn);

    } elseif (isset($_GET['page']) && $_GET['page']=='input' && isset($_GET['data']) && $_GET['data']==='induk') {
        $nomor_induk = mysqli_real_escape_string($conn, $_POST["nomor_induk"]);
        $judul_buku = mysqli_real_escape_string($conn, $_POST["judul_buku"]);
        $pengarang = mysqli_real_escape_string($conn, $_POST["pengarang"]);
        $penerbit = mysqli_real_escape_string($conn, $_POST["penerbit"]);
        $tempat_terbit = mysqli_real_escape_string($conn, $_POST["tempat_terbit"]);
        $asal_buku = mysqli_real_escape_string($conn, $_POST["asal_buku"]);
        $tanggal = mysqli_real_escape_string($conn, $_POST["tanggal"]);
        $tahun = mysqli_real_escape_string($conn, $_POST["tahun"]);
        $sql = "INSERT INTO buku_induk (id_buku_induk, nomor_induk, judul_buku, pengarang, penerbit, tempat_terbit, asal_buku, tanggal_masuk, tahun)
        VALUES ('', '$nomor_induk', '$judul_buku', '$pengarang', '$penerbit', '$tempat_terbit', '$asal_buku', '$tanggal', '$tahun')";
        if ($conn->query($sql) === TRUE) {
            header("location: ../index.php?page=input&data=induk&message=success");
        } else {
        header("location: ../index.php?page=input&data=induk&message=error");
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        mysqli_close($conn);
    }
    // var_dump($sql);
    // die();
}
?>
