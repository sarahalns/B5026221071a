<html lang="en">

<head>
    <title>Radjo Pisang Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/mystyle1.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito&family=Nunito:wght@900&family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <header id="header">
        <nav class="w-full">
            <div class="flex justify-between items-center sm:px-10 md:px-20 py-3 bg-white">
                    <a data-identity="logo" href="/id">
                        <img src="{{asset('img/logorp.png')}}">
                    </a>
            </div>
            <ul class="header_navbarUl md:flex flex-row justify-center bg-white bg-opacity-70 capitalize items-center sm:hidden">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
    </header>

    <div class="container-fluid px-0 ">
        <!--Home Page-->
        <div class="homepage" id="home" >
            <h1 >Radjo Pisang</h1>
            <h5>est.2017</h5>
            <h3>Olahan Pisang Ter-baik dan Ter-enak No 1 Indonesia</h3>
        </div>

        <!--About Us Page-->
        <div class="aboutpage" id="about">
            <div class="row">
                <div class="col-6 ">
                    <h2>About Us</h2>
                    <br>
                    <p>Kami adalah penyedia olahan pisang dengan beragam topping lezat dan harga terjangkau. Menghadirkan sensasi rasa yang unik, kami memadukan kelezatan pisang dengan berbagai pilihan topping, mulai dari cokelat, keju, karamel, hingga berbagai saus spesial</p>
                    <p>Setiap product yang kami sajikan diracik dengan cermat dan dengan bahan-bahan berkualitas tinggi. Kami berkomitmen untuk memberikan pengalaman kuliner yang tak terlupakan dengan cita rasa yang tak tertandingi</p>
                  </div>
                <div class="col-6">
                    <img src="{{asset('img/rp2.JPG')}}" class="float-right" width="60%">
                </div>
            </div>
        </div>

        <!--Location Page-->
        <div class="locationpage" id="location">
            <div class="row">
                <h3 class="text-white mx-auto">OUR LOCATION</h3>
            </div>
            <br>

            <div class="container w-75 ">
            <div class="row">
                    <div class="card col-4" style="width:400px">
                      <img class="card-img-top" src="{{asset('img/rp5.JPG')}}" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title">Tulungagung</h4>
                        <p class="card-text">Jl.Pangeran Antasari, Kenayan, Tulungagung</p>
                        <a href="https://maps.app.goo.gl/o5Qeqnj1yKEF41WH6" class="btn btn-primary">See on Maps</a>
                      </div>
                    </div>

                    <div class="card col-4" style="width:400px">
                      <img class="card-img-top" src="{{asset('img/rp5.JPG')}}" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title">Blitar</h4>
                        <p class="card-text">Jalan TGP(Sampimg Makam)</p>
                        <a href="https://maps.app.goo.gl/o5Qeqnj1yKEF41WH6" class="btn btn-primary">See on Maps</a>
                      </div>
                    </div>

                    <div class="card col-3 " style="width:400px">
                        <img class="card-img-top" src="{{asset('img/maps.jpeg')}}" alt="Card image" style="width:100%" >
                        <div class="card-body">
                          <h4 class="card-title">Kediri</h4>
                          <p class="card-text">Coming Soon!</p>
                        </div>
                      </div>
            </div>
            </div>
        </div>

        <!--Menu Page-->
        <div class="row float-left"></div>
        <div class="menupage" id="menu">
            <h1 class="text-white ml-auto">OUR MENU</h1>
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('img/rp6.jpg')}}" alt="Los Angeles">
                    <div class="carousel-caption">
                      <h3>Nugget Pisang</h3>
                      <p>Kriuk diluar lembut didalam</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/rp8.jpg')}}" alt="Chicago">
                    <div class="carousel-caption">
                      <h3>Pisang Cocol</h3>
                      <p>Tinggal cocol, bye ribet</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/rp7.jpg')}}" alt="New York">
                    <div class="carousel-caption">
                      <h3>Pisang Coklat</h3>
                      <p>Kulit yang crispy dan enak</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
        </div>
        </div>


    </div>

    <footer id="contactpage">
        <div class="contactpage" id="contact">
          <form action="https://google.com" method="get" onsubmit="return validateForm();">
            <div class="contact_form">
              <h1 class="contact__title font-semibold text-lg mx-auto">Kirimkan kami pesan</h1>

              <div class="flex flex-col mt-4">
                <label for="nama">Nama</label>
                <input class="form-control" placeholder="Masukkan nama anda disini" id="nama"required >
              </div>

              <div class="flex flex-col mt-4">
                <div>
                  <label for="whatsapp">Nomor WhatsApp:</label>
                  <input type="text"class="form-control" placeholder="Nomor WhatsApp" id="whatsapp" required >
                  <div id="whatsapp" class="btn-danger"></div>
              </div>
              </div>


              <div class="flex flex-col mt-4">
                <label for="email">E-mail</label>
                <input class="form-control" placeholder="Masukkan email anda disini" id="email" required >
              </div>

              <div class="flex flex-col mt-4">
                <label for="instagram">Instagram</label>
                <input class="form-control" placeholder="Masukkan Instagram anda disini" id="instagram" required >
              </div>

              <div class="flex flex-col mt-4">
                <label for=pesan">Pesan</label>
                <input class="form-control" placeholder="Masukkan pesan anda disini" id="pesan" >
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
    </footer>

    <div class="penutup">
      <h3 class="ml-5 mr-3">Tetap Terhubung!</h3>
      <p>Promo dan diskon menarik akan kami informasikan</p>

      <p class="ml-5">Sarah Auliannisa(5026221071)</p>
    </div>
</body>
