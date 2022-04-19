@extends('homepages/base')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" class="d-flex">
                        @csrf
                        <input type="text" class="form-control" name="conatct" placeholder="enter your registerd contact no">
                        <input type="submit" class="btn btn-danger">
                    </form>
                </div>
            </div>

        </div>
        @if ($payment)
        <div class="col-lg-12">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>months</th>
                    <th>amount</th>
                    <th>status</th>
                </tr>
                @foreach ($payment as $pay)
                <tr>
                    <td>{{ $pay->id }}</td>
                    <td>{{ $pay->student->name }}</td>
                    <td>{{ $pay->due_date }}</td>
                    <td>{{ $pay->amount }}</td>
                    <td>
                        <a href="" class="btn btn-danger">pay</a>
                        <a href="" class="btn btn-warning disable">paid</a>
                    </td>
                </tr>
                    
                @endforeach
            </table>
        </div>
    </div>
    @endif
</div>
    
@endsection
