<div>
    <x-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Registrar Nueva Postualción</h3>
      </x-slot>
      <x-slot name="content">
        <form>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="Nombre usuario" class="font-bold"/>
                <x-input type="text" wire:model.defer="usuario.nombres_rs" class="w-full"/>
                <x-input-error for="usuario.nombres_rs"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="dni" class="font-bold"/>
                <x-input type="text" wire:model.defer="usuario.dni" class="w-full"/>
                <x-input-error for="usuario.dni"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="ruc" class="font-bold"/>
                <x-input type="text" wire:model.defer="usuario.ruc" class="w-full"/>
                <x-input-error for="usuario.ruc"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="correo" class="font-bold"/>
                <x-input type="text" wire:model.defer="usuario.correo" class="w-full"/>
                <x-input-error for="usuario.correo"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="celular" class="font-bold"/>
                <x-input type="text" wire:model.defer="usuario.celular" class="w-full"/>
                <x-input-error for="usuario.celular"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="rol" class="font-bold"/>
                <x-input type="text" wire:model.defer="usuario.rol" class="w-full"/>
                <x-input-error for="usuario.rol"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="user" class="font-bold"/>
                <x-input type="text" wire:model.defer="usuario.user" class="w-full"/>
                <x-input-error for="usuario.user"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="password" class="font-bold"/>
                <x-input type="text" wire:model.defer="usuario.password" class="w-full"/>
                <x-input-error for="usuario.password"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="archivo_cv" class="font-bold"/>
                <x-input type="text" wire:model.defer="usuario.archivo_cv" class="w-full"/>
                <x-input-error for="usuario.archivo_cv"/>
            </div>
        </div>

        </form>
      </x-slot>
      <x-slot name="footer">
        <x-secondary-button wire:click="$set('isOpen',false)" class="mx-2">Cancelar</x-secondary-button>
        <x-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store" class="disabled:opacity-25">
          Registrar
        </x-button>
      </x-slot>
    </x-dialog-modal>
</div>
