<div>
<h3>Yapılacaklar</h3>
    <ul>
    @foreach ($todo as $item)
    <li>{{$item->content}}</li>
        @endforeach
    </ul>
</div>
