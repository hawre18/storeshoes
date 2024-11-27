@foreach($categories as $submenu)
    <li><a href="{{route('category.index',['id'=>$submenu])}}" class="menu-link-text link">{{ $submenu->title }}</a></li>
        @if(count($submenu->childrenRecursive)>0)
            <div class="col-lg-2">
                <div class="mega-menu-item">
                    <ul class="menu-list">
                        <li>@include('template.user.v1.menu',['categories'=>$submenu->childrenRecursive, 'level'=>$level+1])</li>
                    </ul>
                </div>
            </div>
        @endif
@endforeach
