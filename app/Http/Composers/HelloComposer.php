<?php

namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer {
    public function compose(View $view) {
        $view -> with('view_messages', 'this view is "'
            . $view -> getName() . '"!!');
    }
}