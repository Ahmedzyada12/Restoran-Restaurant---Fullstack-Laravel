@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-10 mt-4">
            <div class="card">
                <div class="card-header bg-success text-light text-center">
                    <h4> All Deleted Meals</h4>
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                </div> <!-- card-header -->

                <div class="card-body">
                    @if (count($meals)>0)
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Image </th>
                                <th> Name </th>
                                <th> Category </th>
                                <th> S.Price </th>
                                <th> M.Price </th>
                                <th> L.Price </th>
                                <th> Restore </th>
                                {{-- <th> Show </th> --}}
                                <th> DELETE </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($meals as  $meal)
                            <tr>
                                <td> {{$meal->id  }} </td>
                                <td> <img src="{{Storage::url($meal->image)}}" width="300" alt=""> </td>
                                <td> {{ $meal->name }} </td>
                                <td> {{ $meal->category->name}} </td>
                                <td> {{ $meal->small_meal_price }} </td>
                                <td> {{ $meal->medium_meal_price }} </td>
                                <td> {{ $meal->large_meal_price }} </td>

                                <td> <a href="{{ route('adminmeal.restore', $meal->id ) }}" class="btn btn-small btn-warning"><i class="fa-solid fa-trash-can-arrow-up"></i></i></a>  </td>
                                  </td>

                                   <form  method="post">
                                    @csrf
                                    @method('DELETE')
                                    <td> <a href="{{ route('adminmeal.hdelete', $meal->id) }}" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a> </td>
                                </form>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                            <h1 class="text-center">No Meals</h1>
                    @endif
                </div><!--  card-body -->

                {{--  <div class="card-footer">

                </div><!--  card-footer -->  --}}

            </div> <!-- card -->
        </div> <!-- col-9 -->
    </div> <!-- row -->
</div> <!--  container -->
@endsection
