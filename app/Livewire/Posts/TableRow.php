<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class TableRow extends Component
{
    public $post;
    public function archive()
    {
        $this->post->is_archived = !$this->post->is_archived;
        $this->post->save();
    }
    public function render()
    {
        return view('livewire.posts.table-row');
    }

}
