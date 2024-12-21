<?php
use function Livewire\Volt\{computed, state, mount};
use App\Models\Product;

state([
    'slug' => null,
]);

mount(fn($slug)=> $this->slug = $slug);

$productsByCategory = computed(function () {
    
    return Product::whereHas('category', function ($query) {
            $query->where('slug', $this->slug);
        })->get();
});


?>
<div>
@forelse($this->productsByCategory as $product)
    {{$product->name}}
    {{$product->price}}
    @empty
    <p>Produk Tidak Ditemukan</p>
    @endforelse    

</div>