<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
            <a href="index.html">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
            @foreach($menuitems as $itemname => $itemvalue)
                <li>
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
                                    <li>
                                        <!-- <a> -->
                                        @if (isset($subitem_value['subitem']))
                                            <a href="{{ $subitem_value['link'] }}" class="menu-toggle">
                                        @else
                                            <a href="{{ $subitem_value['link'] }}">
                                        @endif
                                            <i class="material-icons">{{ $subitem_value['icon'] }}</i>
                                            <span>{{$subitem_name}}</span>
                                        </a>

                                    @if (isset($subitem_value['subitem']))
                                        <ul class="ml-menu">
                                        @foreach($subitem_value['subitem'] as $thirditem_name => $thirditem_value)
                                            <li>
                                                <a href="{{ $thirditem_value['link'] }}">
                                                    <span>{{$thirditem_name}}</span>
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
