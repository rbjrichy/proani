<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Carrusel;
use App\Models\Especy;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;


class Carrusels extends Component
{
    use WithPagination, WithFileUploads;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $descripcion, $url_imagen, $orden, $activa, $especie_id;
    public $updateMode = false;
    public $especies;

    function mount()
    {
        $this->especies = Especy::all()->pluck('nombre','id')->toArray();
    }
    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        // $result = Carrusel::with('miespecie')->orderBy('created_at','desc')
		// 				// ->orWhere('nombre', 'LIKE', $keyWord)
		// 				// ->orWhere('descripcion', 'LIKE', $keyWord)
        //                 // ->toSql();
		// 				// ->orWhere('url_imagen', 'LIKE', $keyWord)
		// 				// ->orWhere('orden', 'LIKE', $keyWord)
		// 				// ->orWhere('activa', 'LIKE', $keyWord)
		// 				// ->orWhere('especie_id', 'LIKE', $keyWord)
		// 				->paginate(10);
        // dd($result);
        return view('livewire.carrusels.view', [
            'carrusels' => Carrusel::with('miespecie')->latest()
						// ->orWhere('nombre', 'LIKE', $keyWord)
						// ->orWhere('descripcion', 'LIKE', $keyWord)
						// ->orWhere('url_imagen', 'LIKE', $keyWord)
						// ->orWhere('orden', 'LIKE', $keyWord)
						// ->orWhere('activa', 'LIKE', $keyWord)
						// ->orWhere('especie_id', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->nombre = null;
		$this->descripcion = null;
		$this->url_imagen = null;
		$this->orden = null;
		$this->activa = null;
		$this->especie_id = null;
    }

    public function guardarImg($file, $carpeta)
    {
        $fecha = new \Carbon\Carbon();
        $name_img = $fecha->format('dmy_hms').rand();
        $ext_image = $file->extension();
        return $file->storeAs("public/".$carpeta,$name_img.'.'.$ext_image);
    }
    public function borrarImagen($ruta_name)
    {
        $ruta_name = str_replace('public/','',$ruta_name);
        $destination = public_path('storage\\'.$ruta_name);
        if(File::exists($destination)){
            session()->flash('message', 'Archivo Borrado.');
            File::delete($destination);
        }
    }
    public function store()
    {
        $this->validate([
            'url_imagen' => 'required',
            'orden' => 'required',
            // 'activa' => 'required',
            'especie_id' => 'required',
        ]);

        $nombreImg = $this->guardarImg($this->url_imagen, 'carrusel');

        Carrusel::create([ 
			'nombre' => $this-> nombre,
			'descripcion' => $this-> descripcion,
			'url_imagen' => $nombreImg,
			'orden' => $this-> orden,
			// 'activa' => $this-> activa,
			'especie_id' => $this-> especie_id
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Imagen guardada satisfactoriamente.');
    }

    public function edit($id)
    {
        $record = Carrusel::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre = $record-> nombre;
		$this->descripcion = $record-> descripcion;
		$this->url_imagen = $record-> url_imagen;
		$this->orden = $record-> orden;
		$this->activa = $record-> activa;
		$this->especie_id = $record-> especie_id;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'url_imagen' => 'required',
		'orden' => 'required',
		'activa' => 'required',
		'especie_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Carrusel::find($this->selected_id);
            $record->update([ 
			'nombre' => $this-> nombre,
			'descripcion' => $this-> descripcion,
			'url_imagen' => $this-> url_imagen,
			'orden' => $this-> orden,
			'activa' => $this-> activa,
			'especie_id' => $this-> especie_id
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Carrusel Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Carrusel::where('id', $id);
            $record->delete();
        }
    }
}
