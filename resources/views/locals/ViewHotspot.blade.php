@extends('locals.master')
@section('content')


<div class="container">

<table class="table shadow p-3 mb-3 bg-body rounded">
{{csrf_field()}}
  <thead>
    <tr>
      <th style="background-color:#b3cccc">ID:</th>
      <td style="background-color:#e0ebeb">{{$mydata3->id}}</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th style="background-color:#b3cccc">Name:</th>
      <td style="background-color:#e0ebeb">{{$mydata3->LocationName}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">State:</th>
      <td style="background-color:#e0ebeb">{{$mydata3->LocationState}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Address:</th>
      <td style="background-color:#e0ebeb">{{$mydata3->LocationAdd}}</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Detail:</th>
      <td style="background-color:#e0ebeb">{{$mydata3->detail}}</td>
    </tr>
<tr>
    <th></th>
    <td>
    <div style="width:100%; height:500px;"><iframe src="https://www.google.com/maps?q={{$mydata3->latitude}},{{$mydata3->longitude}}&hl=es;z=14&output=embed" style="width:100%;height:100%"></iframe>
    </td>
</tr>
  </tbody>
</table>
<center>
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
</button>
</center>

</div>




@endsection