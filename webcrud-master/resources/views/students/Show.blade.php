@extends('students.layout')
@section('content')
    <div class="col-md-6 offset-md-3 p-5">
        <div class="pull-left">
            <h2 class="text-center"> Show</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('students.index') }}">Go Back </a>
        </div>

        <div class="row">
            <div class="col mt-5">
                <div class="card p-5 alert-success">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Captain Name:</strong>
                            {{ $student->studname }}
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong> Course: </strong>
                            {{ $student->course }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong> Fee: </strong>
                            {{ $student->fee }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
