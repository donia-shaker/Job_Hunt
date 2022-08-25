<div wire:ignore.self class="modal fade" id="{{$modal_id}}" tabindex="-1" aria-labelledby="skillModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="skillModalLabel">{{$title}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="{{$action}}">
                <div class="modal_body">
                    {{$modal_body}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                        {{$button}}
                </div>
            </form>
        </div>
    </div>
</div>
