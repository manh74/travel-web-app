<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Comment;
use App\FavoriteTour;
use App\Tour;
use App\TypeTour;
use App\Slides;
use App\Bill;
use App\BillDetail;
use App\Book;
use App\Customers;
use App\Contact;
use Session;
Illuminate\Support\Facades\Input::class;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{

    public function getIndex(){
        $slide = Slides::all();
        $last_tour = Tour::where('id_type',4)->paginate(3);
        $products = Tour::all();
        $type_products = TypeTour::all();
        $featured_tour = Tour::where('id_type',2)->paginate(3);
        $cheap_tour = Tour::where('id_type',1)->paginate(3);
        $promotional_tour = Tour::where('id_type',3)->paginate(3);
        $family_tour = Tour::where('id_type',5)->paginate(3);
        return view('page.home', compact('slide','last_tour','products','type_products','cheap_tour','featured_tour','promotional_tour','family_tour'));

    }


    public function getFavoriteTour(){
        if (isset(Auth::user()->id)) {
        $fvr = DB::table('favorite_tours')
        ->join('tours', 'favorite_tours.idTour', '=', 'tours.id')
        ->select('favorite_tours.id','favorite_tours.idTour','tours.title','tours.image', 'tours.price', 'favorite_tours.created_at')
        ->where('favorite_tours.idUser',Auth::user()->id)->orderBy('favorite_tours.created_at', 'DESC')
        ->get();
        return view('page.favorite-tour',compact('fvr'));
        }
        else
            return redirect()->back()->with('alert', 'Vui lòng đăng nhập trước khi thực hiện chức năng này!');
    }

    public function getOrderedTour(){
        if (isset(Auth::user()->id)) {
        $tours = DB::table('bill_details')
        ->join('tours', 'bill_details.id_tour', '=', 'tours.id')
        ->join('bills', 'bill_details.id_bill', '=', 'bills.id')
        ->join('customers', 'bills.id_customer', '=', 'customers.id')
        ->select('bill_details.id','bills.check_in', 'bills.check_out','tours.id as idTour', 'tours.title as titleTour','bill_details.price','bill_details.status','customers.quantity','customers.name', 'customers.email', 'customers.phone')
        ->where('bill_details.id_user',Auth::user()->id)->orderBy('bill_details.created_at', 'DESC')
        ->get();
        return view('page.tour',compact('tours'));
        }
        else
            return redirect()->back()->with('alert', 'Vui lòng đăng nhập trước khi thực hiện chức năng này!');
    }

    public function getContactToEdit(){
        if (isset(Auth::user()->id)) {
            $contacts = Contact::all();
            return view('page.contact-admin',compact('contacts'));
        }
        else
            return redirect()->back()->with('alert', 'Vui lòng đăng nhập trước khi thực hiện chức năng này!');
    }

    public function editContact(Request $req, $id){
        $contacts = Contact::find($id);
        $contacts->address = $req->input('address');
        $contacts->phone_number = $req->input('phone');
        $contacts->email = $req->input('email');
        $contacts->working_date = $req->input('working_date');
        $contacts->save();
        return redirect()->back()->with('alert', 'Đã chỉnh sửa thành công!');;
    }


    public function getNews(){
        $news = News::where('id', 1)->first();
        $news_tt = News::all();
        $count_comment  = DB::table('comments')
        ->select("*", DB::raw("COUNT(id) as count_cmt"))
        ->groupBy("idNews")
	    ->get();
        $comments = DB::table('users')
        ->join('comments', 'users.id', '=', 'comments.idUser')
        ->join('news', 'news.id', '=', 'comments.idNews')
        ->select('users.is_admin','users.id','users.name', 'comments.id as cmtId', 'comments.content', 'comments.created_at')
        ->where('news.id', 1)->orderBy('comments.created_at', 'DESC')
        ->get();
    	return view('page/news',compact('news','count_comment','news_tt','comments'));
    }

    public function getNewsById(Request $req){
        $news = News::where('id', $req->id)->first();
        $news_tt = News::all();
        $count_comment  = DB::table('comments')
        ->select("*", DB::raw("COUNT(id) as count_cmt"))
        ->groupBy("idNews")
	    ->get();
        $comments = DB::table('users')
        ->join('comments', 'users.id', '=', 'comments.idUser')
        ->join('news', 'news.id', '=', 'comments.idNews')
        ->select('users.is_admin','users.id','users.name', 'comments.id as cmtId', 'comments.content', 'comments.created_at')
        ->where('news.id', $req->id)->orderBy('comments.created_at', 'DESC')
        ->get();
    	return view('page.news',compact('news','count_comment','news_tt','comments'));
    }

    public function getProductByType($type){
        $products = Tour::where('id_type',$type)->get();
        $type_products = TypeTour::all();
        $best_tour_ordered = DB::table('tours')
        ->join('bill_details', 'bill_details.id_tour', '=', 'tours.id')
        ->select('tours.*', DB::raw('COUNT(bill_details.id_tour) as tours'))
        ->orderBy('tours', 'desc')
        ->groupBy('tours.id')
        ->get();
        return view('page.product',compact('products','type_products', 'best_tour_ordered'));
    }

    public function getProduct(){
        $products = Tour::all();
        $type_products = TypeTour::all();
        $best_tour_ordered = DB::table('tours')
        ->join('bill_details', 'bill_details.id_tour', '=', 'tours.id')
        ->select('tours.*', DB::raw('COUNT(bill_details.id_tour) as tourss'))
        ->orderBy('tourss', 'desc')
        ->groupBy('tours.id')
        ->get();
        return view('page.product',compact('products','type_products', 'best_tour_ordered'));
    }

    public function getProductByName(){
        $products = Tour::orderBy('title', 'ASC')->get();
        $type_products = TypeTour::all();
        return view('page.product',compact('products','type_products'));
    }

    public function getProductByPrice(){
        $products = Tour::orderBy('price', 'ASC')->get();
        $type_products = TypeTour::all();
        return view('page.product',compact('products','type_products'));
    }

    public function getProductByOrderedALot(){
        $products = Tour::orderBy('price', 'DESC')->get();
        $type_products = TypeTour::all();
        return view('page.product',compact('products','type_products'));
    }

    public function getProductById($id){
        $products = Tour::where('id',$id)->get();
        $type_products = TypeTour::all();
        $products_rlv = Tour::orderBy('created_at', 'DESC')->paginate(3);
        return view('page.product-detail',compact('products','products_rlv','type_products'));
    }

    public function postComment(Request $req){
        $cmt = new Comment();
        $cmt->idUser = Auth::user()->id;
        $cmt->idNews = $req->id;
        $cmt->content = $req->content;
        $cmt->save();
        return redirect()->back();

    }

    public function deleteComment($cmt_id){
        $cmt = Comment::where('id',$cmt_id)->firstOrFail();
        $cmt->delete();
        return redirect()->back();
    }

    public function postChangeStatus($id, Request $req){
        BillDetail::where('id',$id)->update([
            'status' => $req->change_to
         ]);;
        return redirect()->back();
    }

    public function postChangeRole($id, Request $req){
        User::where('id',$id)->update([
            'is_admin' => $req->change_to
         ]);;
        return redirect()->back();
    }



    public function cancelTour($id){
        BillDetail::where('id', $id)->update([
           'status' => 'Hủy'
        ]);
        return redirect()->back();
    }


    public function getProductBySearch(Request $request){
        $type_products = TypeTour::all();
        $search = $request->input('search');
        $products = Tour::where('title', 'LIKE', '%'.$search.'%')->paginate(4);
        Session::put('search',$search);
        return view('page.result-searched', compact('products','type_products'));
    }


    public function getLastComments(){
        if (isset(Auth::user()->id)) {
            $comments = DB::table('users')
            ->join('comments', 'users.id', '=', 'comments.idUser')
            ->join('news', 'news.id', '=', 'comments.idNews')
            ->select('news.title','news.id','news.image', 'comments.id as cmtId', 'comments.content as last_comment_content', 'comments.created_at as last_comment_date', 'news.created_at as new_day_post')
            ->where('users.id', Auth::user()->id)->orderBy('comments.created_at', 'DESC')
            ->get();
            return view('page/profile',compact('comments'));
        } else {
            return view('page/profile');
        }
    }


    public function addToFavorite($id){
        if (isset(Auth::user()->id)) {
        $ft_new = new FavoriteTour();
        $ft_new->idUser = Auth::user()->id;
        $ft_new->idTour = $id;
        $checkIsset = DB::table('favorite_tours')
            ->select('idTour','idUser')
            ->where('idTour',$id)->where('idUser',Auth::user()->id)
            ->get();
            if ( $checkIsset->count()==0) {
                $ft_new->save();
                return redirect()->back()->with('alert', 'Đã thêm một sản phẩm vào danh sách yêu thích!');
            } else {
                return redirect()->back()->with('alert', 'Tour đã được thêm vào danh sách yêu thích trước đó!');
            }
        }
        else
            return redirect()->back()->with('alert', 'Vui lòng đăng nhập trước khi thực hiện chức năng này!');

    }

    public function deleteFavorite($id){
        $fvr = FavoriteTour::where('id',$id)->firstOrFail();
        $fvr->delete();
        return redirect()->back();
    }

    public function getBookTour(Request $req, $id){
        if (isset(Auth::user()->id)) {
        $tours = Tour::find($id);

        return view('page.book-tour-histories', compact('tours'));
        }
        else
        return redirect()->back()->with('alert', 'Vui lòng đăng nhập trước khi thực hiện chức năng này!');

}

    public function getAdmin(){
        if (isset(Auth::user()->id)) {
        if (Auth::user()->is_admin<>0) {
            return view('page/admin');
        }
        else
            return redirect()->back()->with('alert', 'Vui lòng đăng nhập vào tài khoản admintrước khi thực hiện chức năng này!');
        }
        else
            return redirect()->back()->with('alert', 'Vui lòng đăng nhập vào tài khoản admin trước khi thực hiện chức năng này!');
}

    public function getContact(){
        $contacts = Contact::all();
        return view('page.contact',compact('contacts'));
    }

    public function getTourOrdered(){
        if (isset(Auth::user()->id)) {
            $tours = DB::table('bill_details')
            ->join('tours', 'bill_details.id_tour', '=', 'tours.id')
            ->join('bills', 'bill_details.id_bill', '=', 'bills.id')
            ->join('customers', 'bills.id_customer', '=', 'customers.id')
            ->select('bill_details.id', 'bills.check_in', 'bills.check_out', 'tours.id as idTour', 'tours.title as titleTour','bill_details.price','bill_details.status','customers.quantity','customers.name', 'customers.email', 'customers.phone')
            ->orderBy('bill_details.created_at', 'DESC')
            ->get();
            return view('page.tour-ordered',compact('tours'));
            }
            else
                return redirect()->back()->with('alert', 'Vui lòng đăng nhập trước khi thực hiện chức năng này!');
    }

    public function postBookTour(Request $req, $id){
        $todayDate = date('m/d/Y');
        $this->validate($req, [

            'start_date'  => 'required|after:yesterday',
            'end_date'    => 'required|after:start_date',
            'name'  => 'required',
            'email'        => 'required|email',
            'phone'        => 'required',
            'qty'     => 'required|integer|min:1|max:200'

        ],
        [
            'end_date.required' => 'Chọn ngày đi về không hợp lệ. Chỉ có thể quay về sau ngày đi!',
            'end_date.after' => 'Chọn ngày đi về không hợp lệ. Chỉ có thể quay về sau ngày đi!',
            'start_date.required' => 'Chọn ngày đi không hợp lệ. Chỉ có thể đi từ hôm nay!',
            'start_date.after' => 'Chọn ngày đi không hợp lệ. Chỉ có thể đi từ hôm nay!',
            'name.required' => 'Vui lòng nhập tên của người đi!',
            'phone.required' => 'Vui lòng nhập số điện thoại!',
            'email.required' => 'Vui lòng nhập email của người đi để nhận vé trực tuyến!',
            'qty.required' => 'Vui lòng nhập số lượng khách đi!',
            'qty.integer' => 'Chỉ có thể nhập bằng số!',
            'qty.min' => 'Vui lòng chọn số lượng người đi (>0)!',
            'qty.max' => 'Vui lòng chọn số lượng người tối đa 200!',
            'email.email'=>'Email không đúng định dạng!'
        ]);

        $customer = new Customers;
        $customer->name = $req->name;
        $customer->email = $req->email;
        $customer->phone = $req->phone;
        $customer->quantity = $req->qty;
        $customer->save();


        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->check_in = $req->start_date;
        $bill->check_out = $req->end_date;
        $bill->note = $req->note;
        $bill->total = $req->total;
        $bill->save();


        $bill_detail = new BillDetail;
        $bill_detail->id_bill = $bill->id;
        $bill_detail->id_tour = $id;
        $bill_detail->price =  $req->total;
        $bill_detail->quantity = $req->qty;
        $bill_detail->id_user = Auth::user()->id;
        $bill_detail->status = "Đang chờ cuộc gọi xác nhận và vé";
        $bill_detail->save();

        return redirect()->back()->with('thongbao','Book tour thành công. Chúng tôi sẽ liên hệ với bạn sớm nhất nếu có thể');

}
}
