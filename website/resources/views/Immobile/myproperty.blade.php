@extends('Default.layout')
@section('content')
    <main class = "container">
        <div class = "row">
            <h2>Seus imóveis</h2>
        <table class="table">
            <thead>
                <tr>
                    <th class = "col-4"scope="col">Nome</th>
                    <th class = "col-2"scope="col">Valor</th>
                    <th class = "col-4"scope="col">Endereço</th>
                    <th scope="col" class = "text-center col-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($immobiles as $immobile)
                    <tr>
                        <td>{{ $immobile['name'] }}</td>
                        <td>{{ $immobile['value'] }}</td>
                        <td>timbo</td>
                        <td class = "text-center">
                            <div class = "row">
                            <a href ="{{route('immobile.edit',['immobile'=>$immobile])}}" class = "col-sm-6"><span class="badge badge-primary badge_button">Editar<span></a>
                            <a href ="" class = "col-sm-6"><span class="badge badge-danger badge_button">Desativar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
    </main>
@endsection
