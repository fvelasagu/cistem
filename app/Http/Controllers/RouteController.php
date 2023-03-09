<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Models\Professional;

class RouteController extends Controller
{
    function index(){
        $specialties = Specialty::all();
        $professionals = Professional::select(
            'professionals.id','professionals.img','professionals.name','s.name AS specialty'
        )->join('specialties AS s','s.id','=','professionals.specialties_id')
        ->where('professionals.visible',true)
        ->get();
        return view('index',["specialties" => $specialties,"professionals" => $professionals]);
    }
    function about_us(){
        return view('about_us');
    }
    function contact(){
        $specialties = Specialty::orderBy('name',"asc")->get();
        return view('contact',["specialties" => $specialties]);
    }
    function specialties(){
        $specialties = Specialty::orderBy('name',"asc")->get();
        return view('specialties',["specialties" => $specialties]);
    }

    function specialties_terapia_ocupacional(){
        $id = 1;
        $professionals = Professional::where('specialties_id',$id)->where('visible',true)->get();
        return view('specialties.terapia_ocupacional',['professionals' => $professionals]);
    }
    function specialties_fonoaudiologia(){
        $id = 2;
        $professionals = Professional::where('specialties_id',$id)->where('visible',true)->get();
        return view('specialties.fonoaudiologia',['professionals' => $professionals]);
    }
    function specialties_nutricion(){
        $id = 3;
        $professionals = Professional::where('specialties_id',$id)->where('visible',true)->get();
        return view('specialties.nutricion',['professionals' => $professionals]);
    }
    function specialties_psicologia(){
        $id = 4;
        $professionals = Professional::where('specialties_id',$id)->where('visible',true)->get();
        return view('specialties.psicologia',['professionals' => $professionals]);
    }
    function specialties_psicopedagogia(){
        $id = 5;
        $professionals = Professional::where('specialties_id',$id)->where('visible',true)->get();
        return view('specialties.psicopedagogia',['professionals' => $professionals]);
    }
    function specialties_educacion_diferencial(){
        $id = 6;
        $professionals = Professional::where('specialties_id',$id)->where('visible',true)->get();
        return view('specialties.educacion_diferencial',['professionals' => $professionals]);
    }
    function specialties_neuropsicologia(){
        $id = 7;
        $professionals = Professional::where('specialties_id',$id)->where('visible',true)->get();
        return view('specialties.neuropsicologia',['professionals' => $professionals]);
    }
    function specialties_medicina_general(){
        $id = 8;
        $professionals = Professional::where('specialties_id',$id)->where('visible',true)->get();
        return view('specialties.medicina_general',['professionals' => $professionals]);
    }
}
