@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
@endif

<div class="col-lg-8">
    <form method="POST" action="/dashboard/posts">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>   
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>   
          @enderror
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $cat)
              @if (old('category_id') == $cat->id)
                <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>      
              @else
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>  
              @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          @error('body')
            <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="body" type="hidden" name="body" value="{{ old('body') }}">
          <trix-editor input="body"></trix-editor>
        </div>
        
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>

    <div class="mb-5"></div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    })
</script>
@endsection