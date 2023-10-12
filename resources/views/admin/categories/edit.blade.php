@extends('layouts.admin')

@section('content')

<div class="d-flex align-items-center justify-content-center my-5"> 

	<form action="{{ route('admin.categories.update', $category) }}" method="POST" style="min-width: 320px;" enctype="multipart/form-data">
		
		<h4>categorie aanpassen</h4>

		<div class="form-group">
			<label for="name">name</label>
			<input type="text" id="name" name="name" class="form-control" value="{{ old('name', $category->name) }}">
		</div>
		

		<button type="submit" class="form-control btn btn-primary my-2">Opslaan</button>
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
	</form>
	
    <div style="min-width: 320px; nargin:0 50px;">
        <h4>producten</h4>
        <ul>
            @foreach($category->products as $product)
                <li>{{($product->title)}}</li>
            @endforeach
        </ul>
    </div>
</div>

@endsection
