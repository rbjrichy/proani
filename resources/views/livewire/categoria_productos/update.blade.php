<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Categoria Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent='update({{$selected_id}})'>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="marca"></label>
                <input wire:model="marca" type="text" class="form-control" id="marca" placeholder="Marca">
                @error('marca') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="especie"></label>
                {!! Form::select('especie', $especies, $especie, ['class'=>'form-control','wire:model'=>'especie', 'id'=>'especie', 'placeholder'=>'Seleccione Especie']) !!}
                @error('especie') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div wire:loading  wire:target="new_image" class="alert alert-warning alert-dismissible">
                <h5><i class="icon fas fa-exclamation-triangle"></i> Imagen Cargando!</h5>
                Espere un momento hasta que la imagen se haya procesado.
            </div>
            <div class="col-12 text-center p-3">
                @if ($new_image)
                    <img class="profile-user-img img-fluid" src="{{$new_image->temporaryUrl()}}" alt="Logo marca producto" id="new_image">
                @else
                    <img class="profile-user-img img-fluid" src="{{asset(Storage::url($old_logo))}}" alt="Logo marca producto" id="img-foto">
                @endif

            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input wire:model="new_image" type="file" class="custom-file-input" id="customFile{{$identificador}}" name="new_image" accept="image/*">
                    <label wire:ignore class="custom-file-label" for="customFile">Cargar logo</label>
                    <input wire:model="logo" type="hidden">
                </div>
                @error('new_image')
                <div class="text-danger small m-1">{{ $message }}</div>
                @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" wire:loading.attr="disabled" wire:target="update(), new_image"  class="btn btn-primary" data-dismiss="modal">Guardar</button>
            </div>
       </div>
    </div>
</div>
