@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/admin/books') }}">Buku</a></li>
<li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/admin/books/create') }}">Tambah Buku</a></li>
<li class="breadcrumb-item active" aria-current="page">Review Buku</li>
</ul>
<div class="card card-default">
<div class="card-header">
<h2 class="card-title">Review Buku</h2>
</div>
<div class="card-body">
<p> <a class="btn btn-success" href="{{ url('/admin/books')}}">Selesai</a> </p>
<table class="table table-hover table-striped">
<thead>
<tr>
<th>Judul</th>
<th>Penulis</th>
<th>Jumlah</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach ($books as $book)
<tr>
<td>{{ $book->title }}</td>
<td>{{ $book->author->name }}</td>
<td>{{ $book->amount }}</td>
<td>
{!! Form::open(['url' => route('books.destroy', $book->id),
'id' => 'form-'.$book->id, 'method'=>'delete',
'data-confirm' => 'Yakin menghapus ' . $book->title . '?',
'class' => 'form-inline js-review-delete']) !!}
{!! Form::submit('Hapus', ['class'=>'btn btn-xs btn-danger']) !!}
{!! Form::close() !!}
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection