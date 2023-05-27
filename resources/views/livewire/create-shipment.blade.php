<main class="main-content">
    <div class="container-fluid py-4">

        <form wire:submit.prevent="schedule">
            <label for="myfile">Extract PDF:</label>
            <x-pdf-extract
                wire:model="myfile"
                id="pdf-file"
            />

{{--            <x-date-picker--}}
{{--                wire:model="date"--}}
{{--                id="datepicker"--}}
{{--                autocomplete="off"--}}
{{--            />--}}
{{--            <button wire:click="myfile = null">Reset</button>--}}
        </form>


    </div>
</main>
