
<?php
use function Livewire\Volt\{computed};
use App\Models\Product;
$latestProducts = computed(fn()=> Product::select('name','slug','price','photo')->latest()->get());

?>
<section class="wrapper !px-0 flex flex-col gap-2.5">
			<p class="px-4 text-base font-bold">
				Latest Products
			</p>
			<div id="proudctsSlider" class="relative">
				<!-- Panadomal -->

				@forelse($this->latestProducts as $product)
				<a href="/detail-product/{{$product->slug}}"  class="rounded-2xl bg-white py-3.5 pl-4 pr-[22px] inline-flex flex-col gap-4 items-start mr-4 relative w-[158px]">
					<img src="{{asset($product->photo)}}" class="h-[100px] w-full object-contain" alt="">
					<div>
						<div  class="text-base font-semibold w-[120px] truncate stretched-link block">
							{{$product->name}}
						</div>
						<p class="text-sm truncate text-grey">
							Rp {{$product->price}}
						</p>
					</div>
				</a>
				@empty
				<p>Prodct Tidak Tersedia</p>
				@endforelse
				
			</div>
</section>