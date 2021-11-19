<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Tournament;

class AdminController extends Controller
{
    
    /**
     *  create function:show create form
     * @return view
     */
     
    public function home(){
        
        $tournamentsAdmin = Tournament::orderBy('date','desc')->paginate(7);
        return view('adminviews.adminview' , compact('tournamentsAdmin'));

    }
    
    public function create_tournament(){
        
        return view('adminviews.create_tournament');

    }

    public function store_tournament(Request $request){
        
        $request->validate([
            'name' => 'required',    
        ]);
    
        $tournament = new Tournament ($request->all());
        //fecha automatica para los torneos
        $date=date('Y-m-d');
        $tournament->date=$date;

        if($tournament->save()){
            //alet
            Session::flash('tournament_store', 'se publico tu torneo');
            //home admin
            return redirect('/admin/home');
        }
        
    }
    //retorna vista para crear torneos
    /**
     * @return view create_tournament
     */
    public function create_equipment(){
        
        return view('adminviews.create_equipment');
        
    }
    
}
