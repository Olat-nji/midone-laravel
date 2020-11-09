<?php

namespace App\Http\Admin\Settings;

use Livewire\Component;
use App\Models\Portfolio;
use Livewire\WithFileUploads;

class EditPortfolio extends Component
{
    use WithFileUploads;
    public  $portfolio;
    public $image;
    public $confirmingDelete = false;
    protected $rules = [
        'portfolio.name' => 'required',
        'portfolio.link' => 'required',
        'portfolio.description' => 'min:1',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function updatedImage($propertyName)
    {
        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);
    }

    public function confirmDelete()
    {
        $this->confirmingDelete = true;
    }

    public function save()
    {

        $this->validate();
        if ($this->image != '') {
            $this->validate([
                'image' => 'image|max:1024', // 1MB Max
            ]);
            $image = asset('public/storage/' . str_replace('public/', '', $this->image->store('public/portfolios')));

            $this->portfolio->image = $image;
        }

        $this->portfolio->save();
        $this->emit('saved');
    }

    public function delete($id)
    {

        Portfolio::find($id)->delete();
        return redirect()->to(url('settings/portfolios'));
    }

    public function mount(Portfolio $portfolio)
    {
        $this->portfolio = $portfolio;
    }

    public function render()
    {
        return view('admin.settings.edit-portfolio')->layout('admin.layouts.app');
    }
}
