@extends('admin.parent')

@section('content')

@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-octagon me-1"></i>
        {{ $error }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endforeach
@endif

<!-- Vertical Form -->
<form class="row g-3" action="{{ route('updatePassword')}}">
    <div class="col-12">
      <label for="inputNanme4" class="form-label">Current Password</label>
      <input type="password" class="form-control" id="current_password">
    </div>
    <div class="col-12">
      <label for="inputEmail4" class="form-label">New Password</label>
      <input type="password" class="form-control" id="password">
    </div>
    <div class="col-12">
      <label for="inputPassword4" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="confirmation_password">
    </div>
    
    </div>
  </form><!-- Vertical Form -->

@endsection