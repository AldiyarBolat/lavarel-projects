@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class=" pl-5 pr-5 pt-2" style="width: 1200px">
            <add-task></add-task>

            <ul class="list-group pt-3">
                @foreach($items as $item)
                    <task id={{ $item->id }}  text={{ $item->text }} done={{ $item->done }}></task>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
