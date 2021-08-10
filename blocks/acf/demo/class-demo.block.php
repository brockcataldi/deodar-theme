<?php 

class Demo_Block extends Spruce_Block{

    public static string $key = 'demo';
    
    public static array $options = array(
        'title' => 'Demo',
        'description' => 'My Demo block.',
        'category' => 'common',
        'supports' => array(
            'jsx' => true
        )
    );

    public static array $fields = array(
        array(
			'key' => 'demo_field_0',
            'label' => 'Body',
            'name' => 'body',
            'type' => 'text',
		)
    );
}