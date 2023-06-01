@extends('layouts.layout')
@section('content')
    <div class="col-10 offset-2">
        <a href="{{ route('index')}}"><button
                class="cursor-pointer float-right text-dark justify-content-center mx-1 my-1  bg-success">Home</button></a>
        <a href="{{ route('user_add')}}"><button
                class="cursor-pointer float-right text-dark justify-content-center my-1  bg-success">Add
                users</button></a>
        <table class="table table-bordered table-striped table-light table-hover ">
            <thead class="">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">User Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $v)
                <tr>
                    <th scope="row">{{ $v->id}}</th>
                    <td>{{ $v->name}}</td>
                    <td>{{ $v->email}}</td>
                    <td><a href="{{ route('user.edit',['id'=>$v->id]) }}"><button
                                class="btn btn-outline-success">Edit</button></a><a class="mx-1  "
                            href="{{ route('user_delete',['id'=>$v->id]) }}"><button
                                class="btn btn-outline-danger">Delete</button></a></td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
