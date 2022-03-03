@extends('templete.layout.templete3')

@section('titulo')
    <h1 id="t">Reconocer los conceptos de presentación distribuida, presentación remota, lógica o
        proceso distribuido, acceso a datos remotos
        y bases de datos distribuidas.</h1>
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
        <strong>Presentación distribuida:</strong><br>
        La capa de presentación se encuentra distribuida entre el cliente y el servidor, de manera que en el cliente se
        modifica o adapta la presentación que ofrece el servidor. Este tipo de sistemas tienen un difícil mantenimiento.


    </p>
    <span class="image main"><img src="http://isa.uniovi.es/domotica/Temas/T6/T6-ClienteServidor_archivos/image010.jpg"
            alt="" /></span>
    <p>
        <strong>Presentación remota:</strong><br>
        La capa de presentación de datos se ejecuta en el cliente totalmente. En ella se realizan las validaciones de los
        datos de entrada, el formateo de los de salida, etc. La lógica de negocio y el acceso a la base de datos se aloja en
        el servidor.

    </p>
    <span class="image main"><img src="http://isa.uniovi.es/domotica/Temas/T6/T6-ClienteServidor_archivos/image008.jpg"
            alt="" /></span>
    <p>
        <strong>Proceso distribuido:</strong><br>
        En este modelo, la capa que implementa la lógica de negocio se encuentra dividida entre el cliente y el servidor. El
        acceso a la base de datos se encuentra en el servidor y la capa de presentación en el cliente.

    </p>


    <span class="image main"><img src="http://isa.uniovi.es/domotica/Temas/T6/T6-ClienteServidor_archivos/image012.jpg"
            alt="" /></span>
    <p>
        <strong>Base de datos remota:</strong><br>
        Las capas de negocio y de presentación se ejecutan completamente en el cliente, mientras que la base de datos está
        completamente en el servidor.


    </p>


    <span class="image main"><img src="http://isa.uniovi.es/domotica/Temas/T6/T6-ClienteServidor_archivos/image016.jpg"
            alt="" /></span>
    <p>
        <strong>Base de datos distribuida</strong><br>
        Las capas de negocio y de presentación se ejecutan completamente en el cliente, mientras que la base de datos está
        distribuida entre el cliente y el servidor. Se requieren de mecanismos para asegurar la coherencia en los datos.



    </p>


    <span class="image main"><img src="http://isa.uniovi.es/domotica/Temas/T6/T6-ClienteServidor_archivos/image014.jpg"
            alt="" /></span>
@endsection
