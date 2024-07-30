@extends('layouts.app')

@section('title','this is about page ');


@section('maincontent')

{{ now() }}

@selfdateformate(now());


@php
    $product_des=" all product is very bad . ";
@endphp

@allupper($product_des);
@endsection
