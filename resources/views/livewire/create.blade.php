<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Title:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Body:</label>
        <textarea type="email" class="form-control" id="exampleFormControlInput2" wire:model="body" placeholder="Enter Body"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>

    <div wire:loading wire:target="store">
        Data Saving...
    </div>
</br>
    <div wire:poll.keep-alive>
        Current time: {{ now() }}
    </div></br>

    <div wire:offline>
        You are now offline.
    </div>
</br>


</form>