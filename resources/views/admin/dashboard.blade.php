@extends('admin/master')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-4">
            <div class="card bg-success text-white">
            <div class="card-body">
                <div class="display-2">{{ $countStudent }}</div>
                <h5>Total student</h5>
            </div>
        </div>
    </div>
        <div class="col-4">
            <div class="card bg-danger text-white">
            <div class="card-body">
                <div class="display-2">500+</div>
                <h5>Total courses</h5>
            </div>
        </div>
    </div>
        <div class="col-4">
            <div class="card bg-warning text-white">
            <div class="card-body">
                <div class="display-2">500+</div>
                <h5>Total onlinePyment</h5>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Due Date</th>
            </tr>
            @foreach ($due_Payment as $due)
            <tr>
                <td>{{ $due->id }}</td>
                <td>{{ $due->student->name}}</td>
                <td>{{ $due->amount }}</td>
                <td>{{ $due->due_date }}</td>
                <td>{{ $due->status }}</td>
                <td><span class="badge bg-danger text-white rounded-pill">{{ $due->status }}</span></td>
                <td>
                    <a href="{{route('admin.make.cashpayment',['std_id'=>$due->student_id,"id"=>$due->id])}}" class="btn btn-info">Paid</a>
                </td>
            </tr>     
            @endforeach
        </table>
    </div>
</div>
@endsection
