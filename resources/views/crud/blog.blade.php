@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('To Do List') }}</div>

                <div class="card-body">


                    {{ __('Welcome To Our site') }}


                    <h6 class="text-center fw-semibold  p-3 display-6 ">Create To Do list For Today</h6>
                    <br>
                    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        <div class="mb-3">
                          <label  class="form-label">1th</label>
                          <input type="text" class="form-control" name="name" >

                        </div>
                        <div class="mb-3">
                          <label class="form-label">2th</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">3th</label>
                            <input type="text" class="form-control" name="name">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">4th</label>
                            <input type="text" class="form-control" name="name">
                          </div>

                          <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" id="inputGroupFile01" name="image">
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
















                </div>
            </div>
        </div>
    </div>
</div>
@endsection
