<div>
    <form class="formulario" wire:submit.prevent="enviarMensaje">
        <div class="campo">
            <label for="especialista">Departamento</label>
            <div class="inline">
                {!! Form::select('departamento', $departamentos, null, ['wire:model'=>'departamento', 'id'=>'departamento','placeholder'=>'Departamento']) !!}
                <button class="btn-enviar" >Buscar</button>
            </div>
        </div>
    </form>
</div>
