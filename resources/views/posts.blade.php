@extends('base')

@section('title',"Posts")

@section('content')

<div class="container my-5 py-5">
        
    <div class="row mb-3">
            @foreach ($news as $a )
                <div class="col-lg-6">
                    <div class="card shadow-lg border-secondary border mb-3">
                        <div class="card-header display-6 fw-bold d-inline">{{$a->title}}</div>
                        <div class="card-body text-dark">
                            <div class="text-dark float-end ms-1">{{$a->created_at,('Y-m-d H:i:s') }}</div>
                            <p class="fw-bold lead">{{substr($a->post,0,50)}}.......</p>
                            <div class="row">
                            <div class="h6 col-lg-4">
                            By {{$a->author}}
                            </div>
                            <a href="{{route('delete',['id'=>$a->id])}}" class="btn btn-dark ms-auto col-lg-4">Delete</a>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
    
</div>

@endsection