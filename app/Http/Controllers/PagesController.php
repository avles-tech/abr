<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Mail;
class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function About(){
        return view('pages.about');
    }

    public function Services(){
        return view('pages.services');
    }

    public function New_Builds(){
        return view('pages.services.New_Builds');
    }
    public function Loft_Conversions(){
        return view('pages.services.Loft_Conversions');
    }
    public function House_Extensions(){
        return view('pages.services.House_Extensions');
    }
    public function Full_House_Renovations(){
        return view('pages.services.Full_House_Renovations');
    }
    public function Kitchen(){
        return view('pages.services.Kitchen');
    }
    public function Bathroom(){
        return view('pages.services.Bathroom');
    }
    public function Roofing(){
        return view('pages.services.Roofing');
    }
    public function Painting(){
        return view('pages.services.Painting');
    }
    public function Plumbing(){
        return view('pages.services.Plumbing');
    }

    public function Electrical_Work(){
        return view('pages.services.Electrical_Work');
    }

    public function portfolio(){
        return view('pages.portfolio');
    }

    public function P_New_Builds(){
        return view('pages.portfolio.New_Builds');
    }
    public function P_Loft_Conversions(){
        return view('pages.portfolio.Loft_Conversions');
    }
    public function P_House_Extensions(){
        return view('pages.portfolio.House_Extensions');
    }
    public function P_Full_House_Renovations(){
        return view('pages.portfolio.Full_House_Renovations');
    }
    public function P_Kitchen(){
        return view('pages.portfolio.Kitchen');
    }
    public function P_Bathroom(){
        return view('pages.portfolio.Bathroom');
    }
    public function P_Roofing(){
        return view('pages.portfolio.Roofing');
    }
    public function P_Painting(){
        return view('pages.portfolio.Painting');
    }
    public function P_Plumbing(){
        return view('pages.portfolio.Plumbing');
    }
    public function P_Electrical_Work(){
        return view('pages.portfolio.Electrical_Work');
    }

    public function Contact(){
        return view('pages.contact');
    }

    public function Quote(){
        return view('pages.quote');
    }
}
