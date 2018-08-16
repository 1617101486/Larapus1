@extends('layouts.app')
@section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profil</li>
                            </ul>
                        <div class="card card-default">
                            <div class="card-header">
                                <h2 class="card-title">Profil</h2>
                        </div>
                    <div class="card-body">
                <table class="table">
             <tbody>
                <tr>
        <td class="text-muted">Nama</td>

            <td>{{ auth()->user()->name }}</td>
         </tr>
            <tr>
              <td class="text-muted">Email</td>
             <td>{{ auth()->user()->email }}</td>
            </tr>
            <tr>
            <td class="text-muted">Login terakhir</td>
            <td>{{ auth()->user()->last_login }}</td>
            </tr>
             </tbody>
             </table>
             <a class="btn btn-primary" href="{{ url('/settings/profile/edit') }}">Ubah</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection