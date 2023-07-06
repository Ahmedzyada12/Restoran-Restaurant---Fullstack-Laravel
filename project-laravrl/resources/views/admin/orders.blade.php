@extends('admin.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card mt-4 ">
                <div class="card-header bg-success text-light text-center">
                    <h4>Orders</h4>
                </div> <!-- card-header -->

                  <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                @if (count($orders)>0)
                    <table class="table table-bordered table-striped">

                        <thead>
                            <tr class="bg-success">

                                <th class="text-light"> Phone </th>
                                <th class="text-light"> Email  </th>
                                {{-- <th class="text-light"> Date / Time </th> --}}
                                <th class="text-light"> Meal </th>
                                <th class="text-light"> S.Meal </th>
                                <th class="text-light"> M.Meal </th>
                                <th class="text-light"> L.Meal </th>
                                <th class="text-light"> Total </th>
                                <th class="text-light"> Body </th>
                                <th class="text-light"> Status </th>
                                <th class="text-light"> Accept </th>
                                {{-- <th class="text-light"> Reject </th> --}}
                                <th class="text-light"> Completed </th>
                                <th class="text-light"> Eidt </th>
                            </tr>
                        </thead>

                        <tbody>
                           @foreach ($orders  as $order)

                           <tr>
                               {{-- <td> {{ $order->user->name }} </td> --}}
                               <td> {{ $order->phone }}  </td>
                               <td>  {{ $order->user->email }}  </td>

                               <td> {{ $order->meal->name}} </td>
                               <td> {{ $order->small_meal }} </td>
                               <td> {{ $order->medium_meal }} </td>
                               <td> {{ $order->large_meal }} </td>

                               <td> $
                                {{
                                    ($order->meal->small_meal_price*$order->small_meal)+
                                    ($order->meal->medium_meal_price*$order->medium_meal)+
                                    ($order->meal->large_meal_price*$order->large_meal)
                                }}
                            </td>

                               <td> {{ $order->body }} </td>
                               <td> {{ $order->status }} </td>
                               <form action="{{ route('adminorder.changeStuatas',$order->id ) }}" method="POST">
                                @csrf

                                <td> <input type="submit" name="status" value="accepted" class="btn btn-dark" > </td>
                                {{-- <td> <input type="submit" name="status" value="rejected" class="btn btn-danger"> </td> --}}
                                <td> <input type="submit" name="status" value="completed" class="btn btn-warning"> </td>
                               </form>
                               <td><a href=" {{ route('adminorder.edit', $order->id )}}"  class="btn btn-outline-success">Edie</a></td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                    @else
                    <h1 class="text-center">No Orders</h1>
                   @endif

                </div><!--  card-body -->


                  {{--  <div class="card-footer">

                </div><!--  card-footer -->  --}}

            </div> <!-- card -->
                    <form action="{{ route('adminorder.delete' ) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td><button type="submit" class="btn btn-outline-secondary mt-3">Delete</button></td>
                    </form>
        </div> <!-- col-9 -->
    </div> <!-- row -->
</div> <!--  container -->
@endsection
