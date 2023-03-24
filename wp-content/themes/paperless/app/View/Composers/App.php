<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName'  => $this->siteName(),
            'colors'    => $this->color(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * Return Color scheme from each site based on ACF
     * @return string[]
     */
    public function color() {
        return [
            'principal-color' => get_theme_mod('primary_color', 'black'),
            'secondary-color' => get_theme_mod('secodary_color', 'white')
        ];
    }
}
