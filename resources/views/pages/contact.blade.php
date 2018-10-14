@extends('layouts.main')

@section('title', 'Contact')

@section('content')
<div class="page-header">
    <h1>Contact Us</h1>
</div>

{{--{{ session()->pull('key2') }}--}}

<div class="row">
    <div class="col-xs-12 col-sm-6">
        <img class="thumbnail" style="width:100%;max-width:345px" src="{{ url('images/laravel.png') }}" alt="Laravel Logo"/>
    </div>
    <div class="col-xs-12 col-sm-6">
        <address>
            <i class="glyphicon glyphicon-home"></i>
            KMUTT
            <br/>
            <i class="glyphicon glyphicon-phone"></i>
            080-000-0000
        </address>
    </div>
</div>

@stop
