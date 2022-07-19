@component('mail::message')
    <h1>Sua reserva foi efetuada com sucesso</h1>
    <p>Obrigado {{ $name }} por ter efetuado sua reserva
    <p>
    <p>Segue a abaixo o link do seu contrato de locação.</p>
    <a href="{{ asset('contrato.pdf') }}" target="_blank" style="color : blue;">Clique aqui para
        visualizar o contrato de locação</a>
@endcomponent
