@foreach($categories as $submenu)
    <li><a href="{{route('category.index',['id'=>$submenu])}}">{{ $submenu->title }}</a></li>
    @if(count($submenu->childrenRecursive)>0)
        <ul class="sub-nav-menu sub-menu-level-2">
            @include('template.user.v1.menuMobile',['categories'=>$submenu->childrenRecursive, 'level'=>$level+1])
        </ul>
    @endif
@endforeach
