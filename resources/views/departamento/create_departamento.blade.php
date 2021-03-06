@extends('layouts.PlantillaMaster')
@section('content')
<br></br>

<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Departamentos</h4>
			</div>
      <div class="card-body">
        <form method="POST" action="{{route('departamento.store') }}"  role="form">
              {{ csrf_field() }}
              <div class="form-group">
                  <input type="text" name="departamento" id="departamento" class="form-control" autofocus  placeholder="Departamento">
                  @if ($errors->has('departamento'))
                   <span class="help-block">
                     <strong>{{ $errors->first('departamento') }}</strong>
                   </span>
                  @endif
              </div>
               <br>
                  <input type="submit"  value="Guardar" class="btn btn-success btn-block">
                  <a href="{{route('departamento.index')}}" class="btn btn-info btn-block" >Atrás</a>
 
             
            </form>
      </div>
			
		</div>
	</div>
</div>
@endsection
