<?php
namespace App\Exports;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Http\Controllers\Controller;
use App\InputInsert;

class InputInsertController extends Controller {
	public function insertform(){
		$input = DB::select('select * from input');
		$input = DB::table('input')->paginate(5);
		return view('components.insert_input',['input'=>$input]);
	}

	public function show($id){
		$input = DB::select('select * from input where id=?',[$id]);
		return view('components.update_input',['input'=>$input]);
	}
	public function insert(Request $req){
		$first_name = $req->input('first_name');
		$last_name = $req->input('last_name');
		$city_name = $req->input('city_name');
		$email = $req->input('email');
		$data = array('first_name'=>$first_name, 'last_name'=>$last_name, 'city_name'=>$city_name, 'email'=>$email);
		DB::table('input')->insert($data);
		echo "Record inserted successfully.<br/>";
		return redirect('/');
	}
	public function edit(Request $request, $id){
		$first_name = $request->input('first_name');
		$last_name = $request->input('last_name');
		$city_name = $request->input('city_name');
		$email = $request->input('email');
		DB::update('update input set first_name=?, last_name=?, city_name=?, email=? where id=?',[$first_name, $last_name, $city_name, $email, $id]);
		return redirect('/');
	}
	public function destroy($id){
		DB::delete('delete from input where id=?',[$id]);
		return redirect('/');
	}

	public function export(){
         return Excel::download(new InputExport, 'input.xlsx');
	}
}
class InputExport implements FromCollection{
	public function collection(){
		return InputInsert::all();
	}
}