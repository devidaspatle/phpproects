@extends('adminlte::page')@section('title', 'Zero diabetic diet Page')@section('content_header')
<h1>Manage Appointments</h1>
<div style="float: right;"><a href="{{ route('appointments.create')}}" class="btn btn-primary">Add</a></div>@stop
<div> @if(session()->get('success'))
    <div class="alert alert-success"> {{ session()->get('success') }} </div>
    <br /> @endif@section('content')
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <td><b>ID </b></td>
                <td><b>Patient Id</b></td>
                <td><b>Name</b></td>
                <td><b>Gender</b></td>
                <td><b>Age</b></td>
                <td><b>Mobile Number</b></td>
                <td><b>comments</b></td>
                <td><b> Date</b></td>
                <td colspan="2"><b>Action</b></td>
            </tr>
        </thead>
        <tbody> @php $i = 1 @endphp
         @foreach($appointments as $appointment)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$appointment->patient_id}} </td>
                <td>{{$appointment->name}}</td>
                <td>{{$appointment->gender}}</td>
                <td>{{$appointment->age}}</td>
                <td>{{$appointment->mobile_number}}</td>
                <td>{{$appointment->comments}}</td>
                <td>{{$appointment->patient_date}} </td>
                <td><a href="{{ route('appointments.edit', $appointment->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('appointments.destroy', $appointment->id)}}" method="post"> @csrf @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr> @endforeach </tbody>
    </table>
</div>@endsection