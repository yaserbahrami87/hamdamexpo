<?php

namespace App\Http\Livewire\User;

use App\Models\Competition;
use App\Models\festival;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Competitions extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $image;
    public $competition;
    public $fileName;
    public $festival;
    public $status;
    public $competitions;

    protected function rules()
    {
        return [
            'name'                      =>'required|string|min:3|max:100',
            'description'               =>'nullable|string',
            'image'                     =>'required|mimes:jpeg,jpg,pdf,png,bmp|max:3072',
        ];
    }

    public function mount(Competition $competiotion)
    {
        $this->competition=$competiotion;
        $this->festival=festival::where('status',1)
                                ->latest()
                                ->first();



    }

    public function render()
    {
        $this->competitions=Competition::where('festival_id',$this->festival->id)
            ->where('user_id',Auth::user()->id)
            ->orderby('id','desc')
            ->get();
        return view('livewire.user.competitions')
                        ->layout('user.master.index');
    }

    public function save()
    {

        $this->validate();

        $this->fileName=Auth::user()->id."_".time().".".$this->image->extension();
        $this->image->storeAs('/competition/'.$this->festival->id.'/',$this->fileName);
        $this->status=$this->competition->create([
            'festival_id'   =>$this->festival->id,
            'user_id'       =>Auth::user()->id,
            'name'          =>$this->name,
            'description'   =>$this->description,
            'image'         =>$this->fileName,
        ]);



    }
}
