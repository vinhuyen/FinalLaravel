<div class="row" style="height:300px; max-width: 500px; margin: auto;padding: 10px;">

    <div class="column">

        <div class="login-form">

            <form action='{{route('postInputEmail')}}' method='POST'>

                @csrf

                <h1>Reset mật khẩu</h1>

                <div class="input-box">

                    <i ></i>

                    <input name="txtEmail" type="text" placeholder="Nhập địa chỉ email của bạn để nhận mật khẩu mới" value="{{ isset($request->txtEmail)?$request->txtEmail:'' }}">

                    <span class="error"></span>

                </div>

                <div class="btn-box">

                    <input type='submit' value='Nhận mật khẩu' name="btnGetPassword" />

                </div>

            </form>

        </div>

    </div>

</div>
