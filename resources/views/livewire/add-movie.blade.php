<div>
    <form wire:submit='save' class="border border-indigo-800 p-5 mx-10 shadow-xl rounded-xl">
        @csrf

        @if (!$category)
            <p>Select a Category</p>
        @endif
        <flux:select wire:model.live="category" placeholder="Choose Category...">
            @foreach ($categories as $cat)
                <flux:select.option value="{{ $cat->id }}">{{ $cat->name }}</flux:select.option>
            @endforeach
        </flux:select>

        <div class="grid grid-cols-4 gap-2 my-3">
            <div class="col-span-3">
                <flux:input name="title" label="Title:" type="text" autofocus placeholder="Title"
                    wire:model='title' />
            </div>
            <flux:input name="rank" label="Rank:" type="integer" autofocus placeholder="0" wire:model='rank' />
        </div>
        <flux:button variant="primary" type="submit">Add</flux:button>
    </form>
</div>
