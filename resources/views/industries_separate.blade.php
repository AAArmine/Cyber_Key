@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/industries.css') }}" rel="stylesheet" type='text/css'>
@endsection

@section('title')
Industries
@endsection


@section('content')
<section class="ind_sep">
    <div class="ind_contect">
        <div class="ind_contect_img" style='background-image:url("{{ asset("assets/images/$data->image") }}")'></div>
        <h5>{{$data->title}}</h5>
        <p class='common_text'>
        {{$data->text}}
        </p>
    </div>
</section>
@include('includes/contact_sec')
<!-- <script src="{{ asset('assets/js/product.js')}}"></script> -->
<script src="{{ asset('assets/js/home.js')}}"></script>
@endsection