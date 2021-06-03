<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Contact;

class OrderController extends Controller
{
    public function order(Request $req) {
        $validation = $req->validate([
            'name' => 'required|max:50',
            'phone' => 'required|digits:10',
            'comments' => 'required|max:400 '
        ]);

        if (isset($validation)) {
            $contact = new Contact();
            $contact->name = $req->input('name');
            $contact->phone = $req->input('phone');
            $contact->comments = $req->input('comments');
            $contact->save();
        }
        return view('order', ['message' => 'Ваше замовлення успішно прийнято. У найближчий час менеджер
        звяжеться з вами для підтвердження броні.']);
    }
}
