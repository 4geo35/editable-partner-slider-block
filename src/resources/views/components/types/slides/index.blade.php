@props(["block", "isFullPage" => true])
@if ($block->items->count())
    @if ($block->render_title)
        <div class="container">
            <x-tt::h2 class="mb-indent">{{ $block->render_title }}</x-tt::h2>
        </div>
    @endif
    <div id="swiperBlockPartnerSlider-{{ $block->id }}"
         class="swiper overflow-hidden mb-indent mx-auto">
        <div class="swiper-wrapper !ease-linear">
            @foreach($block->items as $index => $item)
                <x-epsb::types.slides.item :$item />
            @endforeach
        </div>
    </div>
    @include("epsb::web.types.slides.includes.swiper-script")
@endif
