@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pengaturan</div>

                <div class="panel-body">
                    <p><a href="{{ url('setting/departemen') }}">Departemen</a></p>
                    <p><a href="{{ url('setting/office') }}">Office</a></p>
                    <p><a href="{{ url('setting/role') }}">Hak Akses</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
