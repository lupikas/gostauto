<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainButton extends Component
{
    public string $url;

    public string $classes;

    /**
     * Create a new component instance.
     *
     * @param $url
     * @param $classes
     */
    public function __construct($url, $classes = 'bg-blue-850')
    {
        $this->url = $url;

        if (!empty($classes)) {
            $this->classes = $classes;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.main-button');
    }
}
