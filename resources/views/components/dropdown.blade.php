<div x-data="{ open: false }">
    <span @click="open = true">{{ $trigger }}</span>

    <div x-show="open" @click.outside="open = false">
        {{ $slot }}
    </div>
</div>
