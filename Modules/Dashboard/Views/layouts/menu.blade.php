<ul>
@foreach($items as $key => $menu)
    <li class=" {{ $active == $menu["order"] ? 'active' : '' }}" >{{ $menu['title'] }}</li>
@endforeach
</ul>
