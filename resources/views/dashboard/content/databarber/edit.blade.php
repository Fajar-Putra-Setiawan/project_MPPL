@extends('layouts.layout')

@section('team-menu', 'active')
@section('crumb1', 'Team')
@section('crumb2', 'Team')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <!-- End Navbar -->
    <section id="basic-horizontal-layouts">
        <div class="container-fluid py-4">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Team</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{route('databarber.update', $data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="first-name-horizontal">Nama</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="first-name-horizontal" class="form-control" name="name"
                                                placeholder="Nama Barber" value="{{$data->name}}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal">Rating</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="email-horizontal" class="form-control" name="rating"
                                                placeholder="Rating" value="{{$data->rating}}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal">Harga</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="email-horizontal" class="form-control" name="price"
                                                placeholder="Price" value="{{$data->price}}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal">Description</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="email-horizontal" class="form-control" name="description"
                                                placeholder="Description" value="{{$data->description}}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal">Review</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="email-horizontal" class="form-control" name="review"
                                                placeholder="Type Here" value="{{$data->review}}">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <a href="{{route('databarber.index')}}" class="btn btn-light-secondary me-1 mb-1" type="reset">Back</a >

                                        </div>
                                    </div>

                                </div>
                            </form>
                            <form action="{{route('databarber.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                                class="btn btn-light-danger me-1 mb-1">Delete</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>






@endsection
