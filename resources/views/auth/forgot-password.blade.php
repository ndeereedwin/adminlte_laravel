<x-guest-layout>
    <div class="login-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="/" class="h1">{{ config('app.name', 'Laravel') }}</a>
          </div>
          <div class="card-body">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-3" :errors="$errors" />

            <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

            <form method="POST" action="{{ route('password.email') }}">
              @csrf

              <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" :value="old('email')" required autofocus>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <p class="mt-3 mb-1">
              <a href="{{ route('login') }}">Login</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
    </div>
</x-guest-layout>
