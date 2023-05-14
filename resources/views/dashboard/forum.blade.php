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
                <h4 class="mb-0">Author</h4>
                <small class="mt-0">time 12/03/2023</small>
              </div>
              <div class="row mt-3">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, totam. 
                  Asperiores quaerat ipsa nihil iusto corrupti eaque quos voluptatibus commodi?</p>
              <div class="d-flex">
                <div class="btn">Share</div>
                <div class="btn">Comment</div>
              </div>
              </div>
              <hr class="horizontal dark mt-0">

              <div class="row">
                <h4 class="mb-0">Author</h4>
                <small class="mt-0">time 12/03/2023</small>
              </div>
              <div class="row mt-3">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, totam. 
                  Asperiores quaerat ipsa nihil iusto corrupti eaque quos voluptatibus commodi?</p>
              <div class="d-flex">
                <div class="btn">Share</div>
                <div class="btn">Comment</div>
              </div>
              </div>
              <hr class="horizontal dark mt-0">

              <div class="row">
                <h4 class="mb-0">Author</h4>
                <small class="mt-0">time 12/03/2023</small>
              </div>
              <div class="row mt-3">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, totam. 
                  Asperiores quaerat ipsa nihil iusto corrupti eaque quos voluptatibus commodi?</p>
              <div class="d-flex">
                <div class="btn">Share</div>
                <div class="btn">Comment</div>
              </div>
              </div>
              <hr class="horizontal dark mt-0">
          </div>
        </div>
      </div>
@endsection