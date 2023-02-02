<?php
namespace App\Extentions;

use Extended\ACF\Fields\Text;
use Extended\ACF\Location;

class ExtentionAcf {
    public function __construct()
    {
        add_action('acf/init', [$this, 'acf_register_fields']);
        add_action( 'init', [$this, 'register_acf_blocks'] );
    }

    public function acf_register_fields()
    {
        register_extended_field_group([
            'title' => 'About',
            'fields' => [
                Text::make('Title'),
            ],
            'location' => [
                Location::where('block', 'acf/imageslider')
            ],
        ]);
    }

    public function register_acf_blocks() {
        register_block_type( TEMPLATEPATH . '/resources/blocks/imageSlider' );
    }
}
