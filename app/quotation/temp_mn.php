

[
    'quotation'=>[
        'text'=>'Quotation',
        'icon'=>'material-icons'
        'link'=>'',

        'subitem' => [
            'new'=>[
                'text'=>'New',
                'icon'=>'material-icons'
                'link'=>{{route('quotation.create')}}',
                'subitem'=>[
                    'new'=>[
                        'text'=>'New',
                        'icon'=>'material-icons'
                        'link'=>{{route('quotation.create')}}'
                    ]]
            ],
            'list'=>[
                'text'=>'List',
                'icon'=>'material-icons'
                'link'=>{{ route('quotation.index') }},
            ],

        ]

    ]
]
