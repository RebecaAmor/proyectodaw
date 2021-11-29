<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Trainner;
use Spatie\Permission\Models\Role;
use App\Models\Event;
use App\Models\News;
use App\Models\Contact;

class UserController extends Controller
{

//FUNCIONES USUARIO    
    public function index(){
        $users=User::paginate(10);
        return view('users.index', compact('users'));
    }

    public function create(){
        $roles=Role::all()->pluck('name', 'id');
        return view('users.create', compact('roles'));
    }

    public function store(Request $request){
        // $request->validate([
        //     'name'=>'required|min:3',
        //     'nif'=>'required|max:9',
        //     'email'=>'required|email|unique:users',
        //     'bday'=>'required|max:11',
        //     'password'=>'required|min:8',
        // ]);
        $user=User::create($request->only('name','nif','email','bday')
        +['password'=>bcrypt($request->input('password')),]);

        $roles=$request->input('roles',[]);
        $user->syncRoles($roles);
        return redirect()->route('users.show', $user->id)->with('success', 'Socio dado de alta correctamente');
    }

    public function show(User $user){
        //$user=User::findOrFail($id);
        $user->load('roles');
        return view('users.show', compact('user'));
    }

    public function destroy(User $user){

        //Para que un usuario no pueda eliminarse a sí mismo
        if(auth()->user()->id==$user->id){
            return redirect()->route('users.index')->with('success', 'Este usuario está conectado, no se puede eliminar');
        }
        $user->delete();
        return back()->with('success', 'Socio dado de baja correctamente');
    }

    public function update(Request $request, $id){
        $user=User::find($id);
        $data=$request->only('name', 'nif', 'email', 'bday');
        $password=$request->input('password');
        if($password)
            $data['password']=bcrypt($password);
        
        // MÉTODO MÁS LIOSO
        // if(trim($request->password)==''){
        //     $data=$request->except('password');
        // }
        // else{
        //     $data=$request->all();
        //     $data['password']=bcrypt($request->password);
        // }
        $user->update($data);

        $roles=$request->input('roles', []);
        $user->syncRoles($roles);

        return redirect()->route('users.show', $user->id)->with('success', 'Datos actualizados correctamente');
    }

    public function edit(User $user){
        $roles=Role::all()->pluck('name', 'id');
        $user->load('roles');
        return view('users.edit', compact('user', 'roles'));
    }

    //FUNCIONES FORMULARIO DE CONTACTO
    public function contact(){
        return view('users.contact');
    }

    public function contactform(Request $request){
        $request->validate([
            'name'=>'required|min:3',
            'subject'=>'required',
            'email'=>'required|email|unique:users',
            'message'=>'required',
        ]);
        $contact=Contact::create($request->all());

        return redirect()->route('users.contact')->with('success', 'Mensaje enviado correctamente');
    }

    //FUNCIÓN SOBRE NOSOTROS
    public function gym(){
        return view('users.gym');
    }

//FUNCIONES ENTRENADOR
    public function tindex(){
        $trainners=Trainner::paginate(10);
        return view('admin.tindex', compact('trainners'));
    }

    public function tcreate(){
        return view('admin.tcreate');
    }

    public function tstore(Request $request){
        $trainner=Trainner::create($request->all());
        // $request->validate([
        //     'tname'=>'required|min:3',
        //     'tnif'=>'required|max:9',
        //     'tmail'=>'required|email|unique:trainners',
        // ]);
        return redirect()->route('admin.tshow', $trainner->id)->with('success', 'Entrenador registrado correctamente');
    }

    public function tshow(Trainner $trainner){
        // $user=User::findOrFail($id);
        return view('admin.tshow', compact('trainner'));
    }

    public function tedit(Trainner $trainner){
        return view('admin.tedit', compact('trainner'));
    }

    public function tupdate(Request $request, $id){
        $trainner=Trainner::findOrFail($id);
        $data=$request->all();
        //$password=$request->input('password');
        //if($password)
        //    $data['password']=bcrypt($password);
        
        // MÉTODO MÁS LIOSO
        // if(trim($request->password)==''){
        //     $data=$request->except('password');
        // }
        // else{
        //     $data=$request->all();
        //     $data['password']=bcrypt($request->password);
        // }
        $trainner->update($data);
        return redirect()->route('admin.tindex')->with('success', 'Datos actualizados correctamente');
    }

    public function tdestroy(Trainner $trainner){
        $trainner->delete();
        return back()->with('success', 'Entrenador dado de baja correctamente');
    }

//FUNCIONES DE AVISOS
    public function nindex(){
        $news=News::paginate(3);
        return view('news.nindex', compact('news'));
    }

    public function nedit(News $news){
        return view('news.nedit', compact('news'));
    }

    public function ncreate(){
        return view('news.ncreate');
    }

    public function publish(Request $request){
        $news=News::create($request->all());
        $request->validate([
            'title'=>'required',
            'text'=>'required'
        ]);
        return redirect()->route('news.publish', $news->id)->with('success', 'Aviso publicado correctamente');
    }

    public function nshow(News $news){
        //$user=User::findOrFail($id);
        return view('news.nshow', compact('news'));
    }

    public function nupdate(Request $request, $id){
        $news=News::findOrFail($id);
        $data=$request->all();
        $news->update($data);
        return redirect()->route('news.nindex')->with('success', 'Información modificada correctamente');
    }

    public function ndestroy(News $news){
        $news->delete();
        return back()->with('success', 'Aviso borrado correctamente');
    }


//FUNCIONES DE IMAGEN    
    // public function upload(){
    //     $img=User::find($file);
    //     return view('welcome',compact('img'));
    // }
    
    // public function saveimg(Request $request, $file){
    //     $img=new User($file);
    //     // script para subir o reemplazar imagen
    //     if($request->hasFile('file')){
    //         $image=$request->file('file');
    //         $ruta=public_path("img/users/");
    //         $image->move($ruta);
    //         $img->save();
    // }     
}