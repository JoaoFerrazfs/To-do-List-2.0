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


<body>
    <header>
        <nav class="navbar fixed-top navbar-light bg-light  ">
            <div class="container d-flex">
                <a class="navbar-brand" href="#">
                    <img src="https://sites.google.com/a/aebenfica.org/apontamentos-tic/_/rsrc/1610321028447/gsuite/tarefas/tarefas_logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    To-do List
                </a>
            </div>

            <div class="d-flex">
                <li class="nav-item dropdown d-flex">
                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Bem vindo {{session()->get('user.name')}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                        <li><a class="dropdown-item" href="#">Meus Dados</a></li>
                        <li><a class="dropdown-item" href="#">Mudar ambiente</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/logout">Sair</a></li>
                    </ul>
                </li>

            </div>



        </nav>
    </header>

    
    <footer>

        <nav class="navbar fixed-bottom navbar-light bg-light">
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