<?php

$update = json_decode(get('php://input'));
$message = $update->message;
$text = $message->text;
$cid = $message->chat->id;

if($text == "/start"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"*Assalomu alaykum hurmatli foydalanuvchi! Botga hush kelibsiz, siz bu bot yordamida osongina spamdan chiqa olasiz!\nBuning uchun ⏳Ro'yxatdan o'tish tugmasini bosing va savollarga javob bering*",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode(
['resize_keyboard'=>true,
'keyboard' => [
[["text"=>"⏳Ro'yxatdan o'tish",'request_contact' =>true],],
]
])
]);
}
