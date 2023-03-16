@extends('admin.index')
@section('content')
<a class="btn btn-primary mb-03" href="/admin/motor/create">Tambah</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nomer</th>
            <th>Name Motor</th>
            <th>CC</th>
            <th>Price</th>
            <th>Admin</th>
            <th>Model</th>
            <th>Category</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($motor as $motor)
    <tr>
        <td>{{$motor->id}}</td>
        <td>{{$motor->name}}</td>
        <td>{{$motor->cc}}</td>
        <td>{{$motor->price}}</td>
        <td>{{$motor->admins->name}}</td>
        <td>{{$motor->models->name}}</td>
        <td>{{$motor->categories->name}}</td>
            <td>
                <a class="btn btn-warning" href="/admin/motor/edit/{{$motor->id}}"><i class="bi bi-pencil"></i></a>
                <a class="btn btn-danger" href="/admin/motor/destroy/{{$motor->id}}"><i class="bi bi-trash"></i></a>
            </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection