<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doações</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}" />
</head>

<body>
    <header>
        <nav class="menu fixed">
            <ul>
                <li><a href="{{ route('site.index')}}">Início</a></li>
            <li><a href="{{ route('site.donate.create')}}" style="color: aliceblue; border-bottom:5px solid green">Ser Doador</a></li>
                <li><a href="{{ route('site.about')}}">Sobre</a></li>
                <li><a href="{{ route('site.contact')}}">Contactos</a></li>
                <li><a href="/">Entrar</a></li>
            </ul>
        </nav>
    </header>
    <main>
    @include('flash::message')
        @yield('content')
    </main>
    <footer>
        <div class="info">
            <section>
                <h3>Informação</h3>
                <ul>
                    <li><a href="{{route('site.about')}}">Sobre</a></li>
                    <li><a href="#">Projectos</a></li>
                <li><a href="{{ route('site.contact')}}">Contactos</a></li>
                </ul>
            </section>
            <section>
                <h3>Conta</h3>
                <ul>
                    <li><a href="#">Entrar</a></li>
                    <li><a href="#">Painel</a></li>
                    <li><a href="#">Registro</a></li>
                </ul>
            </section>
        </div>
        <hr color="#fff" />
        <div class="copy">
            <p>
                &copy; Doações - Todos os direitos reservados
            </p>
            Ajude alguém a ser feliz
        </div>
    </footer>
</body>

</html>
