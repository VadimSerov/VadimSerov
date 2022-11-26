<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="http://code.jqury.com/jquery-3.3.1.min.js"></script>
</head>
<body class="bg-dark text-light">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-whtie border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">ITProger</h5>
        <nav class="my-2 my-md-0 mr-md-3 " >
            <a class="p-2 text-white" href="/">Главная</a>
            <a class="p-2 text-white" href="/about">Про нас</a>
            <a class="p-2 text-white" href="/review/all">Все отзывы</a>
			<a class="btn btn-outline-warning" href="/review">Отзывы</a>
        </nav>
    </div>

    <div class="container">
        @yield('main-content')
    </div>

</body>
</html>
