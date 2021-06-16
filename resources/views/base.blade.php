<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Newsblog @yield('title')</title>
</head>
<body class="alert-warning">
    <nav class="navbar-dark navbar bg-dark navbar-expand-lg ">
        <div class="container">
            <a href="/" class="navbar-brand"><h1>Newsblog</h1></a>
        </div>

        <ul class="navbar-nav me-5">
            <li class="nav-item me-5"><a href="#post" data-bs-toggle="modal" class="nav-link btn btn-outline-warning text-white me-5">Post your blog</a></li>
        </ul>
    </nav>

    @section('content')
        @show

    <footer class="bg-dark fixed-bottom p-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="/" class="nav-link text-white"><h1>Newsblog</h1></a>
                </div>
                <div class="col-lg-8 text-white">
                At some point during the disputed US election of 2000 - when Al Gore was famously defeated by a few hanging chads - Joshua Micah Marshall lost patience. Despite working as a magazine editor, Marshall chose to vent on the web. Eight years later Talking Points Memo and its three siblings draw in more than 400,000 viewers a day from their base in New York.
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="post">
     <div class="modal-dialog">
        <div class="modal-content border border-dark border-2 shadow-lg">
            <div class="modal-header bg-secondary text-warning">
                <h3>Write your blog</h3>
            </div>
           <div class="modal-body alert-dark">
                <form action="{{route('publish')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="author" placeholder="Your name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="category" placeholder="Enter category" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="title" placeholder="Title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea type="text" name="news" placeholder="Write your blog here" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <input type="submit" value="Post" name="post" class="btn btn-dark">
                    </div>                                                       
                </form>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>