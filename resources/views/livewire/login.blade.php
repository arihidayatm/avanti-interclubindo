<div>
    @if (!$showForm)
        <button wire:click="getStarted" class="btn btn-primary">Vincere</button>
    @else
        <form class="card">
            <div class="card-body">
                <h2 class="card-title">Login</h2>
                <div class="form-control">
                    <label class="label">Email</label>
                    <input type="email" class="input input-bordered" wire:model="email">
                </div>
                <div class="form-control">
                    <label class="label">Password</label>
                    <input type="password" class="input input-bordered" wire:model="password">
                </div>
                <button class="btn btn-primary">Login</button>
            </div>
        </form>
    @endif
</div>
