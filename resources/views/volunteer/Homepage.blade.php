@extends('volunteer.master')
@section('content')
<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Local People
      </a>
      <div class="dropdown-menu">
      @if (Route::has('local.login'))
                 <div class="">
                 @auth('local')
                      <a href="{{ url('/Hotspot/HotspotMain') }}" class="dropdown-item ">Dashboard</a>
                    @else
                        <a href="{{ route('local.login') }}" class="dropdown-item">Log in</a>

                        @if (Route::has('local.register'))
                            <a href="{{ route('local.register') }}" class="dropdown-item">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Administrator
      </a>
      <div class="dropdown-menu">
      @if (Route::has('admin.login'))
                    <div class="">
                        @auth('admin')
                            <a href="{{ url('/Donation/DonationHome') }}" class="dropdown-item">Admin Dashboard</a>
                        @else
                            <a href="{{ route('admin.login') }}" class="dropdown-item">Admin Log in</a>

							@if (Route::has('admin.register'))
                            <a href="{{ route('admin.register') }}" class="dropdown-item">Register</a>
                        @endif
                        @endauth
                    </div>
                @endif
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Donor
      </a>
      <div class="dropdown-menu">
      @if (Route::has('volunteer.login'))
                    <div class="">
                        @auth('volunteer')
                            <a href="{{ url('/event/Orgevent') }}" class="dropdown-item">Donor Dashboard</a>
                        @else
                            <a href="{{ route('volunteer.login') }}" class="dropdown-item">Donor Log in</a>
                            @if (Route::has('volunteer.register'))
                                <a href="{{ route('volunteer.register') }}" class="dropdown-item">Donor Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
      </div>
    </li>
<div class="container">

<center>
<h1><b>Welcome to CMS</b> </h1>
</center>
</div>

<div class="card text-center">
		  <div class="card-header" style="color: #00008B;font-weight: bold;font-size:40px;">
          CHARITY IS EVERYWHERE
		  </div>
		  <div class="card-body" style="background-color: #00b386">
			<h5 class="card-title" style="font-weight: bold;font-size:20px;">You have the Power to Bring Happiness</h5>
			<br>
		
			<p class="card-text">A charity helps people realize that it is possible to bless others in a world full of uncertainties and chaos.</p>
			<br>

		  </div>
		  <div class="card-footer text-muted">
			© 2019 OneCare Sdn. Bhd. All Rights Reserved.
		  </div>
		</div>



@endsection