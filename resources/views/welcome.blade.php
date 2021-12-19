   <!DOCTYPE html>
   <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <title>@yield('title')</title>

       <!--Bootstrap -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

       <!--JS -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

       <!-- Styles -->
       <link rel="stylesheet" href="/css/styles.css">

   </head>


   <body style="background-color:#5F9EA0 ;" >
       <header class="mt-5">
           <nav class="navbar fixed-top navbar-light bg-light  ">
               <div class="container d-flex mt-5 ">
                   <a class="navbar-brand position-absolute top-0 start-50 mt-3 " href="#">
                       <img src="https://sites.google.com/a/aebenfica.org/apontamentos-tic/_/rsrc/1610321028447/gsuite/tarefas/tarefas_logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                       To-do List
                   </a>
               </div>

               <div class="d-flex position-absolute end-0 mt-1">
                   @auth
                   <a href="/dashboard" class="btn btn-outline-success me-3">Dashboard</a>
                   @endauth
                   <a href="/login" class="btn btn-outline-success me-3">Log in</a>
                   <a href="/register" class="btn btn-outline-success me-3">Registrar-se</a>


               </div>



           </nav>
       </header>

       <div class="container" style="color: white;" >
           <div style="margin-top: 90px;" class="d-grid p-2 gap-3" align="center">
               <h1>Bem Vindo a sua Agenda</h1>
           </div>

           <div style="margin-top: 30px;" class="d-grid p-2 gap-3" align="center">
               <h3>Ideia Inicial</h3>

           </div>

           <div  id="carouselExampleControls"  class="carousel carousel-dark slide" data-bs-ride="carousel">
               <div class="carousel-inner" style="border-radius: 20px;" >

                   <div class="carousel-item active">
                       <img src="/img/project/Index.png"  class="d-block w-100" alt="Index">
                   </div>
                   <div class="carousel-item">
                       <img src="/img/project/Login.png" class="d-block w-100" alt="login">
                   </div>
                   <div class="carousel-item">
                       <img src="/img/project/Cadastro.png" class="d-block w-100" alt="cadastro de nota">
                   </div>
                   <div class="carousel-item">
                       <img src="/img/project/Edicao.png" class="d-block w-100" alt="edicao de nota">
                   </div>
               </div>
           </div>


      
       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
       </button>
       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Next</span>
       </button>
       </div>





       </div>


       <footer style="width:5px;">

           <nav class="navbar mt-5 fixed-bottom navbar-light bg-light">
               <div class="container-fluid">
                   <a class="navbar-brand" href="#">
                       <img src="https://sites.google.com/a/aebenfica.org/apontamentos-tic/_/rsrc/1610321028447/gsuite/tarefas/tarefas_logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                       To-do List
                   </a>
               </div>
           </nav>


       </footer>





       <section class="content">
           @yield('content')
       </section>
   </body>

   </html>