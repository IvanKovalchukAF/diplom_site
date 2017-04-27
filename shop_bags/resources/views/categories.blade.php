@foreach(App\Categories::all() as $category)
    <p>
    <div>
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active"><a href="/categories/{{$category->id}}">{{$category->name}}</a></li>
        </ul>
    </div>
    </p>
@endforeach