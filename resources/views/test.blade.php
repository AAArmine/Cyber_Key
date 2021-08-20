@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/product.css') }}" rel="stylesheet" type='text/css'>
@endsection

@section('title')
test
@endsection


@section('content')
<div class='container'>
    <form action="{{route('apply_job', app()->getLocale())}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field()}}
        <input type='text' name='name' class='form-control' placeholder='Name'>
        <input type='email' name='email' class='form-control' placeholder='Email'>
        <input type='text' name='job_title' class='form-control' placeholder='Job Title'>
        <input type='file' name='attached_cv' class='cuntom-file-input'>
        <div>
            <button type='submit' name='submit' class='btn btn-primary'>Save</button>
        </div>
    </form>
</div>
@endsection