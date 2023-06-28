@extends('layouts.appDashboard')

@section('content')
<div class="container my-5">
    {{-- <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> 
    </div> --}}
    <h1 class="text-center">I MIEI PROGETTI</h1>
</div>
<div class="container my-4">
    <div class="row">
       
        @forelse ($projects as $elem)
        <div class="col-4 d-flex my-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$elem['title']}}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{$elem['type']}}</h6>
              <p class="card-text">{{$elem['content']}}</p>
            
    
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
        @empty
            <h2>non ci sono elementi</h2>
        @endforelse   
       
    </div>
    
</div>
@endsection
