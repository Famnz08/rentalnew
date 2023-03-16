@extends('admin.index')
@section('content')
<div class="container">
<form class="forms-sample" action="/admin/motor/update/{{$motor->id}}" method="POST" enctype='multipart/form-data'>
  @csrf
  @method('put')
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{old('name',$motor->name)}}">
                      </div>
                      <div class="form-group">
		<label>Masukkan foto</label>
	<input class="form-control" type="file" name="foto" placeholder="Foto" accept="image/*" value="{{old('foto',$motor->foto)}}" >
</div>
                      <div class="form-group">
                        <label for="exampleInputName1">CC</label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="CC" name="cc" value="{{old('cc',$motor->cc)}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Price</label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Harga" name="price" value="{{old('price',$motor->price)}}">
                      </div>
                      <div class="form-group after-add-more">
                            <label for="">Admin</label>
                            <select name="admin_id" class="form-control">
                                <option>Silahkan Dipilih</option>
                                @foreach($admin as $admin)
                                <option value="{{$admin->id}}">{{$admin->name}}</option>
                                @endforeach
                            </select>
                      </div>
                      Model
                      @foreach ( $model as $model )
	<label for="" class="form-check form-check-inline"></label>
	<input type="radio" class="form-check-input" value="{{ $model->id }}" name="model_id" id="job{{ $model->id}}" @if(in_array($model->id,$motor->models->pluck('id')->toArray())) checked @endif >
	<label class="form-check-label" for="inlineCheckbox1">
			{{ $model->name}}
			
		</label><br>
<br>    
	@endforeach
    Categori
  @foreach ( $categori as $categori )
	<label for="" class="form-check form-check-inline"></label>
	<input type="radio" class="form-check-input" value="{{ $categori->id }}" name="category_id" id="job{{ $categori->id}}" @if(in_array($categori->id,$motor->categories->pluck('id')->toArray())) checked @endif >
	<label class="form-check-label" for="inlineCheckbox1">
			{{ $categori->name}}
			
		</label><br>
	@endforeach
  </div>
  <div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </form>
</div>
@endsection