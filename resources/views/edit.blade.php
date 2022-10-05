@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form method="post" action="../update/{{$blogs->id}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" value="{{$blogs->name}}" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Blog Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Discription</label>
                    <textarea name="discription" placeholder="Enter Blog Discription" class="form-control" id="" cols="30" rows="10">{{$blogs->discription}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
