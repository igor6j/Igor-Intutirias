@extends('layouts.admin')
@section('contenedor')

<div class="row">
	<div class="col-lg-4">
		
	</div>

	<div class="col-lg-4">
		<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modificar Categoria</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('categorias.update',$id_cat)}}" method="POST">
              	@csrf
              	@Method('PUT')
                <div class="card-body">                  
                  <div class="form-group">
                    <label for="descripcion">Descripcion Categoria</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$categorias->descripcion}}" >
                    @error('descripcion')
                      <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Editar</button>
                </div>
              </form>
            </div>
	</div>
	<div class="col-lg-4">
		
	</div>

	
</div>

@endsection