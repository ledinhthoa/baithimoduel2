    <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">firstname</th>
                    <th scope="col">lastname</th>
                    <th scope="col">phone</th>
                    <th scope="col">Email</th>
                     <th scope="col">address</th>
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
                                    @endforeach
                                   @endif
                </tbody>
            </table>

        </div>

    </div>
<div></br></div>
