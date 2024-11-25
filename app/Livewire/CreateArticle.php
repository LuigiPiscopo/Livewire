<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateArticle extends Component
{

    public $title;

    public $subtitle;

    public $body;


    public function store(){
        Article::create([

            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body
        ]);

        session()->flash('success', 'Articolo Inserito');
        $this->reset();
    }



    public function render()
    {
        return view('livewire.create-article');
    }
}
