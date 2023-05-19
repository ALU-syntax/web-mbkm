@extends('layout.dashboard')
@section('container')

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <h5>Logbook Saefullah</h5>
                </div>
            </div>
            <div class="card-body">
                <form action="">
                  @csrf

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="tempat" class="form-control-label">Input Tanggal</label>
                        <input class="form-control" type="datetime-local" name="tempat" >
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="tempat" class="form-control-label">Tempat</label>
                        <input class="form-control" type="text" name="tempat" >
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12 mb-3">
                      <label for="body" class="form-label">Body</label>
                      <input id="body" type="hidden" name="body" >
                      <trix-editor input="body"></trix-editor>
                    </div>                    
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="ms-md-auto d-flex">
                      <a href="#" class="btn btn-primary align-items-center d-flex m-2">Submit</a>
                    </div>
                  </div>
                </form>
          </div>
        </div>
      </div>    

      <script>
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
      </script>
@endsection