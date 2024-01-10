@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Department</th>
                        <th scope="col">Salary</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->position}}</td>
                            <td>{{$employee->department}}</td>
                            <td>{{$employee->salary}}</td>
                          </tr>
                        </tbody>
                    </table>
                    <div class="mb-1 mt-3">
                        <a href="{{ route('employee.index') }}" class="btn btn-outline-dark">
                            <i class="fa-solid fa-backward"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
