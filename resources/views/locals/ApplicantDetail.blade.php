@extends('Login.master')
@section('content')

<div class="container">

<table class="table shadow p-3 mb-3 bg-body rounded">
  <tbody>
    <tr>
      <th style="background-color:#b3cccc">Name:</th>
      <td style="background-color:#e0ebeb">Ahmad Jailani</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">State:</th>
      <td style="background-color:#e0ebeb" >Negeri Sembilan</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Address:</th>
      <td style="background-color:#e0ebeb" >269 1B Taman Ast,Seremban,70200,</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Description</th>
      <td style="background-color:#e0ebeb" >Minyak Masak, Beras</td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Type:</th>
      <td style="background-color:#e0ebeb" >Food Ingredients</td>
    </tr>
      <th style="background-color:#b3cccc">Contact Number:</th>
      <td style="background-color:#e0ebeb" >03-7729-2729 </td>
    </tr>
    <tr>
      <th style="background-color:#b3cccc">Email:</th>
      <td style="background-color:#e0ebeb" >jailaniahmad@gmail.com</td>
    </tr>
  </tbody>
</table>
<div class="col-12 d-flex justify-content-center">
<a class="btn btn-success" style="margin-right:5px;" role="button">Accept</a>
<a class="btn btn-danger"  role="button">Reject</a>
</div>
</div>




@endsection