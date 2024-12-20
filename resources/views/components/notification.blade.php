<div class="m-5">
	@if (session()->has(config('constants.SESSION.SUCCESS')))
	<div id="toast-default" class="flex items-center w-full p-4 text-gray-500 bg-green-200 rounded-lg shadow" role="alert">
		<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 bg-green-500 rounded-lg">
			<x-svg.success />
		</div>
		<div class="ms-3 text-sm font-normal"> {{ session()->get(config('constants.SESSION.SUCCESS')) }} </div>
		<button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-default" aria-label="Close">
			<span class="sr-only">Close</span>
			<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
			</svg>
		</button>
	</div>
	@endif

	@if (session()->has(config('constants.SESSION.ERROR')))
	<div id="toast-default" class="flex items-center w-full p-4 text-gray-500 bg-red-200 rounded-lg shadow" role="alert">
		<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 bg-red-500 rounded-lg">
			<x-svg.error />
		</div>
		<div class="ms-3 text-sm font-normal"> {{ session()->get(config('constants.SESSION.ERROR')) }} </div>
		<button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-default" aria-label="Close">
			<span class="sr-only">Close</span>
			<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
			</svg>
		</button>
	</div>
	@endif
</div>