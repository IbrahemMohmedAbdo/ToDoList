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
                    @if (count($data))

                    <h1 class="justify-content-center">To DO List For Today</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">first</th>
                            <th scope="col">second</th>
                            <th scope="col">third</th>
                            <th scope="col">fourth</th>
                            <th scope="col">image</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach ($data as $item )
                    <tr>



                        <th scope="row">{{$item['id']}}</th>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['name ']}}</td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['name']}}</td>
                        <td>
                            <img src="{{$item->image}}"alt="" width="50">
                        </td>

                        <td>
                            <a href="#"><button type="button" class="btn btn-dark">edit</button></a>
                            <a href=""><button type="button" class="btn btn-danger">delete</button></a>
                        </td>


                      </tr>
                      @endforeach


                      {{ $data->links() }}
                  </table>





                    @else
                    <p> There is no tasks yet</p>
                    @endif
                </div>
            </div>

        </div>

    </div>

    </div>

@endsection
