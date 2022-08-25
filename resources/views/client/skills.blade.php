@extends('client.layout.master')
@section('content')
<div>
    <livewire:skills-livewire />
</div>
    
@endsection


@section('javaScript')
<script>
    window.addEventListener('close-modal', event => {
        closeModal('add_skill');
    })
    window.addEventListener('close-update-modal', event => {
        closeModal('update_skill');
    })
    window.addEventListener('close-delete-modal', event => {
        closeModal('delete_skill');
    })
</script>
@endsection
