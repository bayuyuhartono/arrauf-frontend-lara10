@extends('layouts.main')

@section('content')

<!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>{{ $title }}<br></h1>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Page Title -->

<br>
<div class="container">
  {!! $content !!}
</div>

@endsection