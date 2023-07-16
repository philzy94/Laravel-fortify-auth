@extends('layout')
  
@section('content')
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    Welocome <strong>{{auth()->user()->name}}</strong> You are Logged In
                </div>
            </div>
        </div>
    </div>
</div>
@endsection