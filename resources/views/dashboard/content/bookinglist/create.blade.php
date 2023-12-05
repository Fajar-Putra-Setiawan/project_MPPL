@extends('layouts.layout')
@section('client-menu', 'active')
@section('crumb1', 'Client')
@section('crumb2', 'Client')

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
                        <h4 class="card-title">Tambah Client</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{route('bookinglist.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="first-name-horizontal">Nama</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="first-name-horizontal" class="form-control" name="full_name"
                                                placeholder="name_client">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal">Date Start</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="date" class="form-control mb-3 flatpickr-no-config" placeholder="Select date.." name="booking_date">
                                        </div>


                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <a href="{{route('bookinglist.index')}}" class="btn btn-light-secondary me-1 mb-1" type="reset">Back</a >
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
