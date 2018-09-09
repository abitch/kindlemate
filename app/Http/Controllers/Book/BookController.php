<?php

namespace App\Http\Controllers\Book;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
class BookController extends Controller
{
    public function index(){
        return view('book.detail');
    }
    public function kindle_push(){
        Config::set('mail.encryption','ssl');
        Config::set('mail.host','smtp.163.com');
        Config::set('mail.port','465');
        Config::set('mail.username','itzane@163.com');
        Config::set('mail.password','abcd83319257');
        Config::set('mail.from',  ['address' => 'itzane@163.com' , 'name' => 'kindlemate']);
        Mail::raw('在耶鲁精进', function ($message) {
            $me = ['605839417@qq.com'];
            $message ->to($me)->subject('在耶鲁精进');
            $attachment = storage_path('app/book/在耶鲁精进.mobi');
            //在邮件中上传附件
            $message->attach($attachment,['as'=>'在耶鲁精进.mobi']);
        });
        $msg =  '发送邮件成功，请查收！';
        return response()->json($msg);

    }
}
