@extends('layout.nav')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                <a class="btn btn-primary" href="{{ route('posts.edit',$post) }}">Edit</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Number</th>
                    <th>Participant</th>
                    <th>Radio</th>
                    <th>Description</th>
                    <th>Email</th>
                    <th>Image</th>
                </tr>

                <tr>
                    <td>{{ $post->name }}</td>

                    <td>
                        @foreach($post->category as $value)
                            {{$value}},
                        @endforeach
                    </td>
                    <td>{{ $post->date }}</td>
                    <td>{{ $post->number }}</td>
                    <td>{{ $post->size }}</td>
                    <td>{{ $post->gender }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->email }}</td>
                    <td>  <img src="{{asset("image/". $post->image) }}" width="150px" alt="image show"></td>
                </tr>

            </table>
        </div>
    </div>

@endsection
