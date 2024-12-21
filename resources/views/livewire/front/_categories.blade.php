<?php
use function Livewire\Volt\{computed};
use App\Models\Category;
$categories = computed(fn()=> Category::select('name','slug','icon')->get());

?>
<section class="wrapper !px-0 flex flex-col gap-2.5">
			<p class="px-4 text-base font-bold">
				Categories
			</p>
			<div id="categoriesSlider" class="relative">

			@foreach($this->categories as $category)
				<div class="inline-flex gap-2.5 items-center py-3 px-3.5 relative bg-white rounded-xl mr-4">
					<img src="{{asset($category->icon)}}" class="size-10" alt="">
					<a href="category/{{$category->slug}}" class="text-base font-semibold truncate stretched-link">
						{{$category->name}}
					</a>
				</div>
			@endforeach
				
			</div>
</section>