@extends('layouts.appDashboard')
@section('content')
<h2>paggina edit</h2>
<div class="container">
<form action="{{route('admin.posts.update', $mod_post['id'] )}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-control">
        <div class="form-group mt-3">
            <label for="input-title" class="form-label text-white">Title</label>
            <input type="text" id="input-title" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="titolo" autofocus value="{{ old('title') ?? $mod_post->title }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mt-3">
            <label for="input-content" class="form-label text-white">Content</label>
            <textarea id="input-content" class="form-control" name="content" cols="35" rows="3">{{ old('content') ?? $mod_post->content }}
            </textarea>
        </div> 
        <div class="form-group mt-3">
            <label for="input-slug" class="form-label text-white">Slug</label>
            <input type="text" id="input-slug" class="form-control" name="slug" placeholder="titolo-slug" autofocus value="{{ old('slug') ?? $mod_post->slug }}">
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="input-image" class="form-label">Image</label>
        <input type="file" id="input-image" name="image" class="form-control">
    </div>
    <div class=" form-group mb-3">
        <label for="input-category" class="form-label">category</label>
        <select class="form-select form-select-lg" name="category_id" @error('category_id') is-invalid @enderror id="input-category">
            <option value="">....Select one.....</option>
            @foreach($new_categories as $elem)
            <option value="{{$elem->id}}"{{old('category_id', $mod_post->category_id) == $elem->id ? 'selected' : ''}}>{{$elem['title']}}</option>
           @endforeach
        </select>
        @error('category_id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div> 
      {{-- tecnology --}}
    <div class="form-group mt-3">
        @foreach($tecnologies as $elem)
          <div class="form-check" @error('tecnologies') is-invalid @enderror>

            @if($errors->any())

          <input class="form-check-input"
           type="checkbox"
            value="{{$elem->id}}"
             id="checkbox{{$elem->id}}" 
             name="tecnologies[]" 
          {{ in_array( $elem->id, old( 'tecnologies', [] ) ) ? 'checked' : '' }}>

          <label class="form-check-label" for="checkbox{{$elem->id}}">
             {{$elem->title}}
          </label>

          @else

         <input class="form-check-input" 
         type="checkbox"
          value="{{$elem->id}}"
           id="checkbox{{$elem->id}}"
          name="tecnologies[]" 
          {{ ($mod_post->tecnologies->contains($elem)) ? 'checked': '' }}>

          <label class="form-check-label" for="checkbox{{$elem->id}}">
             {{$elem->title}}
          </label>

          @endif

          </div>
          @endforeach
      </div>
      @error('tecnologies')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror

    <button type="submit" class="btn btn-primary btn-outline-light my-4 col-2 mx-auto text-uppercase"><strong> create </strong></button>
</form>
</div>
@endsection