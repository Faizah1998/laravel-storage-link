@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-offset-md-4">
        <div class="card">
          <h5 class="card-header">Muat Naik Fail</h5>
          <div class="card-body">
            <form class="" action="{{ route('uploadfile')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <input type="file" name="file[]" multiple>
              </div>
              <button type="submit" class="btn btn-primary" name="button">Muat Naik</button>
              <a href="{{ route('viewfile') }}" class="btn btn-success">kembali</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
