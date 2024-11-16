@extends('layouts.main')

@section('content')

<div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>News<br></h1>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Page Title -->

  <section id="events" class="events section">

    <div class="container" data-aos="fade-up">

      <div class="row">
        @foreach ($data as $item)
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{ env('ADMIN_BASEURI').'/'.$item->image }}" height="350px" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">{{ $item->title }}</a></h5>
                <p class="fst-italic text-center">{{ dateFormat($item->created_at) }}</p>
                {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p> --}}
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>

  </section><!-- /Events Section -->

@endsection
