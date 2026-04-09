<x-tt::modal.aside wire:model="displayData">
    <x-slot name="title">{{ $itemId ? "Редактировать" : "Добавить" }} элемент</x-slot>
    <x-slot name="content">
        <form wire:submit.prevent="{{ $itemId ? 'update' : 'store' }}" class="space-y-indent-half"
              id="partnerSliderBlockDataForm-{{ $block->id }}">

            <div>
                <label for="partnerSliderImage-{{ $block->id }}" class="inline-block mb-2">Изображение</label>
                <input type="file" id="partnerSliderImage-{{ $block->id }}"
                       class="form-control {{ $errors->has('image') ? 'border-danger' : '' }}"
                       wire:loading.attr="disabled"
                       wire:model.lazy="image">
                <x-tt::form.error name="image"/>
            </div>

            <div>
                <label for="partnerSliderTitle-{{ $block->id }}" class="inline-block mb-2">
                    Партнер
                </label>
                <input type="text" id="partnerSliderTitle-{{ $block->id }}"
                       class="form-control {{ $errors->has("title") ? "border-danger" : "" }}"
                       wire:loading.attr="disabled"
                       wire:model="title">
                <x-tt::form.error name="title"/>
            </div>

            <div class="flex items-center space-x-indent-half">
                <button type="button" class="btn btn-outline-dark" wire:click="closeData">
                    Отмена
                </button>
                <button type="submit" form="partnerSliderBlockDataForm-{{ $block->id }}" class="btn btn-primary"
                        wire:loading.attr="disabled">
                    {{ $itemId ? "Обновить" : "Добавить" }}
                </button>
            </div>
        </form>
    </x-slot>
</x-tt::modal.aside>
