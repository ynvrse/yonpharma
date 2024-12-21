<?php
use function Livewire\Volt\{computed, state, mount};
use App\Models\Product;

state([
    'slug' => null,
]);

mount(fn($slug)=> $this->slug = $slug);

$detailProduct = computed(fn () => Product::where('slug', $this->slug)->get());
?>
<div>
<img src="{{asset('assets/images/product-2.webp')}}" class="h-[220px] w-auto mx-auto relative z-10" alt="">
    <section class="bg-white rounded-t-[60px] pt-[60px] px-4 pb-5 -mt-9 flex flex-col gap-5 max-w-[425px] mx-auto">
      <div>
        <div class="flex items-center justify-between">
          <div class="flex flex-col gap-2">
            <p class="font-bold text-[22px]">
              Immuguard Junior
            </p>
            <div class="flex items-center gap-2">
              <img src="{{asset('assets/svgs/ic-fitness-filled.svg')}}" class="size-[30px]" alt="">
              <p class="font-semibold text-balance">
                Fitness
              </p>
            </div>
          </div>
          <div class="flex items-center mt-4 gap-1">
            <img src="{{asset('assets/svgs/star.svg')}}" class="size-6" alt="">
            <p class="font-semibold text-balance">
              4.5/5
            </p>
          </div>
        </div>
        <p class="mt-3.5 text-base leading-7">
          Medicine good for your body even when
          don’t really need them so keep all without
          worrying about the life would be later.
        </p>
      </div>

      <div id="featureSlider" class="-mx-6">
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
          class="w-[98px] border border-[#f1f1fa] rounded-2xl p-3.5 flex flex-col gap-2.5 items-center justify-center mr-4">
          <img src="{{asset('assets/svgs/ic-thumb-shape-filled.svg')}}" class="size-10" alt="">
          <p class="text-sm font-semibold">
            Grade A
          </p>
        </div>
        <!-- Healthy -->
        <div
          class="w-[98px] border border-[#f1f1fa] rounded-2xl p-3.5 flex flex-col gap-2.5 items-center justify-center mr-4">
          <img src="{{asset('assets/svgs/ic-clipboard-tick-filled.svg')}}" class="size-10" alt="">
          <p class="text-sm font-semibold">
            Healthy
          </p>
        </div>
        <!-- Official -->
        <div
          class="w-[98px] border border-[#f1f1fa] rounded-2xl p-3.5 flex flex-col gap-2.5 items-center justify-center mr-4">
          <img src="{{asset('assets/svgs/ic-shiled-tick-filled.svg')}}" class="size-10" alt="">
          <p class="text-sm font-semibold">
            Official
          </p>
        </div>
      </div>

      <!-- user Reviews -->
      <div class="flex flex-col gap-2">
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
      </div>

      <!-- Price and Add to cart -->
      <div class="flex items-center justify-between">
        <div class="flex flex-col gap-0.5">
          <p class="text-lg min-[350px]:text-2xl font-bold">
            Rp 3.290.000
          </p>
          <p class="text-sm text-grey">
            /quantity
          </p>
        </div>
        <a href="./cart.html" class="inline-flex w-max text-white font-bold text-base bg-primary rounded-full px-[30px] py-3 justify-center items-center whitespace-nowrap">
          Add to Cart
        </a>
      </div>
    </section>
</div>