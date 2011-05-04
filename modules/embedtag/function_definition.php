<?php
$FunctionList = array();

$FunctionList['youtube_embed_url'] = array(
    'name' => 'youtube_embed_url', // Retype the name of your function
    'operation_types' => 'read', // Obsolete, for BC
    'call_method' => array(
        'class' => 'JVEmbedTagFunctionCollection', // Function collection class
        'method' => 'getYoutubeEmbedUrl' ), // Method to call
    'parameter_type' => 'standard', // Obsolete, for BC
    'parameters' => array( // Function parameters in the PHP function order
        array( 'name' => 'video_url',
               'type' => 'string',
               'required' => true )
    )
);

$FunctionList['dailymotion_embed_url'] = array(
    'name' => 'dailymotion_embed_url', // Retype the name of your function
    'operation_types' => 'read', // Obsolete, for BC
    'call_method' => array(
        'class' => 'JVEmbedTagFunctionCollection', // Function collection class
        'method' => 'getDailymotionEmbedUrl' ), // Method to call
    'parameter_type' => 'standard', // Obsolete, for BC
    'parameters' => array( // Function parameters in the PHP function order
        array( 'name' => 'video_url',
               'type' => 'string',
               'required' => true )
    )
);

$FunctionList['vimeo_embed_url'] = array(
    'name' => 'vimeo_embed_url', // Retype the name of your function
    'operation_types' => 'read', // Obsolete, for BC
    'call_method' => array(
        'class' => 'JVEmbedTagFunctionCollection', // Function collection class
        'method' => 'getVimeoEmbedUrl' ), // Method to call
    'parameter_type' => 'standard', // Obsolete, for BC
    'parameters' => array( // Function parameters in the PHP function order
        array( 'name' => 'video_url',
               'type' => 'string',
               'required' => true )
    )
);

?>
