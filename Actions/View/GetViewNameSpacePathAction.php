<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\View;

use Spatie\QueueableAction\QueueableAction;

class GetViewNameSpacePathAction
{
    use QueueableAction;

    /**
     * ---.
     */
    public function execute(string $ns): string
    {
        $finder = view()->getFinder();
        $viewHints = [];
        if (method_exists($finder, 'getHints')) {
            $viewHints = $finder->getHints();
        }

        if (isset($viewHints[$ns])) {
            return $viewHints[$ns][0];
        }

        if (\in_array($ns, ['pub_theme', 'adm_theme'], false)) {
            $theme_name = config('xra.'.$ns);

            return base_path('Themes/'.$theme_name);
        }
        throw new \Exception('View namespace not found['.$ns.'].');
    }
}
