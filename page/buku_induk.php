<div class="container my-5 py-5">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title text-bold">INPUT BUKU INDUK</h2>
        </div>
        <div class="card-body">
          <form action="../perpus/proses/submit.php?page=input&data=induk" method="post">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="nomor_induk" class="form-label">Nomor Induk</label>
                    <input type="number" class="form-control" name="nomor_induk" id="nomor_induk" required autofocus>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="judul_buku" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" name="judul_buku" id="judul_buku" required>
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="pengarang" class="form-label">Nama Pengarang</label>
                    <input type="text" class="form-control" name="pengarang" id="pengarang" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="penerbit" class="form-label">Penerbit</label>
                      <input type="text" class="form-control" name="penerbit" id="penerbit" required>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="tempat_terbit" class="form-label">Tempat Terbit</label>
                      <input type="text" class="form-control" name="tempat_terbit" id="tempat_terbit" required>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="asal_buku" class="form-label">Asal Buku</label>
                      <input type="text" class="form-control" name="asal_buku" id="asal_buku" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="tanggal" class="form-label">Tanggal Masuk</label>
                      <input type="date" class="form-control" name="tanggal" id="tanggal" required readonly>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="tahun" class="form-label">Tahun</label>
                      <input type="date" class="form-control" id="tahun" name="tahun">

                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="submit" id="submit">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>