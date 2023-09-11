<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function support(){
        $Supportdata =  Support::where('id', 1)->get();
        $PageTitle = 'Support | ProTutor';
        return view("tutor.support",compact('PageTitle','Supportdata'));
       }
    public function studentSupport(){
        $Supportdata =  Support::where('id', 1)->get();
        $PageTitle = 'Support | ProTutor';
        return view("student.supports",compact('PageTitle','Supportdata'));
       }
}
