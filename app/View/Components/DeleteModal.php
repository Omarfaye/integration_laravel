<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteModal extends Component
{
    public string $message;
    public string $cancel;
    public string $confirm;
    public string $id;

    /**
     * @param string $message
     * @param string $cancel
     * @param string $confirm
     * @param string $id
     */
    public function __construct(string $message, string $cancel, string $confirm, string $id)
    {
        $this->message = $message;
        $this->cancel = $cancel;
        $this->confirm = $confirm;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.delete-modal');
    }
}
