<div class="mb-5">
	<label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900"> {{ $title }} </label>
	<textarea wire:model="{{ $wireModel }}" id="{{ $id }}" rows="{{ @$rows ?: 4 }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="{{ @$placeholder ?: '' }}"></textarea>
	<x-input-error :name="$wireModel" />
</div>