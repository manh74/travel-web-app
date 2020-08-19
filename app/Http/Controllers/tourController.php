<?php

namespace App\Http\Controllers;
use App\Tour;
use App\TypeTour;
use App\User;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class tourController extends Controller
{
    function viewTour(){
        if (isset(Auth::user()->id)) {
            if (Auth::user()->is_admin<>0) {
                return view('page.viewTour');
            }
            else
                return view('page.home')->with('alert', 'Vui lòng đăng nhập vào tài khoản admintrước khi thực hiện chức năng này!');
            }
            else
                return view('page.home')->with('alert', 'Vui lòng đăng nhập vào tài khoản admin trước khi thực hiện chức năng này!');
    }

    function getAdd(){
        if (isset(Auth::user()->id)) {
            if (Auth::user()->is_admin<>0) {
                $tour = Tour::all();
                $type_tour = TypeTour::all();
                return view('page.addTour', compact('tour', 'type_tour'));
            }
            else
                return redirect()->back()->with('alert', 'Vui lòng đăng nhập vào tài khoản admintrước khi thực hiện chức năng này!');
            }
            else
                return redirect()->back()->with('alert', 'Vui lòng đăng nhập vào tài khoản admin trước khi thực hiện chức năng này!');
    }

    function getUser(){
        if (isset(Auth::user()->id)) {
            if (Auth::user()->is_admin<>0) {
                return view('page.user');
            }
            else
                return redirect()->back()->with('alert', 'Vui lòng đăng nhập vào tài khoản admintrước khi thực hiện chức năng này!');
            }
            else
                return redirect()->back()->with('alert', 'Vui lòng đăng nhập vào tài khoản admin trước khi thực hiện chức năng này!');
    }


    public function getListUser(Request $request){
    if (isset(Auth::user()->id)) {
        if (Auth::user()->is_admin<>0) {
            $user = User::all();
            return view('page/user', compact('user'));
        }
        else
            return redirect()->back()->with('alert', 'Vui lòng đăng nhập vào tài khoản admintrước khi thực hiện chức năng này!');
        }
        else
            return redirect()->back()->with('alert', 'Vui lòng đăng nhập vào tài khoản admin trước khi thực hiện chức năng này!');
}

    public function getList1(){
      $tour = Tour::all();
      $type_tour = TypeTour::all();
      return view('page.viewTour',compact('tour','type_tour'));
    }

    function getAddTour(){
        return view('page/addTour', compact('type_tour'));
    }

    public function getList(Request $request){
        if (isset(Auth::user()->id)) {
            if (Auth::user()->is_admin<>0) {
                $tour = Tour::all();
                return view('page/viewTour', compact('tour'));
            }
            else
                return redirect()->back()->with('alert', 'Vui lòng đăng nhập vào tài khoản admintrước khi thực hiện chức năng này!');
            }
            else
                return redirect()->back()->with('alert', 'Vui lòng đăng nhập vào tài khoản admin trước khi thực hiện chức năng này!');
    }

    public function getTourByType(){
        // $tour = Tour::where('id_type',$type)->get();
        // $type_tour = TypeTour::all();
        $tour = DB::table('tours')->join('type_tours','type_tours.id','=','tours.id_type')
        ->select('tours.title','tours.price','tours.schedule','type_tours.name')->get();
        return view('page.viewTour',compact('tour'));
    }

    public function getTour(){
        $tour = Tour::all();
        $type_tour = TypeTour::all();
        return view('page.viewTour',compact('tour','type_tour'));
    }

    public function getTourByName(){
        $tour = Tour::orderBy('title', 'ASC')->get();
        $type_tour = TypeTour::all();
        return view('page.viewTour',compact('tour','type_tour'));
    }

    public function getProductByPrice(){
        $tour = Tour::orderBy('price', 'ASC')->get();
        $type_tour = TypeTour::all();
        return view('page.viewTour',compact('tour','type_tour'));
    }

    public function getProductByOrderedALot(){
        $tour = Tour::orderBy('price', 'DESC')->get();
        $type_tour = TypeTour::all();
        return view('page.viewTour',compact('tour','type_tour'));
    }

    public function getProductById($id){
        $tour = Tour::where('id',$id)->get();
        $type_tour = TypeTour::all();
        $tour_rlv = Tour::orderBy('created_at', 'DESC')->paginate(3);
        return view('page.product-detail',compact('tour','tour_rlv','type_tour'));
    }

    public function addTour(Request $request){
        if (isset(Auth::user()->id)) {
            if (Auth::user()->is_check<>0) {
                $tours = new Tour;
                $tours->title = $request->input('title');
                $tours->summarize = $request->input('summarize');
                $tours->content = $request->input('content');
                $tours->image=$request->file('image');
                $file_name = $request->file('image')->getClientOriginalName();
                $tours->image = "images/places/".$file_name;
                $request->file('image')->move('images/places/',$file_name);
                $tours->id_type = $request->input('typetour');
                $tours->price = $request->input('price');
                $tours->on_sale = $request->input('onsale');
                $tours->schedule = $request->input('schedule');
                $tours->save();
                return $this->getList1()->with('alert', 'Đã thêm tour thành công!');
            }
            else
                return redirect()->back()->with('alert', 'Vui lòng đăng nhập vào tài khoản admintrước khi thực hiện chức năng này!');
            }
            else
                return redirect()->back()->with('alert', 'Vui lòng đăng nhập vào tài khoản admin trước khi thực hiện chức năng này!');
    }

    public function editForm($id){
        $tour = Tour::find($id);
        $type_tour = TypeTour::all();
        return view('page/editTour', compact('tour', 'type_tour'));
    }

    public function editTour(Request $req, $id){
        $tours = Tour::find($id);
        $tours->title = $req->input('title');
        $tours->summarize = $req->input('summarize');
        $tours->content = $req->input('content');
        $tours->image=$req->file('image');
        $file_name = $req->file('image')->getClientOriginalName();
        $tours->image = "images/places/".$file_name;
        $req->file('image')->move('images/places/',$file_name);
        $tours->id_type = $req->input('typetour');
        $tours->price = $req->input('price');
        $tours->on_sale = $req->input('onsale');
        $tours->schedule = $req->input('schedule');
        $tours->save();
        return $this->getTour()->with('alert', 'Đã chỉnh sửa tour thành công!');;
    }

    public function deleteTour($tour_id){
        $tour = Tour::where('id',$tour_id)->firstOrFail();
        $tour->delete();
        return redirect()->back()->with('alert', 'Đã xóa tour thành công!');
    }

    public function deleteUser($id_user){
        $user = User::where('id',$id_user)->firstOrFail();
        $user->delete();
        return redirect()->back()->with('alert', 'Đã xóa User thành công!');
    }

    function getNew(){
        return view('page.viewNews');
    }

    public function getListNew(){
        $new = News::all();
        return view('page.viewNews', compact('new'));
    }

    function getAddNew(){
        $new = News::all();
        return view('page.postNew', compact('new'));
    }

    function postNew(Request $request){
        $new = new News;
        $new->title = $request->input('title');
        $new->summarize = $request->input('summarize');
        $new->content = $request->input('content');
        $new->image=$request->file('image');
        $file_name = $request->file('image')->getClientOriginalName();
        $new->image = "images/places/".$file_name;
        $request->file('image')->move('images/places/',$file_name);
        $new->view_number = $request->input('view_number');
        $new->save();
        return $this->getListNew()->with('alert', 'Đã đăng bài viết mới thành công!');
    }

    public function editFormNew($id){
        $new = News::find($id);
        return view('page/editNew', compact('new'));
    }

    public function editNew(Request $req, $id){
        $new = News::find($id);
        $new->title = $req->input('title');
        $new->summarize = $req->input('summarize');
        $new->content = $req->input('content');
        $new->image=$req->file('image');
        $file_name = $req->file('image')->getClientOriginalName();
        $new->image = "images/places/".$file_name;
        $req->file('image')->move('images/places/',$file_name);
        $new->view_number = $req->input('view_number');
        $new->save();
        return $this->getListNew()->with('alert', 'Đã chỉnh sửa bài viể thành công!');;
    }

    public function deleteNew($id_new){
        $new = News::where('id',$id_new)->firstOrFail();
        $new->delete();
        return redirect()->back()->with('alert', 'Đã xóa bài viết thành công!');
    }





}
