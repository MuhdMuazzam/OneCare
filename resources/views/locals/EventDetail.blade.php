@extends('Login.master')
@section('content')

<div class="container">

<table class="table shadow p-3 mb-3 bg-body rounded">
{{csrf_field()}}
  <thead>
    <tr>
      <th style="background-color:#b3cccc">Event Name :</th>
      <td style="background-color:#e0ebeb">{{$mydata2 -> eventName}}</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th style="background-color:#b3cccc">Event Location :</th>
      <td style="background-color:#e0ebeb">{{$mydata2 -> eventLocation}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Event Date :</th>
      <td style="background-color:#e0ebeb">{{$mydata2 -> eventDate}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">>Event Time :</th>
      <td style="background-color:#e0ebeb">{{$mydata2 -> eventTime}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Total Participant :</th>
      <td style="background-color:#e0ebeb">{{$mydata2 -> eventParticipant}}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Contact Number :</th>
      <td style="background-color:#e0ebeb">{{$mydata2 -> eventContact}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Registration Form :</th>
      <td style="background-color:#e0ebeb">{{$mydata2 -> eventLink}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc"></th>
      <td style="background-color:#e0ebeb"><img src="{{asset($mydata2->image)}}"></td>
    </tr>

  </tbody>
</table>
</div>



@endsection