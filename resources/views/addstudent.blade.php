@extends('layout.Master')
@section('title', 'User Add')

@section('content')




    <div class="container mt-4 container mt-4 d-flex align-items-center justify-content-center">

        <div style="width:600px !important">
            <h3 class="mb-4">Add New Student <small class="fs-5 ms-auto float-end text-info"></small> </h3>


            <!-- Update Form -->
            <form id="updateForm" action="{{ route('student.insert') }}" method="POST">
                @csrf

                <div class="input-group mb-3">
                    <label for="studentName" class="input-group-text">Name</label>
                    <input class="form-control" type="text" name="studentName">
                </div>
                <div class="input-group mb-3">
                    <label for="studentEmail" class="input-group-text">Email</label>
                    <input class="form-control" type="email" name="studentEmail">
                </div>

                <div class="input-group mb-3">
                    <label for="studentAge" class="input-group-text">Age</label>
                    <input class="form-control" type="number" name="studentAge">
                </div>


                <div class="input-group mb-3">
                    <label for="studentGender" class="input-group-text">Gender:</label>
                    <select class="form-select" aria-label="Default select Gender" name="studentGender">
                        <option selected value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>

                    </select>
                </div>
                <div class="input-group mb-3">
                    <label for="studentCountry" class="input-group-text">Country:</label>
                    <input type="text" class="form-control" id="studentCountry" />
                </div>
                <div class="input-group mb-3">
                    <label for="studentCity" class="input-group-text">City:</label>
                    <input type="text" class="form-control" name="studentCity" />
                </div>
                <div class="input-group mb-3">
                    <label for="studentAddress" class="input-group-text">Address:</label>
                    <textarea class="form-control" name="studentAddress" rows="3"> </textarea>
                </div>
                <div class="input-group mb-3">
                    <label for="studentPhone" class="input-group-text">Phone:</label>
                    <input type="text" class="form-control" name="studentPhone" />
                </div>


                <button id="btnInsert" type="submit" class="btn btn-primary">Insert</button>
            </form>
        </div>

    </div>


    {{-- <script>
        var btnInsert = document.getElementById('btnInsert');
        btnInsert.addEventListener('click', function(e) {
            e.preventDefault();
            var studentName = document.getElementById('studentName').value;
            var studentEmail = document.getElementById('studentEmail').value;
            var studentAge = document.getElementById('studentAge').value;
            var studentGender = document.getElementById('studentGender').value;
            var studentCountry = document.getElementById('studentCountry').value;
            var studentCity = document.getElementById('studentCity').value;
            var studentAddress = document.getElementById('studentAddress').value;
            var studentPhone = document.getElementById('studentPhone').value;

            // Validations
            if (studentName.trim() === '') {
                alert('Name is required');
                return;
            }
            if (studentEmail.trim() === '') {
                alert('Email is required');
                return;
            }
            if (studentAge.trim() === '') {
                alert('Age is required');
                return;
            }
            if (studentGender.trim() === '') {
                alert('Gender is required');
                return;
            }
            if (studentCountry.trim() === '') {
                alert('Country is required');
                return;
            }
            if (studentCity.trim() === '') {
                alert('City is required');
                return;
            }
            if (studentAddress.trim() === '') {
                alert('Address is required');
                return;
            }
            if (studentPhone.trim() === '') {
                alert('Phone is required');
                return;
            }




            var url = "{{ route('student.insert') }}";
            var data = {
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

                    window.location.href = "{{ route('users') }}";
                })
                .catch(function(error) {
                    console.log(error);
                });
        });
    </script> --}}




@endsection
