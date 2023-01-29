@extends('/tempRegister')
@section('content')

<div id="app">
        <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm" style="margin-top:3px">
        <a class="title active"href="/" style="padding-right:40px;text-decoration:none;">
        <span class="h2 fw-bold mb-0" style="font-family:sans-serif;color:#00918f;"><b>One</b> <span style="color:darkgray"><b>Care</b> </span></span>
</a> 
   </nav>
   <nav>
<span class="h2 fw-bold" style="font-family:sans-serif;color:#00918f;text-align:center"><b>Local People | Register</b></span>
</nav>
    </div>  
<x-guest-layout style="background-color:lightgray" >
    <x-auth-card style="background-color:lightgray">
        <x-slot name="logo">
            <div style=" text-decoration:none" ><br><br>
        </x-slot>
<br>
<div class="main" style="background-color:lightgray">
        <!-- Sign up form -->
        <section class="signup">

        <div class="signup-form">
                  <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors"/>
        <section class="vh-200" style="background-color:lightgray;" >
        <div class="container-fluid h-custom">
        <div class="content-center align-items-center">                        
        <div class="col-md-5" style="background-color:offwhite">
            <center>
            </div><br>
                <div class="col-md-8">
                <h4 class="text-center" style=" font-weight-bold; font-family:arial;">Join Us! </h4><br>
                <br>
                  <form method="POST" action="{{ route('local.register') }}">
                      @csrf
                      <div class="form-outline mb-4">               
                      <x-input class="form-control form-control-lg" describeby="emailHelp" type="email" id="form3Example3" name="LocalsEmail" :value="old('LocalsEmail')" required autofocus />
                        <x-label for="form3Example3" class="form-label"  :value="__('Email')" /></label>
                      </div>

                      <div class="form-outline mb-4">
                         <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="LocalsName"  :value="old('LocalsName')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('Full Name')"  /></label>
                         </div>
                      <div class="form-outline mb-4">
                        <x-input id="form3Example3" class="form-control form-control-lg"  type="password" name="password" required autocomplete="new-password" />
                        <x-label for="form3Example3" class="form-label"  :value="__('New Password')" /></label>
                        </div>
                      <div class="form-outline mb-4">
                        <x-input id="form3Example3" class="form-control form-control-lg"  type="password" name="password_confirmation" required />
                       <x-label for="form3Example3" class="form-label" :value="__('Confirm Password')"/><i class="zmdi zmdi-account material-icons-name" ></i>
                       </div>

                       <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="LocalsIC" :value="old('LocalsIC')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('NRIC')"/></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="	LocalsContact" :value="old('	LocalsContact')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('Contact')"/></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="LocalsAddress" :value="old('LocalsAddress')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('Address')"/></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="LocalsPostcode" :value="old('LocalsPostcode')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('Postcode')"/></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="LocalsState" :value="old('LocalsState')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('State')"/></label>
                        </div>

                    <div class="btn btn-primary">
                        <button class="btn mt-6 w-full" style="color:white">
                        {{ __('Register Now') }}
                        </button>
                    </div>
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <a class="underline text-lg text-gray-600 hover:text-gray-900" style="color:#007a98"href="{{ route('local.login') }}">
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
    </x-auth-card>
</x-guest-layout>
@endsection