@extends('layouts.app')

@section('content')
  <div class="container">
    @if(session('success'))
      <div class="alert alert-success">
        <strong>{{ session('success') }}</strong>
      </div>
    @endif
    <p>
      <a href="{{ route('formfile') }}" class="btn btn-primary">Muat Naik Fail</a>
    </p>
    <div class="row">
      @foreach($files as $file)
      <div class="col-md-4">
        <div class="card">
          <img src="{{ Storage::url($file->path) }}" alt="" class="card-img-top">
          <div class="card-body">
            <strong class="card-title">{{  $file->title }}</strong>
            <p class="card-text">{{ $file->created_at->diffForHumans() }}</p>

            <form class="" action="{{ route('deletefile', $file->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection
