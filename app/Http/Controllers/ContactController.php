<?php

namespace App\Http\Controllers;
use App\WebContact;
use Session;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = WebContact::all();

        return view('list', compact('contact'));
    }
    public function destroy($id){
        $contact= WebContact::findOrFail($id);
        $contact->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa khách hàng thành công');

        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('index');
    }
    public function create(){
        $contact = WebContact::all();
        return view('create', compact('contact'));
    }
    public function store(Request $request){

        $contact = new WebContact();
         $contact->firstname     = $request->input('firstname');
         $contact->lastname = $request->input('lastname');
         $contact->phone    = $request->input('phone');
         $contact->email   = $request->input('email');
        $contact->address= $request->input('address');
        $contact->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới khách hàng thành công');
        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('index');
    }
    public function search(Request $request)

    {
        $keyword = $request->input('keyword');
        $contact = WebContact::where('firstname', 'like', '%'.$keyword .'%')->get();
        return view('search', compact('contact'));


    }


}
