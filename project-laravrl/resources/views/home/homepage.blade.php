
        <!-- Navbar & Hero End -->

@include('home.nav')
        <!-- Service Start -->
        <div class="container-xxl py-5">
            @include('home.headboody')
        </div>

        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>

                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    {{-- @foreach ($categories as $category) --}}

                     <ul class="nav nav-pills   d-inline-flex justify-content-center border-bottom mb-5">


                        <li class="list-group">

                            <form action="{{ route('homepage.indexhome') }} " method="get">
                                {{-- @csrf --}}

                            <a href="/" class="mt-n1 mb-0 btn btn-primary" >All meal</a>
                            @foreach ($categories as $category)

                            <input type="submit" name="category_id" class="mt-n1 mb-0 btn btn-primary"  value="{{$category->id}} {{$category->name}}" >

                          @endforeach
                        </form>

                        </li>
                    </ul>
                    {{-- @endforeach --}}
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row ">
                                @foreach ($meals as $meal)
                                <div class="col-md-6 col-lg-3 ftco-animate">
                                    <div class="product card rounded shadow">
                                        <a href="#" class="img-prod"><img src="{{Storage::url($meal->image)}}" class="w-100">

                                        </a>
                                        <div class="text py-3 pb-4 px-3 text-center">
                                            <h3><a href="#"></a>{{$meal->name}}</h3>
                                            <div class="d-flex">
                                                <div class="pricing">
                                                    <p class="price"><span class=" price-sale"></span> </p>
                                                </div>
                                            </div>
                                            <div class="d-flex px-3">
                                                <div class="m-auto d-flex">

                                                    <a href="{{ route('homepage.show', $meal->id) }}" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2 rounded-3">
                                                        show
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
            <div class="card-footer mt-3">
                <div class=" mx-auto">
                    {{-- {{ $meals->links() }} --}}
                </div>

            </div><!--  card-footer -->
        </div>
        <!-- Menu End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            @include('home.footerboody')
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
      @include('home.footer')

