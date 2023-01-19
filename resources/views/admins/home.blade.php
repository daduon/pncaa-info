@extends('admins.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="title mb-3">
                    <strong style="font-size: 20px">Dashboard</strong>
                </div>
                <div class="card p-3">
                    <div class="row">
                        @foreach ($modules as $module)
                        <div class="col-3">
                            <a href="{{$module->route.'/'.$module->id}}" class="text-white">
                                <div class="card text-center">
                                    <div class="card-body bg-info">
                                        <span style="font-size: 16px; font-weight: 700;">{{ $module->name }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
