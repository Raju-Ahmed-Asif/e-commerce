@extends('master')

@section('content')
<form action="{{route('customer.store')}}" method="post" >
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Customer Name</label>
    <input name="customer_name" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection