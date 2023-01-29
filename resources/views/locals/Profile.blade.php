<?php

include 'connection.php';

?>
@extends('locals.profileTemplate')
@section('content')

@if(session('success'))
	<div class ="alert alert-success" role="alert">
	{{session('success')}}
	</div>
@endif

<body>
    <div class="container" style="margin-top:20px;" >
    <div class="main-body">

              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center"style="margin-left:50px">
                    <img src="https://as1.ftcdn.net/v2/jpg/03/39/45/96/1000_F_339459697_XAFacNQmwnvJRqe1Fe9VOptPWMUxlZP8.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{Auth::guard('local')->user()->LocalsName}}</h4>
                    </div>
                </div>
                </div>
                </div>
                </table><div class="container mt-3" style="overflow-x:auto;">
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <span class="text-secondary">Name: </span>
                    <span class="text-secondary">{{Auth::guard('local')->user()->LocalsName}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <span class="text-secondary">Email Address: </span>
                    <span class="text-secondary">{{Auth::guard('local')->user()->LocalsEmail}}</span>
                </ul>
            </div>
            <a href="/local/{{Auth::guard('local')->user()->id}}/viewDonates">Donate</a>
            <a href="/local/{{Auth::guard('local')->user()->id}}/viewSupports">Support</a>

                  <hr>
                  <center>
                    <div class="row">
                  <div class="col-sm">
                  <form method="POST"  action="{{ route('local.logout') }}"style="padding:10px;padding-left:20px;padding-right:20px;margin-top:10px;"class="btn btn-danger ">
                    @csrf
                    <x-responsive-nav-link :href="route('local.logout')" style="font-size:20px;text-align:center;font-weight:800;color:white;font-family:SoDO Sans;text-decoration:none"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link> </form>   
                  </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
    <script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
</body>
<br><br>

@endsection
