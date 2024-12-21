<?php
use function Livewire\Volt\{state,computed};
use App\Models\Product;

state([
	'search' => null,
]);

$productSearch = computed(function(){
	$product = null;
	if($this->search){
		$product = Product::select('id','slug','name','price','photo')->where('name', 'LIKE', '%' . $this->search . '%')->get();
	}
	return $product;
});

$is_dashboard = fn() => request()->is('dashboard');
;


?>
<section class="wrapper flex flex-col gap-2.5 items-center justify-center">
			@if($this->is_dashboard())
			<p class="text-4xl font-extrabold text-center">
				We Provide <br>
				Best Medicines
			</p>
			@endif
			<form action="" method="POST" id="searchForm" class="w-full p-4">
				<input type="text" wire:model.live.debounce.500="search" name="search" id="searchProduct"
					class="block w-full py-3.5 pl-4 pr-10 rounded-[50px] font-semibold placeholder:text-grey placeholder:font-normal text-black text-base bg-no-repeat bg-[calc(100%-16px)] bg-[url({{asset('assets/svgs/ic-search.svg')}})] focus:ring-2 focus:ring-primary focus:outline-none focus:border-none transition-all"
					placeholder="Search by product name">
			</form>
		@if($this->productSearch)
			
		<section class="wrapper !px-0 flex flex-col w-full justify-start gap-2.5">
			<p class="px-4 text-base font-bold">
				Search Result :
			</p>
			<div id="proudctsSlider" class="relative">
				<!-- Panadomal -->

				@forelse($this->productSearch as $product)
				<a href="/detail-product/{{$product->slug}}" wire:navigate class="rounded-2xl bg-white py-3.5 pl-4 pr-[22px] inline-flex flex-col gap-4 items-start mr-4 relative w-[158px]">
					<img src="{{asset($product->photo)}}" class="h-[100px] w-full object-contain" alt="">
					<div>
						<div class="text-base font-semibold w-[120px] truncate stretched-link block">
							{{$product->name}}
						</div>
						<p class="text-sm truncate text-grey">
							Rp {{$product->price}}
						</p>
					</div>
				</a>
				@empty
				<p class="p-4">Prodct Tidak Tersedia</p>
				@endforelse
				
			</div>
		</section>
		@endif
</section>