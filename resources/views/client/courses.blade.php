@extends('client.layout.master')
@section('content')
<div>
    <livewire:courses-livewire />
</div>
    
@endsection


@section('javaScript')
<script>
    window.addEventListener('close-modal', event => {
        closeModal('add_course');
    })
    window.addEventListener('close-update-modal', event => {
        closeModal('update_course');
    })
    window.addEventListener('close-delete-modal', event => {
        closeModal('delete_course');
    })
</script>
@endsection
