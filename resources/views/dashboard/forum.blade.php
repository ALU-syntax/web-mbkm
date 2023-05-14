@extends('layout.dashboard')
@section('container')
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <button class="btn ">Sort By</button>  
                <div class="ms-md-auto">
                  <div class="input-group ms-md-auto d-flex">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here..." onfocus="focused(this)" onfocusout="defocused(this)">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <h2>postingan</h2>
              <div class="d-flex">
                <div class="btn">Share</div>
                <div class="btn">Comment</div>
              </div>
              </div>
              <hr class="horizontal dark mt-0">
              <div class="row">
                <h2>postingan</h2>
              <div class="d-flex">
                <div class="btn">Share</div>
                <div class="btn">Comment</div>
              </div>
              </div>
              <hr class="horizontal dark mt-0">
              <div class="row">
                <h2>postingan</h2>
              <div class="d-flex">
                <div class="btn">Share</div>
                <div class="btn">Comment</div>
              </div>
              </div>
              <hr class="horizontal dark mt-0">
            </div>
          </div>
        </div>
      </div>
@endsection