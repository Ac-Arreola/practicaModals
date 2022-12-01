@extends('plantilla')

@section('contenido')


@include('modalAgregar')

@if (session()->has('Actualizar'))
        {!! "<script>Swal.fire(
                'Correcto!',
                'Se ha editado el recuerdo!',
                'success'
              )</script>" !!}
    @endif
    @if (session()->has('confirmacion'))
        {!! "<script>Swal.fire(
                'Correcto!',
                'Se ha Registrado el recuerdo!',
                'success'
              )</script>" !!}
    @endif
    @if (session()->has('Eliminar'))
        {!! "<script>Swal.fire(
                'Correcto!',
                'Se ha eliminado el recuerdo!',
                'success'
              )</script>" !!}
    @endif

    <h1 class="display-1 mt-4 mb-4 text-center">Recuerdos </h1>
    <div class="container col-md-6 mb-5 mt-5 d-grid gap-2">
      <!-- Agregar -->
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAgregar">
        <i class="bi bi-plus-circle-fill"></i> Agregar Recuerdo
      </button>
    </div>
          
          

    @foreach ($ConsultaRec as $consulta)
        
    <div class="container col-md-6 mb-5 mt-5">

 

      <div class="card text-center">
            <div class="card-header">
                <h5 class="text-primary text-center"> {{$consulta->fecha}}</h5>
            </div>


            <div class="card-body">
              <h5 class="card-title"> {{$consulta->titulo}}  </h5>
              <p class="card-text"> {{$consulta->recuerdo}}    </p>
            </div>

            
            <div class="card-footer text-muted">

                <!-- Editar -->
                
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalActualizar{{$consulta->idRecuerdos}}">
                    <i class="bi bi-pencil-square"></i>Actualizar Recuerdo
                </button>


                <!-- Eliminar -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar{{$consulta->idRecuerdos}}">
                    <i class="bi bi-trash-fill"></i>Eliminar Recuerdo
                </button>
            </div>
            @include('modalActualizar')
            @include('modalEliminar')
          </div>
       </div>   
    </div>
    @endforeach

@stop