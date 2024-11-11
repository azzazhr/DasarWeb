<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Csrf Token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token']; ?>">

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.min.css">
    
    <title>Data Anggota</title>
</head>
<body>

    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php" style="color: #fff;">
            CRUD Dengan Ajax
        </a>
    </nav>

    <div class="container">
    <h2 align="center" style="margin: 30px;">Data Anggota</h2>
    <form method="post" class="form-data" id="form-data">
    <div class="row">
        <div class="col-sm-9">
            <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="id" id="id">
                <input type="text" name="nama" id="nama" class="form-control" required="true">
                <p class="text-danger" id="err_nama"></p>
            </div>
        </div>
        
        <div class="col-sm-3">
            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <input type="radio" name="jenis_kelamin" id="jkel1" value="L" required="true"> Laki-laki
                <input type="radio" name="jenis_kelamin" id="jkel2" value="P"> Perempuan
                <p class="text-danger" id="err_jenis_kelamin"></p>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
        <p class="text-danger" id="err_alamat"></p>
    </div>

    <div class="form-group">
        <label>No Telepon</label>
        <input type="number" name="no_tlp" id="no_tlp" class="form-control" required="true">
        <p class="text-danger" id="err_no_tlp"></p>
    </div>

    <div class="form-group">
        <button type="button" name="simpan" id="simpan" class="btn btn-primary">
            <i class="fa fa-save"></i> Simpan
        </button>
    </div>
</form>
    <hr>
    <div class="data"></div>
</div>

<div class="text-center">© <?php echo date('Y'); ?> Copyright:
    <a href="https://google.com/"> Desain Dan Pemrograman Web</a>
</div>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Mengaktifkan Token Keamanan
        $.ajaxSetup({
            headers: {
                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.data').load('data.php');

        // Insert the code from the image here
        $("#simpan").click(function() {
            var data = $(".form-data").serialize();
            var jkel1 = document.getElementById("jkel1").value;
            var jkel2 = document.getElementById("jkel2").value;
            var nama = document.getElementById("nama").value;
            var alamat = document.getElementById("alamat").value;
            var no_telp = document.getElementById("no_tlp").value;
        
            if (nama == "") {
                document.getElementById("err_nama").innerHTML = "Nama Harus Diisi";
            } else {
                document.getElementById("err_nama").innerHTML = "";
            }
            if (alamat == "") {
                document.getElementById("err_alamat").innerHTML = "Alamat Harus Diisi";
            } else {
                document.getElementById("err_alamat").innerHTML = "";
            }
            if (document.getElementById("jkel1").checked == false && document.getElementById("jkel2").checked == false) {
                document.getElementById("err_jenis_kelamin").innerHTML = "Jenis Kelamin Harus Dipilih";
            } else {
                document.getElementById("err_jenis_kelamin").innerHTML = "";
            }
            if (no_telp == "") {
                document.getElementById("err_no_tlp").innerHTML = "No Telepon Harus Diisi";
            } else {
                document.getElementById("err_no_tlp").innerHTML = "";
            }
        
            if (nama != "" && alamat != "" && (document.getElementById("jkel1").checked == true || document.getElementById("jkel2").checked == true) && no_telp != "") {
                $.ajax({
                    type: "POST",
                    url: "form_action.php",
                    data: data,
                    success: function() {
                        $('.data').load("data.php");
                        document.getElementById("id").value = "";
                        document.getElementById("form-data").reset();
                    },
                    error: function(response) {
                        console.log(response.responseText);
                    }
                });
            }
        });
    });
</script>
</script>

</body>
</html>