<x-layouts.app>
    <a href="{{ route('projects.index') }}">&lt; Voltar</a>

    <livewire:projects.show :project="{{ request()->route('projectId') }}" />
</x-layouts.app>
