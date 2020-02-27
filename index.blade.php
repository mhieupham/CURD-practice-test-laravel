@extends('master')
@section('content')
    <div class="row">
        <br>
        <h3>Student Data</h3>
        <br>

        <a href="{{route('student.create')}}" class="btn btn-primary">Add</a>
        <br>
        @if(\Session::has('success'))
            <div class="alert d-block alert-success">
                {{\Session::get('success')}}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            @foreach($student as $row)
            <tr>
                <th scope="row">{{$row['id']}}</th>
                <td>{{$row['first_name']}}</td>
                <td>{{$row['last_name']}}</td>
                <td>
                    <a href="{{action('StudentControler@edit',$row['id'])}}" class="btn btn-primary">Edit</a>
                    <form method="post" class="delete-form" action="{{action('StudentControler@destroy',$row['id'])}}">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script>


    </script>
    @endsection
