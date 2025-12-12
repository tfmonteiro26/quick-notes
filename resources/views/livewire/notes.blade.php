<div class="relative mb-6 w-full">
    <flux:heading size="xl" level="1">{{ __('Notes') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">{{ __('Manage your notes') }}</flux:subheading>
    <flux:separator variant="subtle" />

    <flux:modal.trigger name="create-note">
    <flux:button class="mt-4">Create Note</flux:button>
    </flux:modal.trigger>

    <livewire:create-note />
</div>
