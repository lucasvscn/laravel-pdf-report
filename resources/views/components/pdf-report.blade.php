<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
    @php
        include config('laravel-pdf-report.css_path');
    @endphp
</style>
</head>
<body>
    @if (isset($header))
        <div id="header">
            {{ $header }}
        </div>
    @endif

    @if (isset($footer))
        <div id="footer">
            {{ $footer }}
        </div>
    @endif

    <div id="main">
        {{ $slot }}
    </div>
</body>
</html>
