

<!-- Modal -->
{{--Cambiamos el id y el aria-labellely--}}
{{--<div class="modal fade" id="modalActualizar{{$consulta->idRecuerdos}}" data-bs-backdrop="static"--}}
<div class="modal fade" id="modalActualizar" data-bs-backdrop="static" 
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalActualizar" 
            aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

    {{--header--}}
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Editar recuerdo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

    {{--body--}}
        <div class="modal-body">
          <form  class="m-4" method="post" action="">
{{-- <form  class="m-4" method="post" action="{{route('recuerdo.update',$consultaId->idRecuerdos)}}">--}}
           
  @csrf
            {{--
              //disfrazate de put para que te deje pasar la ruta --}}
            {!! method_field('PUT')!!}                             

            <div class="mb-3">
                <label class="form-label fw-bold" > Título : </label>
                <input  type="text" class="form-control"
                                name="txtTitulo" 
                                placeholder="ingrese un titulo" 
                                value=" {{--  {{$consultaId->titulo}} --}} "
                                />
                               <p class="text-warning fst-italic fw-bold">
                                {{$errors->first('txtTitulo')}}
                               </p> 
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold" > Recuerdo : </label>
                <input  type="text" class="form-control"
                                name="txtRecuerdo" 
                                placeholder="ingrese el contenido del recuerdo" 
                                value=" {{--  {{$consultaId->recuerdo}}  --}} "
                                />
                                <p class="text-warning fst-italic fw-bold">
                                {{$errors->first('txtRecuerdo')}}
                                </p> 
            </div>

            
    </div>

    <div class="card-footer text-muted">
        <div class="d-grid gap-2 col-6 mx-auto mt-2 mb-2">
            <button class="btn btn-info fw-bold" type="submit"> Actualizar recuerdo </button>
    </div>
    
</form>
      
         
        </div>

    {{--footer--}}
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">entendido</button>
        </div>

      </div>
    </div>
  </div>

