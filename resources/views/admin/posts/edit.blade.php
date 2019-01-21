@extends('master')

@section('content')
@section('title', 'Editando Post - '.$post->name)

<div class="row justify-content-center">

	<div class="col-sm-8">
		
		@if(session()->has('status'))

			<div class="alert alert-success alert-dismissible fade show" role="alert">
				 {{ session('status') }}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif

		<h2>Editar Post '{{ $post->name}}'</h2>

<form class="" action="{{ route('posts.update', $post->id) }}" method="POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Name" 
      value="{{ old('name') ?? $post->name}}">
      <span class="help-block">{{ $errors->first('name') }}</span>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputAuthor3" class="col-sm-2 col-form-label">Author</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputAuthor3" name="author" placeholder="Author" 
      value="{{ old('author') ?? $post->author}}">
      <span class="help-block">{{ $errors->first('author') }}</span>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputDescription3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <textarea  class="form-control" id="inputDescription3" name="description" placeholder="Description">{{ old('description') ?? $post->description }}</textarea>
      <span class="help-block">{{ $errors->first('description') }}</span>
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>
   @method('PUT')
  @csrf
</form>
</div>
</div>

@endsection