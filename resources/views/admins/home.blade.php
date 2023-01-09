@extends('admins.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="das">
                    <h5>Dashboard</h5>
                </div>
                <div class="card p-3">
                    <div class="row">
                        @for ($i =1; $i <= 4;$i++)
                        <div class="col-3">
                            <a href="{{ route('admin.about') }}">
                                <div class="card">
                                    <div class="card-body bg-info">About Us</div>
                                </div>
                            </a>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
