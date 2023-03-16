@extends('admin.index')
@section('content')
<a class="btn btn-primary mb-03" href="/admin/model/create">Tambah</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Models</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
     @foreach($model as $model)
    <tr>
        <td>{{$model->id}}</td>
        <td>{{$model->name}}</td>
            <td>
                <a class="btn btn-warning" href="/admin/model/edit/{{$model->id}}"><i class="bi bi-pencil"></i></a>
                <a class="btn btn-danger" href="/admin/model/destroy/{{$model->id}}"><i class="bi bi-trash"></i></a>
            </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection