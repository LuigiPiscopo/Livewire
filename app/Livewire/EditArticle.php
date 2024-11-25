<?php

namespace App\Livewire;

use Livewire\Component;

class EditArticle extends Component
{
    public $title;
    public $subtitle;
    public $body;
    public $article;

    public function update(){
        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body
        ]);

        session()->flash('success', 'articolo modficato');
    }


    public function destroy(){
        $this->article->delete();
        redirect(route('article.index'))->with('success', 'Articolo elimnato');
       
        
    }

    public function mount(){

        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
        
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
