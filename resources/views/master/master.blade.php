<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @section('header')
        ENCABEZADO PRINCIPAL
    @show
    <div style="background:yellow; margin:15px">
        @yield('content')
    </div>
    @section('footer')
        PIE DE PAGINA
    @show

</body>
</html>
