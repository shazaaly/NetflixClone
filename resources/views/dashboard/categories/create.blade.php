
@extends('layouts.dashboard.app')

@section('content')
    <h2>Categories</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.welcome')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.categories.index')}}">Categories</a></li>
            <li class="breadcrumb-item">Add</li>

        </ol>
    </nav>


    @if ($errors->any())
        <br>
     @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        <li>{{$error}}</li>

    </div>

    @endforeach

    @endif
    <div class="tile mb-4">

<form action="{{route('dashboard.categories.store')}}"  method="POST">

    <div class="row">

        <div class="col-lg-12">

            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

        </div>

        <div class="col-lg-12">

            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i><strong>Add</strong> </button>

        </div>

    </div>

@csrf

</form>
</div>
@endsection
