<?php
namespace App\Extentions;

use Extended\ACF\Fields\Gallery;
use Extended\ACF\Fields\Select;
use Extended\ACF\Fields\Text;
use Extended\ACF\Fields\TrueFalse;
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
                Gallery::make('Galeria de imagens', 'galery_image')
                    ->returnFormat('url')
            ],
            'location' => [
                Location::where('block', 'acf/imageslider')
            ],
        ]);

        register_extended_field_group([
            'title' => 'Outras configurações',
            'fields' => [
                TrueFalse::make('Destaque', 'is_destaque')->message("É destaque"),
                Text::make('Valor', 'valor'),
                Select::make('Tipo de pagamento', 'tipo_valor')
                    ->choices([
                        'mensal' => 'Mensal',
                        'diario' => 'Diario',
                        'anual' => 'Anual'
                    ])
                    ->returnFormat('label')
                    ->instructions('Ex: Mensal, Diário ou Anual'),
                Text::make('Endereço', 'endereco')->required()
            ],
            'position' => 'side',
            'location' => [
                Location::where('post_type', 'investimento')
            ]
        ]);
    }

    public function register_acf_blocks() {
        register_block_type( TEMPLATEPATH . '/resources/blocks/imageSlider' );
    }
}
