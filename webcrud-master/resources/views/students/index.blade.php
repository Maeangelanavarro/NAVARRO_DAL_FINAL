@extends('students.layout')
@section('content')

        <div class="w-100">
            <div class="col-md-8 offset-md-2 p-5">
                <div class="pull-left">
                    <h2 class="text-center"> USTP EGAMES TOURNAMENT REGISTRATION </h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 margin-tb">

                        <div class="pull-right">
                            <a class="btn btn-success mt-5 float-right" href="{{ route('students.create') }}"> Create new
                                Team </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>

                @endif

                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <tr>
                            <th>No </th>
                            <th>Captain Name </th>
                            <th> Course </th>
                            <th> Fee </th>

                            <th width="280px">Action</th>
                        </tr>

                        @foreach ($students as $student)
                            <tr>

                                <td>{{ ++$i }} </td>
                                <td> {{ $student->studname }}</td>
                                <td> {{ $student->course }}</td>
                                <td> {{ $student->fee }}</td>

                                <td>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('students.show', $student->id) }}"> Show
                                        </a>
                                        <a class="btn btn-primary" href=" {{ route('students.edit', $student->id) }} ">
                                            Edit
                                        </a>

                                        @csrf
                                        @method('DELETE')


                                        <button type="submit" class="btn btn-danger"> Delete </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
    </div>
