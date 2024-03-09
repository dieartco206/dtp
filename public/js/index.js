$(document).ready(function() {
    var i = 1;

    $(".tahun, .tahun_masuk, .tahun_lulus, #ktp").on("input", function () {
        let inputVal = $(this).val();
        inputVal = inputVal.replace(/\D/g, "");
        $(this).val(inputVal);
    });

    $("#btn-tambah-pendidikan").click(function() {
        var pendidikan = `
        <div class="input-pendidikan">
            <div class="row mb-3">
                <div class="col">
                    <label for="nama_sekolah-${i}" class="form-label">Nama Sekolah / Universitas</label>
                    <input type="text" class="form-control required"
                        placeholder="Nama Sekolah / Universitas" name="nama_sekolah[]"
                        id="nama_sekolah-${i}" required>
                </div>
                <div class="col">
                    <label for="jurusan-${i}" class="form-label">Jurusan</label>
                    <input type="text" class="form-control required" placeholder="Jurusan"
                        name="jurusan[]" id="jurusan-${i}" required>
                </div>
                <div class="col">
                    <label for="tahun_masuk-${i}" class="form-label">Tahun Masuk</label>
                    <input type="text" class="form-control tahun_masuk" placeholder="Tahun Masuk"
                        name="tahun_masuk[]" id="tahun_masuk-${i}" maxlength="4" required>
                </div>
                <div class="col">
                    <label for="tahun_lulus-${i}" class="form-label">Tahun Lulus</label>
                    <input type="text" class="form-control tahun_lulus" placeholder="Tahun Lulus"
                        name="tahun_lulus[]" id="tahun_lulus-${i}" maxlength="4" required>
                </div>
                <div class="col">
                    <label for="button" class="form-label"></label>
                    <br>
                    <button type="button" class="btn btn-danger btn-hapus-pendidikan">Hapus Pendidikan</button>
                </div>
            </div>
        </div>`;

        $("#form-pendidikan").append(pendidikan);
        i++;
    });

    $("#btn-tambah-pengalaman-kerja").click(function() {
        var pengalaman = `
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
                                        <label for="button" class="form-label"></label>
                                        <br>
                                        <button type="button" class="btn btn-danger btn-hapus-pengalaman">Hapus Pengalaman</button>
                                    </div>
                                </div>
                            </div>`;

        $("#form-pengalaman-kerja").append(pengalaman);
        i++;
    });

    $("#preview_image").hide();
    $("#image").change(function () {
        $("#preview_image").show();
        const file = this.files[0];
        console.log(file);
        if (file) {
            let reader = new FileReader();
            reader.onload = function (event) {
                console.log(event.target.result);
                $("#preview_image").attr("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

    $(document).on("click", ".btn-hapus-pendidikan", function() {
        $(this).closest(".input-pendidikan").remove();
    });

    $(document).on("click", ".btn-hapus-pengalaman", function() {
        $(this).closest(".input-pengalaman-kerja").remove();
    });
});
