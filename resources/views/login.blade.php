@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-5 col-sm-offset-4">
<form action="">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      {{-- <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
      </div> --}}

      <button type="submit" class="btn btn-default">Submit</button>
  </form>
</form>


        </div>
    </div>
</div>

@endsection
