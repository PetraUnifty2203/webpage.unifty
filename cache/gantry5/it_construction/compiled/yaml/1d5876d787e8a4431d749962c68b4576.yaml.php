<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\Jommla3/templates/it_construction/particles/gallery.yaml',
    'modified' => 1629828473,
    'data' => [
        'name' => 'Gallery',
        'description' => 'Display gallery.',
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
                    'description' => 'Globally enable Gallery particles.',
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
                'style' => [
                    'type' => 'select.select',
                    'label' => 'Style',
                    'description' => 'Select the style which defines the particle layout on the frontend.',
                    'placeholder' => 'Select...',
                    'default' => 'style1',
                    'options' => [
                        'style1' => 'Style 1',
                        'style2' => 'Style 2'
                    ]
                ],
                'columns' => [
                    'type' => 'select.select',
                    'label' => 'Columns',
                    'description' => 'Select the number of items per row (columns).',
                    'placeholder' => 'Select...',
                    'default' => 3,
                    'options' => [
                        1 => 1,
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5,
                        6 => 6
                    ]
                ],
                'gutter' => [
                    'type' => 'select.select',
                    'label' => 'Gutter',
                    'description' => 'Enable or disable the Gallery gutter (to have space between the items or not).',
                    'placeholder' => 'Select...',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enabled',
                        'disabled' => 'Disabled'
                    ]
                ],
                'filters' => [
                    'type' => 'select.select',
                    'label' => 'Filters',
                    'description' => 'Enable or disable the Gallery filters.',
                    'placeholder' => 'Select...',
                    'default' => 'disabled',
                    'options' => [
                        'enabled' => 'Enabled',
                        'enabled2' => 'Enabled - Counter 1',
                        'enabled3' => 'Enabled - Counter 2',
                        'disabled' => 'Disabled'
                    ]
                ],
                'filterall' => [
                    'type' => 'input.text',
                    'label' => 'Filter "All"',
                    'description' => 'Type in the Filter \'All\' name. This filter shows all items. You can use this field to translate the text in your language.',
                    'placeholder' => 'Enter Filter Name',
                    'default' => 'All'
                ],
                'filter1' => [
                    'type' => 'input.text',
                    'label' => 'Filter 1',
                    'description' => 'Type in the Filter 1 name. Here you create the filters and then you assign them to the Gallery items. It is similar to tags.',
                    'placeholder' => 'Enter Filter Name',
                    'default' => ''
                ],
                'filter2' => [
                    'type' => 'input.text',
                    'label' => 'Filter 2',
                    'description' => 'Type in the Filter 2 name. Here you create the filters and then you assign them to the Gallery items. It is similar to tags.',
                    'placeholder' => 'Enter Filter Name',
                    'default' => ''
                ],
                'filter3' => [
                    'type' => 'input.text',
                    'label' => 'Filter 3',
                    'description' => 'Type in the Filter 3 name. Here you create the filters and then you assign them to the Gallery items. It is similar to tags.',
                    'placeholder' => 'Enter Filter Name',
                    'default' => ''
                ],
                'filter4' => [
                    'type' => 'input.text',
                    'label' => 'Filter 4',
                    'description' => 'Type in the Filter 4 name. Here you create the filters and then you assign them to the Gallery items. It is similar to tags.',
                    'placeholder' => 'Enter Filter Name',
                    'default' => ''
                ],
                'filter5' => [
                    'type' => 'input.text',
                    'label' => 'Filter 5',
                    'description' => 'Type in the Filter 5 name. Here you create the filters and then you assign them to the Gallery items. It is similar to tags.',
                    'placeholder' => 'Enter Filter Name',
                    'default' => ''
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
                    'label' => 'Gallery Items',
                    'description' => 'Create each gallery item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select an image.'
                        ],
                        '.alt' => [
                            'type' => 'input.text',
                            'label' => 'Image Alt Tag'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'description' => 'Type in the image title. It will be shown below the image modal window.'
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Type in the image description (Style 2 ONLY).'
                        ],
                        '.filter1' => [
                            'type' => 'input.checkbox',
                            'label' => 'Filter 1',
                            'description' => 'Assign Filter 1 to this item. It is similar to tags.',
                            'default' => 0
                        ],
                        '.filter2' => [
                            'type' => 'input.checkbox',
                            'label' => 'Filter 2',
                            'description' => 'Assign Filter 2 to this item. It is similar to tags.',
                            'default' => 0
                        ],
                        '.filter3' => [
                            'type' => 'input.checkbox',
                            'label' => 'Filter 3',
                            'description' => 'Assign Filter 3 to this item. It is similar to tags.',
                            'default' => 0
                        ],
                        '.filter4' => [
                            'type' => 'input.checkbox',
                            'label' => 'Filter 4',
                            'description' => 'Assign Filter 4 to this item. It is similar to tags.',
                            'default' => 0
                        ],
                        '.filter5' => [
                            'type' => 'input.checkbox',
                            'label' => 'Filter 5',
                            'description' => 'Assign Filter 5 to this item. It is similar to tags.',
                            'default' => 0
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
