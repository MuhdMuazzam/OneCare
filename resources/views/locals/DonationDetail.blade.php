@extends('locals.master')
@section('content')

<div class="container">

<table class="table shadow p-3 mb-3 bg-body rounded">
{{csrf_field()}}
  <thead>
    <tr>
      <th style="background-color:#b3cccc">Donation ID:</th>
      <td style="background-color:#e0ebeb">{{$mydata->id}}</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th style="background-color:#b3cccc">Donation Item:</th>
      <td style="background-color:#e0ebeb">{{$mydata->donationItem}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Donation Type:</th>
      <td style="background-color:#e0ebeb">{{$mydata->donationType}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Description:</th>
      <td style="background-color:#e0ebeb">{{$mydata->donationDesc}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">State:</th>
      <td style="background-color:#e0ebeb">{{$mydata->donationState}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Code:</th>
      <td style="background-color:#e0ebeb">{{$mydata->donationKod}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Zone:</th>
      <td style="background-color:#e0ebeb">{{$mydata->donationZon}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Address:</th>
      <td style="background-color:#e0ebeb">{{$mydata->donationAdd}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Donation Numbers:</th>
      <td style="background-color:#e0ebeb">{{$mydata->donationNum}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Donation Balance:</th>
      <td style="background-color:#e0ebeb">{{$mydata->donationBal}}</td>
    </tr>
    <tr>
    <th style="background-color:#b3cccc">Maps:</th>
      <td style="height:200px;" >
      <iframe src="https://www.google.com/maps?q={{$mydata->latitude}},{{$mydata->longitude}}&hl=es;z=14&output=embed" style="width:100%;height:100%"></iframe>
      </td>
    </tr>
  </tbody>
</table>
<center>
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
	                  <a style="color:black; text-decoration: none;" href="/addApply/{{$mydata->id}}/overview">Apply</a>
</button>
</center>

</div>




@endsection