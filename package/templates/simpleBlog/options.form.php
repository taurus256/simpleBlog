<?php

class formSimpleBlogTemplateOptions extends cmsForm {

    public function init() {

        return array(

            array(
                'type' => 'fieldset',
                'title' => "Фон",
                'childs' => array(
                
                    new fieldImage('bgImage', array(
                	'title' => "Фоновое изображение (большое, располагается за контентом)",
                        'options' => array(
                            'sizes' => array('small','original')
                        )
                    )),
                    
                    new fieldString('bgBodyColor', array(
                        'title' => "Цвет фона обрамления",
                        'hint' => "Код или название, например: white"
                    )),

                    new fieldString('bgTextColor', array(
                        'title' => "Цвет фона контента",
                        'hint' => "Код или название, например: white"
                    )),
                )
            ),
            
            array(
                'type' => 'fieldset',
                'title' => "Шрифт",
                'childs' => array(
		    
		    new fieldString('bodyFontFamily', array(
                        'title' => "Начертание",
                        'hint' => "Можно вводить несколько через запятую, например: Arial, sans-serif"
                    )),
                    
                    new fieldString('bodyFontColor', array(
                        'title' => "Цвет шрифта",
                        'hint' => "Код или название, например: black"
                    )),
                )
            ),


            array(
                'type' => 'fieldset',
                'title' => LANG_DEFAULT_THEME_COPYRIGHT,
                'childs' => array(

                    new fieldString('owner_name', array(
                        'title' => LANG_TITLE
                    )),

                    new fieldString('owner_url', array(
                        'title' => LANG_DEFAULT_THEME_COPYRIGHT_URL,
                        'hint' => LANG_DEFAULT_THEME_COPYRIGHT_URL_HINT
                    )),

                    new fieldString('owner_year', array(
                        'title' => LANG_DEFAULT_THEME_COPYRIGHT_YEAR,
                        'hint' => LANG_DEFAULT_THEME_COPYRIGHT_YEAR_HINT
                    )),

                )
            ),

            array(
                'type' => 'fieldset',
                'title' => LANG_ADMIN_CONTROLLER,
                'childs' => array(

                    new fieldCheckbox('disable_help_anim', array(
                        'title' => LANG_DEFAULT_THEME_DISABLE_HELP_ANIM,
                        'default' => 0
                    ))

                )
            )

        );

    }

}
