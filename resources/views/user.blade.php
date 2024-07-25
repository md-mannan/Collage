@extends('layout.Master')
@section('title', 'User View')

@section('content')




    <div class="container mt-4 container mt-4 d-flex align-items-center justify-content-center">

        <div style="width:600px !important">
            @foreach ($data as $student)
                <h3 class="mb-4">Update Student <small class="fs-5 ms-auto float-end text-info">
                        {{ $student->updated_at == null ? 'Created : ' . $student->created_at : 'Last Updated: ' . $student->updated_at }}</small>
                </h3>


                <!-- Update Form -->



                <form id="updateForm">

                    <div class="input-group mb-3">
                        <label for="studentId" class="input-group-text">ID</label>
                        <input class="form-control" disabled type="text" id="studentId" value="{{ $student->id }}">
                    </div>
                    <div class="input-group mb-3">
                        <label for="studentName" class="input-group-text">Name</label>
                        <input class="form-control" type="text" id="studentName"value="{{ $student->name }}">
                    </div>
                    <div class="input-group mb-3">
                        <label for="studentEmail" class="input-group-text">Email</label>
                        <input class="form-control" type="email" id="studentEmail"value=" {{ $student->email }}">
                    </div>

                    <div class="input-group mb-3">
                        <label for="studentAge" class="input-group-text">Age</label>
                        <input class="form-control" type="number" id="studentAge"value="{{ $student->age }}">
                    </div>


                    <div class="input-group mb-3">
                        <label for="studentGender" class="input-group-text">Gender:</label>
                        <select class="form-select text-capitalize" aria-label="Default select Gender"
                            id="studentGender"value="
                                                                                                                                                                    {{ $student->gender }}">
                            <option selected value="{{ $student->gender }}">{{ $student->gender }}</option>
                            <option value="male">
                                Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>

                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label for="studentCountry" class="input-group-text">Country:</label>
                        <input type="text" class="form-control" id="studentCountry" value="{{ $student->country }}" />
                    </div>
                    <div class="input-group
                            mb-3">
                        <label for="studentCity" class="input-group-text">City:</label>
                        <input type="text" class="form-control" id="studentCity" value="{{ $student->city }}" />
                    </div>
                    <div class="input-group
                            mb-3">
                        <label for="studentAddress" class="input-group-text">Address:</label>
                        <textarea class="form-control" id="studentAddress" rows="3">{{ $student->address }}</textarea>
                    </div>
                    <div class="input-group mb-3">
                        <label for="studentPhone" class="input-group-text">Phone:</label>
                        <input type="text" class="form-control" id="studentPhone" value="{{ $student->phone }}" />
                    </div>

                    <button id="btnUpdate" type="button" class="btn btn-primary">Update</button>
                </form>
            @endforeach
        </div>


    </div>



    <script>
        var btnInsert = document.getElementById('btnUpdate');
        btnInsert.addEventListener('click', function(e) {
            e.preventDefault();
            var studentId = document.getElementById('studentId').value;
            var studentName = document.getElementById('studentName').value;
            var studentEmail = document.getElementById('studentEmail').value;
            var studentAge = document.getElementById('studentAge').value;
            var studentGender = document.getElementById('studentGender').value;
            var studentCountry = document.getElementById('studentCountry').value;
            var studentCity = document.getElementById('studentCity').value;
            var studentAddress = document.getElementById('studentAddress').value;
            var studentPhone = document.getElementById('studentPhone').value;

            var url = "{{ route('student.update') }}";
            var data = {
                id: studentId,
                name: studentName,
                email: studentEmail,
                age: parseInt(studentAge),
                gender: studentGender,
                country: studentCountry,
                city: studentCity,
                address: studentAddress,
                phone: studentPhone
            }

            axios.post(url, data)
                .then(function(response) {
                    alert('Student updated successfully!');
                    window.location.href = "{{ route('users') }}";
                })
                .catch(function(error) {
                    console.log(error);
                });
        });
    </script>








@endsection
