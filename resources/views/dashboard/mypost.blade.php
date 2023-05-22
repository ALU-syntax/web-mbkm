@extends('layout.dashboard')
@section('container')

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <button class="btn ">Sort By</button>  
                <div class="ms-md-auto d-flex">
                  <div class="input-group ms-md-auto d-flex">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control me-3" placeholder="Search here..." onfocus="focused(this)" onfocusout="defocused(this)">
                  </div>
                </div>
              </div>
            </div>
              
            <div class="card-body ms-3">
              @foreach($posts as $post)
              <div class="row mt-3">
                <div class="d-flex align-items-center">
                  <h4>{{ $post->author->name }}</h4>
                  <small class="ms-2 m-0">{{ $post->author->roles->name }}</small>
                </div>
                <small class="mt-0">{{ $post->updated_at->diffForHumans()}}</small>
              </div>
              <div class="row mt-3">
                <p>{!! $post->body !!}</p>
                
              <div class="d-flex">
                 {{-- <div class="btn btn-info me-2">Share</div>   --}}
                <div class="btn btn-info">Comment</div>
                <a class="btn btn-outline-info ms-2" href="/dashboard/forum/{{ $post->id }}/edit">Edit</a>
              </div>
            </div>
            <hr class="horizontal dark mt-0">
              @endforeach

          </div>
        </div>
      </div>
@endsection