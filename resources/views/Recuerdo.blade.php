@extends('Plantilla')

@section('contenido')





    {{-- importamos el modal agregar --}}
    @include('modalAgregar')

    {{-- alert --}}
    @if (session()->has('confirmacion'))
        {!! "<script>
            Swal.fire(
            'Bien hecho!',
            'Tu recuerdo se guardó!',
            'success'
            )
            </script>
        " !!}
    @endif

    @if (session()->has('Actualizar'))
        {!! "<script>
            Swal.fire(
            'Bien hecho!',
            'Tu recuerdo se actualizó!',
            'success'
            )
            </script>
        " !!}
    @endif

    @if (session()->has('Eliminar'))
        <script>
            Swal.fire(
                'Bien hecho!',
                'Tu recuerdo se eliminó correctamente!',
                'success'
            )
        </script>
    @endif




    <h1 class="display-1 mt-4 mb-4 text-center fw-bold"> Consultar Recuerdos </h1>

    <div class=" container col-md-6 mt-5 mb-5 d-grid gap-2">
        <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#modalAgregar">
            <i class="bi bi-plus-circle-fill"></i> Agregar Recuerdo
        </button>
    </div>


    {{-- for each para iterar cada uno de los recuerdos
    consulta rec que voy a iterar a traves de consulta y que quiero acceder al campo fecha --}}
    @foreach ($ConsultaRec as $consulta)
        {{-- usamos un grid para decirle que solo ocupe 6 espacios --}}
        <div class="container col-md-6 mb-5">


            {{-- card para iterar los registros --}}
            <div class="card text-center">

                {{-- card header --}}
                <div class="card-header">
                    <h5 class="text-primary text-center"> {{ $consulta->fecha }} </h5>
                </div>

                {{-- card body --}}
                <div class="card-body">

                    <h5 class="card-title"> {{ $consulta->titulo }} </h5>
                    <p class="card-text"> {{ $consulta->recuerdo }} </p>
                </div>

                {{-- card footer --}}
                <div class="card-footer text-muted">

                    {{-- <a href="#" class="btn btn-warning">A</a> --}}
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalActualizar{{$consulta->idRecuerdos}}">
                        {{-- data-bs-target="#modalActualizar{{$consulta->idRecuerdos}}" > --}}
                        <i class="bi bi-pencil-square"></i>Actualizar Recuerdo
                    </button>

                    {{-- <a href="#" class="btn btn-danger">E</a> --}}
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar{{$consulta->idRecuerdos}}">
                        <i class="bi bi-trash-fill"></i>Eliminar Recuerdo
                    </button>

                </div>
                

        </div>
        {{-- importamos el modal actualizar --}}
        @include('modalActualizar')

        {{-- importamos el modal eliminar --}}
        @include('modalEliminar')
    </div>
    @endforeach
@stop
