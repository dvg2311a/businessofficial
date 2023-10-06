
<form wire:submit="save" style="padding: 2% 5%">

    <div class="inv-pro">
        <div class="inv-container1">
            <div class="inv-container">
                <label for="sectorname" >Sector</label>
                   <select wire:model.live="selectedsector" class="input" style="margin-left: 35px" id="sector">
                        <option value="">Sectores</option>     {{--OPCIONES PARA ESCOGER--}}
                          @foreach ( $sectores as $sector )
                             <option value="{{$name->namesector}}">{{$name->namesector}}</option>
                    @endforeach
                </select>
            </div>

            @if (!is_null($namesector))
            <div class="inv-container">
                <label for="sectorname">Sector</label>
                <select wire:model.live="">

            @endif




