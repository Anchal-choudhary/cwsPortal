@extends('admin/master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">manage {{$title}} student</div>
        <div class="col-4">
            <div class="btn-group mt-3">
                <a href="{{ route("admin.manage.student.active") }}" class="btn btn-danger">active</a>
                <a href="{{ route("admin.manage.student.new") }} " class="btn btn-primary">new</a>
                <a href="{{ route("admin.manage.student.passout") }} " class="btn btn-success">passout</a>
            </div>
        </div>
    </div>
    <table class="table hover table-bordered mt-3">
       <tr>
           <th>id</th>
           <th>name</th>
           <th>contact</th>
           <th>email</th>
           <th>father_name</th>
           <th>dob</th>
           <th>address</th>
           <th>state</th>
           <th>education</th>
           <th>action</th>
       </tr>
       @foreach ($students as $student)
       <tr>
           <td>{{ $student->id }}</td>
           <td>{{ $student->name }}</td>
           <td>{{ $student->contact }}</td>
           <td>{{ $student->email }}</td>
           <td>{{ $student->father_name }}</td>
           <td>{{ $student->dob }}</td>
           <td>{{ $student->address }}</td>
           <td>{{ $student->state }}</td>
           <td>{{ $student->education }}</td>
           <td>
               @if ($student->status == "2")
               <a href="{{route('admin.passout.student',["id"=>$student->id])}}" class="btn btn-danger btn-sm p-0">
                <i class="bi bi-trash"></i></a>
                @endif

                <a href="" class="btn btn-warning btn-sm p-0"><i class="bi bi-pen"></i></a>
                <a href="" class="btn btn-info btn-sm p-0"><i class="bi bi-eye"></i></a>

                @if ($student->status == 0)
                <a href="{{ route('admin.approve.student',["id"=>$student->id])}}" class="btn btn-success
                    border border-2 btn-sm p-0"><i class="bi bi-check"></i></a>
                @endif
           </td>
       </tr>  
       @endforeach
    </table>

</div>
    
@endsection