<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Symfony\Contracts\Service\Attribute\Required;

class CreateArticle extends Component
{

    




    #[Validate('required|min:5|max:100')]
    public $title;


    #[Validate('required|min:3|max:10000')]
    public $subtitle;


    #[Validate('required|min:10|max:10000')]
    public $body;

    
    
    
    // public function rules(){
    //     return[
    //         'title' => 'required|min:3|max:100',
    //         'subtitle' => 'required|min:5|max:1000',
    //         'body' => 'required|min:10|max:10000'
    //     ];
    // }


    public function messages() 
    {
        return [
            'required' => 'Il campo e richiesto',
            'min' => 'Il campo deve essere di minimo :min caratteri',
            'max' => 'Il campo deve essere di massimo :max caratteri'
        ];
    }


    public function store(){

        $this->validate();

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
