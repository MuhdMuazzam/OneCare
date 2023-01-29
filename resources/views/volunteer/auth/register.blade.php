@extends('/tempRegister')
@section('content')
<div id="app">
        <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm" style="margin-top:3px">
        <a class="title active"href="/" style="padding-right:40px;text-decoration:none;">
        <span class="h2 fw-bold mb-0" style="font-family:sans-serif;color:#00918f;"><b>One</b> <span style="color:darkgray"><b>Care</b> </span></span>
</a> 
   </nav>
   <nav>
<span class="h2 fw-bold" style="font-family:sans-serif;color:#00918f;text-align:center"><b>Volunteer | Register</b></span>
</nav>
    </div>  
<x-guest-layout style="background-color:lightgray" >
    <x-auth-card style="background-color:lightgray">
        <x-slot name="logo">
            <div style=" text-decoration:none" ><br><br>
        </x-slot>
<br>
<body onload="getLocation();"> 
    <div class="main" style="background-color:lightgray">
        <!-- Sign up form -->
        <section class="signup">
          
        <div class="signup-form">
                  <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors"/>
        <section class="vh-200" style="background-color:lightgray;" >
        <div class="container-fluid h-custom">
        <div class="content-center align-items-center">                        
        <div class="col-md-5" style="background-color:offwhite" >
            <center>
            </div><br>
                <div class="col-md-8">
                <h4 class="text-center" style=" font-style=bold;font-family:sans-serif;"><strong> Volunteers Are Welcome to Join Us! </strong></h4><br>
                <br>
                  <form class="myForm" method="POST" action="{{ route('volunteer.register') }}" >
                      @csrf
                      <div class="form-outline mb-4">               
                      <x-input class="form-control form-control-lg" describeby="emailHelp" type="email" id="form3Example3" name="DonorEmail" :value="old('DonorEmail')" required autofocus />
                        <x-label for="form3Example3" class="form-label"  :value="__('Email')" /></label>
                      </div>
                      <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="DonorName" :value="old('DonorName')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('Full Name')"/></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg"  type="password" name="password" required autocomplete="new-password" />
                        <x-label for="form3Example3" class="form-label"  :value="__('New Password')" /></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg"  type="password" name="password_confirmation" required />
                       <x-label for="form3Example3" class="form-label" :value="__('Confirmation Password')"/><i class="zmdi zmdi-account material-icons-name"></i>
                       </div>
                       <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="DonorIC" :value="old('DonorIC')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('NRIC')"/></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="DonorContact" :value="old('DonorContact')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('Contact')"/></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="DonorAddress" :value="old('DonorAddress')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('Address')"/></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="DonorPostcode" :value="old('DonorPostcode')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('Postcode')"/></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="DonorState" :value="old('DonorState')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('State')"/></label>
                        </div>

                        </div><br>
                    <div class="btn btn-primary">
                    <button class="btn mt-6 w-full" style="color:white">{{ __('Register Now') }}
                        </button>
                    </div>
                    
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <a class="underline text-lg text-gray-600 hover:text-gray-900" style="color:#007a98"href="{{ route('volunteer.login') }}">
                    <b>{{ __('Already Registered? ') }} </b>
                    </a>
                    </div>        
                    </div>
                    </div>
                   
                </div>
            </div>
        </section>  
        </form>
            </center>

</div>
</div>
</div>
<script type="text/javascript">
        function getLocation()
        {
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }
        function showPosition(position){
            document.querySelector('.myForm input[name = "latitude"]').value=position.coords.latitude;
            document.querySelector('.myForm input[name = "longitude"]').value=position.coords.longitude;

        }
        // function showError(error){
        //     switch(error.code){
        //         case error.PERMISSION_DENIED;
        //         alert("You Must Allow The Location");
        //         location.reload();
        //         break;
        //     }
        // }

    </script>
    </x-auth-card>
        </body>
</x-guest-layout>
@endsection
