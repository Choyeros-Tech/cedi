<?php

namespace App\Http\Controllers;

use App\Models\analysis;
use App\Models\Consultations;
use App\Models\patients;
use App\Models\prescriptions;
use App\Models\services;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConsultationsController extends Controller
{

    public function addConsultation(Request $request)
    {

        if($request->cita == 0){
            $consultation = new Consultations();
            $consultation->patient = $request->paciente;
            $consultation->weight = $request->peso;
            $consultation->size = $request->talla;
            $consultation->TA = $request->TA;
            $consultation->temperature = $request->temperatura;
            $consultation->type = $request->tipo;
            $consultation->other = $request->other;
            $consultation->updated_at = $request->fechahoraconsulta;
            $consultation->doc = $request->doctor;
            $consultation->save();
    
        }else{
            $consultation = new Consultations();
            $consultation->patient = $request->paciente;
            $consultation->weight = $request->peso;
            $consultation->size = $request->talla;
            $consultation->TA = $request->TA;
            $consultation->temperature = $request->temperatura;
            $consultation->type = $request->tipo;
            $consultation->other = $request->other;
            $consultation->doc = $request->doctor;
            $consultation->waiting_list = '1';
            $consultation->save();
    
        }
        $now = Carbon::now()->format('Y-m-d');


        $patients = patients::orderBy('name', 'desc')->get();
        $doctors = User::where('type', '=', 'doctor')->orderBy('name', 'desc')->get();
        $consultations = Consultations::where('consultations.created_at', 'LIKE', '%'.$now.'%')->join('patients', 'consultations.patient', '=', 'patients.id')->select('consultations.id as id', 'consultations.updated_at as start', 'patients.name as title')->get();

        $consultationsall = Consultations::join('patients', 'consultations.patient', '=', 'patients.id')->select('consultations.id as id', 'consultations.updated_at as start', 'patients.name as title')->get();

        $e = [];
        $ev= [];
        foreach ($consultations as $consultation) {
            
            $ev['id'] = $consultation->id;
            $ev['title'] = $consultation->title;
            $ev['start'] = $consultation->start;
            $ev['end'] = $consultation->start;
            $e[] = $ev;
        }  
        
        $e = json_encode($e);

        return view('reception', compact('patients', 'doctors', 'e'));

    }

    public function waitingList()
    {
        $doc = Auth::user()->id;
        $now = Carbon::now()->format('Y-m-d');
        $patients = patients::orderBy('name', 'desc')->get();
        $doctors = User::where('type', '=', 'doctor')->orderBy('name', 'desc')->get();

        if(Auth::user()->type == 'receptionist'){
            $consultations = DB::table('consultations')->join('patients', 'consultations.patient', '=', 'patients.id')->join('users', 'consultations.doc', '=', 'users.id')->select('consultations.id', 'patients.name', 'consultations.weight', 'consultations.TA', 'consultations.temperature', 'consultations.type', 'consultations.other', 'consultations.updated_at', 'users.name as doc', 'patients.id as patient', 'consultations.waiting_list', 'consultations.status')->where('consultations.updated_at', 'LIKE', '%'.$now.'%')->get();
        }else{
            $consultations = DB::table('consultations')->join('patients', 'consultations.patient', '=', 'patients.id')->join('users', 'consultations.doc', '=', 'users.id')->select('consultations.id', 'patients.name', 'consultations.weight', 'consultations.TA', 'consultations.temperature', 'consultations.type', 'consultations.other', 'consultations.updated_at', 'users.name as doc', 'patients.id as patient', 'consultations.waiting_list', 'consultations.status')->where('consultations.updated_at', 'LIKE', '%'.$now.'%')->where('consultations.doc', '=', $doc)->get();
        }
        
        
        return view('waitinglist', compact('consultations', 'patients', 'doctors'));
    }

    public function consultation($consultationid){
        $consultation = consultations::where('id', '=', $consultationid)->get();
        $patienId = $consultation[0]['patient'];
        $patient = patients::where('id', '=', $patienId)->get();
        $prescriptions = prescriptions::orderBy('disease', 'asc')->get();
        $services = services::orderBy('service', 'asc')->get();
        $id = $consultationid;
        $analysis = analysis::orderBy('category', 'asc')->get();

        $historials = DB::table('consultations')->join('patients', 'consultations.patient', '=', 'patients.id')->join('users', 'consultations.doc', '=', 'users.id')->select('consultations.id', 'patients.name', 'patients.birthdate', 'consultations.weight', 'consultations.TA', 'consultations.temperature', 'consultations.type', 'consultations.other', 'consultations.size', 'consultations.updated_at', 'users.name as doc', 'patients.id as patient', 'consultations.symptom', 'consultations.prescription', 'consultations.diagnostic')->orderBy('id', 'DESC')->where('patients.id', '=', $patienId)->get();

        $status = Consultations::find($consultationid);
        $status->status = '1';
        $status->save();

        $edad = $this->calculaedad($patient[0]->birthdate);


        return view('consultation', compact('prescriptions', 'consultation', 'patient', 'id', 'services', 'historials', 'analysis', 'edad'));
    }

    function calculaedad($fechanacimiento){
        list($ano,$mes,$dia) = explode("-",$fechanacimiento);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
          $ano_diferencia--;
        return $ano_diferencia;
      }


    public function finalizeConsultation(Request $request){
        $consultation = Consultations::find($request->id_consulta);
        $consultation->symptom = $request->symptom;
        $consultation->prescription = $request->prescription;
        $consultation->diagnostic = $request->diagnostico;
        $consultation->save();
        return $consultation;
    }

    public function schedule()
    {
        $doc = Auth::user()->id;
        $consultations = Consultations::where('consultations.doc', '=', $doc)->join('patients', 'consultations.patient', '=', 'patients.id')->select('consultations.id as id', 'consultations.updated_at as start', 'patients.name as title')->get();
        $e = [];
        $ev= [];
        foreach ($consultations as $consultation) {
            
            $ev['id'] = $consultation->id;
            $ev['title'] = $consultation->title;
            $ev['start'] = $consultation->start;
            $ev['end'] = $consultation->start;
            $e[] = $ev;
        }  
        
        $e = json_encode($e);

        return view('schedule', compact('e'));

    }

    public function charts(){
        $now = date('Y-m-d');
        $month = date('Y-m-');
        $doctors = User::where('type', '=', 'doctor')->orderBy('name', 'desc')->get();
        $consultDoctor = Consultations::join('users', 'consultations.doc', '=', 'users.id')->select('users.name as name', DB::raw('count(*) as y'))->where('consultations.created_at', 'LIKE', '%'.$now.'%')->groupBy('users.name')->get();
        $consultDoctorMonth = Consultations::join('users', 'consultations.doc', '=', 'users.id')->select('users.name as name', DB::raw('count(*) as y'))->where('consultations.created_at', 'LIKE', '%'.$month.'%')->groupBy('users.name')->get();
        $diagnostics = Consultations::select('diagnostic as name', DB::raw('count(*) as y'))->where('diagnostic', '!=', '')->orderBy('y', 'DESC')->groupBy('diagnostic')->limit(10)->get();
        return view('charts', compact('consultDoctor', 'consultDoctorMonth', 'diagnostics', 'doctors'));
    }

    public function filterChart(Request $request){
        if($request->doctor == 'Todos'){
            return redirect()->route('charts');
        }else{
            $doctors = User::where('type', '=', 'doctor')->orderBy('name', 'desc')->get();
            $diagnostics = Consultations::select('diagnostic as name', DB::raw('count(*) as y'))->where('diagnostic', '!=', '')->where('doc', '=', $request->doctor)->orderBy('y', 'DESC')->groupBy('diagnostic')->limit(10)->get();
            return view('chartsfilter', compact('diagnostics', 'doctors'));
        }
        
    }

    public function getConsultationWL(Request $request){
        $consultation = Consultations::findOrFail($request->id);
        return $consultation;
    }

    public function editConsultation(Request $request){


        $consultation = Consultations::find($request->consultationID);
        $consultation->patient = $request->paciente;
        $consultation->doc = $request->doctor;
        $consultation->weight = $request->peso;
        $consultation->size = $request->talla;
        $consultation->TA = $request->TA;
        $consultation->temperature = $request->temperatura;
        $consultation->type = $request->tipo;
        $consultation->other = $request->otro;
        $consultation->updated_at = $request->fechahoraconsulta;
        $consultation->save();

        return redirect()->route('waitingList');


    }


}
