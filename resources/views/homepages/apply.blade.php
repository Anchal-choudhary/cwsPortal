@extends('homepages/base')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-8 mx-auto mt-5">
            <div class="card">
                <div class="card-body bg-">
                    <h5 class="text-dark">Apply for addmission</h5>
                    <hr class="boder boder-3">
    <form action="{{ route('apply') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="text-dark">name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is invalid @enderror">
            @error('name')
            <p class="text-danger small">{{ $message }}</p>
            @enderror
            </div>
        <div class="mb-3">
            <label for="" class="text-dark">father_name</label>
            <input type="text" name="father_name" value="{{ old('father_name') }}" class="form-control @error('father_name') is invalid @enderror">
            @error('father_name')
            <p class="text-danger small">{{ $message }}</p>
            @enderror
            </div>
        <div class="row">
            <div class="mb-3 col">
                <label for="" class="text-dark">contact</label>
                <input type="text" name="contact" value="{{ old('contact') }}" class="form-control @error('contact') is invalid @enderror">
                @error('contact')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
                </div>
        
            <div class="mb-3 col">
                <label for="" class="text-dark">email</label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control @error('email') is invalid @enderror">
                @error('email')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
        </div>
    
       <div class="row">
        <div class="mb-3 col">
            <label for="" class="text-dark">education</label>
            <input type="text" name="education" value="{{ old('education') }}" class="form-control @error('education') is invalid @enderror">
            @error('education')
            <p class="text-danger small">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 col">
            <label for="" class="text-dark">address</label>
            <input type="text" name="address" value="{{ old('address') }}" class="form-control @error('address') is invalid @enderror">
            @error('address')
            <p class="text-danger small">{{ $message }}</p>
            @enderror
        </div>
       </div>
        <div class="row">
            <div class="mb-3 col">
                <label for="" class="text-dark">city</label>
                <input type="text" name="city" value="{{ old('city') }}" class="form-control @error('city') is invalid @enderror">
                @error('city')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 col">
                <label for="" class="text-dark">state</label>
                <input type="text" name="state" value="{{ old('state') }}" class="form-control @error('state') is invalid @enderror">
                @error('state')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
        </div>
       <div class="row">
        <div class="mb-3 col">
            <label for="" class="text-dark">dob</label>
            <input type="date" namegit init
="dob" value="{{ old('dob') }}" class="form-control @error('dob') is invalid @enderror">
            @error('dob')
            <p class="text-danger small">{{ $message }}</p>
            @enderror
            </div>
        <div class="mb-3">   
            <input type="submit" value="submit" class="btn btn-dark w-100">
        </div>
    
    </form>
                {{-- </div>
            </div>
        </div> --}}
    </div>
    {{-- </div> --}}
    
        
    


    
@endsection