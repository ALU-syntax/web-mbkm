@extends('layout.dashboard')
@section('container')
<form >
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h4>Upload Kurikulum</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3">
                            <label for="dokumen" class="form-label">Post Dokumen</label>
                            <input class="form-control" type="file" id="dokumen" name="dokumen">  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">NIM</label>
                                <input class="form-control" type="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">NIM</label>
                                <input class="form-control" type="email">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                </div>
            </div>
        </div>
    </div>
</form>
@endsection