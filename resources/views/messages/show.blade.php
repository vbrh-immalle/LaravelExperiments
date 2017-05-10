<h2>Message {{ $message->id }}</h2>
<ul>
    <li>Username: <a href="/users/{{ $message->user->id }}">{{ $message->user->name }}</a></li>
    <li>E-mail: {{ $message->user->email }}</li>
    <li>Message: {{ $message->content }} </li>
</ul>