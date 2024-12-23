
<?php
use function Livewire\Volt\{computed, mount, state};
use App\Models\Product;

state([
  'slug'=> null,
]);

mount(fn($slug)=> $this->slug = $slug);

$detailProducts = computed(fn()=> Product::select('category_id','name','slug','price','photo')->with('category')->where('slug',$this->slug)->latest()->get());

?>
<x-app-layout>
  @volt
<div>
@foreach($this->detailProducts as $product)
    <!-- Topbar -->
    <section class="relative flex items-center justify-between gap-5 wrapper">
      <a href="/" class="p-2 bg-white rounded-full">
        <img src="{{asset('assets/svgs/ic-arrow-left.svg')}}" class="size-5" alt="">
      </a>
      
      <button type="button" class="p-2 bg-white rounded-full">
        <img src="{{asset('assets/svgs/ic-triple-dots.svg')}}" class="size-5" alt="">
      </button>
    </section>
    

    <img src="{{asset($product->photo)}}" class="h-[220px] w-auto mx-auto relative z-10" alt="">
    <section class="bg-white rounded-t-[60px] pt-[60px] px-4 pb-5 -mt-9 flex flex-col gap-6 max-w-[425px] mx-auto">
      <div>
        <div class="flex items-center justify-between">
          <div class="flex flex-col gap-2">
            <p class="font-bold text-[22px]">
              {{$product->name}}
            </p>
            <div class="flex items-center gap-2">
            

              
            </div>
          </div>
          <!-- <div class="flex items-center mt-4 gap-1">
            <img src="{{asset('assets/svgs/star.svg')}}" class="size-6" alt="">
            <p class="font-semibold text-balance">
              4.5/5
            </p>
          </div> -->
        </div>

        <!-- Price and Add to cart -->
      <div class="flex items-center justify-between ">
        <div class="flex flex-col gap-0.5">
          <p class="text-lg min-[350px]:text-2xl font-bold">
                Rp {{ number_format($product->price) }}
          </p>
          <p class="text-sm text-grey">
            /quantity
          </p>
        </div>
        <a href="./cart.html" class="inline-flex w-max text-white font-bold text-base bg-primary rounded-full px-4 py-3 justify-center items-center whitespace-nowrap">
          Add to Cart
        </a>
      </div>

        <p class="mt-4 text-base leading-7 ">
         {{$product->about}}
        </p>
      </div>

      <div id="featureSlider" class="-mx-6">

              <!-- Category -->

        <div
          class="w-[98px]  rounded-2xl p-3.5 flex flex-col gap-2.5 items-center justify-center mr-4">
          <img src="{{asset($product->category->icon)}}" class="size-10" alt="">
          <p class="text-sm font-semibold">
            {{$product->category->name}}
          </p>
        </div>

                <!-- Popular -->

        <div
          class="w-[98px]  rounded-2xl p-3.5 flex flex-col gap-2.5 items-center justify-center mr-4">
          <img src="{{asset('assets/svgs/ic-cup-filled.svg')}}" class="size-10" alt="">
          <p class="text-sm font-semibold">
            Popular
          </p>
        </div>

        <!-- Grade A -->
        <div
          class="w-[98px]  rounded-2xl p-3.5 flex flex-col gap-2.5 items-center justify-center mr-4">
          <img src="{{asset('assets/svgs/ic-thumb-shape-filled.svg')}}" class="size-10" alt="">
          <p class="text-sm font-semibold">
            Grade A
          </p>
        </div>
        <!-- Healthy -->
        <div
          class="w-[98px]  rounded-2xl p-3.5 flex flex-col gap-2.5 items-center justify-center mr-4">
          <img src="{{asset('assets/svgs/ic-clipboard-tick-filled.svg')}}" class="size-10" alt="">
          <p class="text-sm font-semibold">
            Healthy
          </p>
        </div>
        <!-- Official -->
        <div
          class="w-[98px]  rounded-2xl p-3.5 flex flex-col gap-2.5 items-center justify-center mr-4">
          <img src="{{asset('assets/svgs/ic-shiled-tick-filled.svg')}}" class="size-10" alt="">
          <p class="text-sm font-semibold">
            Official
          </p>
        </div>
      </div>

      <!-- user Reviews -->
      {{--<div class="flex flex-col gap-2">
        <p class="text-base leading-7">
          My kid was happier whenever he is playing
          without artificial toys, full energy yeah!
        </p>
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-1.5">
            <img src="{{asset('assets/images/photo.png')}}" class="size-9" alt="">
            <p class="text-base font-semibold">
              Safira
            </p>
          </div>
          <div class="flex">
            <img src="{{asset('assets/svgs/star.svg')}}" class="size-[18px]" alt="">
            <img src="{{asset('assets/svgs/star.svg')}}" class="size-[18px]" alt="">
            <img src="{{asset('assets/svgs/star.svg')}}" class="size-[18px]" alt="">
            <img src="{{asset('assets/svgs/star.svg')}}" class="size-[18px]" alt="">
            <img src="{{asset('assets/svgs/star.svg')}}" class="size-[18px]" alt="">
          </div>
        </div>
      </div>--}}

      
    </section>
    @endforeach
    </div>
@endvolt

</x-app-layout>
