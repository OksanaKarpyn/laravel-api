@extends('layouts.appDashboard')
@section('content')
<div class="container">
    <div class="row">
        <a class="text-decoration-none mb-4" href="{{ route('admin.posts.index') }}"><i class="fa-solid fa-arrow-left fs-1"></i></a>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <img src="{{asset('storage/' . $post->image)}}" class="card-img-top" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">{{$post['title']}}</h5>
                  <p class="card-text">{{$post['content']}}</p>

                  @if( $post->tecnologies )
                  @foreach ( $post->tecnologies as $elem )
                    <div> {{ $elem->title }} </div>
                  @endforeach
                  @endif

                  

                </div>
                <a class="text-uppercase text-white text-decoration-none btn btn-outline-light"
                href="{{ route('admin.posts.edit', $post) }}"> modifica elemento </a>

                <form action="{{ route('admin.posts.destroy', $post['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger bg-danger-subtle text-danger me-2 w-100">
                      <i class="fa-regular fa-trash-can text-danger me-2"></i>
                      Delete
                    </button>
                  </form>
              </div>
            </div>
    </div>
</div>
@endsection