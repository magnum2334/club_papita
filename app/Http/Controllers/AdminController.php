<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Tournament;
use App\Models\Equipment;
use App\Models\Player;
use App\Models\Match;
use App\Models\TypeMatch;

class AdminController extends Controller
{
    public function dashboard(){
        
        $tournaments = Tournament::all();
        return view('dashboard', compact('tournaments'));
    }
    /**
     *  create function:show create form
     * @return view
     */
     
    public function home(){
        
       
        return view('adminviews.adminview');

    }
    
    public function create_tournament(){
        
        $equipments=Equipment::all();
        return view('adminviews.create_tournament', compact('equipments'));

    }

    public function store_tournament(Request $request){
        
        $request->validate([
            'name' => 'required',
            //valida 8 equipos
            'equipments' => 'required |max:8 |min:8'
        ]);
        //crea el torneo
        $tournament = new Tournament ($request->all());
        //fecha automatica para los torneos
        $date=date('Y-m-d');
        $tournament->date=$date;
        //es estado 
        $status = 0;
        $tournament->status = $status;
        //se captura del envio request los equipos
        $equipments=$request->equipments;
       
        if($tournament->save()){
            
            foreach ($equipments as $equipment) {
                if($tournament->equipments->count() < 8){
                    \DB::table('tournaments_equipments')->insertGetId(
                        [
                            'equiment_id' => $equipment,
                            'tournament_id' => $tournament->id
                        ]
                    );   
                }
            }
            //alet
            Session::flash('tournament_store', 'se publico tu torneo');
            //home admin
            return redirect('/admin/home');
        }
        
    }
    //retorna vista para crear equipos
    /**
     * @return view create_equipment
     */
    public function create_equipment(){
        
        $equipments=Equipment::all();
        return view('adminviews.create_equipment');

    }

    public function store_equipment(Request $request){
        
        $request->validate([
            'name' => 'required',    
        ]);
        
        $equipment = new  Equipment ($request->all());
        //fecha automatica para los equipos
        $date = date('Y-m-d');
        $equipment->date = $date;
        if($equipment->save()){
            //alet
            Session::flash('Equipment_store', 'se publico el equipo');
            //home admin
            return redirect('/admin/home');
        }
    }

    public function create_player(){
        
        $equipments=Equipment::all();
        return view('adminviews.create_players' ,compact('equipments'));
    }
       

    public function store_player(Request $request){
        
        $request->validate([
            'name' => 'required',
            'squad_number' => 'required',
            'equiment_id'  => 'required',
        ]);

        $player = new Player ($request->all());
        $squat = Equipment::find($request->equiment_id);

        if($squat->players->count() < 11){
            if($player->save()){
                // Session::flash('player_created', 'se tu creo jugador');
                return redirect('admin/create/player');
            }      
        }else{
            Session::flash('squad', 'tu equipo tiene 11 jugadores');
            return redirect('/admin/home'); 
        }
        
    }
    public function playing_tournaments(){
        
        $tournaments = Tournament::all();
        return view('adminviews.playing_tournaments' ,compact('tournaments'));
    }

    public function play_tournament($tournament_id){
       
        $tournament=Tournament::findOrFail($tournament_id);
        $status = 1;
        $tournament->status=$status;
        if($tournament->status === 1 ){
            if($tournament->update()){
                
                return view('adminviews.play_tournament' ,compact('tournament'));
            }
        }
       
    }

    public function cuartos($tournament_id){
        
        $tournament=Tournament::findOrFail($tournament_id);
        return view('adminviews.cuartos', compact('tournament'));
    }
    public function store_cuartos(Request $request ,$tournament_id){

        $tournament=Tournament::findOrFail($tournament_id);
        
        $matches1=$request->matches1;
        $matches2=$request->matches2;
        $matches3=$request->matches2;
        $matches4=$request->matches2;

        $math1 = new Match ($matches1);
        $math1->type_match_id=1;
        dd($math1);
        $math2 = new Match ($matches2);
        $math3 = new Match ($matches3);
        $math4 = new Match ($matches4);
        
    }
    public function show_equipment_tournament($equipment_id){
        
        $equipment=Equipment::findOrFail($equipment_id);

        return view('adminviews.show_equipment_tournament', compact('equipment'));
    }
}
