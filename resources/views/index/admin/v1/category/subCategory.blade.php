@foreach($categories as $sub_category)
    <tr class="border-b border-gray-50 dark:border-zinc-600" data-id="1">
        <td class="p-3 dark:text-zinc-100" data-field="id" style="width: 80px">{{$loop->index+1}}</td>
        <td class="p-3 dark:text-zinc-100" data-field="name">{{$row->name}}</td>
        <td class="p-3 dark:text-zinc-100" data-field="age">{{$sub_category->title}}</td>
        <td class="p-3 dark:text-zinc-100" data-field="age">{{str_repeat('----',$level). $row->title}}</td>
        <td class="p-3 dark:text-zinc-100" style="width: 100px">
            <a class="btn btn-outline-secondary btn-sm edit" title="ویرایش" href="{{route('categories.edit',$sub_category->id)}}">
                <i class="fas fa-pencil-alt"></i>
            </a>
            <a class="btn btn-outline-secondary btn-sm edit" title="حذف" href="{{route('categories.delete',$sub_category->id)}}">
                <i class="fas fa-trash-alt"></i>
            </a>
            <a class="btn btn-outline-secondary btn-sm edit" title="ایجاد ویژگی" href="{{route('index.setting',$sub_category->id)}}">
                <i class="fas fa-box-open"></i>
            </a>
        </td>
    </tr>
    @if(count($sub_category->childrenRecursive)>0)
        @include('index.admin.v1.category.subCategory',['categories'=>$sub_category->childrenRecursive , 'level'=>$level+1])
    @endif
@endforeach
