<div class="container-xxl flex-grow-1 container-p-y">
    <x-messages><x-slot name='type'>info</x-slot></x-messages>

    <h4 class="fw-bold py-2 mb-3 fs-2"> {{$tableName}}</h4>

    <!-- Bordered Table -->
    <div class="card">
        <h5 class="card-header">{{$button}}</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        {{$tableHead}}
                    </thead>
                    <tbody>
                        {{$tableBody}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Bordered Table -->
</div>