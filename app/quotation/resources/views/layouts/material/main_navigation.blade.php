@php
    $menuitems=
        [
        'quotation'=>[
                'text'=>'Quotation',
                'icon'=>'assignment',
                'link'=>'javascript:void(0);',
                'subitem' => [
                    'new'=>[
                        'text'=>'New',
                        'icon'=>'assignment',
                        'link'=>route('quotation.create'),
                    ],
                    'list'=>[
                        'text'=>'List',
                        'icon'=>'assignment',
                        'link'=>route('quotation.index'),
                    ],
                ]
        ],
        'Client'=>[
                'text'=>'Quotation',
                'icon'=>'assignment',
                'link'=>'javascript:void(0);',
                'subitem' => [
                    'new'=>[
                        'text'=>'New',
                        'icon'=>'assignment',
                        'link'=>'javascript:void(0);',
                    ],
                    'list'=>[
                        'text'=>'List',
                        'icon'=>'assignment',
                        'link'=>'javascript:void(0);',
                    ],
                ]
        ],
        'User'=>[
                'text'=>'Quotation',
                'icon'=>'assignment',
                'link'=>'javascript:void(0);',
                'subitem' => [
                    'new'=>[
                        'text'=>'New',
                        'icon'=>'assignment',
                        'link'=>'javascript:void(0);',
                    ],
                    'list'=>[
                        'text'=>'List',
                        'icon'=>'assignment',
                        'link'=>'javascript:void(0);',
                    ],
                ]
        ],
        ];

@endphp
<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
            <a href="index.html">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
            @foreach($menuitems as $itemname => $itemvalue)
                @if (explode('_',$mn_highlight)[0] == $itemname)
                    <li class="active">
                @else
                    <li>
                @endif

                    @if (isset($itemvalue['subitem']))
                        <a href="{{ $itemvalue['link'] }}" class="menu-toggle">
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
                                            <a href="{{ $subitem_value['link'] }}" class="menu-toggle">
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
