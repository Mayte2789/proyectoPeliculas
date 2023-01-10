 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "icon" href="{{asset('img/moviez.jpg')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css">
   <title>Moviez</title>
   <style>
        body{
         background: url("https://cdn.pixabay.com/photo/2017/09/12/11/56/universe-2742113_960_720.jpg"); 
         background-repeat: no-repeat;
         background-size: 100vw 100vh ;
         z-index: -3;
         background-attachment:fixed:
        }
        @font-face {
         font-family:'Positive System' ;
         src: url('fonts/Positive System.otf');
        }
        .navbar-brand{
         font-family:'Positive System' ;
         font-size:35px;
        }
        html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }
       
   </style>
</head>

 <body> 
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
   
    <a class="navbar-brand" href="#">
      <img src="{{asset('img/camara.jpg')}}" alt="movies" width="60px">
    MOVIEZ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" >Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Estrenos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Accion</a></li>
            <li><a class="dropdown-item" href="#">Comedia</a></li>
            <li><a class="dropdown-item" href="#">Terror</a></li>
            <li><a class="dropdown-item" href="#">Romance</a></li>
            <li><a class="dropdown-item" href="#">Infantiles</a></li>
            <li><a class="dropdown-item" href="#">Documentales</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Ver mas</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <div>
         <<button type="button" class="btn btn-outline-light">Log in</button>
      </div>
      </div>
    </div>
  </div>
</nav>
<section class="regular slider">
    <div>
      <img src="https://www.decopeques.com/wp-content/uploads/2016/07/cine-infantil-2016-buscando-a-dory.jpg">
    </div>
    <div>
      <img src="https://1.bp.blogspot.com/-ewre5MI9jL4/UL0jnV6n84I/AAAAAAAAAFY/7nYqtSRVzYM/s1600/20120707_amazing_spiderman.jpeg">
    </div>
    <div>
      <img src="https://3.bp.blogspot.com/-SVz6OPuWQI4/UL0juFAQvGI/AAAAAAAAAFw/ffxLahaGWyY/s1600/Los_vengadores-965206445-large.jpg">
    </div>
    <div>
      <img src="https://2.bp.blogspot.com/-03KqXneP7eo/UL0jpUVz8PI/AAAAAAAAAFg/fFYrpWu4xEc/s1600/Cartelera-de-Cine-JUEVES-26-07-12.jpg">
    </div>
    <div>
      <img src="https://th.bing.com/th/id/R.a32d82ff5dcb6eff820cfb94894de8fe?rik=i5y9MmiCp5kkFQ&riu=http%3a%2f%2fcdn4.dibujos.net%2fcine%2fpeliculas%2f37324%2f535%2fmadagascar-3-123350.jpg&ehk=5cvmQsPH%2brYuo5f4vyJRQFtY5dSRbzXkOucxnyTcLZo%3d&risl=&pid=ImgRaw&r=0">
    </div>
    <div>
      <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/poster-toy-story-4-1561081661.jpeg?crop=0.9519576719576719xw:1xh;center,top&resize=480:*">
    </div>
  </section>
  <script src="http://kenwheeler.github.io/slick/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
     
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });

    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 </body>
 </html>