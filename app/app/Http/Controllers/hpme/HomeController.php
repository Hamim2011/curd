<?php

namespace App\Http\Controllers\hpme;

use App\Http\Controllers\Controller;
use App\Models\homeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function homefunction(){
        return view('home.home');
    }
    public function homefunctioncreate(Request $req){
        $home_infos = new homeModel();
        $home_infos->name = $req->name;
        $home_infos->email = $req->email;
        $home_infos->subject = $req->subject;
        $home_infos->message = $req->message;
        // dd($home_infos->all);
        $home_infos->save();
        return redirect('/home/data');

    }
    public function homefunctionalldata(){
       $home_infoall = homeModel::all();
       return view('home.table', compact('home_infoall'));

    }
    public function homefunctionread($id){
        $home_infodata = homeModel::findOrFail($id);
        return view('home.homedataread', compact('home_infodata'));

    }
    public function homefunctionedit($id){
        $home_infodata = homeModel::findOrFail($id);
        return view('home.homedataedit', compact('home_infodata'));

    }
    public function homefunctionupdate(Request $req, $id){
        $home_infodata = homeModel::findOrFail($id);

        $home_infodata->name = $req->name;
        $home_infodata->email = $req->email;
        $home_infodata->subject = $req->subject;
        $home_infodata->message = $req->message;
        $home_infodata->save();
        return redirect('/home/data');
        
    }
    public function homefunctiondelete($id){
        $home_infodata = homeModel::findOrFail($id);
        $home_infodata->delete();
        return redirect('/home/data');

    }
}
