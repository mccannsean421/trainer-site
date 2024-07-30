<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use League\CommonMark\CommonMarkConverter;


class MarkdownRenderer extends Component
{
    public $markdown;

    public function __construct($markdown)
    {
        $this->markdown = $markdown;
    }

    public function render()
    {
        $converter = new CommonMarkConverter();
        $html = $converter->convertToHtml($this->markdown);

        return view('components.markdown-renderer', ['html' => $html]);
    }
}
