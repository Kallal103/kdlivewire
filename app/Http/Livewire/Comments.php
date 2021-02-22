<?php

namespace App\Http\Livewire;

use App\Comment;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Comments extends Component
{

    use WithPagination;
    use WithFileUploads;
    public $newComment;
    public $image;

    protected $listeners = ['fileUpload' => 'handleFileUpload'];

    public function handleFileUpload($imageData)
    {
        $this->image = $imageData;
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, ['newComment' => 'required|max:255']);
    }

    public function addComment(){
        $this->validate(['newComment' => 'required|max:255']);
        $createdComment = Comment::create([
            'body'=> $this->newComment, 'user_id'=> 1
            ]);


        $this->newComment = "";

        session()->flash('message', 'Comment added successfully');

    }

    public function remove($commentId){
        $comment = Comment::find($commentId);
        $comment->delete();

        session()->flash('message', 'Comment deleted successfully');
    }
    public function render()
    {
        return view('livewire.comments',[
            'comments' => Comment::latest()->paginate(2)
        ]);
    }
}
