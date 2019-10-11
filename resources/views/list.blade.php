@extends('index')
@section('title', 'contactManager')
@section('content')
  <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">

            </div>
            <div class="col-6">

              <form class="navbar-form navbar-left" action="{{ route('search') }}" method="post">

                @csrf

                  <div class="row">

                      <div class="col-8">

                          <div class="form-group">

                              <input type="text" name='keyword' class="form-control" placeholder="Search">

                          </div>

                      </div>

                      <div class="col-4">

                          <button type="submit" class="btn btn-default">search</button>

                      </div>

                  </div>

              </form>

            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">fullname</th>
                    <th scope="col">lastname</th>
                    <th scope="col">phone</th>
                    <th scope="col">Email</th>
                     <th scope="col">address</th>
                     <th scope="col">action</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($contact) == 0)
                    <tr><td colspan="4">Không có dữ liệu</td></tr>
                @else
                    @foreach($contact as $key => $contacts)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $contacts->firstname }}</td>
                            <td>{{ $contacts->lastname }}</td>
                            <td>{{ $contacts->phone }}</td>
                            <td>{{$contacts->email }}</td>
                            <td>{{$contacts->address }}</td>

                            <td><a href="{{ route('destroy',$contacts->id) }}"
                             class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Remore</a></td>
                        </tr>   @endforeach
                                             @endif

                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('create') }}">Add news</a>
        </div>
<d
@endsection

