@extends('layouts.app')

@section('content')
        @if (Session::has('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {!! Session::has('msg') ? Session::get('msg') : ' ' !!}
            <i class="fas fa-times btn-close" data-bs-dismiss="alert" aria-label="Close"></i>

            </div>
        @endif

        <div class="container-sm mt-5 text-capitalize border p-4">
            <p class="text-center display-4">add a new book</p>
            <form action="{{ route('add') }}" method="post" class="">
            @csrf
                <label for="bookTitle" class="form-label lead">book title</label>
                <input type="text" class="form-control text-capitalize" name="bookTitle" id="bookTitle"> <br>

                <label for="Author" class="form-label lead">author</label>
                <input type="text" class="form-control text-capitalize" name="Author" id="Author"> <br>

                <label for="shelfNumber" class="form-label lead">shelf number</label>
                <input type="number" class="form-control text-capitalize" name="shelfNumber" id="shelfNumber"> <br>

                <label for="status" class="form-label lead">status</label>
                <select name="status" class="form-control" id="status">
                    <option value="Available" selected>Available</option>
                    <option value="Not available">Not available</option>
                </select>

                <input type="submit" value="Add" class="form-control w-50 mx-auto mt-5 fs-4 fw-bold border border-success">
                {{-- <button type="submit" class="btn btn-primary form-control text-capitalize">add</button> --}}
            </form>
        </div>
@endsection
