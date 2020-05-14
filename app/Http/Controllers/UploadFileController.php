<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;

class UploadFileController extends Controller
{
    public function store(request $request)
    {
    	$path=$request->file('image')->store('upload');
    	echo $path;
    }
}
?>