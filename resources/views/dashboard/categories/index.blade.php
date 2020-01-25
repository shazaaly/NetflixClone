@extends('layouts.dashboard.app')

@section('content')
 <h2>Categories</h2>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard.welcome')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" >Categories</li>
  </ol>
</nav>

     <div class="tile mb-4">
        <div class="row">
            <div class="col-lg-12">
                <form action="">
                    <div class="row">

                        <div class="col-md-4">

                            <div class="form-group">
                                <input type="text" name="search" placeholder="Search" class="form-control">

                            </div>
                        </div>

                        <div class="col-md-4">
                            <button type="submit" name="submit" value="{{request()->search}}" class="btn btn-secondary autofocus btn-sm"><i class="fa fa-search"></i>   Search</button>
                            <a href="{{route('dashboard.categories.create')}}"  class="btn  btn-sm btn-primary  "> <i class="fa fa-plus"></i>Add</a>

                        </div>



                    </div>
                </form>

            </div>
        </div>


             <div class="row">
                 <div class="col-md-12">
                     @if($categories->count()>0)

                     <table class="table table-hover">
                         <thead>

                         <th>No</th>
                         <th>Name</th>
                         <th>Action</th>

                         </thead>

                         <tbody>

                         @foreach($categories as $index=>$category)
                             <tr>
                                 <td>{{$index+1}}</td>
                                 <td>{{$category->name}}</td>
                                 <td>
                                     <a href="{{route('dashboard.categories.edit', $category->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i>Edit</a>
                                     <form method="post" action="{{route('dashboard.categories.destroy', $category->id)}}" style="display:inline-block">
                                         @csrf
                                         @method('delete')
                                         <button type="submit" class="btn btn-danger btn-sm delete "><i class="fa fa-trash"></i>Delete</button>
                                     </form>
                                     @endforeach
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     {{-- //pagination links// --}}
                {{ $categories->appends(request()->query())->links() }}
                         @else
                         <h3 style="font-weight: 400">No Available Records</h3>
                         @endif
                 </div>
             </div>
    </div>






@endsection
