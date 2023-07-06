@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-md-10 mt-4">
                <div class="card">
                    <div class="card-header bg-success text-light text-center">
                        <h4> Update Meal</h4>
                    </div> <!-- card-header -->

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('adminorder.update', $order->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            {{-- @foreach ($prices as $price)  --}}

                            <div class=" mb-3">
                                <label class="form-label"> Name Of Meal </label>
                                <input type="text" value=" {{$order->meal->name}}" class="form-control form-control-lg" name="name"
                                    placeholder="Name Of Meal">
                            </div> <!-- name -->

                            <div class=" mb-3">
                                <label class="form-label"> body Of Order </label>
                                <textarea class="form-control form-control-lg" name="body" rows="5" placeholder=" body"> {{ $order->body }} </textarea>
                            </div> <!-- description -->


                            <div class="mb-3">
                            <label class="form-label"> Order Price($) </label>
                             <input type="text" value=" {{
                                    ($order->meal->small_meal_price*$order->small_meal)+
                                    ($order->meal->medium_meal_price*$order->medium_meal)+
                                    ($order->meal->large_meal_price*$order->large_meal)
                                    }}
                                    " class="form-control form-control-lg">
                            </div>

                            <div class="row g-4 mb-3"  >

                                <div class="col-auto">
                                    <input type="text" value="{{$order->phone}} "  class="form-control form-control-lg" name="phone"
                                        placeholder="phone">
                                </div>
                                <div class="col-auto">
                                    <input type="number" value=" {{ $order->small_meal }}"  class="form-control form-control-lg"  name="small_meal"
                                        placeholder="small_meal">
                                </div>

                                <div class="col-auto">
                                    <input type="number" value="{{ $order->medium_meal }} " class="form-control form-control-lg" name="medium_meal"
                                        placeholder="medium_meal">
                                </div>

                                <div class="col-auto">
                                    <input type="number" value="{{ $order->large_meal }} " class="form-control form-control-lg" name="large_meal"
                                        placeholder="large meal ">
                                </div>

                            </div> <!-- in line prices -->

                            <div class=" mb-3 text-center">
                                <button type="submit" class="btn btn-outline-success btn-lg w-100 ">Update Order</button>
                            </div> <!-- button -->


                        </form>
                    </div><!--  card-body -->

                    {{--  <div class="card-footer">

                </div><!--  card-footer -->  --}}

                </div> <!-- card -->
            </div> <!-- col-9 -->
        </div> <!-- row -->
    </div> <!--  container -->
@endsection
