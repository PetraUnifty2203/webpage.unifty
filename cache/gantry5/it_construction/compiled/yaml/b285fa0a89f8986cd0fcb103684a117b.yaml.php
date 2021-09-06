<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\Jommla3/templates/it_construction/particles/portfolio.yaml',
    'modified' => 1629828473,
    'data' => [
        'name' => 'Portfolio',
        'description' => 'Display portfolio.',
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
                    'description' => 'Globally enable Portfolio particles.',
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
                        'style2' => 'Style 2',
                        'style3' => 'Style 3',
                        'style4' => 'Style 4'
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
                        6 => 6,
                        10 => 10
                    ]
                ],
                'gutter' => [
                    'type' => 'select.select',
                    'label' => 'Gutter',
                    'description' => 'Enable or disable the Portfolio gutter (to have space between the items or not).',
                    'placeholder' => 'Select...',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enabled',
                        'disabled' => 'Disabled'
                    ]
                ],
                'lightbox' => [
                    'type' => 'select.select',
                    'label' => 'Lightbox',
                    'description' => 'Enable or disable the image lightbox/popup.',
                    'placeholder' => 'Select...',
                    'default' => 'enable',
                    'options' => [
                        'enable' => 'Enabled',
                        'disable' => 'Disabled',
                        'disablelink' => 'Disabled (Item Link)'
                    ]
                ],
                'filters' => [
                    'type' => 'select.select',
                    'label' => 'Filters',
                    'description' => 'Enable or disable the Portfolio filters.',
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
                    'description' => 'Type in the Filter 1 name. Here you create the filters and then you assign them to the Portfolio items. It is similar to tags.',
                    'placeholder' => 'Enter Filter Name',
                    'default' => ''
                ],
                'filter2' => [
                    'type' => 'input.text',
                    'label' => 'Filter 2',
                    'description' => 'Type in the Filter 2 name. Here you create the filters and then you assign them to the Portfolio items. It is similar to tags.',
                    'placeholder' => 'Enter Filter Name',
                    'default' => ''
                ],
                'filter3' => [
                    'type' => 'input.text',
                    'label' => 'Filter 3',
                    'description' => 'Type in the Filter 3 name. Here you create the filters and then you assign them to the Portfolio items. It is similar to tags.',
                    'placeholder' => 'Enter Filter Name',
                    'default' => ''
                ],
                'filter4' => [
                    'type' => 'input.text',
                    'label' => 'Filter 4',
                    'description' => 'Type in the Filter 4 name. Here you create the filters and then you assign them to the Portfolio items. It is similar to tags.',
                    'placeholder' => 'Enter Filter Name',
                    'default' => ''
                ],
                'filter5' => [
                    'type' => 'input.text',
                    'label' => 'Filter 5',
                    'description' => 'Type in the Filter 5 name. Here you create the filters and then you assign them to the Portfolio items. It is similar to tags.',
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
                    'label' => 'Portfolio Items',
                    'description' => 'Create each Portfolio item to display.',
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
                        '.video' => [
                            'type' => 'input.text',
                            'label' => 'Video URL',
                            'description' => 'Paste the video URL. If a video URL is added to this field, the modal window will load the video instead of the image.'
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
                        '.date' => [
                            'type' => 'input.text',
                            'label' => 'Date',
                            'description' => 'Enter the date that you want to be associated with this item. The field is mostly used as a \'Published Date\'. Being able to type in the date manually gives you a great flexibility as you can show the exact format you want.'
                        ],
                        '.specialtext' => [
                            'type' => 'input.text',
                            'label' => 'Special Text'
                        ],
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Special Icon',
                            'description' => 'Choose an icon to be placed in front of \'Special Text\'.'
                        ],
                        '.bottomlink' => [
                            'type' => 'input.text',
                            'label' => 'Bottom Link',
                            'description' => 'Enter the clickable text you want to be shown. The link is the URL you enter in the \'Title Link\' field above.'
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
