@extends('admin.index')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nomer</th>
            <th>Nama</th>
            <th>Motor</th>
            <th>Sewa brp Hari</th>
            <th>Denda</th>
            <th>Total Bayar</th>
            <th>Sewa</th>
            <th>Tanggal Kembali</th>
            <th>Tanggal Kembali Real</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trx as $trx)
    <tr>
        <td>{{$trx->id}}</td>
        <td>{{$trx->users->name}}</td>
        <td>{{$trx->motors->name}}</td>
        <td>{{$trx->rent_for}}</td>
        <td>{{$trx->penalty}}</td>
        <td>{{$trx->amount}}</td>
        <td>{{$trx->date}}</td>
        <td>{{$trx->return_date}}</td>
        <td>{{$trx->real_return_date}}</td>
        <td>
        <a class="btn btn-danger" href="/admin/transaction/destroy/{{$trx->id}}"><i class="bi bi-trash"></i></a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection