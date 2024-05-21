<x-app-web-layout>

    <x-slot name="title">
        Student List
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>Edit Student</h4>
                        <a href="{{ url('student')}}" class="btn btn-primary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('student/'.$student->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <h4>Update Student Details</h4>
                            <div class="mb-3">
                                <label>Full name</label>
                                <input type="text" name="name" value="{{ $student->name }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" value="{{ $student->email }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" value="{{ $student->phone }}" class="form-control">
                            </div>

                            {{-- relationship --}}
                            <h4>Student Details</h4>
                            <div class="mb-3">
                                <label>Alternative Phone no</label>
                                <input type="text" name="alternate_phone" value="{{ $student->studentDetail->alternate_phone }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Course</label>
                                <input type="text" name="course" value="{{ $student->studentDetail->course }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Roll No</label>
                                <input type="text" name="roll_no" value="{{ $student->studentDetail->roll_no }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-web-layout>
