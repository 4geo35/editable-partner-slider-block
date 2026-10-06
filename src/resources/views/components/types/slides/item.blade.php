@props(["item"])
@if ($item->recordable->image)
    @php
        $block = $item->block;
        $image = $item->recordable->image;
    @endphp

    <div class="swiper-slide px-indent-half !w-[244px]">
        <div class="block rounded-base bg-white shadow-lg overflow-hidden min-h-[116px]">
            <img
                class="h-full object-cover object-center"
                src="{{ route('thumb-img', ['template' => 'partner-slider-item', 'filename' => $image->file_name]) }}"
                alt="">
        </div>
        @if ($item->title)
            <div class="mt-indent-sm">{{ $item->title }}</div>
        @endif
    </div>
@endif
