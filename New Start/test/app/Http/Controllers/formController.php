<?php

namespace App\Http\Controllers;

use App\Form;
use App\Play;
use Illuminate\Http\Request;

use Session;
class formController extends Controller
{
    public function index()
    {
        return view('image_upload');
    }

    public function upload(Request $request)
    {
        $file = $request->file('image');
        $file_name = $file->getClientOriginalName();
        $destination = 'image/';
        $file->move($destination, $file_name);
        $image = $destination . $file_name;

        $form = new Form();
        $form->image_name = $image;
        $form->save();
        return redirect()->route('show.image');
    }

    public function image_show()
    {
        $images = Form::all();
        return view('show_image')->with('images', $images);
    }

    public function showForm()
    {
        return view('form_play');
    }

    public function form_submit(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:plays,email',
            'mobile'=>'required|max:11|min:11',
            'reg_date'=>'required|date',
            'gender'=>'required',
            'language'=>'required',
            'password'=>'required|confirmed|min:8',
            ]);
//        dd($request);
        $paly = new Play();
        $paly->name = $request->input('name');
        $paly->email = $request->input('email');
        $paly->mobile = $request->input('mobile');
        $paly->reg_date = $request->input('reg_date');
        $paly->gender = $request->input('gender');
        $language = $request->input('language');
        $paly->language = implode(',',$language);
        $paly->password = $request->input('password');
        $paly->confirm_password = $request->input('password_confirmation');
        $paly->save();
        return redirect()->route('datatable')->with('success', 'Successfully Submitted');
    }
    public function datatable()
    {
        if(Session::has('user_email'))
        {
            $plays=Play::orderBy('created_at', 'desc')->paginate(2);
            return view('datatable')->with('plays',$plays);
        }
        else{
            return redirect()->route('show.login');
        }
    }
    public function edit($get_id)
    {
        $data=Play::where('id',$get_id)->first();
         return view('form_edit')->withData($data);
    }
    public function update(Request $request)
    {
        $id=$request->id;
        $paly =Play::find($id);
        $paly->name = $request->input('name');
        $paly->email = $request->input('email');
        $paly->mobile = $request->input('mobile');
        $paly->reg_date = $request->input('reg_date');
        $paly->gender = $request->input('gender');
        $language = $request->input('language');
        $paly->language = implode(',',$language);
        $paly->password = $request->input('password');
        $paly->confirm_password = $request->input('password_confirmation');
        $paly->save();
        return redirect()->route('datatable')->with('success', 'Successfully Updated');
    }
    public function delete($get_id)
    {
        $data=Play::where('id',$get_id)->first();
        $data->delete();
        return redirect()->route('datatable')->with('success', 'Successfully Deleted');

    }

}
