@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body-shadow">
              <div class="mb-3">
                <a href="{{ route('employee.create') }}" class="btn btn-outline-success">
                    <i class="fas fa-plus"></i>
                </a>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Department</th>
                        <th scope="col">Salary</th>
                        <th scope="col" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee )
                        <tr>
                          <th scope="row">{{$loop->index+1}}</th>
                          <td>{{$employee->name}}</td>
                          <td>{{$employee->position}}</td>
                          <td>{{$employee->department}}</td>
                          <td>{{$employee->salary}}</td>
                          <td>
                              <div class="d-flex justify-content-center">
                                  <a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-outline-warning me-1">
                                      <i class="fa-solid fa-pen-to-square"></i>
                                  </a>
                                  <a href="{{ route('employee.show',$employee->id) }}" class="btn btn-outline-info me-1">
                                    <i class="fa-solid fa-info"></i>
                                  </a> 
                                  <form method="POST" action="{{ route('employee.destroy',$employee->id) }}" class="d-inline-block">
                                      @method('delete')
                                      @csrf
                                     <button href="" class="btn btn-outline-danger"onclick="return confirm('Are you sure?')">
                                       <i class="fa-solid fa-trash"></i>
                                     </button>
                                  </form>
                                </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
