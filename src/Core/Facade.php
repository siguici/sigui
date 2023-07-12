<?php

namespace Sikessem\UI\Core;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * @method static string renderComponent(string $content, array $data = [], bool $deleteCachedView = true)
 * @method static \Illuminate\Contracts\View\View renderPage(string $content, string $layout = null, Arrayable|array $contentData = [], Arrayable|array $layoutData = [], array $mergeData = [])
 *
 * @see \Sikessem\UI\Core\Manager
 */
class Facade extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sikessem.ui';
    }
}
