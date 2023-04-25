@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>CRUD APPLICATION</h2>
                    </div>
                    @if (count($students)>0)
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-success w-100 " title="Add New Student">
                           Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" ><button class="btn btn-info btn-sm">View</button></a>
                                            {{-- <a href="{{ route('student.show',$item->id) }}" ><button class="btn btn-info btn-sm">View</button></a> --}}
                                            {{-- <a href="{{ url('/student/' . $item->id . '/edit') }}" ><button class="btn btn-primary btn-sm"> Edit</button></a> --}}
                                            <a href="{{ route('student.edit',$item->id) }}" ><button class="btn btn-primary btn-sm"> Edit</button></a>
                                            {{-- <form method="POST" action="{{ url('/student' . '/' . $item->id) }}"  style="display:inline"> --}}
                                            <form method="POST" action="{{ route('student.destroy', $item->id) }}"  style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @else
                        <h1 class="alert alert-danger text-center" role="alert" >Data Not Found</h1> 
                    @endif
                   
                </div>
                {{-- <form method="POST" action="{{ route('student.deleteAll') }}"  style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    {{-- <a href="{{url('student.deleteAll')}}" ><button class="btn btn-info btn-sm">Delete All</button></a> --}}
                    {{-- <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot;Confirm delete? &quot;)">Delete All</button> --}}
                {{-- </form>  --}}

                <div class="modal-footer">
                    <a href="student/deleteAll" class="btn btn-danger" 
                       >Yes, Delete them all !</a>
                </div>
               
            </div>
        </div>
    </div>
@endsection