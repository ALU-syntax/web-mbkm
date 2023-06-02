@extends('layout.dashboard')
@section('container')

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <h5>Laporan</h5>
                </div>
            </div>
            <div class="card-body">
                {{-- <div class="d-flex align-items-center">
                    <form action="">
                        @csrf
                        <div class="ms-md-auto d-flex">
                            <label for="dokumen" class="form-label">Post Dokumen</label>
                            <input class="form-control" type="file" id="dokumen" name="dokumen">  
                        </div>
                    </form>
                    
                </div> --}}
                <form  action="/dashboard/logbook/create" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-8  d-flex">
                        <label for="dokumen" class="form-label">Post Dokumen</label>
                        <input class="form-control" type="file" id="dokumen" name="dokumen">  
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12 mb-3">
                      <label for="body" class="form-label">Body</label>
                      <input id="body" type="hidden" name="body" required>
                      <trix-editor input="body"></trix-editor>
                    </div>                    
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="ms-md-auto d-flex">
                      {{-- <a href="#" class="btn btn-primary align-items-center d-flex m-2">Submit</a> --}}
                      <Button type="submit" class="btn btn-primary align-items-center d-flex m-4 ">Submit</Button>
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