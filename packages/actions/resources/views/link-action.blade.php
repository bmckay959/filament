<x-filament-actions::action
    :action="$action"
    component="filament::link"
    :icon-position="$getIconPosition()"
    class="filament-actions-link-action"
>
    {{ $getLabel() }}
</x-filament-actions::action>