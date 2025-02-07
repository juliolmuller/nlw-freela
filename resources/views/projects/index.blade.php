<x-layouts.app>
    <h1>Hello, there! 👋</h1>
    <a href="{{ route('projects.show', 'foo') }}">Ir para projeto &gt;</a>

    <livewire:projects.index />
</x-layouts.app>
