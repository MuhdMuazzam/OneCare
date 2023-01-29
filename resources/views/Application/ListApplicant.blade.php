@extends('Login.master')
@section('content')



<div class="container">

<br>
<h2 style="font-family:verdana;font-weight: bold;"> List of Applicant </h2><br>

<table class="table shadow p-3 mb-3 bg-body rounded">
{{csrf_field()}}

<table class="table table-bordered table-striped">
                    <thead style="background-color:white;">
                        <tr>
                            <th>Donation ID</th>        
                            <th>Requestor Name</th>
                            <th>Donation Item</th>       
                            <th>Description</th>
                            <th>Requestor State</th>
                            <th>Requestor Address</th>
                            <th>Contact Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mydata as $row)
                            <tr>
                                <td>{{$row->donationID}}</td>
                                <td>{{$row->requestName}}</td>
                                <td>{{$row->donationItem}}</td>
                                <td>{{$row->requestDesc}}</td>
                                <td>{{$row->requestState}}</td>
                                <td>{{$row->requestAdd}}</td>
                                <td>{{$row->requestPhone}}</td>
                                <td>
                                <a style="float: right;" href="{{ route('subBalance', ['donationID' => $row->donationID, 'id' => $row->id]) }}" class="btn btn-info" >Applicant</a>

                                
                            <!-- <a href="{{ route('subBalance', ['donationID' => $row->donationID, 'id' => $row->id]) }}">Click here</a> -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

</div>



@endsection