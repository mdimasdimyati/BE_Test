<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\CandidateOrganization as Organization;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataActivityController extends Controller
{

    public function index()
    {
        // $candidate = Candidate::with('stat')->get();
        $candidate = Candidate::get();

        return view('data_activity', compact('candidate'));
    }

    public function create()
    {
        $religion = DB::table('religion')->select('name', 'id')->where('active', 1)->get();
        $bank = DB::table('bank')->select('name', 'id')->where('active', 1)->get();
        $education = DB::table('education')->select('name', 'id')->where('active', 1)->get();
        $university = DB::table('university')->select('name', 'id')->where('active', 1)->get();

        return view('data_activity_create', compact('religion', 'bank', 'education', 'university'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        $this->validate($request, [
            'name'              => 'required|string|min:3',
            'gender'            => 'required|not_in:0',
            'city_of_birth'     => 'required',
            'date_of_birth'     => 'required|date',
            'religion_id'       => 'required',
            'email'             => 'required|email|max:255',
            'phone'             => 'required|min:10',
            'identity_number'   => 'required|min:15',
            'identity_file'     => 'required',
            'bank_id'           => 'required',
            'bank_account'      => 'required|min:6',
            'address'           => 'required',
            'education_id'      => 'required',
            'university_id'     => 'required',
            'graduation_year'   => 'required',
            'major'             => 'required',
            'semester'          => 'required',
            'org_name'          => 'required',
            'org_year'          => 'required',
            'org_position'      => 'required',
            'org_description'   => 'required',
            'skill'             => 'required',
            'file_cv'           => 'required',
            'file_photo'        => 'required',
            'file_portfolio'    => 'required',

        ]);

        if ($request->bank_id === "100") {
            $this->validate($request, [
                'bank_name'     => 'required',
            ]);
        }
        if ($request->university_id === "100") {
            $this->validate($request, [
                'university_other'     => 'required',
            ]);
        }

        if ($request->source_information_id === '6'){
            $this->validate($request, [
                'source_information_other'     => 'required',
            ]);
        }


        // DB::beginTransaction();

        // try {
            //file identity
            $file = $request->file('identity_file');
            $nama_file = time()."_".$file->getClientOriginalName();
      	    $tujuan_upload = 'data_file/identity';
            $file->move($tujuan_upload,$nama_file);

            //file cv
            $file_cv = $request->file('file_cv');
            $nama_fileCv = time()."_".$file_cv->getClientOriginalName();
      	    $tujuan_uploadCv = 'data_file/cv';
            $file_cv->move($tujuan_uploadCv,$nama_fileCv);

            //file file_photo
            $file_photo = $request->file('file_photo');
            $nama_file_photo = time()."_".$file_photo->getClientOriginalName();
      	    $tujuan_upload_photo = 'data_file/photo';
            $file_photo->move($tujuan_upload_photo,$nama_file_photo);

            //file file_portfolio
            $file_portfolio = $request->file('file_portfolio');
            $nama_file_portfolio = time()."_".$file_portfolio->getClientOriginalName();
      	    $tujuan_upload_portfolio = 'data_file/portfolio';
            $file_portfolio->move($tujuan_upload_portfolio,$nama_file_portfolio);

            $information = $request->source_information_id === '6' ? $request->source_information_other : null;
            //================
            $candidate = $request->all();
            $candidate['identity_file'] = $nama_file;
            $candidate['file_cv'] = $nama_fileCv;
            $candidate['file_photo'] = $nama_file_photo;
            $candidate['file_portfolio'] = $nama_file_portfolio;
            $candidate['source_information_other'] = $information;
            $candidate['mail_sent'] = 0;
            $candidate['candidate_status_id'] = 1;

            $candidate = Candidate::create($candidate);

            $this->_candidate_organization($candidate->id,$request);
            // dd($request->all());
            // dd($candidate->id);
            return back();
            // return redirect('/data_activity');
        // } catch (\Exception $e) {

        //     DB::rollback();

        //     return false;
        // }
    }

    private function _candidate_organization($id,$request)
    {
        
        $file_org = $request->file('org_file');
        $nama_file_org = time()."_".$file_org->getClientOriginalName();
        $tujuan_upload_org = 'data_file/organization';
        $file_org->move($tujuan_upload_org,$nama_file_org);

        $fileOrg = $request->org_file == '' ? null : $nama_file_org;
        $data['candidate_id'] = $id;
        $data['org_name'] = $request->org_name;
        $data['year'] = $request->org_year;
        $data['position'] = $request->org_position;
        $data['description'] = $request->org_description;
        $data['file'] = $fileOrg;
         
        return Organization::create($data);
    }

    public function edit($id)
    {   
        $religion = DB::table('religion')->select('name', 'id')->where('active', 1)->get();
        $bank = DB::table('bank')->select('name', 'id')->where('active', 1)->get();
        $status = DB::table('candidate_status')->select('status','id')->where('active',1)->get();
        // dd($status);
        // $education = DB::table('education')->select('name', 'id')->where('active', 1)->get();
        // $university = DB::table('university')->select('name', 'id')->where('active', 1)->get();

        $candidate = Candidate::findOrFail($id);
        return view('data_activity_edit', compact('candidate','religion','bank','status'));
    }

    public function update(Request $request, $id)
    {
        Candidate::findOrFail($id)->update([
            'name'  => $request->name,
            'gender'  => $request->gender,
            'city_of_birth'  => $request->city_of_birth,
            'date_of_birth'  => $request->date_of_birth,
            'religion_id'  => $request->religion_id,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'identity_number'  => $request->identity_number,
            'bank_id '  => $request->bank_id,
            'bank_account'  => $request->bank_account,
            'bank_name'  => $request->bank_name,
            'address'  => $request->address,
            'unit'  => $request->unit,
            'assessment_score'  => $request->assessment_score,
            'ranking'  => $request->ranking,
            'candidate_status_id'  => $request->candidate_status_id,
        ]);
        // dd($request->all());
        return back();
        // return view('data_activity_edit');
    }
    public function show($id)
    {

        $candidate = Candidate::findOrFail($id);
        // $st = Status::where('id',$id)->first();
        // dd($candidate->stat);

        return view('data_activity_detail', compact('candidate'));
    }
    
}
