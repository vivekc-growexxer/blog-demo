<div class="inline-flex">
	@isset($edit)
		<a href="{{ $edit }}">
			<button class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 mx-2 text-center">
				<x-svg.edit />
			</button>
		</a>
	@endisset

	@isset($delete)
		<button onclick="setBlogId({{ $id }})" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center">
			<x-svg.delete />
		</button>
	@endisset
</div>
