{{-- <style>

    .navbar {
        background-color: black;
        position: relative;
        display: flex;
        flex-wrap: wrap;
        }

    }

</style> --}}


<div class="container">

    <div class="card">
      <div class="card-header">
        How to create livewire form in laravel with example
      </div>
      <div class="card-body">

    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Enter your email" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" placeholder="Enter a subject" wire:model="subject">
            @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control" id="comment" placeholder="Put your comment" wire:model="comment"></textarea>
            @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

      </div>
    </div>
