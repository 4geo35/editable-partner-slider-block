@props(["item"])
@if ($item->recordable->image)
    @php
        $block = $item->block;
        $image = $item->recordable->image;
    @endphp

    <div class="swiper-slide px-indent-half !w-[244px]">
        <a data-fslightbox="lightbox-partner-slider-block-{{ $block->id }}"
           class="block rounded-base overflow-hidden min-h-[116px]"
           href="{{ route('thumb-img', ['template' => 'original', 'filename' => $image->file_name]) }}">
            <img
                class="h-full object-cover object-center"
                src="{{ route('thumb-img', ['template' => 'partner-slider-item', 'filename' => $image->file_name]) }}"
                alt="">
        </a>
        @if ($item->title)
            <div class="mt-indent-sm">{{ $item->title }}</div>
        @endif
    </div>
@endif
