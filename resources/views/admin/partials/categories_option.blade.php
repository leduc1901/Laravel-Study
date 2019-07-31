@forelse ($categories as $category)

    <option value={{ $category->id}}> 
        
        @for ($i = 0; $i < $level; $i++)
        -- |
        @endfor
        {{$category->name}} 
    </option>
    @includeWhen($category->sub->count() ,'admin.partials.categories_option', ['categories' => $category->sub, 'level'=> $level + 1])
@empty
    
@endforelse