<x-app-web-layout>

    <x-slot name="title">
        Student List
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>Add Student</h4>
                        <a href="{{ url('student')}}" class="btn btn-primary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('student.store')}}" method="POST">
                            @csrf
                            <h4>Students</h4>

                            <div class="mb-3">
                                <label>Full name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>

                            {{-- relationship --}}
                            <h4>Student Details</h4>
                            <div class="mb-3">
                                <label>Alternative Phone no</label>
                                <input type="text" name="alternate_phone" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Course</label>
                                <input type="text" name="course" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Roll No</label>
                                <input type="text" name="roll_no" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-web-layout>
