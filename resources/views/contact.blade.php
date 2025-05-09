@extends('layouts.app')

@section('content')
<h2>Contact Us</h2>
<form>
    <div class="mb-3">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Your name">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="name@example.com">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
