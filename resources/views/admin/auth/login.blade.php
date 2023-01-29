@extends('/templateAuth')
@section('content')
<div id="app">
        <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm" style="margin-top:3px">
        <a class="title active"href="/" style="padding-right:40px;text-decoration:none;">
        <span class="h2 fw-bold mb-0" style="font-family:sans-serif;color:#00918f;"><b>One</b> <span style="color:darkgray"><b>Care</b> </span></span>
</a> 
   </nav>
   <nav>
<span class="h4 fw-bold" style="font-family:sans-serif;color:#00918f;text-align:center"><b>Admin | Login </b></span>
</nav>
    </div> 
    <x-admin-guest-layout style="background-color:lightgray" >
    <x-auth-card style="background-color:lightgray">
        <x-slot name="logo">
            <div style=" text-decoration:none" ><br><br>
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status  :status="session('status')" style="background-color:lightgray" />
        <div class="head" style="color:darkblue;" style="background-color:lightgray">
        </div>
        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors"/>
        <section class="vh-100" style="background-color:lightgray;" >
        <div class="container-fluid h-custom">
        <div class="content-center align-items-center">
         <div class="col-md-5" style="background-color:offwhite">
            <center>
      </div><br>
      <div class="col-md-8">
      <h4 class="text-center font-weight-bold"style="font-family:sans-serif"> Welcome Back! </h4><br>
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="form-outline mb-4">               
            <x-input class="form-control form-control-lg" describeby="emailHelp" type="email" id="form3Example3" name="email" :value="old('email')" required autofocus />
                <x-label for="form3Example3" class="form-label"  :value="__('Email')" /></label>
            </div>
            <!-- Password -->
            <div class="form-outline mb-3">
                <x-input id="form3Example4" class="form-control form-control-lg"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                                <x-label for="form3Example4" class="form-label"  style="float:left" :value="__('Password')" /></label>
            </div>
            <br>
        <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" name="remember" value="" id="form2Example3" />{{ __('Remember me') }}
              </label>
            </div> 

          </div>               
         <br>
          <div class="content-center align-items-center">
            <button class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;background-color:#00918f;border:1px #00918f;width:70%">{{ __('Log in') }}</button>
              @if (Route::has('admin.register'))
            <br><p class="small fw-bold mt-2 pt-1 mb-0"><a href="{{ route('admin.register') }}" style="text-decoration:none;font-size:medium">{{ __('Create Account') }}</a>
                @endif
          </div>
                </div>
            </div>
        </form>   
</div>
    </div>
    </x-auth-card>
</x-admin-guest-layout >
@endsection