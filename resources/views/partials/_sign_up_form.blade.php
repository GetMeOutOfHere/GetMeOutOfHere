<div class="row">
  <form class="col s12 center" action="#" id="sign-up">
    <div class="row">
      <div class="col s12 center">
        <h3>Sign Up Here!</h3>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">account_circle</i>
        <input id="email" type="email" class="validate" name="user[email]">
        <label for="email" data-error="wrong" data-success="right">Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">phone</i>
        <input id="phone-number" type="text" class="validate" name="user[phonenumber]">
        <label for="phone-number">Phone Number</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">settings</i>
        <input id="password" type="password" class="validate" name="user[password]">
        <label for="password">Password</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">settings_backup_restore</i>
        <input id="password_confirmation" type="password" class="validate" name="user[password_confirmation]" autocomplete="off">
        <label for="password_confirmation">Password Confirmation</label>
      </div>
    </div>
    <button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">send</i>Submit</button>
  </form>
</div>
