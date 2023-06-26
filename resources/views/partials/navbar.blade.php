@php
    $menuListItems = config('menuList')
@endphp

<nav class="d-flex">
    <ul class="navbar d-flex justify-content-between">
        @foreach (config('menuList') as $menuListItems)   
            <li><a href="{{route($menuListItems['route'])}}">{{$menuListItems['name']}}</a></li>
        @endforeach
    </ul>
</nav>