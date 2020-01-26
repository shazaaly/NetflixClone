@extends('layouts.dashboard.app')

@section('content')
    <h2>Roles</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.welcome')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.roles.index')}}">Roles</a></li>
            <li class="breadcrumb-item">Edit</li>

        </ol>
    </nav>

    <div class="tile mb-4">
        <form  method="POST" action="{{route('dashboard.roles.update', $role->id)}}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label>name</label>
                <input type="text" name="Name" value="{{old('name', $role->name)}}" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Update</button>
            </div>

        </form>


    </div>







@endsection
