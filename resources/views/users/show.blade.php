<h2>User {{ $user->id }}</h2>
<ul>
    <li>Name: {{ $user->name }}</li>
    <li>E-mail: {{ $user->email }}</li>
    <li>Birthdate: {{ $user->birthdate }} </li>
    <li>Number of messages: {{ $user->messages->count() }}</li>
    @if ($user->messages->count() > 0)
    <li>Messages:
        <ol>
        @foreach($user->messages as $msg)
            <li>({{ $msg->created_at ?: "unknown" }}) {{ $msg->content }}</li>
        @endforeach
        </ol>
    </li>
    @endif
</ul>