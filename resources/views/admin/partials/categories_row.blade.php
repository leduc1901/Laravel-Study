                                    @forelse($categories as $category)
									<div class="item-menu">
                                        <span>
                                            @for ($i = 0; $i < $level; $i++)
                                                -- |
                                            @endfor
                                            {{ $category->name}}
                                        </span>
										<div class="category-fix">
                                            <a class="btn-category btn-primary" href="{{ route('admin.categories.edit', $category->id)}}"><i class="fa fa-edit"></i></a>
                                            <a class="btn-category btn-danger" onclick="return confirm('Are you sure about that ??')" href="{{route('admin.category.delete', $category->id )}}"><i class="fas fa-times"></i></i></a>

										</div>
                                    </div>
                                    @includeWhen($category->sub->count() ,'admin.partials.categories_row', 
                                    ['categories' => $category->sub, 'level'=> $level + 1])
									@empty
										Không có dữ liệu
									@endforelse