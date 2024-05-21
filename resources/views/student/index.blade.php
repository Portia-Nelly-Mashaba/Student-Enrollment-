<x-app-web-layout>

    <x-slot name="title">
        Student List
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('message'))
                <h4 class="alert alert-success">{{ session('message') }}</h4>

                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Student List</h4>
                        <a href="{{ url('student/create')}}" class="btn btn-primary float-end">Add Student</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($student as $students)

                                <tr>
                                    <td>{{ $students->id }}</td>
                                    <td>{{ $students->name }}</td>
                                    <td>{{ $students->email }}</td>
                                    <td>{{ $students->phone }}</td>
                                    <td>
                                        <a href="{{route('student.edit',$students->id)}}" class="btn btn-success btn-sm">Edit</a>
                           
                                        <form action="{{ route('student.destroy', $students->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-web-layout>
