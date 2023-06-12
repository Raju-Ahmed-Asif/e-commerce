@extends('master')

@section('content')
<form action="{{route('brand.store')}}" method="post" >
  @csrf
  <div class="form-group">
    <label for="exampleInputBrand">Brand Name</label>
    <input name="brand_name" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter brand name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Size</label>
    <input name="size" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Size">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection