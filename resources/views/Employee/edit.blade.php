@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                        <form method="POST" action="{{ route('employee.update',$employee->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label  class="form-label">Name</label>
                                <input type="text" name="name" class="form-control @error('name')
                                is-invalid @enderror " value="{{ old('name',$employee->name) }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Position</label>
                                <input type="director" name="position" class="form-control @error('position')
                                is-invalid @enderror " value="{{ old('position',$employee->position) }}">
                                @error('position')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Department</label>
                                <input type="year" name="department" class="form-control @error('department')
                                is-invalid @enderror " value="{{ old('department',$employee->department) }}">
                                @error('department')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Salary</label>
                                <input type="salary" name="salary" class="form-control @error('salary')
                                is-invalid @enderror " value="{{ old('salary',$employee->salary) }}">
                                @error('salary')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <a href="{{ route('employee.index') }}" class="btn btn-outline-dark">
                                    <i class="fa-solid fa-backward"></i>
                                </a>
                                <button class="btn btn-outline-primary">Update</button>
                            </div>
                        </form>
                    </div>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
