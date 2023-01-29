@extends('locals.master')
@section('content')

<div class="container">

<table class="table shadow p-3 mb-3 bg-body rounded">
{{csrf_field()}}

  <thead>
    <tr>
      <th style="background-color:#b3cccc">Support ID:</th>
      <td style="background-color:#e0ebeb" >{{$mydata1->id}}</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th style="background-color:#b3cccc">Name:</th>
      <td style="background-color:#e0ebeb">{{$mydata1->supportName}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Description</th>
      <td style="background-color:#e0ebeb" >{{$mydata1->supportDesc}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Type:</th>
      <td style="background-color:#e0ebeb" >{{$mydata1->supportType}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Quantity Require:</th>
      <td style="background-color:#e0ebeb" >{{$mydata1->supportQuantity}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">State:</th>
      <td style="background-color:#e0ebeb" >{{$mydata1->supportState}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Poscode:</th>
      <td style="background-color:#e0ebeb" >{{$mydata1->supportKod}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Zone:</th>
      <td style="background-color:#e0ebeb" >{{$mydata1->supportZon}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Address:</th>
      <td style="background-color:#e0ebeb" >{{$mydata1->supportAdd}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Contact Number:</th>
      <td style="background-color:#e0ebeb" >{{$mydata1->supportPhone}}</td>
    </tr>
    <!-- <tr>
      <th style="background-color:#b3cccc">Email:</th>
      <td style="background-color:#e0ebeb" >jailaniahmad@gmail.com</td>
    </tr> -->
  </tbody>
</table>

<center><a href="apl" class="btn btn-info">Applicant</a></center>
</div>




@endsection