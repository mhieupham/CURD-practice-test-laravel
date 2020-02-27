@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3>Edit Data</h3>
            <br>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    {{\Session::get('success')}}
                </div>
            @endif
            <form method="post" action="{{action('StudentControler@update',$id)}}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <input type="text" value="{{$student->first_name}}" name="first_name" class="form-control" placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <input type="text" value="{{$student->last_name}}" name="last_name" class="form-control" placeholder="Enter last name">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Send">
                </div>
            </form>
        </div>
    </div>
@endsection

