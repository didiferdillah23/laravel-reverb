<div>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-4">Send Realtime Message</h2>
                <form wire:submit.prevent="triggerEvent" class="form">
                    <input wire:model="message" type="text" class="form-control" placeholder="Write Message">
                    <button type="submit" class="btn btn-primary rouded-pill mt-5">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
