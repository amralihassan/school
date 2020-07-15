<form class="form-horizontal form-simple" action="{{route('setLogin')}}" novalidate method="POST">
    @csrf
    <fieldset class="form-group position-relative has-icon-left mb-0">
      <input type="text" class="form-control form-control-lg input-lg" id="user-name" placeholder="Your Username"
      name="username">
      <div class="form-control-position">
        <i class="ft-user"></i>
      </div>
    </fieldset>
    <fieldset class="form-group position-relative has-icon-left">
      <input type="password" class="form-control form-control-lg input-lg" id="user-password"
      placeholder="Enter Password" name="password">
      <div class="form-control-position">
        <i class="la la-key"></i>
      </div>
    </fieldset>
    <div class="form-group row">
      <div class="col-md-6 col-12 text-center text-md-left">
        <fieldset>
          <input type="checkbox" id="remember-me" class="chk-remember" name="rememberme">
          <label for="remember-me"> Remember Me</label>
        </fieldset>
      </div>
      <div class="col-md-6 col-12 text-center text-md-right"><a href="recover-password.html" class="card-link">Forgot Password</a></div>
    </div>
    <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
  </form>