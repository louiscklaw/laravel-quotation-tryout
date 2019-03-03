@php
    $menuitems=
        [
            'home'=>[
                'text'=>'home', 'icon'=>'assignment', 'link'=>route('quotation.home'),
            ],
            'Tools'=>[
                'text'=>'Quotation', 'icon'=>'assignment', 'link'=>'javascript:void(0);',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],

            'quotation'=>[
                'text'=>'Quotation', 'icon'=>'assignment', 'link'=>'javascript:void(0);',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],

            'delivery'=>[
                'text'=>'Delivery', 'icon'=>'assignment', 'link'=>'javascript:void(0);',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],

            'Collection'=>[
                'text'=>'Quotation', 'icon'=>'assignment', 'link'=>'javascript:void(0);',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],

            'LnD'=>[
                'text'=>'Quotation', 'icon'=>'assignment', 'link'=>'javascript:void(0);',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],


            'Invoice'=>[
                'text'=>'Quotation', 'icon'=>'assignment', 'link'=>'javascript:void(0);',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],


            'Inventory'=>[
                'text'=>'Quotation', 'icon'=>'assignment', 'link'=>'javascript:void(0);',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],


            'Price'=>[
                'text'=>'Quotation', 'icon'=>'assignment', 'link'=>'javascript:void(0);',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],

            'Customer'=>[
                'text'=>'Quotation', 'icon'=>'assignment', 'link'=>'javascript:void(0);',
                'subitem' => [

                    'Company'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create'),
                        'subitem'=>[
                            'new'=>[
                                'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                            ],
                            'list'=>[
                                'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                            ],
                        ]],
                    'Client'=>['text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')],
                    'Site(DeliveryContact)'=>['text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')],
                    'ConstSite'=>['text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')],
                    'Siteitem'=>['text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')],
                ]
            ],

            'client'=>[
                    'text'=>'client', 'icon'=>'assignment', 'link'=>'javascript:void(0);',
                    'subitem' => [
                        'new'=>[
                            'text'=>'New', 'icon'=>'assignment', 'link'=>route('client.create')
                        ],
                        'list'=>[
                            'text'=>'List', 'icon'=>'assignment', 'link'=>route('client.index')
                        ],
                    ]
            ],
            'user'=>[
                    'text'=>'user', 'icon'=>'assignment', 'link'=>'javascript:void(0);',
                    'subitem' => [
                        'new'=>[
                            'text'=>'New', 'icon'=>'assignment', 'link'=>route('user.create')
                        ],
                        'list'=>[
                            'text'=>'List', 'icon'=>'assignment', 'link'=>route('user.index')
                        ],
                    ]
            ],



        ];

@endphp
<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
            @foreach($menuitems as $itemname => $itemvalue)
                @if (explode('_',$mn_highlight)[0] == $itemname)
                    <li class="active">
                @else
                    <li>
                @endif

                    @if (isset($itemvalue['subitem']))
                        <a href="javascript:void(0);" class="menu-toggle">
                    @else
                        <a href="{{ $itemvalue['link'] }}">
                    @endif

                        <i class="material-icons">{{ $itemvalue['icon'] }}</i>
                        <span>{{$itemname}}</span>
                    </a>
                    @if (isset($itemvalue['subitem']))

                            <ul class="ml-menu">
                            @foreach($itemvalue['subitem'] as $subitem_name => $subitem_value)
                                @if (explode('_',$mn_highlight)[0] == $itemname && explode('_',$mn_highlight)[1] == $subitem_name)
                                    <li class="active">
                                @else
                                    <li>
                                @endif
                                        <!-- <a> -->
                                        @if (isset($subitem_value['subitem']))
                                            <a href="javascript:void(0);" class="menu-toggle">
                                        @else
                                            <a href="{{ $subitem_value['link'] }}">
                                        @endif
                                            <!-- <i class="material-icons">{{ $subitem_value['icon'] }}</i> -->
                                            {{$subitem_name}}
                                        </a>

                                    @if (isset($subitem_value['subitem']))
                                        <ul class="ml-menu">
                                        @foreach($subitem_value['subitem'] as $thirditem_name => $thirditem_value)
                                            <li>
                                                <a href="{{ $thirditem_value['link'] }}">
                                                    {{$thirditem_name}}
                                                </a>
                                            </li>
                                        @endforeach
                                        </ul>
                                    @endif
                                    </li>
                            @endforeach
                            </ul>
                    @endif
                </li>
                @endforeach
        </li>
    </ul>
</div>
