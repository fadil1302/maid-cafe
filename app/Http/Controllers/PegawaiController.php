<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class PegawaiController extends Controller
{

    public function dashboard(){
        return view('pegawai.dashboard');
    }

    public function total(){
        $userCount = Pegawai::count(); 
        return view('pegawai.dashboard', compact('userCount'));
    }

    public function pegawai(){
        $data = Pegawai::get();

        return view('pegawai.pegawai', compact('data'));
    }

     //create
     public function create(){
        return view('pegawai.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'address' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,webp',
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        if ($request->has('image')) {
            
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;
            $path = 'uploads/profile/';
            $file->move($path, $filename);
        };
        // dd(($path.$filename));
        
        pegawai::create([
            'name' => $request->nama,
            'nip' => $request->nip,
            'email' => $request->email,
            'address' => $request->address,
            'image'=> $path.$filename,
        ]);
        
        return redirect()->route('admin.pegawai');
    }
    //create

    //edit
    public function edit(Request $request,$id){
        $data = Pegawai::find($id);

        return view('pegawai.edit', compact('data'));
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'address' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        // dd($request->all());
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data = Pegawai::findOrFail($id);

        if ($request->has('image')) {
            
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;
            $path = 'uploads/profile/';
            $file->move($path, $filename);

            if (File::exists($data->image)) {
                File::delete($data->image);
            };
        };

        $data->update([
            'name' => $request->nama,
            'nip' => $request->nip,
            'email' => $request->email,
            'address' => $request->address,
            'image'=> $path.$filename,
        ]);

        return redirect()->route('admin.pegawai');
        }
        //edit
        
        //delete
        public function delete(Request $request,$id){
            $data = Pegawai::findOrFail($id);
            
            if (File::exists($data->image)) {
                File::delete($data->iamge);
            }
            
            $data->delete();
            
            return redirect()->route('admin.pegawai');
        }
    //delete
}
