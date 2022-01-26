@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
       <br><br>
       <table class="table table-bordered">       
          <thead>
            <tr>
              <td>Name</td>
              <td>Email Address</td>
              <td>Phone No</td>
              <td>Preferred Date</td>
              <td>Preferred Time</td>
              <td>Field Of Interest</td>
            </tr>
          </thead>
          <tbody>
              @foreach($students as $student)
            <tr>
                <td>{{  $student->name }}</td>
                <td>{{  $student->email_address}}</td>
                <td>{{  $student->phoneno }}</td>
                <td>{{  $student->preferredDate }}</td>
                <td>{{  $student->preferredTime }}</td>
                <td>{{  $student->fieldofinterest }}</td>
                <td></td>
            </tr>
            @endforeach
          </tbody>
       </table>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection