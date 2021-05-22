<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TaskInfo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $user_username;
    public $user_name;
    public $category_name;

    public function __construct($userUsername, $userName, $categoryName)
    {
        $this->user_username = $userUsername;
        $this->user_name = $userName;
        $this->category_name = $categoryName;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.taskinfo');
    }
}
