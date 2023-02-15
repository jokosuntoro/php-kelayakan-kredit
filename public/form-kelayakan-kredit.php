<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>:: Kelayakan Kredit ::</title>
</head>

<body>
    <div class="container">
        <h4 class="text-primary text-center mt-5">
            Sistem Cerdas Prediksi Kelayakan Kredit
        </h4>
        <form action="act-kelayakan-kredit.php" method="POST" class="form-horizontal">
            <fieldset>
                <div class="form-row mt-3">

                    <!-- START: INPUT TEXT -->
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Nama Lengkap</label>
                        <div>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <!-- END: INPUT TEXT -->

                    <!-- START: DROPDOWN -->
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Penghasilan</label>
                        <div>
                            <select name="penghasilan" class="form-control">
                                <option value="" selected>-- Pilih Penghasilan --</option>
                                <option value="rendah">Rendah (0-2.500.000)</option>
                                <option value="sedang">Sedang (2.500.001-5.000.000)</option>
                                <option value="tinggi">Tinggi (Lebih dari 5.000.000)</option>
                            </select>
                        </div>
                    </div>
                    <!-- END: DROPDOWN -->

                    <!-- START: DROPDOWN -->
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Pekerjaan</label>
                        <div>
                            <select name="pelajar" class="form-control">
                                <option value="" selected>-- Pilih Pekerjaan --</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <!-- END: DROPDOWN -->

                    <!-- START: RADIO -->
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Hubungan Sosial</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sosial" value="baik">
                            <label class=" form-check-label">
                                Baik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sosial" value="buruk">
                            <label class="form-check-label">
                                Buruk
                            </label>
                        </div>
                    </div>
                    <!-- END: RADIO -->

                    <!-- START: RADIO -->
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Status Kontrak</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="HM">
                            <label class=" form-check-label">
                                Hak Milik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="kontrak">
                            <label class="form-check-label">
                                Kontrak
                            </label>
                        </div>
                    </div>
                    <!-- END: RADIO -->

                    <!-- START: SUBMIT BUTTON -->
                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-primary btn-md mr-2">Proses</button>
                        <button type="reset" class="btn btn-danger btn-md">Cancel</button>
                    </div>
                    <!-- END: SUBMIT BUTTON -->
            </fieldset>
        </form>
    </div>
</body>

</html>