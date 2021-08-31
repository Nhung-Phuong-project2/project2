<?php

namespace App\Http\Controllers;
use App\Models\Book ;
use App\Models\Author ;
use App\Models\NXB ;
use App\Models\Type ;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Exception;
use Illuminate\Support\Facades\DB;

use Session;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
	//Lấy danh sách sách từ database
	$getData = Book::all();
	
	//Gọi đến file list.blade.php trong thư mục "resources/views/book" với giá trị gửi đi tên listbook = $getData
	return view('book.list', compact('getData'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $author = Author::all();//Lấy tất cả tác giả
        $nxb = NXB::all();//Lấy tất cả nxb
        $type = Type::all();
	    //Hiển thị trang thêm sách
        return view('book.create', compact('author','nxb','type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
        $book = new Book();
        $book->name = $request->get('name');
        $book->details = $request->get('details');
        $book->id_author = $request->get('author');
        $book->id_nxb = $request->get('nxb');
        $book->id_type = $request->get('type');
        //Upload ảnh
            //image upload
        $image = $request -> file('ava');
        //Ten anh
        $image_name['image_name'] = time().'.'.$image->getClientOriginalExtension();
        //Duong dan anh
        $destinationPath = public_path('/uploads');
        //Chuyen anh vao thu muc uploads
        $image->move($destinationPath, $image_name['image_name']);

        $book->avatar = $image_name['image_name'];
        $book->save();

            //Gán giá trị vào array
            // $dataInsertToDatabase = array(
            //     'name'  => $name,//lỗi này, chưa lấy đc name trong model
            //     'details' => $details,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // );
            
            //Insert vào bảng book
            // $insertData = DB::table('book')->insert($dataInsertToDatabase);
            
            //Kiểm tra Insert để trả về một thông báo
            //Cái này chắc là validate, để required cho nhanh, còn validate lại e làm
            // if ($insertData) {
            //     Session::flash('success', 'Thêm mới sách thành công!');
            // }else {                        
            //     Session::flash('error', 'Thêm thất bại!');
            // }
            
            //Thực hiện chuyển trang
        return redirect()->route('book.index')->with('success','Thêm mới thành thụ!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
	    //Lấy dữ liệu từ Database với các trường được lấy và với điều kiện id = $id
	    // $getData = DB::table('book')->select('id','name','detalis')->where('id',$id)->get();
	    //Gọi đến file edit.blade.php trong thư mục "resources/views/book" với giá trị gửi đi tên getbookById = $getData
        $author = Author::all();//Lấy tất cả tác giả
        $nxb = NXB::all();//Lấy tất cả nxb
        $type = Type::all();
	    //Hiển thị trang thêm sách
        return view('book.edit', compact('author','nxb','type','book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Cap nhat sua sach
	    //Set timezone
	//     date_default_timezone_set("Asia/Ha_Noi");	
 
	//    //Thực hiện câu lệnh update với các giá trị $request trả về
	//    $updateData = DB::table('book')->where('id', $request->id)->update([
	// 	'name' => $request->name,
	// 	'details' => $request->details,
	// 	'updated_at' => date('Y-m-d H:i:s')
	// ]);
	
	//Kiểm tra lệnh update để trả về một thông báo
	// if ($updateData) {
	// 	Session::flash('success', 'Sửa sach thành công!');
	// }else {                        
	// 	Session::flash('error', 'Sửa thất bại!');
	// }
	$book = new Book();
    $book = Book::find($id);
    $book->name = $request->get('name');
    $book->details = $request->get('details');
    $book->id_author = $request->get('author');
    $book->id_nxb = $request->get('nxb');
    $book->id_type = $request->get('type');
    //Upload ảnh
        //image upload
    $image = $request -> file('ava');
    if(!empty($image)){//Kiểm tra nếu thay avatar mới thì update avatar
        $image_name['image_name'] = time().'.'.$image->getClientOriginalExtension();
        //Duong dan anh
        $destinationPath = public_path('/uploads');
        //Chuyen anh vao thu muc uploads
        $image->move($destinationPath, $image_name['image_name']);
    
        $book->avatar = $image_name['image_name'];
    }else{
        $book->avatar = $request->get('oldAva');
    }
    //Ten anh
   
    $book->save();
	//Thực hiện chuyển trang
	return redirect()->route('book.index')->with('success','Sửa thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Xoa sach
	//Thực hiện câu lệnh xóa với giá trị id = $id trả về
	// $deleteData = DB::table('book')->where('id', '=', $id)->delete();
	
	// //Kiểm tra lệnh delete để trả về một thông báo
	// if ($deleteData) {
	// 	Session::flash('success', 'Xóa sách thành công!');
	// }else {                        
	// 	Session::flash('error', 'Xóa thất bại!');
	// }
    Book::fine($id)->delete();
    //Cả 2 câu lệnh xoá này đều đúng
	// $book = Book::where('id',$id)->delete();
    // $book->delete();
	//Thực hiện chuyển trang
	return redirect()->route('book.index')->with('success','Xoá thành công!');
    }
}
