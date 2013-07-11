<?php
#==============================================================================
# LTB Self Service Password
#
# Copyright (C) 2009 Clement OUDOT
# Copyright (C) 2009 LTB-project.org
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# GPL License: http://www.gnu.org/licenses/gpl.txt
#
#==============================================================================

#==============================================================================
# zh-TW
#==============================================================================
$messages['nophpldap'] = "You should install PHP LDAP to use this tool";
$messages['nophpmhash'] = "You should install PHP mhash to use Samba mode";
$messages['ldaperror'] = "LDAP 連線失敗";
$messages['loginrequired'] = "設定密碼: 請填寫以下資訊繼續";
$messages['oldpasswordrequired'] = "請填寫舊的密碼";
$messages['newpasswordrequired'] = "請填寫新的密碼";
$messages['confirmpasswordrequired'] = "請檢查確認密碼";
$messages['passwordchanged'] = "密碼變更成功";
$messages['nomatch'] = "密碼錯誤";
$messages['badcredentials'] = "帳號或密碼錯誤";
$messages['passworderror'] = "LDAP 回應密碼錯誤";
$messages['title'] = "和沛 LDAP 密碼管理";
$messages['login'] = "和沛帳號";
$messages['oldpassword'] = "舊的密碼";
$messages['newpassword'] = "新的密碼";
$messages['confirmpassword'] = "確認密碼";
$messages['submit'] = "送出";
$messages['getuser'] = "Get user";
$messages['tooshort'] = "密碼太短";
$messages['toobig'] = "密碼太常";
$messages['minlower'] = "Your password does not have enough lowercase characters";
$messages['minupper'] = "Your password does not have enough uppercase characters";
$messages['mindigit'] = "Your password does not have enough digits";
$messages['minspecial'] = "Your password does not have enough special characters";
$messages['sameasold'] = "Your new password is identical to your old password";
$messages['policy'] = "Your password must conform to the following constraints:";
$messages['policyminlength'] = "Minimum length:";
$messages['policymaxlength'] = "Maximum length:";
$messages['policyminlower'] = "Minimum number of lowercase characters:";
$messages['policyminupper'] = "Minimum number of uppercase characters:";
$messages['policymindigit'] = "Minimum number of digits:";
$messages['policyminspecial'] = "Minimum number of special characters:";
$messages['forbiddenchars'] = "密碼不可以包含特殊字元";
$messages['policyforbiddenchars'] = "Forbidden characters:";
$messages['policynoreuse'] = "Your new password may not be the same as your old password";
$messages['questions']['birthday'] = "你的出生日期?";
$messages['questions']['color'] = "你最喜歡的顏色?";
$messages['password'] = "密碼";
$messages['question'] = "問題";
$messages['answer'] = "答案";
$messages['setquestionshelp'] = "Initialize or change your password reset question/answer. You will then be able to reset your password <a href=\"?action=resetbyquestions\">here</a>.";
$messages['answerrequired'] = "請輸入答案";
$messages['questionrequired'] = "請選擇問題";
$messages['passwordrequired'] = "密碼欄位為必填";
$messages['answermoderror'] = "Your answer has not been registered";
$messages['answerchanged'] = "Your answer has been registered";
$messages['answernomatch'] = "答案錯誤";
$messages['resetbyquestionshelp'] = "Choose a question and answer it to reset your password. This requires that you have already <a href=\"?action=setquestions\">register an answer</a>.";
$messages['changehelp'] = "請輸入舊密碼與重設新密碼.";
$messages['changehelpreset'] = "忘記密碼?";
$messages['changehelpquestions'] = "<a href=\"?action=resetbyquestions\">使用 回答問題 重設密碼</a>";
$messages['changehelptoken'] = "<a href=\"?action=sendtoken\">使用 和沛 Email 重設密碼</a>";
$messages['changehelpsms'] = "<a href=\"?action=sendsms\">Reset your password with a SMS</a>";
$messages['resetmessage'] = "Hello {login},\n\n請點選:\n{url}\n\n申請變更密碼,如果你沒有重設密碼, 請忽略這封信件";
$messages['resetsubject'] = "變更密碼";
$messages['sendtokenhelp'] = "送出後將收到一封重設密碼的網頁<br>如果沒收到信,請檢查垃圾郵件.";
$messages['mail'] = "和沛Email";
$messages['mailrequired'] = "請填寫信箱位置";
$messages['mailnomatch'] = "信箱位置錯誤，請填寫和沛信箱位置. Ex:ben.jai@hopebaytech.com";
$messages['tokensent'] = "重設密碼連結已經寄到您的<a href=\"https://mail.google.com/a/happygorgi.com/\">和沛信箱</a>";
$messages['tokennotsent'] = "Error when sending confirmation email";
$messages['tokenrequired'] = "Token is required";
$messages['tokennotvalid'] = "申請期限已過";
$messages['resetbytokenhelp'] = "使用和沛信箱認證申請變更密碼. 請點選, <a href=\"?action=sendtoken\">click here</a>申請變更.";
$messages['resetbysmshelp'] = "The token sent by sms allows you to reset your password. To get a new token, <a href=\"?action=sendsms\">click here</a>.";
$messages['changemessage'] = "Hello {login},\n\n你的密碼變更�你沒有重設密碼, 請立刻聯絡帳號管理員.";
$messages['changesubject'] = "密碼變更成功";
$messages['badcaptcha'] = "The reCAPTCHA was not entered correctly. Try again.";
$messages['notcomplex'] = "Your password does not have enough different classes of characters";
$messages['policycomplex'] = "Minimum number of different classes of characters:";
$messages['nophpmcrypt'] = "You should install PHP mcrypt to use cryptographic functions";
$messages['sms'] = "SMS number";
$messages['smsresetmessage'] = "Your password reset token is:";
$messages['sendsmshelp'] = "Enter your login to get password reset token. Then type token in sent SMS.";
$messages['smssent'] = "A confirmation code has been send by SMS";
$messages['smsnotsent'] = "Error when sending SMS";
$messages['smsnonumber'] = "Can't find mobile number";
$messages['userfullname'] = "User full name";
$messages['username'] = "帳號";
$messages['smscrypttokensrequired'] = "You can't use reset by SMS without crypt_tokens setting";
$messages['smsuserfound'] = "Check that user information are correct and press Send to get SMS token";
$messages['smstoken'] = "SMS token";

?>
