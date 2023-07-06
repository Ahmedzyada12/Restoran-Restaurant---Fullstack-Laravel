@extends('admin.master')
@section('content')

<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-4">
            <div class="card">
                <div class="card-header bg-success text-light">Add New Category</div>

                @if ($errors->any())

                    <div class="alert alert-danger mt-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                <div class="card-body">
                    <form action="{{ route('admin.store') }}" method="post">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Add Category">
                        <button type="submit" class=" btn btn-outline-success form-control-sm mt-2">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

