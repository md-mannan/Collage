@extends('layout.Master')
@section('title','User View')
   
@section('content')
    
       


 <div class="container mt-4 container mt-4 d-flex align-items-center justify-content-center">
@foreach ($data as $student)
        <div style="width:600px !important">
            <h1 class="mb-4">Update Student</h1>

            <!-- Update Form -->
            <form id="updateForm">
                <div class="mb-3">
                    <label for="ID" class="form-label">ID:</label>
                    <input type="text" class="form-control" value="{{$student->id}}" id="studentId" />
                </div>

                <div class="mb-3">
                    <label for="studentName" class="form-label">Name:</label>
                    <input type="text" class="form-control" value="{{$student->name}}" id="studentName" />
                </div>
                <div class="mb-3">
                    <label for="studentName" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="studentEmail" value="{{$student->email}}" />
                </div>
                <div class="mb-3">
                    <label for="studentAge" class="form-label">Age:</label>
                    <input type="text" class="form-control" id="studentAge"  value="{{$student->age}}"/>
                </div>
                <div class="mb-3">
                    <label for="studentGrade" class="form-label">Gender:</label>
                    <input type="text" class="form-control" id="studentGrade"  value="{{$student->gender}}"/>
                </div>
                <div class="mb-3">
                    <label for="studentGrade" class="form-label">Country:</label>
                    <input type="text" class="form-control" id="studentGrade"  value="{{$student->country}}"/>
                </div>
                <div class="mb-3">
                    <label for="studentGrade" class="form-label">City:</label>
                    <input type="text" class="form-control" id="studentGrade"  value="{{$student->city}}"/>
                </div>
                <div class="mb-3">
                    <label for="studentAddress" class="form-label">Address:</label>
                    <textarea class="form-control" id="studentAddress" rows="3"> {{$student->email}}</textarea>
                </div>

                <button id="btnUpdate" type="button" class="btn btn-primary">Update</button>
            </form>
        </div>
        @endforeach
    </div>






    
@endsection