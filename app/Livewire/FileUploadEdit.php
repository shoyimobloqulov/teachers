<?php

namespace App\Livewire;

use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class FileUploadEdit extends Component
{
    use WithFileUploads;

    public $description = '';
    public $file = null;
    public $id;

    public function upload()
    {
        $validatedData = $this->validate([
            'description' => 'required|string',
            'file' => 'required|file|max:10240',
        ]);


        $hashedFileName = hash('sha256', time() . $this->file->getClientOriginalName()) . '.' . $this->file->getClientOriginalExtension();

        $this->file->storeAs('uploads', $hashedFileName, 'public');

        $this->file = null;

        File::create([
            'user_id'   => auth()->user()->id,
            'desc'      => $this->description,
            'path'      => $hashedFileName
        ]);

        session()->flash('success', 'File muvaffaqiyatli taxrirlandi.');
        return redirect()->to('/documents');
    }
    public function render()
    {
        $this->description = File::find($this->id)->desc;
        return view('livewire.file-upload-edit');
    }
}
