@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <a href="{{ URL::to('monuments/create') }}" type="button" class="btn btn-primary">ajouter un monument</a>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Nom du moment</td>
                                <td>Description</td>
                                <td>Addresse</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        @foreach ($monuments as $monument)
                            <tbody>
                                <tr>
                                    <td>{{$monument->name}}</td>
                                    <td>{{$monument->desc}}</td>
                                    <td>{{$monument->address}}</td>
                                    <td> 
                                        <a href=" {{ URL::to('monuments/' . $monument->id . '/edit') }}" type="button" class="btn btn-info">Modifier</a>
                                        <a  href="{{ route('monuments.destroy', $monument->id) }}" data-method="delete" type="button" class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            </tbody>
                            {{--  @include ('posts.post')  --}}
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
