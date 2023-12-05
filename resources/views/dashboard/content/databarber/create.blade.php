@extends('layouts.layout')
@section('team-menu', 'active')
@section('crumb1', 'Marketing')
@section('crumb2', 'Marketing')

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
                        <h4 class="card-title">Tambah Team</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{route('databarber.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="first-name-horizontal">Nama</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="first-name-horizontal" class="form-control" name="name"
                                                placeholder="Nama Barber">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal">Rating</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="email-horizontal" class="form-control" name="rating"
                                                placeholder="Rating">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal">Harga</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="email-horizontal" class="form-control" name="price"
                                                placeholder="Price">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal">Description</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="email-horizontal" class="form-control" name="description"
                                                placeholder="Description">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal">Review</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="email-horizontal" class="form-control" name="review"
                                                placeholder="Type Here">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <a href="{{route('databarber.index')}}" class="btn btn-light-secondary me-1 mb-1" type="reset">Back</a >

                                        </div>
                                    </div>
                                </div>
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
