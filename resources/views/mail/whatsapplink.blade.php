@component('mail::message')
<center>
    <img width="100em" height="100em" src="{{ $image }}">
</center>
<br />
Olá esse é o seu Whatsapp Link criado no site da Fidelix
<h1>{{$link}}</h1>
<p>Copie o link acima e cole no seu navegador ou coloque no seu site</p>
@component('mail::button', ['url' => $link])
Abrir
@endcomponent

Um abraço,<br>
Time {{ config('app.name') }}
@endcomponent
