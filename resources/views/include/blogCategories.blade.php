<div class="select__block">
    @foreach($category->children as $subCategory)
        <div class="mb-2">
            <label class="h3 text-uppercase" for="parent_{{$subCategory->id}}">{{$subCategory->name}}</label>
            <div class="select_box">
                <select id="parent_{{$subCategory->id}}" name="category_id">
                    <option value="">Все</option>
                    @foreach($subCategory->children as $children)
                        <option value="{{$children->id}}">{{$children->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endforeach
</div>
