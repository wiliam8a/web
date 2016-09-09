@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				Imagen <a href="{{ route('admin.slider.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i>Slider</a>
			</h1>
		</div>
		<div class="page">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Editar</th>
							<th>Eliminar</th>
							<th>Imagen</th>
							<th>Nombre</th>
							<th>Descripción</th>
						</tr>
					</thead>
					<tbody>
						@foreach($imagenes as $imagen)
							<tr>
								<td>
									<a href="{{ route('admin.slider.edit', $imagen) }}" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
								</td>
								<td>
									{!! Form::open(['route' => ['admin.slider.destroy', $imagen]]) !!}
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
        									<i class="fa fa-trash-o"></i>
        								</button>
        							{!! Form::close() !!}
								</td>
								<td>{{ $imagen->imagen }}</td>
								<td>{{ $imagen->name }}</td>
								<td>{{ $imagen->description }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<?php echo $products->render(); ?>
		</div>

	</div>
	
@stop