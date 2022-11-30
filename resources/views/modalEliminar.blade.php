

<!-- Modal -->
{{--Cambiamos el id y el aria-labellely--}}
<div class="modal fade" id="modalEliminar" data-bs-backdrop="static" 
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEliminar" 
            aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

    {{--header--}}
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">¿Seguro que deseas eliminar?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

    {{--body--}}
        <div class="modal-body">
          ...
          <div class="card text-center  mb-5 ">

            <div class="card-header fw-bold"> 
                {{ date('D/M/Y') }}
            </div>

            <div class="card-body">
                

                    <div class="mb-3">
                        
                        <label class="form-label fw-bold" > <h2> ¿ Deseas eliminar el recuerdo? ... </h2></label>
                        <h3><label> {{-- {{$consultaId->titulo}} --}} </label></h3>
                        <label > {{-- {{$consultaId->recuerdo}} --}} </label>
                        
                    </div>
                    
            </div>

            <form method="POST" action="">
             {{--   <form method="POST" action="{{route('recuerdo.destroy')}}">   --}} 
                    
                @csrf
                {{--//disfrazate de delete para que te deje pasar la ruta--}}
                @method('delete')
                

            <div class="card-footer text-muted">
                    <a type="button" class="btn btn-warning fw-bold " href="{{route('recuerdo.index')}}" type="submit" > Cancelar </a>
                    
                    <button type="submit" class="btn btn-danger fw-bold " > si, autorizo </button>

               
            </div>
               </form>      
                    
                
            
            
            </div>

        </div>

    {{--footer--}}
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary"> si autorizo</button>
        </div>

      </div>
    </div>
  </div>

