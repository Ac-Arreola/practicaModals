
<!-- Modal -->
{{--Cambiamos el id y el aria-labellely--}}
<div class="modal fade" id="modalAgregar" data-bs-backdrop="static" 
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAgregar" 
            aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

    {{--header--}}
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Agregar recuerdo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

    {{--body--}}
        <div class="modal-body">

          <div class="card text-center  mb-5 ">

            <div class="card-header fw-bold"> 
                QUERIDO DIARIO !... 
            </div>

            <div class="card-body">
             
                <form  class="m-4" method="post" action="{{route('recuerdo.store')}}">
                    
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-bold" > Título : </label>
                        <input  type="text" class="form-control"
                                        name="txtTitulo" 
                                        placeholder="ingrese un titulo" 
                                        value="{{old('txtTitulo')}}"
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
                                        value="{{old('txtRecuerdo')}}"
                                        />
                                        <p class="text-warning fst-italic fw-bold">
                                        {{$errors->first('txtRecuerdo')}}
                                        </p> 
                    </div>
 
                    
            </div>

            <div class="modal-footer text-muted">
                <div class="d-grid gap-2 col-6 mx-auto mt-2 mb-2">
                    <button class="btn btn-warning fw-bold" type="submit"> Guardar recuerdo </button>

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            
        </form>
            </div>

          </div>
        </div>

    {{--footer--}}
        

      </div>
    </div>
  </div>

