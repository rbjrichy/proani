<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CategoriaProducto;
use App\Models\Dato;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class CategoriaProductos extends Component
{
    use WithPagination, WithFileUploads;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $marca, $especie, $logo, $new_image, $old_logo;
    public $updateMode = false;
    public $identificador, $especies;

    public function mount()
    {
        $this->identificador = rand();
        $this->especies = Dato::where('tipo', 'especie')->get()->pluck('valor','valor');
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.categoria_productos.view', [
            'categoriaProductos' => CategoriaProducto::latest()
						->orWhere('marca', 'LIKE', $keyWord)
						->orWhere('especie', 'LIKE', $keyWord)
						->orWhere('logo', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }

    public function cancel()
    {
        $this->resetInput();
        $this->resetInputEdit();
        $this->updateMode = false;
    }

    private function resetInput()
    {
		$this->marca = null;
		$this->especie = null;
		$this->logo = null;
    }

    private function resetInputEdit()
    {
        $this->new_image = null;
        $this->old_logo = null;
    }

    public function guardarImg($file, $carpeta)
    {
        $fecha = new \Carbon\Carbon();
        $name_img = $fecha->format('dmy_hms');
        $ext_image = $file->extension();
        return $file->storeAs("public/".$carpeta,$name_img.'.'.$ext_image);
    }
    public function borrarImagen($ruta_name)
    {
        $destination = public_path('storage\\'.$ruta_name);
        // dd($destination);
        if(File::exists($destination)){
            session()->flash('message', 'Archivo Borrado.');
            File::delete($destination);
            // Storage::delete('public/'.$ruta_name);
        }
    }
    public function store()
    {
        $this->validate([
		'marca' => 'required',
		'especie' => 'required',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $nombreImg = $this->guardarImg($this->logo, 'categorias');
        CategoriaProducto::create([
			'marca' => $this-> marca,
			'especie' => $this-> especie,
			'logo' => $nombreImg
        ]);

        $this->resetInput();
        $this->identificador = rand();
		$this->emit('closeModal');
		session()->flash('message', 'Categoria Producto creado satisfactoriamente.');
    }

    public function edit($id)
    {
        $record = CategoriaProducto::findOrFail($id);
        // dd($record);
        $this->selected_id = $id;
		$this->marca = $record-> marca;
		$this->especie = $record-> especie;
		$this->old_logo = $record-> logo;
        $this->updateMode = true;
    }

    public function update()
    {

        $this->validate([
            'marca' => 'required',
            'especie' => 'required',
            // 'new_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // dd($this->edit_especie);
        if ($this->selected_id) {
            $nombreImg = "";
            if($this->new_image != null){
                $nombreImg = $this->guardarImg($this->new_image, 'categorias');
                $this->borrarImagen($this->old_logo);
            }else{
                $nombreImg = $this->old_logo;
            }
			$record = CategoriaProducto::find($this->selected_id);
            $record->update([
			'marca' => $this->marca,
			'especie' => $this->especie,
			'logo' => $nombreImg
            ]);

            $this->resetInput();
            $this->resetInputEdit();
            $this->updateMode = false;
            $this->identificador = rand();
            $this->emit('closeModal');
			session()->flash('message', 'Categoria Producto actualizado satisfactoriamente.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = CategoriaProducto::FindOrfail($id);
            $this->borrarImagen($record->logo);
            $record->delete();
        }
    }
}
