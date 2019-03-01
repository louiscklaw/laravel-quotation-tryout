<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>

            <a href="index.html">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
            <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">trending_down</i>
                <span>Multi Level Menu</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="javascript:void(0);">
                        <span>Menu Item</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span>Menu Item - 2</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>Level - 2</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Level - 3</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Level - 4</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
            @foreach($menuitems as $itemname => $itemvalue)
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">text_fields</i>
                        <span>{{$itemname}}</span>
                    </a>
                    @if (isset($itemvalue['subitem']))

                            <ul class="ml-menu">
                            @foreach($itemvalue['subitem'] as $subitem_name => $subitem_value)
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <i class="material-icons">text_fields</i>
                                            <span>{{$subitem_name}}</span>
                                        </a>

                                    @if (isset($subitem_value['subitem']))

                                            <ul class="ml-menu">
                                            @foreach($subitem_value['subitem'] as $thirditem_name => $thirditem_value)
                                                <li>
                                                    <a href="javascript:void(0);">
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

    </ul>
</div>
