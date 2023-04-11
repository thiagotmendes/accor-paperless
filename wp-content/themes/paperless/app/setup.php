<?php

/**
 * Theme setup.
 */

namespace App;

use Extended\ACF\Fields\Image;
use Extended\ACF\Fields\Link;
use Extended\ACF\Fields\Message;
use Extended\ACF\Fields\RadioButton;
use Extended\ACF\Fields\Repeater;
use Extended\ACF\Fields\Tab;
use Extended\ACF\Fields\Text;
use Extended\ACF\Fields\Textarea;
use Extended\ACF\Fields\WysiwygEditor;
use Extended\ACF\Location;
use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
  bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
  bundle('editor')->enqueue();
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
  /**
   * Enable features from the Soil plugin if activated.
   *
   * @link https://roots.io/plugins/soil/
   */
  add_theme_support('soil', [
    'clean-up',
    'nav-walker',
    'nice-search',
    'relative-urls',
  ]);

  /**
   * Disable full-site editing support.
   *
   * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
   */
  remove_theme_support('block-templates');

  /**
   * Register the navigation menus.
   *
   * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
   */
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage'),
  ]);

  /**
   * Disable the default block patterns.
   *
   * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
   */
  remove_theme_support('core-block-patterns');

  /**
   * Enable plugins to manage the document title.
   *
   * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
   */
  add_theme_support('title-tag');

  /**
   * Enable post thumbnail support.
   *
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  add_theme_support('post-thumbnails');

  /**
   * Enable responsive embed support.
   *
   * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
   */
  add_theme_support('responsive-embeds');

  /**
   * Enable HTML5 markup support.
   *
   * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
   */
  add_theme_support('html5', [
    'caption',
    'comment-form',
    'comment-list',
    'gallery',
    'search-form',
    'script',
    'style',
  ]);

  /**
   * Enable selective refresh for widgets in customizer.
   *
   * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
   */
  add_theme_support('customize-selective-refresh-widgets');
  add_theme_support('custom-logo');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
  $config = [
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ];

  register_sidebar([
      'name' => __('Primary', 'sage'),
      'id' => 'sidebar-primary',
    ] + $config);

  register_sidebar([
      'name' => __('Footer', 'sage'),
      'id' => 'sidebar-footer',
    ] + $config);
});

/**
 * Register post types
 */
add_action('init', function () {
  register_extended_post_type('cardapio', array(
    'supports' => [
      'title',
      'thumbnail',
      'page-attributes'
    ],
    'admin_cols' => array(
      'featured_image' => array(
        'title'          => 'Imagem destaque',
        'featured_image' => 'thumbnail'
      ),
      'categoria' => array(
        'taxonomy' => 'categoria'
      )
    )
  ));
  register_extended_taxonomy('categoria', 'cardapio');
});

/**
 * Register ACF Blocks
 */
add_action( 'init', function() {
  register_block_type( TEMPLATEPATH . '/resources/views/blocks/guia' );
  register_block_type( TEMPLATEPATH . '/resources/views/blocks/titulo' );
  register_block_type( TEMPLATEPATH . '/resources/views/blocks/cardapio' );
});

/**
 *
 */
add_action('acf/init', function () {
  /**
   * Fields para configurações do site
   */
  register_extended_field_group([
    'title' => 'Configuração do template',
    'fields' => [
      Tab::make('Menu Home'),
        RadioButton::make('Estilo do menu', 'menu_style')
          ->choices([
            'transparent' => 'Transparente
                              <div style="margin-top: 20px"><img src="'.get_template_directory_uri().'/resources/images/transparent-menu.png" width="100"></div>',
            'background' => 'Background colorido
                              <div style="margin-top: 20px"><img src="'.get_template_directory_uri().'/resources/images/bg-menu.png" width="100"></div>'
          ])
          ->layout('horizontal')
          ->wrapper(['width' => "30"]),
        Text::make('Título', 'titulo')->wrapper(['width' => "30"]),
        WysiwygEditor::make('Descrição', 'description')->wrapper(['width' => "40"]),
        Repeater::make('Bloco de menus Home', 'menu_bloco_home')
          ->fields([
            Text::make('Título do menu', 'menu_title'),
            Link::make('Linkar a Página', 'menu_link')->returnFormat('url'),
            Image::make('icone', 'menu_icon')->returnFormat('url'),
          ]),
      Tab::make('Bottom bar'),
        Text::make('Atendimento Telefone', 'bottom_phone')->instructions('Somente números'),
        Text::make('Atendimento WhatsApp', 'bottom_whatsapp')->instructions('Somente números'),
        Text::make('Instagram', 'bottom_instagram'),
      Tab::make('')
    ],
    'location' => [
      Location::where('options_page', '=', 'general-settings')
    ],
    'style' => 'default'
  ]);

  /**
   * Fields para configurações do bloco guia
   */
  register_extended_field_group([
    'title' => 'Configuração do bloco Guia',
    'fields' => [
      Repeater::make('Lista de itens do Guia', 'lista_itens_guia')
        ->fields([
          Text::make('Número item', 'numero_item'),
          Text::make('Nome item', 'nome_item')
        ])
    ],
    'location' => [
      Location::where('block', '=', 'acf/guia')
    ],
    'style' => 'default'
  ]);

  /**
   * Bloco de titulo e sub-titulo
   */
  register_extended_field_group([
    'title' => 'Título e sub titulo',
    'fields' => [
      Text::make('Título', 'titulo')->wrapper(['width' => '50']),
      Text::make('Subtítulo', 'subtitulo')->wrapper(['width' => '50']),
    ],
    'location' => [
      Location::where('block', '=', 'acf/titulo')
    ],
    'style' => 'default'
  ]);

  /**
   * Fields para slider do site
   */
  register_extended_field_group([
    'title' => 'Image Slider',
    'fields' => [
      Repeater::make('Add Slider', 'slider_principal')
        ->fields([
          Link::make('Linkar página', 'link_oage')->returnFormat('url'),
          Image::make('Slider image', 'slider_image')->returnFormat('url')
        ])
    ],
    'location' => [
      Location::where('options_page', '=', 'site-slider')
    ],
    'style' => 'default'
  ]);

  /**
   * Fields para slider do site
   */
  register_extended_field_group([
    'title' => 'Cardapio',
    'fields' => [
      Message::make('Este bloco utilizar a lista de itens do menu cardápio'),
      RadioButton::make('Esolha o tipo de cardápio', 'tipo_cardapio')
        ->choices([
          'cardapio_categoria' => 'Cardápio com menu superior' ,
          'cardapio_lista' => 'Cardápio em lista corrida'
        ])
        ->returnFormat('value')
        ->layout('horizontal')
    ],
    'location' => [
      Location::where('block', '=', 'acf/cardapio')
    ],
    'style' => 'default'
  ]);

  /**
   * Fields para custom post type cardapio
   */
  register_extended_field_group([
    'title' => 'Configurar item de cardapio',
    'fields' => [
      Text::make('Nome do prato', 'titulo_cardapio')->wrapper(['width' => 50])->instructions('Nome a ser exibido no cardápio'),
      Text::make('Preço', 'preco_cardapio')->wrapper(['width' => 50])->instructions('Utilize números separados por virgulas'),
      Textarea::make('Descrição do prato', 'descricao_cardapio')
    ],
    'location' => [
      Location::where('post_type', '=', 'cardapio')
    ],
    'style' => 'default'
  ]);
});

