<head>
    <title>Hallo Sarah!</title>
    <link rel="stylesheet" href="LayoutWeb.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;500;600;800&display=swap" rel="stylesheet">
    <script>
        function validateform()
        {
            var nrp = document.getElementById("nrp");
            var msg = document.getElementById("msg");

            //cek hanya yang invalid
            if(nrp.value == "") {
                nrp.focus();
                nrp.placeholder = "ex: 5026221112"
                alert("NRP harus diisi");
                return false;
            }

            //harus 10 digit
            if(nrp.value.length !=10){
                nrp.focus();
                alert("NRP harus 10 digit, Anda memasukkan " + nrp.value.length + " digit");
                return false;
            }

            //yang ada alfabet invalid
            if(isNaN(nrp.value) == true){
                nrp.focus();
                msg.innerHTML = "NRP harus angka!"; //ini kalo gamau pake alert
                //alert("NRP harus angka!");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="jumbotron"> Form validasi adalah mencegah pengiriman data ke server jika yang invalid atau tidak sesuai constraint database</div>
        <script>
            function validate()
            {
                console.log("baris 22") //untuk menjalankan debugging
                return false;
                console.log("baris 23")
                return true;
                console.log("baris 24")
                return false;
                //default return function adalah true
            }
        </script>
        <form action="https://google.com" method="get" onsubmit="return validateform()"> <!--form ada 2 method (post and get). post digunakan untuk secure (cth: password) dan get digunakan untuk nonsecure-->
            <div class="form-group">
                <label for="nrp"> NRP: </label>
                <input type="text" class="form-control" id="nrp">
                <div id="msg" class="btn-danger"></div>
            </div>

            <input type="submit" value="DAFTAR" class="btn btn-primary">
            <input type="reset" value="ULANGI" class="btn btn-warning">
        </form>
    </div>
</body>
