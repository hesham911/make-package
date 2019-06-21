<?php

namespace hesham\hpackage\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class heshamController extends Controller
{
    public function viewFromPackage(){
        return view('hpackage::index');
    }
}
