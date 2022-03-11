<?php

namespace App\Http\Controllers;

use App\Models\Posta;
use Illuminate\Http\Request;

class ContactController extends Controller
{

public function index() {


 return view('contacts');

}

}
