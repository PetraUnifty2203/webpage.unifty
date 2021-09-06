<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\Jommla3/templates/it_construction/particles/places.yaml',
    'modified' => 1629828473,
    'data' => [
        'name' => 'Places',
        'description' => 'Display Places.',
        'type' => 'particle',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Places particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong>'
                ],
                'mainheading' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Type in the title.',
                    'placeholder' => 'Enter Title',
                    'default' => ''
                ],
                'introtext' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Intro Text',
                    'description' => 'Type in the intro text.',
                    'placeholder' => 'Enter Intro Text',
                    'default' => ''
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Select an image.'
                ],
                'alt' => [
                    'type' => 'input.text',
                    'label' => 'Image Alt Tag',
                    'description' => 'Type in the image alt tag.',
                    'placeholder' => 'Enter alt tag'
                ],
                'imagebottom' => [
                    'type' => 'select.select',
                    'label' => 'Image at the bottom',
                    'description' => 'Set the image at the bottom of the section. Recommended for an image with a person.',
                    'placeholder' => 'Select...',
                    'default' => 'no',
                    'options' => [
                        'yes' => 'Yes',
                        'no' => 'No'
                    ]
                ],
                'mode' => [
                    'type' => 'select.select',
                    'label' => 'Mode',
                    'description' => 'Select if the item box should be opened on click or on hover.',
                    'placeholder' => 'Select...',
                    'default' => 'click',
                    'options' => [
                        'click' => 'Click',
                        'hover' => 'Hover'
                    ]
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.',
                    'default' => NULL
                ],
                'extra' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'Tag Attributes',
                    'description' => 'Extra Tag attributes.',
                    'key_placeholder' => 'Key (data-*, style, ...)',
                    'value_placeholder' => 'Value',
                    'exclude' => [
                        0 => 'id',
                        1 => 'class'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Places Items',
                    'description' => 'Create each item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.top' => [
                            'type' => 'input.text',
                            'label' => 'Top',
                            'description' => 'Type in the top offset for the item (in percentage). It must be a digit between 0 and 100 (do NOT type in the \'%\' sign, type in just the number). This is how you define where the item should be placed.'
                        ],
                        '.left' => [
                            'type' => 'input.text',
                            'label' => 'Left',
                            'description' => 'Type in the left offset for the item (in percentage). It must be a digit between 0 and 100 (do NOT type in the \'%\' sign, type in just the number). This is how you define where the item should be placed.'
                        ],
                        '.toggleicon' => [
                            'type' => 'input.icon',
                            'label' => 'Toggle Icon',
                            'description' => 'Select the toggle icon.',
                            'default' => 'fa fa-plus'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Title Link'
                        ],
                        '.target' => [
                            'type' => 'select.select',
                            'label' => 'Target',
                            'description' => 'Target browser window when item is clicked.',
                            'placeholder' => 'Select...',
                            'default' => '_parent',
                            'options' => [
                                '_parent' => 'Self',
                                '_blank' => 'New Window'
                            ]
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description'
                        ],
                        '.specialtext' => [
                            'type' => 'input.text',
                            'label' => 'Special Text'
                        ],
                        '.specialicon' => [
                            'type' => 'input.icon',
                            'label' => 'Special Icon',
                            'description' => 'Choose an icon to be placed in front of \'Special Text\'.'
                        ],
                        '.bottomlink' => [
                            'type' => 'input.text',
                            'label' => 'Bottom Link',
                            'description' => 'Enter the clickable text you want to be shown. The link is the URL you enter in the \'Title Link\' field above.'
                        ],
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Class'
                        ],
                        '.extra' => [
                            'type' => 'collection.keyvalue',
                            'label' => 'Tag Attributes',
                            'description' => 'Extra Tag attributes.',
                            'key_placeholder' => 'Key (data-*, style, ...)',
                            'value_placeholder' => 'Value',
                            'exclude' => [
                                0 => 'id',
                                1 => 'class'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
