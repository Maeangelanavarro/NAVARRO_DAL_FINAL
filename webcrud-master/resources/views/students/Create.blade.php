@extends('students.layout')
@section('content')

    <div class="col-md-6 offset-md-3 p-5">
        <div class="pull left">
            <h2 class="text-center"> Add new Team</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('students.index') }}">Go Back </a>
        </div>



        <div class="mt-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong> Whoops! </strong> There are problems with the detais you input. Please check again. <br> <br>
                    <ul>
                        @foreach ($errors->all() as $erorr)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('students.store') }}" method="POST" class="mb-5">
                @csrf

                <div clas="form-group">
                    <strong> Captain Name:</strong>
                    <input type="text" name="studname" class="form-control mb-2" placeholder="studname">
                    <strong> Course </strong>
                    <input type="text" name="course" class="form-control mb-2" placeholder="course">
                    <strong> Fee </strong>
                    <input type="text" name="fee" class="form-control mb-2" placeholder="fee">
                    <div class="float-right mt-3">
                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
