@extends('admin.index')
@section('content')
<a class="btn btn-primary mb-03" href="/admin/categori/create">Tambah</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categori as $categori)
    <tr>
        <td>{{$categori->id}}</td>
        <td>{{$categori->name}}</td>
            <td>
                <a class="btn btn-warning" href="/admin/categori/edit/{{$categori->id}}"><i class="bi bi-pencil"></i></a>
                <a class="btn btn-danger" href="/admin/categori/destroy/{{$categori->id}}"><i class="bi bi-trash"></i></a>
            </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection