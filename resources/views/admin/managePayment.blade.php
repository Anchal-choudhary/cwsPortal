@extends('admin/master')

@section('content')

<div class="container mt-5">
    <div class="col-8"><h2>Manage payment</h2></div>
    <div class="col-4">
        <a href="{{ route('admin.manage.payment.due') }}" class="btn btn-danger">due</a>
        <a href="{{ route('admin.manage.payment.paid') }}" class="btn btn-info">paid</a>
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
                <th>status</th>
                <th>action</th>
            </tr>
            @foreach ($payment as $due)
            <tr>
                <td>{{ $due->id }}</td>
                <td>{{ $due->student->name}}</td>
                <td>{{ $due->amount }}</td>
                <td>{{ $due->due_date }}</td>
                <td>{{ $due->status }}</td>
                <td><span class="badge bg-danger text-white rounded-pill">{{ $due->status }}</span></td>
                <td>
                    <a href="{{route('admin.make.cashpayment',['std_id'=>$due->student_id,"id"=>$due->id])}}" class="btn btn-info @if($due->status=="paid") disable @endif">Paid</a>
                </td>
            </tr>     
            @endforeach
        </table>
    </div>
</div>
@endsection
