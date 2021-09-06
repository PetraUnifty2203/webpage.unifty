<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\Jommla3/templates/it_construction/blueprints/styles/fonts.yaml',
    'modified' => 1629828472,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the InspireTheme theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'body-font' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'family=Montserrat:700,400'
                ],
                'heading-font' => [
                    'type' => 'input.fonts',
                    'label' => 'Heading Font',
                    'default' => 'family=Montserrat:700,400'
                ],
                'menu-font' => [
                    'type' => 'input.fonts',
                    'label' => 'Menu Font',
                    'default' => 'family=Montserrat:700,400'
                ]
            ]
        ]
    ]
];
