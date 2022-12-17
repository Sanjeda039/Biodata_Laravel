<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profileModel;
use App\Models\personal_info;
use App\Models\contact;
use App\Models\skillModel;


class portfolioController extends Controller
{
    public function get_profile(){
        return view('bio-data');
        
    }

    public function viewPortfolio(){
        //return view('viewPortfolio');
        $data = profileModel::all();
        return view('viewPortfolio',['fillable'=>$data]);
    }


    public function editPortfolio($id){
        $data=profileModel::find($id);
        return view('updatePortfolio',compact('data'));
        //return $data;
        
    }
     public function updatePortfolio(Request $request){
            $id = $request->input('id');
            $data=profileModel::find($id);
            $data->name =$request->input('name');
            $data->country=$request->input('country');
            $data->birthdate=$request->input('birthdate');
            $data->school=$request->input('school');
            $data->college=$request->input('college');
            $data->university=$request->input('university');
            $data->subject=$request->input('subject');
            $data->email=$request->input('email');
            $data->gender=$request->input('gender');          
            $data->phone=$request->input('phone');
            $data->hobby=$request->input('hobby');
            $data->me=$request->input('me');
            $data->save();
            //return back();
            return redirect('viewPortfolio')->with('success','Data updated successfully');
    }

    public function delete_profile(Request $request){
        $id = $request->input('id');
        //profileModel::destroy($id);

        //profileModel::where('id',$id)->delete();
        //profileModel::where('id',$id)->where('name''name)->delete();
        //profileModel::where('id',$id)->update(['status'=>'diable']);
        //status change soft delete(database e thakbe)
        //profileModel::where('status',1)->first();
        profileModel::where('id',$id)->update(['status'=>2]);

        return back();
    }


    public function save_profile(Request $request){
        $profile=profileModel::create([
            'name'=> $request->input('name'),
            'country'=>$request->input('country'),
            'university'=>$request->input('university'),
            'college'=>$request->input('college'),
            'school'=>$request->input('school'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'birthdate'=>$request->input('birthdate'),
            'gender'=>$request->input('gender'),
            'subject'=>$request->input('subject'),
            'hobby'=>$request->input('hobby'),
            'me'=>$request->input('me')
        ]);
        //return $request->all();
        return back()->with("message","Saved Successfully");

    }
    public function index(){
        return view('portfolio/index');    
    }

    public function myPortfolio(){
        return view('me/public_html/index');    
    }

     public function admin(){
        return view('admin/index');    
    }

    public function personal_info(){
        return view('admin/personal_info');    
    }

    public function save_personal_info(Request $request){
            $profile=personal_info::create([
            'name'=> $request->input('name'),
            'img'=>$request->input('img'),
            'designation'=>$request->input('designation'),
            'birthdate'=>$request->input('birthdate'),
            'address'=>$request->input('address'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'skype'=>$request->input('skype'),
            'fb'=>$request->input('fb'),
            'linkedin'=>$request->input('linkedin'),
            'me'=>$request->input('me')
        ]);
        //return $request->all();
        return back()->with("message","Saved Successfully");

    }

    public function save_contact(Request $request){
            $profile=contact::create([
            'name'=> $request->input('name'),
            'email'=>$request->input('email'),
            'subject'=>$request->input('subject'),
            'message'=>$request->input('message')
        ]);
        //return $request->all();
        return back()->with("message","Saved Successfully");
    }

    public function skill(){
        return view('admin/skill');    
    }

    public function save_skill(Request $request){
             $profile=skillModel::create([
            'name'=> $request->input('name'),
            'type'=>$request->input('type'),
            'percant'=>$request->input('percant')
        ]);
        //return $request->all();
        return back()->with("message","Saved Successfully");

    }

}
