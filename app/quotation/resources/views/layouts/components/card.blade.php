<div class="row clearfix">
    <div class="{{ isset($card_class)? $card_class : '' }}">

        <div class="card">
            <div class="header">
                <h2>
                    {{ $card_name }}
                    <small>{{ $card_desc }}</small>
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="body">
                {{ $slot }}

            </div>

        </div>
    </div>
</div>
