                                    @forelse($categories as $category)
									<div class="item-menu">
                                        <span>
                                            @for ($i = 0; $i < $level; $i++)
                                                -- |
                                            @endfor
                                            
                                        </span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/admin/categories/{{$category->id}}/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
                                    </div>
                                    @includeWhen($category->sub->count() ,'admin.partials.categories_row', 
                                    ['categories' => $category->sub, 'level'=> $level + 1])
									@empty
										Không có dữ liệu
									@endforelse