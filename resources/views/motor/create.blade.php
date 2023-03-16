@extends('admin.index')
@section('content')
<div class="container">
<form class="forms-sample" action="/admin/motor/store" method="post" enctype='multipart/form-data'>
  @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{old('name')}}">
                      </div>
                      <div class="form-group">	
	<label>Upload foto</label>
	<input type="file" name="foto" id="foto" class="form-control" value="{{old('foto')}}"  accept="image/*" >
</div>
                      <div class="form-group">
                        <label for="exampleInputName1">Price</label>
                        <input type="Number" class="form-control" id="exampleInputName1" placeholder="Harga" name="price" value="{{old('price')}}">
                      </div>
                      
      <div class="form-group after-add-more">
            <label for="">Admin</label>
            <select name="admin_id" class="form-control">
                <option>Silahkan Dipilih</option>
                @foreach($admin as $admin)
                <option value="{{$admin->id}}">{{$admin->name}}</option>
                @endforeach
            </select> 
            </button>
      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">CC</label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="CC" name="cc">
                      </div>
                      <div>
                          Model
	@foreach ( $model as $model )
	<label for="" class="form-check form-check-inline"></label>
	<input type="radio" class="form-check-input" value="{{ $model->id }}" name="model_id" id="job{{ $model->id}}" @if(is_array(old('model_id')) && in_array($model->id, old('model_id'))) checked @endif>
	<label class="form-check-label" for="inlineCheckbox1">
		{{ $model->name}}
		</label>
	@endforeach
  </div><br>
                      <div>
                          Kategori
	@foreach ( $categori as $categori )
	<label for="" class="form-check form-check-inline"></label>
	<input type="radio" class="form-check-input" value="{{ $categori->id }}" name="category_id" id="job{{ $categori->id}}" @if(is_array(old('model_id')) && in_array($categori->id, old('category_id'))) checked @endif>
	<label class="form-check-label" for="inlineCheckbox1">
		{{ $categori->name}}
		</label>
	@endforeach
  </div><br>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </form>
</div>
@endsection