<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Contact;
use DB;

class Contacts extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		
		$users = DB::table('contacts')->get();

		

			
		return view('contact/contact_listing')->with('user',$users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{ 
		
		return view('contact/contact_add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $add)
	{
		
		
		$name = $add->input('name');
		$email = $add->input('email');

					
			$data	=	DB::table('contacts')->insert(
			    ['name' => $name, 'email' => $email]
			);
			if($data){
					return redirect('contacts');
				}
				else{
				return view('contact/contact_saved');
				}


			
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$result = DB::select('select * from contacts where id = ?', [$id]);;


		return view('contact/contact_edit')->with('user',$result);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $update)
	{
		//
		$name = $update->input('name');
		$email = $update->input('email');

		echo $name , $email;

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
