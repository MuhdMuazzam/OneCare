@extends('/tempRegister')
@section('content')
<div id="app">
        <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm" style="margin-top:3px">
        <a class="title active"href="http://127.0.0.1:8000/" style="padding-right:40px;text-decoration:none;">
        <span class="h2 fw-bold mb-0" style="font-family:sans-serif;color:#00918f;"><b>One</b> <span style="color:darkgray"><b>Care</b> </span></span>
</a> 
   </nav>
   <nav>
<span class="h2 fw-bold" style="font-family:sans-serif;color:#00918f;text-align:center"><b>Admin | Register
</b></span>
</nav>
    </div>  
<x-admin-guest-layout style="background-color:lightgray" >
    <x-auth-card style="background-color:lightgray">
        <x-slot name="logo">
            <div style=" text-decoration:none" ><br><br>
        </x-slot>
      <br>
<div class="main" style="background-color:lightgray">
        <!-- Sign up form -->
        <section class="signup">
        <x-auth-validation-errors :errors="$errors"/>
        <section class="vh-200" style="background-color:lightgray;" >
        <div class="container-fluid h-custom">
        <div class="content-center align-items-center">                        
        <div class="col-md-5" style="background-color:offwhite">
            <center>
            </div><br>
                <div class="col-md-8">
                <h4 class="text-center" style=" font-style=italic;font-family:sans-serif;"><strong style="font-style:italic; color:green">Good management consists in showing average people how to do the work of superior people! </strong></h4><br>
                <br>
                  <form method="POST" action="{{ route('admin.register') }}">
                      @csrf
                      <div class="form-outline mb-4">               
                      <x-input class="form-control form-control-lg" describeby="emailHelp" type="email" id="form3Example3" name="email" :value="old('email')" required autofocus />
                        <x-label for="form3Example3" class="form-label"  :value="__('Email')" /></label>
                      </div>
                      <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="name" :value="old('name')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('Full Name')"/></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg"  type="password" name="password" required autocomplete="new-password" />
                        <x-label for="form3Example3" class="form-label"  :value="__('New Password')" /></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg"  type="password" name="password_confirmation" required />
                       <x-label for="form3Example3" class="form-label" :value="__('Confirmation Password')"/><i class="zmdi zmdi-account material-icons-name"></i>
                       <!-- </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="Contact" :value="old('Contact')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('Contact')"/></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="Address" :value="old('Address')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('Address')"/></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="Postcode" :value="old('Postcode')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('Postcode')"/></label>
                        </div>
                        <div class="form-outline mb-4">               
                        <x-input id="form3Example3" class="form-control form-control-lg" type="text" name="State" :value="old('State')" required autofocus />
                         <x-label for="form3Example3" class="form-label" :value="__('State')"/></label>
                        </div> -->

                    <div class="btn btn-primary">
                        <button class="btn mt-6 w-full" style="color:white">
                        {{ __('Register Now') }}
                        </button>
                    </div>
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <a class="underline text-lg text-gray-600 hover:text-gray-900" style="color:#007a98"href="{{ route('admin.login') }}">
                    <b>{{ __('Already Registered? ') }} </b>
                    </a>
                    </div>        
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
</x-admin-guest-layout>
@endsection
