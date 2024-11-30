<?php
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

register_nav_menus(array(

         'primary' => 'Primary-menu',
         'secondary' => 'Secondary-menu'
) );
$sidebars = [
    'footer 1' => 'footer1',
    'footer 2' => 'footer2',
    'footer 3' => 'footer3',
    'footer 4' => 'footer4',
    'footer 5' => 'footer5',
    'copyright' => 'copyright'
];
// way of accessing value in array during loop $name => $id
foreach ($sidebars as $name => $id) {
    register_sidebar([
        'name' => $name,
        'id' => $id
    ]);
}
?>