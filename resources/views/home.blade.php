@extends('main')

@section('title','Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-8">

            </div>
        </div>
@endsection

@section('content')
<div class="content mt-3">
  <h4>Selamat Datang <b>{{Auth::user()->name}}.</h4>

@endsection
