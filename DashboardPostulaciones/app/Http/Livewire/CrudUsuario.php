<?php

namespace App\Http\Livewire;

use App\Models\Usuario;
use Livewire\Component;

class CrudUsuario extends Component
{
    public $isOpen=false;
    public $search,$usuario;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'usuario.nombres_rs'=>'required',
        'usuario.dni'=>'required',
        'usuario.ruc'=>'required',
        'usuario.correo'=>'required',
        'usuario.celular'=>'required',
        'usuario.rol'=>'required',
        'usuario.user'=>'required',
        'usuario.password'=>'required',
        'usuario.archivo_cv'=>'required',
    ];

    public function render(){
        $usuarios=Usuario::where('nombres_rs','LIKE','%'.$this->search.'%')->latest()->paginate(10);
        return view('livewire.crud-usuario',compact('usuarios'));
    }

    public function create(){
        $this->isOpen=true;
    }

    public function store(){
        $this->validate();
        if(!isset($this->usuario['id'])){
            Usuario::create($this->usuario);
        }else{
            $usuario=Usuario::find($this->usuario['id']);
            $usuario->name=$this->usuario['name'];
            $usuario->save();
        }
        $this->reset(['isOpen','usuario']);
        $this->emitTo('CrudUsuario','render');
    }

    public function delete(Usuario $item){
        $item->delete();
    }

    public function edit($usuario){
        $this->usuario=$usuario;
        $this->isOpen=true;
    }
}
