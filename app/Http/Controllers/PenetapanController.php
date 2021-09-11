<?php

namespace App\Http\Controllers;

use App\Models\IkkTarget;
use App\Models\JawabanOutput;
use App\Models\JawabanSasaran;
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

        $user_login = auth()->user()->id;
        $user_satker = auth()->user()->id_satker;
        $tahun_now = date('Y');

        $data = Sasaran::where('tahun',$tahun_now)->where('satker_id',$user_satker)->with('ikkTarget')->get();
        $sasaran_program = Program::all();

        return view('penetapan_tujuan.penetapan', compact('data','sasaran_program'));
        // return $data;
    }

    public function penilaianPenetapan()
    {

        $user_login = auth()->user()->id;
        $user_satker = auth()->user()->id_satker;
        $tahun_now = date('Y');

        $data = Sasaran::where('tahun',$tahun_now)->where('satker_id',$user_satker)->with(['ikkTarget' => function($q){
            $q->with('jawabanIkkTarget');}])->with('jawabanSasaran')->get();
        

        return view('penetapan_tujuan.penilaian', compact('data'));
        // return $data;
    }

    public function addSasaran(Request $req)
    {

        $user_login = auth()->user()->id;
        $user_satker = auth()->user()->id_satker;
        $tahun_now = date('Y');

        $sasaran = new Sasaran;
        $sasaran->tahun = $tahun_now;
        $sasaran->satker_id = $user_satker;
        $sasaran->users_id = $user_login;
        $sasaran->sasaran_program_id = $req->sasaran_program;
        $sasaran->sasaran = $req->sasaran;
        $sasaran->save();

       if(!empty($sasaran->id)){
        $ikk = new IkkTarget;
        $ikk->tahun = $tahun_now;
        $ikk->satker_id = $user_satker;
        $ikk->users_id = $user_login;
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
        $user_login = auth()->user()->id;
        $user_satker = auth()->user()->id_satker;
        $tahun_now = date('Y');

       if(!empty($req->sasaran_id)){
        $ikk = new IkkTarget;
        $ikk->tahun = $tahun_now;
        $ikk->satker_id = $user_satker;
        $ikk->users_id = $user_login;
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
        $user_login = auth()->user()->id;
        $user_satker = auth()->user()->id_satker;
        $tahun_now = date('Y');

        $ids = $id->ids;
        IkkTarget::destroy($ids);

        $data = Sasaran::where('tahun',$tahun_now)->where('satker_id',$user_satker)->with('ikkTarget')->get();

        return response()->view('penetapan_tujuan.table', compact('data'))->setStatusCode(200);
    }

    public function deleteSasaran(Request $id)
    {
        $user_login = auth()->user()->id;
        $user_satker = auth()->user()->id_satker;
        $tahun_now = date('Y');

        $ids = $id->ids;

        Sasaran::destroy($ids);

        $data = Sasaran::where('tahun',$tahun_now)->where('satker_id',$user_satker)->with('ikkTarget')->get();

        return response()->view('penetapan_tujuan.table', compact('data'))->setStatusCode(200);
    }

    public function penilaianCreate(Request $req)
    {
        $user_login = auth()->user()->id;
        $user_satker = auth()->user()->id_satker;
        $tahun_now = date('Y');

        
        foreach($req->sasaran_id as $sasaran)
        {

            $cek_sasaran = JawabanSasaran::where('sasaran_id',$sasaran)->count();

            if($cek_sasaran == 0){
                $j_sasaran = new JawabanSasaran();
                $j_sasaran->tahun = $tahun_now;
                $j_sasaran->satker_id = $user_satker;
                $j_sasaran->users_id = $user_login;
                $j_sasaran->sasaran_id = $sasaran;
            }else{
                $j_sasaran = JawabanSasaran::where('sasaran_id',$sasaran)->first();
            }

            
            $j_sasaran->j_sasaran_t = $req->jawaban_sasaran_t[$sasaran];
            $j_sasaran->j_sasaran_b = $req->jawaban_sasaran_b[$sasaran];
        
            
            if($req->jawaban_sasaran_t[$sasaran] <> "" && $req->jawaban_sasaran_b[$sasaran] <> ""){
                $j_sasaran->save();
            }

            foreach($req->output_id as $output)
            {
                if($req->sasaran_id_output[$output] == $sasaran)
                {

                    $cek_output = JawabanOutput::where('ikk_target_id',$output)->count();

                    if($cek_output == 0){
                        $j_output = new JawabanOutput();
                        $j_output->tahun = $tahun_now;
                        $j_output->satker_id = $user_satker;
                        $j_output->users_id = $user_login;
                        $j_output->sasaran_id = $req->sasaran_id_output[$output];
                        $j_output->ikk_target_id = $output;
                        $j_output->j_sasaran_id = $j_sasaran->id;
                    }else{
                        $j_output = JawabanOutput::where('ikk_target_id',$output)->first();
                    }

                    $j_output->j_ikk = $req->jawaban_ikk[$output];
                    $j_output->j_target = $req->jawaban_target[$output];

                    if($req->jawaban_ikk[$output] <> "" && $req->jawaban_target[$output] <> ""){
                        $j_output->save();
                    }

                }
                
            }
        }

        if($j_output->id){
            Session::flash('berhasil_input', 'Penilaian penetapan tujuan berhasil disimpan');
        }
        
        return back();
    }
}
