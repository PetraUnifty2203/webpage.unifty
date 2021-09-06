<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\Jommla3/templates/it_construction/particles/template-js.yaml',
    'modified' => 1629828473,
    'data' => [
        'name' => 'Template.js',
        'description' => 'Configure Template.js.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Template.js particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'This Atom loads the template specific JavaScript code.<br />You <strong>MUST</strong> have this Atom loaded in your "Base" outline.'
                ]
            ]
        ]
    ]
];
