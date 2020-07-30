<html>
    <head>
        <title>@yield('title', 'Комментарии')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link href="/css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    <body>
		<header>
            <div class="layout flex space-between">
    			<div class="flex direction-column space-between">
    				<div>
        				<p>Телефон: {{ env('DEFAULT_PHONE') }}</p>
        				<p>Email: <a href="mailto:{{ env('DEFAULT_EMAIL') }}">{{ env('DEFAULT_EMAIL') }}</a></p>
        			</div>
        			<div>
    					<h1>Комментарии</h1>
    				</div>
    			</div>
				<img class="logo" src="/images/logo.png">
            </div>
		</header>
		@yield('content')
		<footer>
            <div class="layout flex align-end">
    			<div class="logo_size_small">
    				<img src="/images/logo_small.png">
    			</div>
    			<div>
    				<p>Телефон: {{ env('DEFAULT_PHONE') }}</p>
    				<p>Email: <a href="mailto:{{ env('DEFAULT_EMAIL') }}">{{ env('DEFAULT_EMAIL') }}</a></p>
    				<p>Адрес: <a href="#">{{ env('DEFAULT_ADRESS') }}</a></p>
    				<div class="copyright">© 2010 - 2014 Future. Все права защищены</div>
    			</div>
            </div>
		</footer>
    </body>
</html>