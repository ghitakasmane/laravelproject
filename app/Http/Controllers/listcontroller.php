<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Utilisateur ;
use App\Models\eleves ;

class listcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function form(Request $request)
    {
       $request->validate([
           'login'=>'required',
           'password'=>'required'
       ]);
       $user=utilisateur::where('login','=',$request->login)->first();
       if($user){
           if($request->password==$user->password)
           {
               $request->session()->put('login',$user->login);
               $request->session()->put('id',$user->id);
                 return redirect()->route('liste');
               
 
           }
           else {
            
              return back()->with('fail','password not matches');
         }
       }
 
       else{
         return back()->with('fail','login dosent exist');
            
         }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('create_form');
    }

       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $info1=DB::select('select * from eleves ');
        return view("liste")->with('info1',$info1);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $request->validate([

            'nom'=>'required',
            'prenom'=>'required', 
            'code'=>'required', 
            'password' => 'required',
            'login'=>'required',
        ]); 

        $password=$request->input('password'); 
        $email=$request->input('email');
        $login=$request->input('login'); 
        $nom=$request->input('nom'); 
        $prenom=$request->input('prenom'); 
        $code=$request->input('code'); 
        $fil=$request->input('filiere'); 
        $niveau=$request->input('niveau'); 
        

        DB::insert('insert into utilisateur (login,password,email) values (?,?,?)'
        ,[$login,$password,$email]);
        DB::insert('insert into eleves (code,nom,prenom,niveau,login) values (?,?,?,?,?)',
        [$code,$nom,$prenom,$niveau,$login]);

        return redirect()->route('liste'); 
    }

 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request ,$id)
    {
        // $request->validate([
        //     'email'=> 'email:rfc,dns',
        //     'password' => 'required'
        // ]); 
        $name=$request->input('nom'); 
        $firstname=$request->input('prenom');
        $niveau=$request->input('niveau');
        DB::update('update eleves set nom=?, prenom=?, niveau=? where id=?',[$name,$firstname,$niveau,$id]);  
        return redirect()->route('liste'); 
    }
   public function form_modify_user($id){
    $user=DB::select('select * from eleves where id=?', [$id]);
    return view('modify_user')->with('user', $user)->with('id',$id); 
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from eleves where id=?',[$id]); 
        return redirect()->route('liste'); 
    }
}
