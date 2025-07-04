<x-app-layout>
    <h5 class="text-center mt-5">Add Leave Type</h5>
    <div class="mt-3">
        <form method="POST" action="{{ route('positions.update', $position->position_id) }}" accept-charset="UTF-8"
            class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include ('positions.form', ['formMode' => 'edit'])
        </form>
    </div>
</x-app-layout>
