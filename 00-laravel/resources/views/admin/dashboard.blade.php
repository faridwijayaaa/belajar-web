<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Berikan Meta Tag dan Meta Description -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Buat Icon  -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <!-- Judul Halaman  -->
    <title>..::Bootstrap::..</title>
    <!-- Panggil CSS Boostrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Bagian Header  -->
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{ asset('images/bootstrap.png') }}"
                        height="41"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Beranda</a></li>
                    <li><a href="#">Menu 1</a></li>
                    <li><a href="#">Menu 2</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Menu Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach ($menus as $menu)
                                <li><a href="#">{{ $menu->menu }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Menu Kanan 1</a></li>
                    <li><a href="#">Menu Kanan 2</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <!-- Bagian Isi  -->
    <div class="container">

        <table class="table table-bordered" width="100%">
            <tr>
                <th>ID</th>
                <th>MENU</th>
                <th>Author</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->post }}</td>
                    <td>{{ $post->author }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <!-- Bagian Footer  -->
    <footer class="footer">
        <div class="container">
            <p class="text-muted"><a href="http://getbootstrap.com/" target="_blank"
                    title="responsive website template">Bootstrap CSS Grid</a>. Developed by <a
                    href="http://getbootstrap.com" target="_top" title="responsive website template">bootstrap</a>.<br>
            </p>

        </div>
    </footer>
    <!-- Load Java Script Bootstrap -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
