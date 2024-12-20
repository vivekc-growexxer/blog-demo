<div>
	<button type="submit" class="text-white inline-flex align-middle bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
		Save
		<div wire:loading wire:target="save">
			<img src="{{ asset('assets/img/loader.svg') }}" alt="" class="w-5 ms-2">
		</div>
	</button>
</div>