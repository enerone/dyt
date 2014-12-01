@extends('layouts.default')

@section('content')
    <h1>Sedes</h1>
    @foreach($sedes->chunk(4) as $sedesSet)
        <div class="row users">
            @foreach($sedesSet as $sede)
                <div class="col-md-3 user-block">

                   <h4 class="user-block-username">
                       {{ link_to_route('sedesshow_path', $sede->nombre_sede, $sede->nombre_sede) }}
                   </h4>
                </div>
            @endforeach
        </div>
    @endforeach
    {{ $sedes->links() }}
@stop