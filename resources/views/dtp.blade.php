<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DTP</title>
</head>

<body>
    @include('sweetalert::alert')
    <div class="container mt-5 border border-dark">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{ url('store') }}" enctype='multipart/form-data'>
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control required" placeholder="Nama" name="nama"
                            id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control required" placeholder="Alamat" name="alamat"
                            id="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="ktp" class="form-label">No. KTP</label>
                        <input type="text" class="form-control required" placeholder="No. KTP" name="ktp"
                            id="ktp" required>
                    </div>
                    <div class="mb-3">
                        <label for="pendidikan" class="form-label">Pendidikan:</label>
                        <div id="form-pendidikan">
                            <div class="input-pendidikan">
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="nama_sekolah" class="form-label">Nama Sekolah / Universitas</label>
                                        <input type="text" class="form-control required"
                                            placeholder="Nama Sekolah / Universitas" name="nama_sekolah[]"
                                            id="nama_sekolah" required>
                                    </div>
                                    <div class="col">
                                        <label for="jurusan" class="form-label">Jurusan</label>
                                        <input type="text" class="form-control required" placeholder="Jurusan"
                                            name="jurusan[]" id="jurusan" required>
                                    </div>
                                    <div class="col">
                                        <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                                        <input type="text" class="form-control tahun_masuk" placeholder="Tahun Masuk"
                                            name="tahun_masuk[]" id="tahun_masuk" maxlength="4" required>
                                    </div>
                                    <div class="col">
                                        <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                                        <input type="text" class="form-control tahun_lulus" placeholder="Tahun Lulus"
                                            name="tahun_lulus[]" id="tahun_lulus" maxlength="4" required>
                                    </div>
                                    <div class="col">
                                        <label for="button" class="form-label">Aksi</label>
                                        <br>
                                        <button type="button" class="btn btn-primary"
                                            id="btn-tambah-pendidikan">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label for="pengalaman" class="form-label">Pengalaman:</label>
                        <div id="form-pengalaman-kerja">
                            <div class="input-pengalaman-kerja">
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="perusahaan" class="form-label">Perusahaan</label>
                                        <input type="text" class="form-control required" placeholder="Perusahaan"
                                            name="perusahaan[]" id="perusahaan" required>
                                    </div>
                                    <div class="col">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control required" placeholder="Jabatan"
                                            name="jabatan[]" id="jabatan" required>
                                    </div>
                                    <div class="col">
                                        <label for="tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control tahun" placeholder="Tahun"
                                            name="tahun[]" id="tahun" maxlength="4" required>
                                    </div>
                                    <div class="col">
                                        <label for="keterangan" class="form-label">Keterangan</label>
                                        <input type="text" class="form-control required" placeholder="Keterangan"
                                            name="keterangan[]" id="keterangan">
                                    </div>
                                    <div class="col">
                                        <label for="button" class="form-label">Aksi</label>
                                        <br>
                                        <button type="button" class="btn btn-primary"
                                            id="btn-tambah-pengalaman-kerja">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="image" class="form-label required">Foto</label>
                            <br>
                            <img src="" alt="" width="50%" id="preview_image" class="mb-5">
                            <input type="file" id="image" class="form-control" name="image"
                                placeholder="image" accept="image/*" required />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 ">Simpan</button>
                </form>
            </div>
        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js">
    </script>
    {{-- Custom JS --}}
    <script src='{{ url("js/$script") }}'></script>
</body>

</html>
