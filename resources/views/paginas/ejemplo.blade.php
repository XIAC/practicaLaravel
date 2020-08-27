<h1>FORMULARIO EJEMPLO</h1>
<h2>Formulario Persona {{$nombre}}
{{isset($edad) && !is_null($edad) ? $edad : 'NO existe edad' }}</h2>
<!-- hacer con un if lo mismo  -->
@if(is_null($edad))
    NO existe edad
@else
    SI existe y es  {{$edad}}
@endif

<h3>Tabla de multiplicar</h3>
@for($i = 0 ; $i < 5; $i++)
    {{$i}} <br>
@endfor
@include('paginas.titulo' , array('nombre' => $nombre))
@foreach ($frutas as $miFruta)
    <p>{{$miFruta}}</p>
@endforeach
