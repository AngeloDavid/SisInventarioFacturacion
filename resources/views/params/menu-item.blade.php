@if ($item['submenu'] == [])
    <li>
        <a href="{{ url($item['name']) }}" class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url($item['slug']) }}" aria-expanded="false" >
                <i class="{{ $item['icon'] }}"></i><span class="hide-menu">{{ $item['name'] }}</span></a>
    </li>
@else
    <li class="sidebar-item">
        <a href="#" class="sidebar-link has-arrow waves-effect waves-dark" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="{{ $item['icon'] }}"></i><span class="hide-menu">{{ $item['name'] }} </span></a>
        <ul class="collapse first-level">
            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])
                    <li class="sidebar-item"><a href="{{ url('menu',['id' => $submenu['id'], 'slug' => $submenu['slug']]) }}"><span class="hide-menu">{{ $submenu['name'] }}</span> </a></li>
                @else
                    @include('params.menu-item', [ 'item' => $submenu ])
                @endif
            @endforeach
        </ul>
    </li>
@endif
