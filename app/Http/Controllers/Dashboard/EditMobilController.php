<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditMobilController extends Controller
{
    public function editblog()
    {
        return view('dashboard.editblog');
    }
}
