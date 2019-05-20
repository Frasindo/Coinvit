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

                <form action="{{url("api/login")}}" onsubmit="return false" id="form" method="post">
                    @csrf
                    <div class="form-group has-feedback">
                        <label>DEX</label>
                        <select class="form-control" name="dex">
                            <option selected>== Choose DEX ==</option>
                            <option value="ardor">Ardor</option>
                        </select>
                    </div>
                    <div class="form-group has-feedback" id="afterit">
                        <label>Login With </label>
                        <select class="form-control type" name="type">
                            <option selected>== Choose Type ==</option>
                            <option value="np">Nickname & Password</option>
                            <option value="bw">Blockchain Wallet Address (Readonly)</option>
                            <option value="sk">Secret Key & Blockchain Wallet Address</option>
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
        $(".type").on('change', function(event) {
            event.preventDefault();
            console.log(this.value);
            var sk =
                '<div class="rm"><div class="form-group has-feedback"><label>Your Secret Keys</label><input required type="password" name="sk" class="form-control" placeholder="Secret Key"><span class="glyphicon glyphicon-lock form-control-feedback"></span></div><div class="form-group"><button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button></div></div>';
            var bw =
                '<div class="rm"><div class="form-group has-feedback"><label>Your Public Key</label><input type="text" name="pk" class="form-control" required placeholder="Public Key"><span class="glyphicon glyphicon-lock form-control-feedback"></span></div><div class="form-group"><button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button></div></div>';
            var np =
                '<div class="rm"><div class="form-group has-feedback"><label>Nickname</label><input type="text" name="email" class="form-control" required placeholder="Nickname"><span class="glyphicon glyphicon-lock form-control-feedback"></span></div><div class="form-group has-feedback"><label>Password</label><input required type="password" name="password" class="form-control" placeholder="Password"><span class="glyphicon glyphicon-lock form-control-feedback"></span></div><div class="form-group"><button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button></div></div>';
            $("#afterit .rm").remove();
            if (this.value == "np") {
                $(this).after(np);
                // $("#afterit .rm input").attr("disabled", true);
            } else if (this.value == "bw") {
                $(this).after(bw);
            } else if (this.value == "sk") {
                $(this).after(sk);
            }
        });
        $("#form").on('submit', function(event) {
            event.preventDefault();
            var data = $(this).serializeArray();
            var action = $(this).attr("action");
            console.log("Action to " + action);
            $.post(action, data, function(success) {
                console.log(success);
                toastr.success(success.message);
            }).fail(function(fail) {
                alert = fail.responseJSON;
                console.log(alert.message);
                toastr.error(alert.message);
                $.each(alert.errors,function(index, el) {
                  toastr.info(el[0]);
                });
            })
        });
    });
</script>
@endsection
