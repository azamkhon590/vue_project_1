<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends BaseController
{
    public function index(){
        $contact = Contact::query()->get();
        return $this->sendResponse("OK", $contact);
    }
}