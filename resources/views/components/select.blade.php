<div class="mb-5">
	<label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900"> {{ $title }} </label>
	<select wire:model="{{ $wireModel }}" id="{{ $id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
		<option value=""> --- Select any --- </option>
		@foreach($options as $option)
			<option value="{{ $option->id }}"> {{ $option->name }} </option>
		@endforeach
	</select>
	<x-input-error :name="$wireModel" />
</div>