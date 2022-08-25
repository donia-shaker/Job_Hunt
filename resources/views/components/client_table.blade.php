<div class="col py-3">
    <div class="education d-flex justify-content-md-end align-items-center">
        <div class="container">
            <x-messages>
                <x-slot name='type'>primary</x-slot>
            </x-messages>
            <div id="message"></div>
            <table class="table shadow p-3 caption-top">
                <h1>{{$header}}</h1>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary my-3 main-color w-25" data-bs-toggle="modal" {{$attributes}}>
                    {{$add}}
                </button>
                <thead>
                    <tr class="p-3">
                        {{$thead}}
                    </tr>
                </thead>
                <tbody>
                    {{$tbody}}
                </tbody>
            </table>
        </div>
    </div>
</div>
