@extends('layouts.app')

@section('breadcrumbs', '')

@section('content')


    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')  }}">Home</a></li>
        <li class="breadcrumb-item active">Cabinet</li>
    </ul>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hello') }}</div>

                <div class="card-body">

                    {{ __('Your site') }}
                </div>
            </div>
        </div>
    </div>

@endsection
