@extends('templete.layout.templete4')

@section('titulo')
    <h1 id="t">Explicar el proceso de planificación en dos
        niveles.</h1>
@endsection

@section('imagen1')
@endsection

@section('subtitulo1')
    {{-- <h2>Computadoras centrales y dedicadas</h2> --}}
@endsection
@section('parrafoSub1')
    {{-- <span class="image main"><img
            src="https://www.consultorio-virtual.com/manual-de-usuario/lib/modelo-cliente-servidor.png"
            alt="" /></span> --}}
    <p>
        <strong>Planificación de dos niveles:</strong><br>
        Una forma más practica de manejar los procesos intercambiados a disco es el unos de un planificador de dos niveles.
        Primero se carga en memoria un subconjunto de los procesos ejecutables, luego, el planificador se limita a escoger
        procesos de este subconjunto durante cierto tiempo. Una vez efectuado el cambio, el planificador de bajo nivel otra
        vez se limita a ejecutar procesos que están en la memoria en ese momento, mientras el planificador de nivel superior
        se ocupa de trasladar procesos entre la memoria y el disco.



    </p>
    <span class="image main"><img
            src="https://tecnosoluciones.com/wp-content/uploads/2020/08/desbordamiento-300x164.png"
            alt="" /></span>
    @endsection
