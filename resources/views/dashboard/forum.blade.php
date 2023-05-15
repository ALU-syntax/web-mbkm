@extends('layout.dashboard')
@section('container')
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <button class="btn ">Sort By</button>  
                <div class="ms-md-auto d-flex">
                  <Button class="btn btn-outline-primary align-items-center d-flex m-0 me-5 w-50"><i class="fas fa-plus me-2" aria-hidden="true"></i>New Post</Button>
                  <div class="input-group ms-md-auto d-flex">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control me-3" placeholder="Search here..." onfocus="focused(this)" onfocusout="defocused(this)">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="d-flex align-items-center">
                  <h4>Author</h4>
                  <small class="ms-2 m-0">role</small>
                </div>
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
                <div class="d-flex align-items-center">
                  <h4>Author</h4>
                  <small class="ms-2 m-0">role</small>
                </div>
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
                <div class="d-flex align-items-center">
                  <h4>Author</h4>
                  <small class="ms-2 m-0">role</small>
                </div>
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