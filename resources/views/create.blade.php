@extends('index')
@section('title', 'Thêm mới khách hàng')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>add news  contact</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('store') }}">
                    @csrf
                    @if(count($errors)>0)
                    						<div class="alert alert-danger">
                    							@foreach($errors->all() as $err)
                    							{{$err}}
                    							@endforeach
                    						</div>
                    					@endif
                    <div class="form-group">
                        <label>firstname</label>
                        <input type="text" class="form-control" name="firstname"  placeholder="Enter name" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">lastname</label>
                        <input type="text" class="form-control" name="lastname" >
                    </div>
                    <div class="form-group">
                                            <label for="exampleInputEmail1">phone</label>
                                            <input type="text" class="form-control" name="phone" >
                                        </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                    </div>
                <div class="form-group">
                                        <label for="exampleInputEmail1">address</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
