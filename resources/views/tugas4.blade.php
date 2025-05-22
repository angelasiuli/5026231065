<html>

<head>
    <title>
        Pendaftaran Classroom
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background-color: #e3f2fd;
            padding-top: 50px;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            margin-bottom: 20px;
            color: #007bff;
        }
    </style>

    <script>
        function validasi() {
            var nrp = document.getElementById("nrp").value;
            var nama = document.getElementById("nama").value;
            //cek sudah diisi atau belum, ga boleh kosong
            if (isNaN(nrp)) {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "NRP harus berupa angka!",
                    icon: "error"
                });
                return false;
            }

            if (nrp.length == 0) {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "NRP tidak boleh kosong!",
                    icon: "error"
                });
                return false;
            }

            if (nrp.length != 10) {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "NRP harus diisi 10 digit!",
                    icon: "error"
                });
                return false;
            }

            if (nrp[0] !== "5") {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "NRP harus dimulai dengan angka 5!",
                    icon: "error"
                });
                return false;
            }

            if (nama.length == 0) {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "Nama tidak boleh kosong!",
                    icon: "error"
                });
                return false;
            }
        }
        // default return true;
    </script>
</head>

<body>

    <div class="container">
        <form action="https://google.co.id" method="get" onsubmit="return validasi();">
            <h3>Form Pendaftaran</h3>
            NRP:
            <input type="text" name="nrp" id="nrp" class="form-control"
                placeholder="Silahkan diisi 10 digit NRP, harus angka, harus diisi.">
            <br>
            Nama:
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Isikan nama peserta yang valid!">
            <input type="submit" class="btn btn-success" value="Daftar">
        </form>
    </div>
</body>

</html>
