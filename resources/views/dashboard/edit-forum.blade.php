@extends('layout.dashboard')
@section('container')

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <h5>Edit Postingan</h5>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="/dashboard/forum/{{ $forum->id }}">
                  @method('put')
                  @csrf

                  <div class="row">
                    <div class="col-12 mb-3">
                      <label for="body" class="form-label">Body</label>
                      @error('body')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                      <input id="body" type="hidden" name="body" value="{{ old('body', $forum->body) }}" autofocus required>
                      <trix-editor input="body"></trix-editor>
                    </div>                    
                  <div class="d-flex align-items-center">
                    <div class="ms-md-auto d-flex">
                      <button type="submit" class="btn btn-primary">Update Post</button>
                      {{-- <a href="#" class="btn btn-primary align-items-center d-flex m-2">Submit</a> --}}
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