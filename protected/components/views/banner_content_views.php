<?php
$this->widget('ext.coinSlider.CoinSliderWidget', array(
    'items' => array(
        array(
            'image' => 'http://workshop.rs/projects/coin-slider/games/prince_of_persia.jpg',
            'alt' => 'Price of Persia',
            'url' => 'http://www.princeofpersiagame.com/',
            'info' => array(
                'title' => 'Demo',
                'text' => 'This is a demo.'
            )
        ),
        array(// without description
            'image' => 'http://workshop.rs/projects/coin-slider/games/brink.jpg',
            'alt' => 'Price of Persia',
            'url' => 'http://www.princeofpersiagame.com/'
        ),
        array(
            'image' => 'http://workshop.rs/projects/coin-slider/games/games/borderlands.jpg',
            'alt' => 'Price of Persia',
            'url' => 'http://www.princeofpersiagame.com/',
            'info' => array(
                'title' => 'Demo',
                'text' => 'This is a demo.'
            )
        )
    )
));

?>