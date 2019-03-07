@php
    $menuitems=
        [
            'home'=>[
                'text'=>'Home', 'icon'=>'assignment', 'link'=>route('quotation.home'),
            ],

            'posts'=>[
                'text'=>'Posts', 'icon'=>'assignment',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('posts.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('posts.index')
                    ],
                ]
            ],

            'page'=>[
                'text'=>'Page', 'icon'=>'assignment',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('page.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('page.index')
                    ],
                ]
            ],

            'tools'=>[
                'text'=>'Tools', 'icon'=>'assignment',
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
                'text'=>'Quotation', 'icon'=>'assignment',
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
                'text'=>'Delivery', 'icon'=>'assignment',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],

            'collection'=>[
                'text'=>'Collection', 'icon'=>'assignment',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],

            'lnd'=>[
                'text'=>'LnD', 'icon'=>'assignment',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],


            'invoice'=>[
                'text'=>'Invoice', 'icon'=>'assignment',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],


            'inventory'=>[
                'text'=>'Inventory', 'icon'=>'assignment',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],


            'price'=>[
                'text'=>'Price', 'icon'=>'assignment',
                'subitem' => [
                    'new'=>[
                        'text'=>'New', 'icon'=>'assignment', 'link'=>route('quotation.create')
                    ],
                    'list'=>[
                        'text'=>'List', 'icon'=>'assignment', 'link'=>route('quotation.index')
                    ],
                ]
            ],

            'customer'=>[
                'text'=>'Customer', 'icon'=>'assignment',
                'subitem' => [

                    'Company'=>[
                        'text'=>'Company', 'icon'=>'assignment',
                        'subitem'=>[
                            'new'=>[
                                'text'=>'New', 'icon'=>'assignment', 'link'=>route('company.create')
                            ],
                            'list'=>[
                                'text'=>'List', 'icon'=>'assignment', 'link'=>route('company.index')
                            ],
                        ]],
                    'Client'=>['text'=>'Client', 'icon'=>'assignment', 'link'=>route('quotation.create')],
                    'Site(DeliveryContact)'=>['text'=>'Site(DeliveryContact)', 'icon'=>'assignment', 'link'=>route('quotation.create')],
                    'ConstSite'=>['text'=>'ConstSite', 'icon'=>'assignment', 'link'=>route('quotation.create')],
                    'Siteitem'=>['text'=>'Siteitem', 'icon'=>'assignment', 'link'=>route('quotation.create')],
                ]
            ],

            'client'=>[
                    'text'=>'Client', 'icon'=>'assignment',
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
                    'text'=>'user', 'icon'=>'assignment',
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
                        <span>{{$itemvalue['text']}}</span>
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
                                            {{$subitem_value['text']}}
                                        </a>

                                    @if (isset($subitem_value['subitem']))
                                        <ul class="ml-menu">
                                        @foreach($subitem_value['subitem'] as $thirditem_name => $thirditem_value)
                                            <li>
                                                <a href="{{ $thirditem_value['link'] }}">
                                                    {{$thirditem_value['text']}}
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
