@extends('layouts.app')

@section('content')
        @if (Session::has('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {!! Session::has('msg') ? Session::get('msg') : ' ' !!}
            <i class="fas fa-times btn-close" data-bs-dismiss="alert" aria-label="Close"></i>

            </div>
        @endif

        <div class="container-sm mt-5 text-capitalize border p-4">
            {{-- <p class="text-center display-4">add a new book</p> --}}
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="{{ route('add') }}" method="post" class="">
            @csrf
                <label for="firstName" class="form-label lead">firstName</label>
                <input type="text" class="form-control text-capitalize" name="firstName" id="firstName" autofocus> <br>

                <label for="middleName" class="form-label lead">middleName</label>
                <input type="text" class="form-control text-capitalize" name="middleName" id="middleName"> <br>

                <label for="lastName" class="form-label lead">lastName</label>
                <input type="text" class="form-control text-capitalize" name="lastName" id="lastName"> <br>

                <label for="contactNo" class="form-label lead">contactNo</label>
                <input type="number" class="form-control text-capitalize" name="contactNo" id="contactNo">

                <label for="altar" class="form-label lead">altar</label>
                <input type="text" class="form-control text-capitalize" name="altar" id="altar">

                <label for="region" class="form-label lead">region</label>
                <input type="text" class="form-control text-capitalize" name="region" id="region"> <br>


                <label for="gender" class="form-label lead">gender</label>
                <select name="gender" class="form-control" id="gender">
                    <option value="Male" selected>Male</option>
                    <option value="Female">Female</option>
                </select>



                <label for="WPastor" class="form-label lead">WPastor</label>
                <input type="text" class="form-control text-capitalize" name="WPastor" id="WPastor"> <br>

                <label for="pastorNo" class="form-label lead">pastorNo</label>
                <input type="number" class="form-control text-capitalize" name="pastorNo" id="pastorNo"> <br>




                <input type="submit" value="Add" class="form-control w-50 mx-auto mt-5 fs-4 fw-bold border border-success">
                {{-- <button type="submit" class="btn btn-primary form-control text-capitalize">add</button> --}}
            </form>
                </div>
                <div class="col-md-4"></div>
            </div>

        </div>
@endsection
