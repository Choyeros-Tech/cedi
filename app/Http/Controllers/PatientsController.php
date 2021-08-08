<?php

namespace App\Http\Controllers;

use App\Models\Consultations;
use App\Models\patients;
use App\Models\User;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientsController extends Controller
{

    public function index()
    {
        $now = Carbon::now()->format('Y-m-d');

        $patients = patients::orderBy('name', 'desc')->get();
        $doctors = User::where('type', '=', 'doctor')->orderBy('name', 'desc')->get();
        $consultations = Consultations::where('consultations.created_at', 'LIKE', '%'.$now.'%')->join('patients', 'consultations.patient', '=', 'patients.id')->select('consultations.id as id', 'consultations.updated_at as start', 'patients.name as title')->get();
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

    public function addPatient(Request $request)
    {
        $now = Carbon::now()->format('Y-m-d');

        $patient = new patients();
        $patient->name = $request->pNombre;
        $patient->phone = $request->pTelefono;
        $patient->emergencyPhone = $request->pEmergencias;
        $patient->birthdate = $request->pFecha;
        $patient->address = $request->pDomicilio;
        $patient->sex = $request->pSexo;
        $patient->civil = $request->pCivil;

        $fileName = null;
        if (request()->hasFile('documento')) {
            $file = request()->file('documento');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('../public/docs/', $fileName);
        }else{
           $fileName = "sindoc";
        }

        $patient->history = $fileName;
        $patient->save();
        $patients = patients::orderBy('name', 'asc')->get();
        $doctors = User::where('type', '=', 'doctor')->orderBy('name', 'desc')->get();

        $consultations = Consultations::where('consultations.created_at', 'LIKE', '%'.$now.'%')->join('patients', 'consultations.patient', '=', 'patients.id')->select('consultations.id as id', 'consultations.updated_at as start', 'patients.name as title')->get();
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
    public function addPatienttoList(Request $request)
    {
        $now = Carbon::now()->format('Y-m-d');

        $patient = new patients();
        $patient->name = $request->pNombre;
        $patient->phone = $request->pTelefono;
        $patient->emergencyPhone = $request->pEmergencias;
        $patient->birthdate = $request->pFecha;
        $patient->address = $request->pDomicilio;
        $patient->sex = $request->pSexo;
        $patient->civil = $request->pCivil;

        $fileName = null;
        if (request()->hasFile('documento')) {
            $file = request()->file('documento');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('../public/docs/', $fileName);
        }else{
           $fileName = "sindoc";
        }

        $patient->history = $fileName;
        $patient->save();

        return $patient;

        //return redirect()->route('patients');
    }

    public function getBirthdate(Request $request)
    {
        $patient = patients::find($request->patient);
       
        return $patient;
    }

    public function patients()
    {
        $patients = DB::table('patients')->leftJoin('consultations', 'patients.id', '=', 'consultations.patient')->select('patients.id', 'patients.name', 'patients.phone', 'patients.emergencyPhone', 'patients.birthdate', 'patients.address', 'patients.created_at')->selectRaw('count(*) as total')->groupBy('patients.name')->orderBy('patients.id', 'ASC')->get();
        return view('patients', compact('patients'));
    }

    public function patientDetail($id){
        $patient = patients::findOrFail($id);
        $consultation = consultations::where('patient', '=', $id)->limit(1)->get();
        $historials = DB::table('consultations')->join('patients', 'consultations.patient', '=', 'patients.id')->join('users', 'consultations.doc', '=', 'users.id')->select('consultations.id', 'patients.name', 'consultations.weight', 'consultations.TA', 'consultations.temperature', 'consultations.type', 'consultations.other', 'consultations.size', 'consultations.updated_at', 'users.name as doc', 'patients.id as patient', 'consultations.symptom', 'consultations.prescription', 'consultations.diagnostic')->orderBy('id', 'DESC')->where('patients.id', '=', $id)->get();

        $counterCons = sizeof($consultation);
        return view('patientDetail', compact('patient', 'consultation', 'historials', 'counterCons'));
    }

    public function dataPatient($id){
        $consultations = consultations::where('id', '=', $id)->select('id','patient','doc', 'symptom')->get();
        $doc = user::where('id', '=', $consultations[0]->doc)->select('id','name')->get();
        $patient = patients::where('id', '=', $consultations[0]->patient)->get();
        $allconsults = consultations::where('patient', '=', $patient[0]->id)->select('symptom', 'diagnostic', 'created_at', 'prescription')->get();
        
            $edad = Carbon::parse($patient[0]->birthdate)->age;
            $datos = array(
                'id_doctor'=>$doc[0]->id,
                'doctor'=>$doc[0]->name,
                'id_paciente'=>$patient[0]->id,
                'paciente'=>$patient[0]->name, 
                'edad_paciente'=>$edad,
                'domicilio_paciente'=>$patient[0]->address,
                'telefono_paciente'=>$patient[0]->phone,
                'sexo'=>$patient[0]->sex,
                'civil'=>$patient[0]->civil,
                'consultations'=>$allconsults,
                );
            
            return json_encode($datos);  
    }

    public function updatePatient(Request $request){
        $patient = patients::findOrFail($request->id);
        $patient->name = $request->name;
        $patient->phone = $request->phone;
        $patient->emergencyPhone = $request->emergencyPhone;
        $patient->birthdate = $request->birthdate;
        $patient->address = $request->address;
        $patient->sex = $request->sexo;
        $patient->civil = $request->civil;
        $fileName = null;
        
        if (request()->hasFile('documento')) {
            $file = request()->file('documento');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('../public/docs/', $fileName);
            $patient->history = $fileName;
        }

        $patient->save();

        

        $patient->history = $fileName;

        return redirect()->route('patientDetail', [$request->id]);
    }

    public function deletePatient(Request $request){
        $patient = patients::find($request->id_patient);
        $patient->delete();
        return $patient;
    }

    

    
}
