@extends('admin.master')
@section('content')

<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-4">
            <div class="card">
                <div class="card-header bg-success text-light">All Category</div>
                @if (session('success'))
                    <div class="alert alert-success m-2">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover   ">
                        <tr class="bg-success ">
                            <th class="text-light" scope="col">ID</th>
                            <th class="text-light" scope="col">Name</th>

                            <th class="text-light" scope="col">Edit</th>
                            <th class="text-light" scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $id=0;
                            @endphp --}}

                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{  $category->id }}</td>
                                    <td>{{ $category->name }}</td>

                                    <td><a href=" {{ route('admin.edit', $category->id )}}"  class="btn btn-outline-success">Edie</a></td>

                                    <form action="{{ route('admin.delete', $category->id ) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <td><button type="submit" class="btn btn-outline-secondary ">Delete</button></td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
