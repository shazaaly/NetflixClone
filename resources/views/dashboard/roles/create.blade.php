
@extends('layouts.dashboard.app')

@section('content')
    <h2>Roles</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.welcome')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('dashboard.roles.index')}}">Roles</a></li>
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

<form action="{{route('dashboard.roles.store')}}"  method="POST">

    <div class="row">

        <div class="col-lg-12">

            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

        </div>

 {{-- permissions --}}

            <div class="col-lg-12">
                <div class = "form-group">
                <h4>Permissions</h4>

             <table class="table table-hover">
              <thead>
                <tr>
                    <th>No.</th>
                    <th>Model</th>
                    <th>Permissions</th>
                </tr>
             </thead>

              <tbody>
                    @php
                        $models = ['categories', 'users'];
                    @endphp
                    @foreach($models as $index => $model)
                     <tr>
                      <td>{{$index+1}}</td>
                      <td>{{$model}}</td>
                      <td>
                        @php
                            $permission_maps = ['create', 'read', 'update', 'delete'];
                        @endphp

                        <select name ="permissions[]"  class="custom-select  form-control" multiple>

                        @foreach($permission_maps as $permission_map)
                        <option value="{{$permission_map.'_'.$model}}">{{$permission_map}}</option>
                        @endforeach
                                                </select>

                      </td>

                      </tr>

                        @endforeach




              </tbody>



            </table>

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
