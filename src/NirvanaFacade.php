<?php
namespace Hadefication\Nirvana;

use Illuminate\Support\Facades\Facade;

class NirvanaFacade extends Facade
{
    /**
     * Get facade accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'nirvana';
    }
}
