<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#"><h2><i>ADMIN DASHBOARD</i></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <!-- left side -->
            <!--<ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            <li class="nav-item">
                    <h3><a class="nav-link" href="#">Teacher Dashboard</a></h3>
            </li>
        </ul>-->

            <!-- left side -->
            <!-- right side -->

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form  action="{{route('logout') }}" method="POST" style="display:block !important" class="mr-auto">
                        @csrf
                        <button type="submit">logout</button>
                    </form>
                </li>
            </ul>
            <!-- right side -->
        </div>
    </nav>

    <aside style="background:#aabecf; width:250px;height:700px; float:left;">
        <ul>
          <li> <a href="/admin/departments" class=""><h3>Departments</h3></a></l1>
        </ul>
        <ul>
            <li><a href="/admin/courses" class=""><h3>Courses</h3></a></li>
        </ul>
        <ul>
           <li> <a href="/admin/students" class=""><h3>Students</h3></a></l1>
        </ul>
        <ul>
           <li> <a href="/admin/teachers" class=""><h3>Teacher</h3></a></l1>
        </ul>
        <ul>
           <li> <a href="/admin/results" class=""><h3>Results</h3></a></l1>
        </ul>
    </aside>
@if(session('msg'))
{{session('msg')}}
@endif
   <style type="text/css">
    h3{
      color:blue;
    }
        li{
            text-decoration: none;
            list-style: none;
        }
    </style>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
