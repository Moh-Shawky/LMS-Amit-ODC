<x-auth-layout>
  <div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <!--  -->
        <div class="login-form">
          <form id="formAuthentication" class="mb-3" action="{{ route('logindata') }}" method="POST">
            @csrf
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="email" class="label">Email Address</label>
                        <input id="email" type="email" class="input" name="email">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name="password">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In" name="login">
                    </div>
                </div>
            </form>
            <form id="formAuthentication" class="mb-3" action="{{ route('createuser') }}" method="POST">
              <div class="sign-up-htm">
                @csrf
                    <div class="group">
                        <label for="user" class="label">User name</label>
                        <input id="user" type="text" class="input" name="username">
                    </div>
                    {{-- <div class="group">
                      <label for="user" class="label">User Info</label>
                      <input id="user" type="text" class="input" name="userinfo">
                  </div> --}}
                    <div class="group">
                        <label for="email" class="label">Email Address</label>
                        <input id="email" type="email" class="input" name="email">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name="password">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up" name="insert">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    {{-- <form id="formAuthentication" class="mb-3" action="{{ route('logindata') }}" method="POST"> --}}
        {{-- @csrf --}}
        {{-- <br>
        <br>
        <h5 class="card-header">Login Form</h5>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input
            type="text"
            class="form-control"
            id="email"
            name="email"
            placeholder="Enter your email"
            autofocus
          />
        </div>
        <div class="mb-3 form-password-toggle">
          <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label> --}}
            {{-- <a href="auth-forgot-password-basic.html">
              <small>Forgot Password?</small>
            </a> --}}
          {{-- </div>
          <div class="input-group input-group-merge">
            <input
              type="password"
              id="password"
              class="form-control"
              name="password"
              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
              aria-describedby="password"
            />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
          </div>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
        </div> --}}
      {{-- </form> --}}

</x-auth-layout>