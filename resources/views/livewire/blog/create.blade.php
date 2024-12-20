<div class="my-5">
    <form wire:submit="save" class="max-w-sm mx-auto" enctype="multipart/form-data">
        <x-select id="category_id" title="Category" wireModel="form.category_id" :options="$categories" />
        <x-normal-input id="blog_title" title="Title" wireModel="form.title" placeholder="enter blog title" modalType="wire:model.live.debounce.500ms" />
        <x-normal-input id="slug" title="Slug" wireModel="form.slug" placeholder="enter blog slug" />
        <x-textarea id="description" title="Description" wireModel="form.description" placeholder="enter blog description" />
        <x-normal-input id="publish" title="Publish At" type="date" wireModel="form.published_at" />
        <x-switch title="Active?" wireModel="form.is_active" />

        <x-save-button />
    </form>
</div>
