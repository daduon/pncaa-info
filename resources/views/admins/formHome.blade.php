@extends('admins.layouts.app')

@section('content')
    <div class="container-fluid" id="home-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4">
                            <a href="{{ route('admin.home') }}" style="font-size: 20px; color:#00c3ff;">Back</a>
                        </div>
                        <div class="col-8">
                            <div class="title" style="margin-left: 70px;">
                                <strong style="font-size: 20px;">Update Content Home</strong>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <form id="form-home" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="banner_title">Banner Title </label>
                                            <input type="hidden" value="{{ $home->id }}" id="id">
                                            <input type="text" value="{{ $home->banner_title }}" id="banner_title"
                                                class="form-control" placeholder="Banner Title">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="banner_sub_title">Banner Sub Title </label>
                                            <input type="text" value="{{ $home->banner_sub_title }}"
                                                id="banner_sub_title" class="form-control" placeholder="Banner Sub Title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="title">Title Of Page</label>
                                            <input type="text" value="{{ $home->title }}" id="title"
                                                class="form-control" placeholder="Title Of Page">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="sub_title">Sub Title Of Page </label>
                                            <input type="text" value="{{ $home->sub_title }}" id="sub_title"
                                                class="form-control" placeholder="Sub Title Of Page">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="banner_image">
                                            <label class="custom-file-label" for="banner_image">Upload Banner</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <img id="image-preview" src="{{ $home->banner_image }}" alt="your image"
                                            width="200" height="100" />
                                        <input type="hidden" value="{{ $home->banner_image }}" id="get-image">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" name="description" id="description" cols="30" rows="3"
                                                placeholder="Description">{{ $home->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" class="btn btn-primary px-4">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
