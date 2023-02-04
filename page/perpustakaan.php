<div class="container my-5 py-5">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title text-bold">Input Data Pinjam</h2>
        </div>
        <div class="card-body">
          <form action="../perpus/proses/submit.php?page=input&data=input" method="post">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" required autofocus>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="kelas" class="form-label">Kelas</label>
                  <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                    <option selected> --= Pilih Kelas =--</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                  </select>
                </div>
                <div class="col">
                  <label for="kelas" class="form-label">-</label>
                  <select class="form-select" aria-label="Default select example" name="abjad" id="abjad">
                    <option selected> --= Pilih Kelas =--</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                  </select>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" required readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="nama_buku" class="form-label">Nama Buku</label>
                  <input type="text" class="form-control" name="nama_buku" id="nama_buku" required>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="jumlah_pinjam" class="form-label">Jumlah Pinjam</label>
                    <input type="number" class="form-control" name="jumlah_pinjam" id="jumlah_pinjam" required>
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="jumlah_kembali" class="form-label">Jumlah Kembali</label>
                    <input type="text" class="form-control" name="jumlah_kembali" id="jumlah_kembali" required readonly>
                  </div>
                </div>
                
                <input type="hidden" class="form-control" name="keterangan" id="keterangan" value="dipinjam" required>
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
