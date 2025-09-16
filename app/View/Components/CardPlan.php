<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardPlan extends Component
{
    public $title;
    public $subtitle;
    public $price;
    public $note;
    public $color;
    public $border;
    public $features;

    public function __construct(
        $title,
        $subtitle,
        $price,
        $note = null,
        $color = '#f2f3f5',
        $border = 'border-gray-200',
        $features = []
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->price = $price;
        $this->note = $note;
        $this->color = $color;
        $this->border = $border;
        $this->features = $features;
    }

    public function render()
    {
        return view('components.card-plan');
    }
}
