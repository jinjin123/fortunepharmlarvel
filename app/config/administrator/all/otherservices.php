<?php
include	'global.php';
/**
 * Page model config
 */

return array(

    'title' => "Other Services",

    'single' => "otherservices",

    'model' => 'Otherservices',

    'form_width' => 1200,

    /** Disable the Create and Delete button	**/
    'action_permissions'=> array(
        'delete' => function($model)
        {
            return false;
        },

        'create' => function($model)
        {
            return false;
        },

    ),

    /*Rules*/
//    'rules' => array(
//        'tagline_eng' => 'required',
//
//    ),

    /*Messages*/
//    'messages' => array(
//        'title_eng.required' => 'The title(ENG) is required',
//
//    ),

    /**
     * The display columns
     *  	 	'image' => array(
    'title' => "Image",
    'type'=>'image',
    'output' => function($value)
    {
    if($value){
    list($width, $height)=getimagesize($GLOBALS['home_directory'].'app/storage/uploads/'.$value);
    return '<p>'.$value.'</p><img src="'.$GLOBALS['home_directory'].'app/storage/uploads/'.$value.'" height="100" /><p>Dimension: '.$width.'(w) x '.$height.'(h)</p>';
    }else{
    return '<p>No Image</p>';
    }

    },
    ),
     */
    'columns' => array(

        'tagline_eng'=> array(
            'title' => 'Tagline (ENG)'
        ),
        'content_eng'=> array(
            'title' => 'Content(ENG)',
            'type' => 'wysiwyg',
        ),

        'tagline_cht'=> array(
            'title' => 'Tagline (CHT)'
        ),
        'content_cht'=> array(
            'title' => 'Content(CHT)',
            'type' => 'wysiwyg',
        ),

        'tagline_chs'=> array(
            'title' => 'Tagline (CHS)'
        ),
        'content_chs'=> array(
            'title' => 'Content(CHS)',
            'type' => 'wysiwyg',
        ),





    ),


    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'id',
        'direction' => 'asc',
    ),


    /**
     * The filter set
     */
//    'filters' => array(
//        'tagline_eng'=> array(
//            'title' => 'Tagline (ENG)'
//        ),
//        'content_eng'=> array(
//            'title' => 'Content(ENG)',
//            'type' => 'wysiwyg',
//        ),
//
//        'tagline_cht'=> array(
//            'title' => 'Tagline (CHT)'
//        ),
//        'content_cht'=> array(
//            'title' => 'Content(CHT)',
//            'type' => 'wysiwyg',
//        ),
//        'tagline_chs'=> array(
//            'title' => 'Tagline (CHS)'
//        ),
//        'content_chs'=> array(
//            'title' => 'Content(CHS)',
//            'type' => 'wysiwyg',
//        ),
//
//
//
//    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'tagline_eng'=> array(
            'title' => 'Tagline(ENG)'
        ),
        'content_eng'=> array(
            'title' => 'Content(ENG)',
            'type' => 'wysiwyg',
        ),

        'tagline_cht'=> array(
            'title' => 'Tagline(CHT)'
        ),
        'content_cht'=> array(
            'title' => 'Content(CHT)',
            'type' => 'wysiwyg',
        ),
        'tagline_chs'=> array(
            'title' => 'Tagline(CHS)'
        ),
        'content_chs'=> array(
            'title' => 'Content(CHS)',
            'type' => 'wysiwyg',
        ),
        'pdffile' => array(
          'title' => 'PDF File for Public',
            'type' => 'file',
            'location' => storage_path() . '/../../public',
            'naming' => 'random',
            'mimes' => 'pdf',
        ),

    ),

);