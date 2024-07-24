@extends('layout.Master')
@section('title','All Users')
@section('content')
@if ($data->count() > 0)
    <table class="table table-bordered table-striped">
        
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Country</th>
            <th>City</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
      
           
     
            @foreach ($data as $student)
                <tr>
                      <td>{{$student->id}}</td>
                      <td>{{$student->name}}</td>
                      <td>{{$student->email}}</td>
                      <td>{{$student->age}}</td>
                      <td>{{$student->gender}}</td>
                      <td>{{$student->country}}</td>
                      <td>{{$student->city}}</td>
                      <td>{{$student->address}}</td>
                      <td>{{$student->phone}}</td>
                      <td>
                        <div class="btn-group">
                            <a href="{{route('view.student',$student->id)}}" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="{{route('delete.student',$student->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                         </div>
                        </td>
                </tr>
            @endforeach
            @else
                <h2 class="text-center p-2 text-warning mt-5 border rounded -mt-2 border-warning">Data Not Found</h2>

        
          

    </table>
      @endif
@endsection

