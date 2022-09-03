@extends('layouts.main')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{-- route('aboutus.index')--}}"> Back</a>
            </div>
        </div>
    </div>
    <div class="col-6 card" style="margin:25px">
        <div class="card-header">
              Add Record
        </div>
        <div class="card-body">
            <form >
                <div class="mb-3">
                <label  class="form-label">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>



</div>

</div>
@endsection




