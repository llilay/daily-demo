<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/ad.css') }}" type="text/css" />
    <title> </title>
</head>
<body>
<form method="post" action="" id="form1" class="main">
    <div class="aspNetHidden">
        <input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJMjY2MTI5NTgzZGT9CNcILQLsnBsc71LUBbqTP+3MAoh784waquFUePbPRA==" />
    </div>

    <script type="text/javascript">
        //<![CDATA[
        var theForm = document.forms['form1'];
        if (!theForm) {
            theForm = document.form1;
        }
        function __doPostBack(eventTarget, eventArgument) {
            if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                theForm.__EVENTTARGET.value = eventTarget;
                theForm.__EVENTARGUMENT.value = eventArgument;
                theForm.submit();
            }
        }
        //]]>
    </script>


    {{-- <script src="{{ asset('js/WebResource.axd') }}" type="text/javascript"></script>--}}


    {{--<script src="/WebResource.axd?d=UvRWiO09pxIvezbglfD5TW0cn5tdZtKQ8aSm6lC03eozVWnaeHX4VYAYweuywm4ag8rauh1QuhWC-Wsp7t_0vfG6qDiLbJdXlZqxEtCznm41&amp;t=636396446620000000" type="text/javascript"></script>--}}
    <div class="aspNetHidden">

        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="7CDC6A04" />
        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
    </div>
    <div class="bg">
        <div class="content">
            <div class="logo">
                <img src="{{ asset('img/logo(1).png') }}" />
            </div>
            <div id="divRegister" class="login-con">
                <ul class="login_list01">
                    <li class="select" flag="xyh">
                        <p class="btn-xyh"></p>
                    </li>
                    <li flag="lyh">
                        <p class="btn-lyh"></p>
                    </li>
                </ul>

                <!--新用户注册-->
                <div id="divNew">
                    <ul class="login_form">
                        <li class="login_list" style="margin-bottom:0">
                            <label>手机号：</label>
                            <input name="txtMobile" type="text" id="txtMobile" maxlength="11" tabindex="1" class="textbox" placeholder="请输入手机号" value="" />
                            <p><em id="txtMobileTip" style="color: red;">&nbsp;</em></p>
                        </li>
                        <li class="login_list" style="margin-bottom:0">
                            <label>昵称：</label>
                            <input name="txtNickname" type="text" id="txtNickname" maxlength="12" tabindex="2" class="textbox" placeholder="请输入昵称" value="" />
                            <a class="shaizi" onclick="ajaxGetNickName();"></a>
                            <p><em id="txtNicknameTip" style="color: red;">&nbsp;</em></p>
                        </li>
                        <li class="login_list" style="margin-bottom:0">
                            <label>密码：</label>
                            <input name="txtLogonPass" type="password" id="txtLogonPass" tabindex="3" class="textbox" placeholder="请输入密码" />
                            <p><em id="txtLogonPassTip" style="color: red;">&nbsp;</em></p>
                        </li>
                        <li class="login_list" style="margin-bottom:0">
                            <label style="width:120px">确认密码：</label>
                            <input name="txtConfirmPass" type="password" id="txtConfirmPass" tabindex="4" class="textbox" placeholder="请输入确认密码" />
                            <p><em id="txtConfirmPassTip" style="color: red;">&nbsp;</em></p>
                        </li>
                        <li class="login_list" style="margin-bottom:0">
                            <label>验证码：</label>
                            <input name="txtCode" type="password" id="txtCode" tabindex="5" class="textbox" placeholder="请输入验证码" style="width: 140px" />
                            <input type="button" class="code" value="获取验证码" />
                        </li>
                    </ul>
                    {!! Geetest::render('popup') !!}
                    <input type="button" id="btnRegister" class="btn-tj" />
                </div>
                <!--老用户激活-->
                <div id="divOld" style="display: none">
                    <ul class="login_form">
                        <li class="login_list">
                            <label>手机号：</label>
                            <input name="txtAccounts" type="text" id="txtAccounts" maxlength="11" tabindex="1" class="textbox" placeholder="请输入手机号" />
                            <p><em id="txtAccountsTip" style="color: red;">&nbsp;</em></p>
                        </li>
                        <li class="login_list">
                            <label>密码：</label>
                            <input name="password" type="password" id="txtPass" tabindex="2" class="textbox" placeholder="请输入密码" />
                            <p><em id="txtPassTip" style="color: red;">&nbsp;</em></p>
                        </li>
                    </ul>
                    <input type="button" id="btnActivate" class="btn-jh" />
                </div>
                <input type="hidden" name="fromSite" id="fromSite" />
                <input type="hidden" name="regFlag" id="regFlag" value="1" />
                <div id="captcha"></div>
                <input name="geeUserID" type="hidden" id="geeUserID" value="a9eed3e3-58ab-4275-807e-4e9b83350bef" />
                <input name="geeStatus" type="hidden" id="geeStatus" value="1" />
            </div>
            <div id="divVM" class="vm-con" style="display: none">
                <div class="vm-text"></div>
                <div class="vm">
                    <img src="{{ asset('img/vm.png') }}" />
                </div>
            </div>
            <div class="baoxiang" style="display: none;"></div>
        </div>
    </div>
    <div style="display: none">

    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-1.7.2.min.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('js/gt.js') }}"></script>--}}
<!--<script type='text/javascript' defer='defer'>alert('非法用户，错误代码：3492829388');</script>-->
    <script>
        var code = '';
        function checkMobile(id, isCheck) {
            if (!(/^1[3456789]\d{9}$/.test($(id).val()))) {
                $(id + "Tip").html("请输入正确的手机号码");
                return false;
            }
            /*if (isCheck) {
                //checkAccounts();
                if (!isExitsAccounts) {
                    $(id + "Tip").html("&nbsp;");
                }
                return !isExitsAccounts;
            }*/
            $(id + "Tip").html("&nbsp;");
            return true;
        }

        function checkNickName() {
            if ($("#txtNickname").val() == "") {
                $("#txtNicknameTip").html("请输入您的昵称");
                return false;
            }
            return true;
        }

        function ajaxGetNickName() {
            $.ajax({
                async: false,
                contentType: "application/json",
                url: "WSApp.asmx/GetRandNickName",
                type: "POST",
                dataType: "json",
                success: function (json) {
                    json = eval("(" + json.d + ")");
                    if (json.success == "error") {
                        $("#txtNicknameTip").html(json.msg);
                    }
                    else {
                        $("#txtNickname").val(json.NickName);
                    }
                }
            });
        }

        var countdown = 60;
        function settime(obj) {
            if (countdown == 0) {
                obj.removeAttr("disabled");
                obj.val("获取验证码");
                countdown = 60;
                return;
            } else {
                obj.attr("disabled", true);
                obj.val(countdown + "s");
                countdown--;
            }
            setTimeout(function () {
                settime(obj)
            }, 1000)
        }

        function checkLoginPass(id) {
            if ($(id).val() == "") {
                $(id + "Tip").html("请输入您的登录密码");
                return false;
            }
            var reg = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,20}$/;
            if (!reg.test($(id).val())) {
                $(id + "Tip").html("登录密码必须为6-20个字母数字组合");
                return false;
            }
            $(id + "Tip").html("&nbsp;");
            return true;
        }

        function checkConfirmPass() {
            if ($("#txtConfirmPass").val() == "") {
                $("#txtConfirmPassTip").html("请输入您的登录确认密码");
                return false;
            }
            if ($("#txtConfirmPass").val() != $("#txtLogonPass").val()) {
                $("#txtConfirmPassTip").html("两次输入的登录密码不一致");
                return false;
            }
            $("#txtConfirmPassTip").html("&nbsp;");
            return true;
        }

        function checkCode() {
            if ($("#txtCode").val().trim() == '') {
                alert("验证码不能为空");
                return false;
            }

            var pattern = /^[0-9]*$/;
            if (!pattern.test($("#txtCode").val())) {
                alert("验证码输入错误");
                return false;
            }
            checkCodeMatch(code);
            return isMatch;
        }

        var isMatch = false;
        function checkCodeMatch(verifyCode) {
            if (verifyCode === $("#txtCode").val()) {
                isMatch = true;
            } else {
                alert("验证码输入错误");
            }
            /*$.ajax({
                async: false,
                type: "Post",
                url: "shop.test/verificationCodes",
                contentType: "application/json",
                dataType: "json",
                data: "{phone:'" + $("#txtMobile").val() + "',code:" + $("#txtCode").val() + "}",
                success: function (jsonStr) { //成功获取数据
                    if (jsonStr.d != "") {
                        var json = eval('(' + jsonStr.d + ')');
                        if (json.code > 0) {
                            alert(json.msg);
                        }
                        else {
                            isMatch = true;
                        }
                    }
                }
            })*/
        }

        //验证用户名是否存在
        /*var isExitsAccounts = false;
        function checkAccounts() {
            $.ajax({
                async: false,
                contentType: "application/json",
                url: "WSApp.asmx/CheckName",
                data: "{userName:'" + $("#txtMobile").val() + "'}",
                type: "POST",
                dataType: "json",
                success: function (json) {
                    json = eval("(" + json.d + ")");
                    if (json.success == "error") {
                        $("#txtMobileTip").html(json.msg);
                        isExitsAccounts = true;
                    }
                    else {
                        isExitsAccounts = false;
                    }
                }
            });
        }
*/
        function checkNewInput() {
            if (!checkMobile("#txtMobile", true)) {
                $("#txtMobile").focus(); return false;
            }
            if (!checkNickName()) {
                $("#txtNickname").focus(); return false;
            }
            if (!checkLoginPass("#txtLogonPass")) {
                $("#txtLogonPass").focus(); return false;
            }
            if (!checkConfirmPass()) {
                $("#txtConfirmPass").focus(); return false;
            }
            if (!checkCode()) {
                $("#txtCode").focus(); return false;
            }
            return true;
        }

        function checkOldInput() {
            if (!checkMobile("#txtAccounts", false)) {
                $("#txtAccounts").focus(); return false;
            }
            if (!checkLoginPass("#txtPass")) {
                $("#txtPass").focus(); return false;
            }
            return true;
        }

        var handler = function (captchaObj) {
            /* ------------------------------注册---------------------------------------- */
            $("#btnRegister").click(function (e) {
                if (checkNewInput()) {
                    var phone = $("#txtMobile").val().trim();
                    var nikname = $("#txtNickname").val().trim();
                    var password = $("#txtLogonPass").val();

                    $.ajax({
                        type: "POST",
                        url: "/verificationCodes", // 需要修改 ----------------------------------------
                        dataType: "json",
                        data: { phone: phone, nikname: nikname, password: password },
                        success: function (value) {
                            if (true) {// 需要修改 //------------------------------------
                                alert("注册成功");
                                location.href = 'login url'; // 需要修改 ----------------------------------------
                            }
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            if (XMLHttpRequest.status == 500) {
                                alert('系统错误');
                            }
                            else {
                                console.log('status:' + XMLHttpRequest.status + ",textStatus:" + textStatus + ",errmsg:" + errorThrown);
                            }
                        }
                    });
                    //$("#regFlag").val("1");
                    //captchaObj.verify();
                }
            });

            /* ---------------------------------登录------------------------------------- */
            $("#btnActivate").click(function (e) {
                if (checkOldInput()) {
                    var phone = $("#txtAccounts").val().trim();
                    var password = $("#txtPass").val();

                    $.ajax({
                        type: "POST",
                        url: "/verificationCodes", // 需要修改 ----------------------------------------
                        dataType: "json",
                        data: { phone: phone, password: password },
                        success: function (value) {
                            if (true) {// 需要修改 //------------------------------------
                                location.href = 'index url'; // 需要修改 ------
                            }
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            if (XMLHttpRequest.status == 500) {
                                alert('系统错误');
                            }
                            else {
                                console.log('status:' + XMLHttpRequest.status + ",textStatus:" + textStatus + ",errmsg:" + errorThrown);
                            }
                        }
                    });
                    //$("#regFlag").val("2");
                    //captchaObj.verify();
                }
            });
            /*captchaObj.onSuccess(function () {
                $("#form1").submit();
            });*/
            //二次验证结果加到表单中
            //captchaObj.bindForm('#captcha');
        };

        $(document).ready(function () {
            $("#txtMobile").blur(function () { checkMobile("#txtMobile", true); });
            $("#txtAccounts").blur(function () { checkMobile("#txtAccounts", false); });
            $("#txtNickname").blur(function () { checkNickName(); });
            $("#txtLogonPass").blur(function () { checkLoginPass("#txtLogonPass"); });
            $("#txtConfirmPass").blur(function () { checkConfirmPass(); });

            $("#txtPass").blur(function () { checkLoginPass("#txtPass"); });//

            // 登录 注册面板切换
            $(".login_list01 li").click(function () {
                $(".login_list01 li").removeClass("select");
                $(this).addClass("select");
                if ($(this).attr("flag") == "xyh") {
                    $("#divOld").hide();
                    $("#divNew").show();
                }
                else {
                    $("#divNew").hide();
                    $("#divOld").show();
                }
            });

            // 获取手机验证码按钮
            $(".code").click(function () {
                if ($("#txtMobile").val().trim() == '') {
                    alert("手机号不能为空");
                    return;
                }
                var pattern = /^1[3456789]\d{9}$/;
                if (!pattern.test($("#txtMobile").val())) {
                    alert("非法手机号");
                    return;
                }

                var obj = $(this);
                $.ajax({
                    type: "POST",
                    url: 'api/verificationCodes', // 需要修改 //------------------------------------
                    dataType: "json",
                    data: { phone: $("#txtMobile").val().trim() },
                    // 需要修改 //------------------------------------
                    success: function (value) {
                        if (value.key) {
                            code = value.code;
                            settime(obj);
                            alert("短信发送成功！");
                        }
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        if (XMLHttpRequest.status == 500) {
                            alert('系统错误');
                        }
                        else {
                            console.log('status:' + XMLHttpRequest.status + ",textStatus:" + textStatus + ",errmsg:" + errorThrown);
                        }
                    }
                });
            });

            /*$.ajax({
                url: "/GetCaptcha_3_0",
                contentType: "application/json",
                success: function (json) {
                    // 使用initGeetest接口，获取id，challenge，success（是否启用failback）
                    // 参数1：配置参数，与创建Geetest实例时接受的参数一致
                    // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
                    json = eval("(" + jsond + ")");
                    $("#geeUserID").val(json.geeUserID);
                    $("#geeStatus").val(json.geeServerStatus);

                    json = json.geeResponse;

                    initGeetest({
                        gt: json.gt,
                        challenge: json.challenge,
                        product: "bind", // 产品形式
                        offline: !json.success, // 表示用户后台检测极验服务器是否宕机，与SDK配合，用户一般不需要关注
                        new_captcha: json.new_captcha // 用于宕机时表示是新验证码的宕机
                    }, handler);
                }
            });*/

            handler();

            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
            });
        });
    </script>
    <script type="text/javascript">
        //<![CDATA[
        WebForm_AutoFocus('txtMobile');//]]>
    </script>

</form>
</body>
</html>
