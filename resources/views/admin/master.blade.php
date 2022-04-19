<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="" class="navbar-brand">Admin | panel</a>

            <ul class="navbar-nav">
                @auth
                <li class="nav-item"><form action="{{route("logout") }}" mthod="post">
                @csrf 
                <input type="submit" class="nav-link bg-transparent boder-0" value="Logout">
            </form></li>    
                @endauth

            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 mt-3">
                <a href="{{ route("admin.dashboard") }}" class="list-group-item shadow list-group-item-action">dashboard</a>
                <a href="{{ route('admin.manage.student.new') }}" class="list-group-item shadow list-group-item-action">new admission</a>
                <a href="{{ route('admin.manage.student.active') }}" class="list-group-item  shadow list-group-item-action">manage student</a>
                <a href="{{ route('admin.manage.payment.due') }}" class="list-group-item  shadow list-group-item-action">manage payment</a>
                <a href="" class="list-group-item  shadow list-group-item-action">manage courses</a>
                <a href="" class="list-group-item  shadow list-group-item-action">manage placement</a>
            </div>
        {{-- </div> --}}
    {{-- </div>
    <div> --}}
        <div class="col-10">
            @section('content')
                
            @show
        </div>
    </div>

    
</body>
</html>