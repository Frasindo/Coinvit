@extends("layout.app")
@section("title",$title)
@section("content")
<section style="width: 100%;">
<div class="login-box-outer">
  <div class="login-box">
  <div class="login-logo">
    <a href="{{url("")}}">
      <img src="{{asset("logo/logocoinvit.png")}}" class="logo-coinvit-market">
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to Trade</p>

    <form action="{{url("api/directlogin")}}" method="post">
      <div class="form-group has-feedback">
        <label>DEX</label>
        <select class="form-control" name="dex">
          <option selected>== Choose DEX ==</option>
          <option value="ardor">Ardor</option>
        </select>
      </div>
      <div class="form-group has-feedback" id="afterit">
        <label>Type</label>
        <select class="form-control type" name="type">
          <option selected>== Choose Type ==</option>
          <option value="ro">Read-only</option>
          <option value="ft">Full Trade</option>
        </select>
      </div>

    </form>

  </div>
  <!-- /.login-box-body -->
</div>
</div>
</section>
@endsection
@section("css")

@endsection
@section("js")
<script type="text/javascript">
  $(document).ready(function() {
    $(".type").on('change',function(event) {
      event.preventDefault();
      console.log(this.value);
      var sk = '<div class="rm"><div class="form-group has-feedback"><label>Your Public Key</label><input type="text" name="pk" class="form-control" placeholder="Public Key"><span class="glyphicon glyphicon-lock form-control-feedback"></span></div><div class="form-group has-feedback"><label>Your Secret Keys</label><input type="password" name="sk" class="form-control" placeholder="Secret Key"><span class="glyphicon glyphicon-lock form-control-feedback"></span></div><div class="form-group"><button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button></div></div>';
      var pk = '<div class="rm"><div class="form-group has-feedback"><label>Your Public Key</label><input type="text" name="pk" class="form-control" placeholder="Public Key"><span class="glyphicon glyphicon-lock form-control-feedback"></span></div><div class="form-group"><button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button></div></div>';
      $("#afterit .rm").remove();
      if (this.value == "ft") {
        $(this).after(sk);
      }else if (this.value == "ro") {
        $(this).after(pk);
      }
    });
  });
</script>
@endsection
