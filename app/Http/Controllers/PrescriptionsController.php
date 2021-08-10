<?php

namespace App\Http\Controllers;

use App\Models\prescriptions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PrescriptionsController extends Controller
{

    public function index(Request $request)
    {
        $prescriptions = prescriptions::orderBy('disease')->get();
        return view('prescriptions', compact('prescriptions'));
    }

    public function prescriptionsOnly()
    {
        $doctors = User::where('type', '=', 'doctor')->orderBy('name', 'desc')->get();
        return view('prescriptiononly', compact('doctors'));
    }

    public function addPrescription(Request $request)
    {
        $prescripcion = new prescriptions();
        $prescripcion->disease = $request->enfermedad;
        $prescripcion->group = $request->grupo;
        $prescripcion->treatment = str_replace(array("\n\r", "\n", "\r"), '<br>', $request->prescripcion);
        $prescripcion->save();

        return response()->json([
            'respuesta' => 'Guardado',
            'prescripcion' => $prescripcion,
            
        ]);
    }
    public function savePrescription($id_consulta)
    {
        $consultations = DB::table('consultations')->join('patients', 'consultations.patient', '=', 'patients.id')->where('consultations.id', '=', $id_consulta)->get();
        $day = date('d');
        $mesesArray = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $mes = $mesesArray[date('n')-1];
        $year = date('Y');
        return view('prescriptionprint', compact('consultations', 'day', 'mes', 'year'));
        /*
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($contain);
        return $pdf->download('mi-archivo.pdf');*/
    }

    public function updatepres(Request $request){
        $prescription = prescriptions::findOrFail($request->eid);
        $prescription->disease = $request->eenfermedad;
        $prescription->treatment = $request->eprescripcion;
        $prescription->group = $request->egrupo;
        $prescription->save();
        return redirect()->route('prescriptions');
    }

    public function deletePrescription(Request $request){
        $prescription = prescriptions::find($request->idPrescription);
        $prescription->delete();
        return $prescription;
    }

}
