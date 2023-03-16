@extends('admin.index')
@section('content')
<div class="container">
<form class="forms-sample" method="POST"  action="/admin/categori/update/{{$categori->id}}">
  @csrf
  @method('put')
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{old('name',$categori->name)}}">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </form>
</div>
@endsection