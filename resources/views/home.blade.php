@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('To Do List') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome To Our site') }}
                    <a class="btn btn-primary" href="{{route('blog')}}" role="button">Create New Things</a>
















                </div>
            </div>
        </div>
    </div>
</div>
@endsection
