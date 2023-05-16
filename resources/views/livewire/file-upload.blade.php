@if (session()->has('message'))
<div class="text-center mt-4">
    <h1><i style="font-size: 100px;color:green" class="fa fa-check-circle"></i></h1></br>
    <h1>{{ session('message') }}</h1>
</div>
@else
<div class="col-md-8 mt-4">
<div class="card">
    <div class="card-header">
        <h2>Laravel Livewire</h2>
    </div>
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">First Name:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name" wire:model="first_name">
                @error('first_name') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Last Name:</label>
                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Last Name" wire:model="last_name">
                @error('last_name') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Email:</label>
                <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Last Name" wire:model="email">
                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput4">Message:</label>
                <textarea type="email" class="form-control" id="exampleFormControlInput4" wire:model="message" placeholder="Enter Message"></textarea>
                @error('message') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
           
            <button wire:click.prevent="send()" class="btn btn-success" wire:loading.attr="disabled">
                <span wire:loading.remove>Save</span>
                <span wire:loading>Saving..</span>
            </button>


        </form>
     </div>
</div>
</div>
@endif