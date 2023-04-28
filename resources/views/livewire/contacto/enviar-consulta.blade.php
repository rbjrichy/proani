<div>
    <form class="formulario" wire:submit.prevent="enviarWhatsapp">
        @if ($sucursal)
            <div class="sucursal-select">
                <span>{{$sucursal->nombre_sucursal}} </span>
                <dl>
                    <dt>{{$sucursal->persona->full_name}} </dt>
                    <dd>Cel.:{{$sucursal->persona->telefonos}}</dd>
                </dl>
            </div>
        @endif

        <div class="formulario-select">
            <div class="campo">
                <label for="especie">Especie</label>
                <div class="inline">
                    <input type="text" wire:model="especie" name="especie" id="especie">
                </div>
            </div>
            <div class="campo">
                <label for="edad">Edad</label>
                <div class="inline">
                    <input type="text" wire:model="edad" name="edad" id="edad">
                </div>
            </div>
            <div class="campo">
                <label for="medida">Medida</label>
                <div class="inline">
                    <input type="text" wire:model="medida" name="medida" id="medida">
                </div>
            </div>
            <div class="campo">
                <label for="fases">Fases</label>
                <div class="inline">
                    <input type="text" wire:model="fases" name="fases" id="fases">
                </div>
            </div>
            <div class="campo">
                <label for="consulta">Escribe tu consulta</label>
                <div class="inline">
                    <textarea wire:model="consulta" name="consulta" id="consulta" cols="30" rows="4"></textarea>
                </div>
            </div>
            @if ($sucursal)
            <div class="campo center">
                <button type="submit" class="btn-enviar text-center">Consultar</button>
            </div>
            @endif
        </div>
    </form>
</div>
