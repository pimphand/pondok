<?php

namespace App\Http\Livewire\Admin\Facility;

use App\Models\Building;
use App\Models\Gallery;
use App\Models\Hostel;
use Livewire\Component;

class Modal extends Component
{

    public $formId = "";

    public function show($id)
    {
        $this->formId = $id;
        $gallery = Gallery::where("hostel_id", $id)->get();
        $this->image = $gallery->image;
    }
    public function close()
    {
        $this->formId = 0;
    }
    public function render()
    {
        $facility = Building::where("hostel_id", 2)->with('gallery')->get();
        return view('livewire.admin.facility.modal',[
            "data" => $facility
        ]);
    }
}
