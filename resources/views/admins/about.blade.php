@extends('admins.layouts.app')

@section('content')
    <section class="about-page">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.about.update') }}">
                                    <div class="form-group">
                                        <label for="banner-title">Banner Title</label>
                                        <input type="text" name="banner_title" class="form-control" id="banner-title"
                                            placeholder="Banner Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="sub-banner-title">Banner Sub-Title</label>
                                        <input type="text" name="banner_sub_title" class="form-control" id="sub-banner-title"
                                            placeholder="Banner Sub-Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="title-about-us">Title About Us</label>
                                        <input type="text" name="title" class="form-control" id="title-about-us"
                                            placeholder="Title About Us">
                                    </div>
                                    <div class="form-group">
                                        <label for="sub-title">Sub-Title</label>
                                        <input type="text" name="sub_title" class="form-control" id="sub-title"
                                            placeholder="Sub-Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Descriptoin</label>
                                        <textarea class="form-control" id="description" name="description" rows="4" cols="50" placeholder="descriptoin"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary px-3">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
