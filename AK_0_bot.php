<?php

#الملف من عمل قناة توباك البرمجية
#معرف قناة توباك : @amrakl
#كاتب الملف : @BBI4BB
ob_start();
$API_KEY = '5678180558:AAFuFqLvK-c7vk9hZldLRkwvoyMPFn7O-Ok'; #توكن البوت
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
#يجب تسجيل البينات هنا 
#ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــ
$BOTAMR = "AK_0_bot"; #معرف بوتك دون @
$BOTAMR1 = "aben_alkhaleel_app"; #معرف قناتك دون @
$BOTAMR2 = "AK_WhatsApp1000"; #معرف حسابك دون @
#ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــ
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$from_id = $update->message->from->id;
####لوحة الادمن###
$admin = "5123884058"; ###ايديك###
$sudo = array("0000","0000","0000");
$AMR = file_get_contents("AMR.txt");
$AMR0 = file_get_contents("AMR0.txt");
$AMR1= file_get_contents("AMR1.txt");
$AMR5 = file_get_contents("AMR2.txt");
$AMR6 = file_get_contents("AMR3.txt");
$AMR20 = json_decode(file_get_contents('php://input'));
$AMR18 = $update->message;
$AMR13 = $AMR18->chat->id;
$AMR17 = $AMR18->text;
$AMRD = $AMR20->callback_query->data;
$AMR12 = $AMR20->callback_query->message->chat->id;
$AMR14 =  $AMR20->callback_query->message->message_id;
$AMR15 = $AMR18->from->first_name;
$AMR16 = $AMR18->from->username;
$AMR11 = $AMR18->from->id;
$AMR2 = explode("\n",file_get_contents("AMR4.txt"));
$AMR3 = count($AMR2)-1;
if ($AMR18 && !in_array($AMR11, $AMR2)) {
file_put_contents("AMR4.txt", $AMR11."\n",FILE_APPEND);
  }
$AMR9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR0&user_id=".$AMR11);
$AMR10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR1&user_id=".$AMR11);
if($AMR18 && (strpos($AMR9,'"status":"left"') or strpos($AMR9,'"Bad Request: USER_ID_INVALID"') or strpos($AMR9,'"status":"kicked"') or strpos($AMR10,'"status":"left"') or strpos($AMR10,'"Bad Request: USER_ID_INVALID"') or strpos($AMR10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$AMR13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$AMR0.'
'.$AMR1,
]);return false;}
if($text == "/start" and in_array($from_id,$sudo)){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
",
'reply_to_message_id'=>$php_aba->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تعين قناة اشتراك اجباري ¹ 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ¹★' ,'callback_data'=>"AMR0"],['text'=>'حذف قناة الاشتراك ¹★' ,'callback_data'=>"delete11"]],
[['text'=>'تعين قناة اشتراك اجباري ² 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ²★' ,'callback_data'=>"AMR2"],['text'=>'حذف قناة الاشتراك ²★' ,'callback_data'=>"delete22"]],
[['text'=>'عرض قنوات الإشتراك 💎' ,'callback_data'=>"AMR4"]],
[['text'=>'قسم توجيه الرسال من المشاهدات 🔙' ,'callback_data'=>"AMR"]],
[['text'=>'تفعيل التوجيه 🔙' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ❎' ,'callback_data'=>"AMR12"]],
[['text'=>'إذاعة توجيه 🔄' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه 🔱' ,'callback_data'=>"AMR6"]],
[['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
] 
])
]);
}
if($AMRD == "AMR" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تعين قناة اشتراك اجباري ¹ 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ¹★' ,'callback_data'=>"AMR0"],['text'=>'حذف قناة الاشتراك ¹★' ,'callback_data'=>"delete11"]],
[['text'=>'تعين قناة اشتراك اجباري ² 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ²★' ,'callback_data'=>"AMR2"],['text'=>'حذف قناة الاشتراك ²★' ,'callback_data'=>"delete22"]],
[['text'=>'عرض قنوات الإشتراك 💎' ,'callback_data'=>"AMR4"]],
[['text'=>'قسم توجيه الرسال من المشاهدات 🔙' ,'callback_data'=>"AMR"]],
[['text'=>'تفعيل التوجيه 🔙' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ❎' ,'callback_data'=>"AMR12"]],
[['text'=>'إذاعة توجيه 🔄' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه 🔱' ,'callback_data'=>"AMR6"]],
[['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
] 
])
]);
unlink("AMR.txt");
}
if($AMRD == "AMR0"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR0");
}
if($AMR17 and $AMR == "AMR0" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR0.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR1'],
]
]])
]);
}
if($AMRD == "AMR1"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR0.txt");
}
if($AMRD == "AMR2"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR1");
}
if($AMR17 and $AMR == "AMR1" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR1.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete22"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR3'],
]
]])
]);
}
if($AMRD == "AMR3"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR1.txt");
}
if($AMRD == "AMR4"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
هلا بك عزيزي 
قنوات الاشتراك الاجباري
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
قناة ¹ => $AMR0 √
قناة ² => $AMR1 √
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}
if($AMRD == "AMR5"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال التوجيه الان 💚",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR2");
}
if($AMR18 and $AMR == "AMR2" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"تم توجيه الرساله ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('forwardMessage', [
'chat_id'=>$AMR2[$i],
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR6"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال المراد الاذاعه له الان 💛",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR3");
}
if($AMR17 and $AMR == "AMR3" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'تم النشر بنجاح  ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('sendMessage', [
'chat_id'=>$AMR2[$i],
'text'=>$AMR17
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR7"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"هلا بك في قسم الاحصايات  💛
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ

 عدد مشتركين البوت  [ $AMR3 ]

حاله سرعه البوت -: 100%
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}

if($AMRD == "AMR10"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR2.txt");
}
if($AMRD == "AMR11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR3.txt","AMR");
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 == $admin){
bot('sendMessage',[
'chat_id'=>$AMR18->reply_to_message->forward_from->id,
'text'=>$AMR17,
]);
}
if($AMRD == "AMR12"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR3.txt");
} 
if($text == "/start" ){
bot("sendmessage",[
'chat_id'=>$chat_id,
"text"=>"
*مرحبا بك عزيزي 👋

في بوت رشق العربي يمكنك رشق مشاهدات قنواتك بسهواله من خلال البوت 

كل ما عليك هوا تجميع النقاط 🖤*
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تجميع نقاط 💰' ,'callback_data'=>"AMRBOT1"]],
[['text'=>'رشق مشاهدات ♻️' ,'callback_data'=>"AMRBOT2"],['text'=>'اسعار الرشق 📝' ,'callback_data'=>"AMRBOT3"]],
[['text'=>'معلومات حسابك 🌟' ,'callback_data'=>"AMRBOT4"],['text'=>'معلومات الطلب ☑️' ,'callback_data'=>"AMRBOT5"]],
[['text'=>'شرح البوت 💡' ,'callback_data'=>"AMRBOT6"],['text'=>'شروط الاستخدام 😊' ,'callback_data'=>"AMRBOT7"]],
[['text'=>'تحديثات البوت ✅' ,'url'=>"https://t.me/$BOTAMR1"],['text'=>'مطور البوت ✅' ,'url'=>"https://t.me/$BOTAMR2"]],
] 
])
]);
}
if($AMRD == "AMRBOT" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"
*مرحبا بك عزيزي 👋

في بوت رشق العربي يمكنك رشق مشاهدات قنواتك بسهواله من خلال البوت 

كل ما عليك هوا تجميع النقاط 🖤*
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تجميع نقاط 💰' ,'callback_data'=>"AMRBOT1"]],
[['text'=>'رشق مشاهدات ♻️' ,'callback_data'=>"AMRBOT2"],['text'=>'اسعار الرشق 📝' ,'callback_data'=>"AMRBOT3"]],
[['text'=>'معلومات حسابك 🌟' ,'callback_data'=>"AMRBOT4"],['text'=>'معلومات الطلب ☑️' ,'callback_data'=>"AMRBOT5"]],
[['text'=>'شرح البوت 💡' ,'callback_data'=>"AMRBOT6"],['text'=>'شروط الاستخدام 😊' ,'callback_data'=>"AMRBOT7"]],
[['text'=>'تحديثات البوت ✅' ,'url'=>"https://t.me/$BOTAMR1"],['text'=>'مطور البوت ✅' ,'url'=>"https://t.me/$BOTAMR2"]],
] 
])
]);
}
if($AMRD == "AMRBOT1" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"
*مرحبا بك عزيزي

يمكنك من خلال هذا القسم تجميع نقاط للرشق 

كل ما عليك مشاركه هذا الربط ادنا 

الرابط : https://t.me/$BOTAMR?start=$AMR12

كلما يقوم احد بل دخول من خلال الرابط تحصل علي 300 نقطه مجاني*
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩️' ,'callback_data'=>"AMRBOT"]],
] 
])
]);
}
if($AMRD == "AMRBOT2" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"
*عذرا عزيزي عدد نقاطك ليس كافي للرشق

يجب ان كون معك 600 نقطه علي الاقل 

يمكنك تجميع النقاط من خلال الزر ادتنا

كلما تقوم بدعوه عضو تحصل علي 300 نقطه *
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩️' ,'callback_data'=>"AMRBOT"]],
] 
])
]);
}
if($AMRD == "AMRBOT3" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"*
هلا بك عزيزي في قسم الاسعار

الاسعار : 

سعر الـ1000 مشاهدة عادي = 100 نقطه
سعر الـ1000 شاهدة هندي = 150 نقطه
سعر الـ 1000 مشاهدة عرب = 200 نقطه

يمكنك التوجه لقناة الخصمات : @$BOTAMR1*
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩️' ,'callback_data'=>"AMRBOT"]],
] 
])
]);
}
$BOTAMRRK = $AMR12 + $AMR12;
if($AMRD == "AMRBOT4" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"*
هلا بك عزيزي في قسم المعلومات

معلوماتك : 

عدد نقاطك : 0 نقطه
عدد عملايات الرشق : 0 عملية
عدد مشاركتك : 0 مشاركه
عدد الاشتراكات : 1 اشتراك

رقم الجلسه : $BOTAMRRK*
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩️' ,'callback_data'=>"AMRBOT"]],
] 
])
]);
}
if($AMRD == "AMRBOT5" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"*
عذرا عزيزي لم تكوم بطلب اي طلب سابق ❌*
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩️' ,'callback_data'=>"AMRBOT"]],
] 
])
]);
}
if($AMRD == "AMRBOT6" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"*
مرحبا بك عزيزي في شرح البوت 💬

يمكنك من خلال البوت رشق قنوات مجاني دون دفع المال فقط عن طريق مشاركه رابط الدعوه الخاص بك 

لمشاركه الرابط اضغط اسفل *
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'مشاركه الرابط' ,'callback_data'=>"AMRBOT1"]],
[['text'=>'رجوع ↩️' ,'callback_data'=>"AMRBOT"]],
] 
])
]);
}
if($AMRD == "AMRBOT7" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"*
شرواط استخدام البوت :

1- اذا قذ قومت بعمليه مشاركه دون ان تكون مشتراك بقناه البوت لا يحتسب اشتراك
2- اذا قد طلبت لقناة 5 طلبات دون اكتملهم يتم حظرك
3- اذا قد قومت باستعمال الثغرات ان وجت يتم حظرك

تم انهاء الشروط *
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↩️' ,'callback_data'=>"AMRBOT"]],
] 
])
]);
}