<?php

namespace App\Livewire\Sector;


use App\Models\Sector;
use Livewire\Component;

class SectorLive extends Component
{
        public $open= false;

    //Propiedades que se llenarán en los input en las vistas
    public $selectedSector= null;

    //Propiedades o variables para guardar o mostrar datos
    public $namesector= null;

    //FUncion que se ejecutará como método o función principal el cual retorna la vista
    public function render()
    {
        return view('livewire.sector-live')->with([
            'sectores' => Sector::all() /*'sectores' es una variable y 'Sector el modelo'. Básicamente 'sectores' obtiene los datos del
                                            modelo ('Sector') */
        ]);
    }
                /* FUnción perteneciente a los ciclos de vida de funciones el cual se ejecuta después de que una propiedad se actualiza,
                en este caso la propiedad '$selectedSector' */
                public function updateselectedSector($value)
                {
                    //Condicional por si el valor es diferente a nulo, muestre los datos que tengan el mismo id al que se ha seleccionado
                    if (!is_null($value))
                    {
                        $this->namesector = Sector::where('id', $value)->get();

                    }
                    else
                    {
                        //Limpia la lista de sectores si no se encuentra algo.
                        $this->namesector= null;
                    }
                }

                //Función de guardado (Método store)
                public function save()
                {
                    //
                }
}

