<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//All Familiar Models
use App\Models\FamiliarBasic;
use App\Models\FamiliarAc;
use App\Models\FamiliarActions;
use App\Models\FamiliarHp;
use App\Models\FamiliarSenses;
use App\Models\FamiliarSkills;
use App\Models\FamiliarSpd;
use App\Models\FamiliarStats;
use App\Models\FamiliarTraits;

class FamiliarMaster extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return DB::table('familiar_basics')
    ->join('familiar_acs', 'familiar_basics.id', '=', 'familiar_acs.id')
    ->join('familiar_hps', 'familiar_basics.id', '=', 'familiar_hps.id')
    ->join('familiar_spds', 'familiar_basics.id', '=', 'familiar_spds.id')
    ->join('familiar_stats', 'familiar_basics.id', '=', 'familiar_stats.id')
    ->join('familiar_skills', 'familiar_basics.id', '=', 'familiar_skills.id')
    ->join('familiar_senses', 'familiar_basics.id', '=', 'familiar_senses.id')
    ->join('familiar_traits', 'familiar_basics.id', '=', 'familiar_traits.id')
    ->join('familiar_actions', 'familiar_basics.id', '=', 'familiar_actions.id')
    ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$newRequest = json_decode($request);
        $basicfam = FamiliarBasic::create($request->all());
        $acfam = FamiliarAc::create($request->all());
        $actionfam = FamiliarActions::create($request->all());
        $hpfam = FamiliarHp::create($request->all());
        $sensefam = FamiliarSenses::create($request->all());
        $skillfam = FamiliarSkills::create($request->all());
        $spdfam = FamiliarSpd::create($request->all());
        $statfam = FamiliarStats::create($request->all());
        $traitfam = FamiliarTraits::create($request->all());
        return json_encode($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allFamiliar = DB::table('familiar_basics')
        ->where(['familiar_basics.id' => $id])
        ->join('familiar_acs', 'familiar_basics.id', '=', 'familiar_acs.id')
        ->join('familiar_hps', 'familiar_basics.id', '=', 'familiar_hps.id')
        ->join('familiar_stats', 'familiar_basics.id', '=', 'familiar_stats.id')
        ->join('familiar_senses', 'familiar_basics.id', '=', 'familiar_senses.id')
        ->get();
        $singleFamiliar = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $allFamiliar);
        return $singleFamiliar;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $basicfam = FamiliarBasic::destroy($id);
        $acfam = FamiliarAc::destroy($id);
        $actionfam = FamiliarActions::destroy($id);
        $hpfam = FamiliarHp::destroy($id);
        $sensefam = FamiliarSenses::destroy($id);
        $skillfam = FamiliarSkills::destroy($id);
        $spdfam = FamiliarSpd::destroy($id);
        $statfam = FamiliarStats::destroy($id);
        $traitfam = FamiliarTraits::destroy($id);
    }

    public function speed($id)
    {
        $allFamiliar = FamiliarSpd::find($id);
        $singleFamiliar = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $allFamiliar);
        return $singleFamiliar;
    }

    public function skills($id)
    {
        $allFamiliar = FamiliarSkills::find($id);
        $singleFamiliar = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $allFamiliar);
        return $singleFamiliar;
    }

    public function senses($id)
    {
        $allFamiliar = FamiliarSenses::find($id);
        $singleFamiliar = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $allFamiliar);
        return $singleFamiliar;
    }

    public function traits($id)
    {
        $allFamiliar = FamiliarTraits::find($id);
        $singleFamiliar = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $allFamiliar);
        return $singleFamiliar;
    }
    public function actions($id)
    {
        $allFamiliar = FamiliarActions::find($id);
        $singleFamiliar = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $allFamiliar);
        return $singleFamiliar;
    }
}
