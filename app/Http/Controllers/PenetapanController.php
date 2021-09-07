<?php

namespace App\Http\Controllers;

use App\Models\IkkTarget;
use App\Models\Program;
use App\Models\Sasaran;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\F;

class PenetapanController extends Controller
{
    public function viewPenetapan()
    {
        $data = Sasaran::with('ikkTarget')->get();
        $sasaran_program = Program::all();

        return view('penetapan_tujuan.penetapan', compact('data','sasaran_program'));
        // return $data;
    }

    public function penilaianPenetapan()
    {
        $data = Sasaran::with('ikkTarget')->get();
        $sasaran_program = Program::all();

        return view('penetapan_tujuan.penilaian', compact('data','sasaran_program'));
    }

    public function addSasaran(Request $req)
    {
       $sasaran = new Sasaran;
       $sasaran->sasaran_program_id = $req->sasaran_program;
       $sasaran->sasaran = $req->sasaran;
       $sasaran->save();

       if(!empty($sasaran->id)){
        $ikk = new IkkTarget;
        $ikk->sasaran_id = $sasaran->id;
        $ikk->ikk = $req->ikk;
        $ikk->target = $req->target;
        $ikk->satuan = $req->satuan;
        $ikk->save();
       }

       Session::flash('berhasil_input', 'Sasaran dan IKK berhasil disimpan');

       return redirect(route('penetapan'));
    }

    public function addOutput(Request $req)
    {

       if(!empty($req->sasaran_id)){
        $ikk = new IkkTarget;
        $ikk->sasaran_id = $req->sasaran_id;
        $ikk->ikk = $req->ikk;
        $ikk->target = $req->target;
        $ikk->satuan = $req->satuan;
        $ikk->save();
       }

       Session::flash('berhasil_input', 'IKK dan Target Output berhasil ditambahkan');

       return back();

    }

    public function getSasaran($sasaran_id)
    {
        
        $data = Sasaran::find($sasaran_id);

        return response()->json(['data' => $data]);
       
    }

    public function editSasaran(Request $req)
    {
        $sasaran = Sasaran::find($req->edit_sasaran_id);
        $sasaran->sasaran = $req->edit_sasaran;
        $sasaran->save();

        Session::flash('berhasil_input', 'Sasaran berhasil diubah');
        return back();
    }

    public function getOutput($id)
    {
        $data = IkkTarget::where('id',$id)->with('sasaran')->first();
                
        return response()->json(['data' => $data]);
       
    }

    public function editOutput(Request $req)
    {
        $ikk = IkkTarget::find($req->edit_id);
        $ikk->ikk = $req->edit_ikk;
        $ikk->target = $req->edit_target;
        $ikk->satuan = $req->edit_satuan;
        $ikk->save();

        Session::flash('berhasil_input', 'Ikk dan Target berhasil diubah');
        return back();
    }

    public function deleteOutput(Request $id)
    {
        
        $ids = $id->ids;
        IkkTarget::destroy($ids);

        $data = Sasaran::with('ikkTarget')->get();

        return response()->view('penetapan_tujuan.table', compact('data'))->setStatusCode(200);
    }

    public function deleteSasaran(Request $id)
    {
        
        $ids = $id->ids;

        Sasaran::destroy($ids);

        $data = Sasaran::with('ikkTarget')->get();

        return response()->view('penetapan_tujuan.table', compact('data'))->setStatusCode(200);
    }
}
