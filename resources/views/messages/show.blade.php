<h2>Message {{ $message->id }}</h2>
<ul>
    <li>Username: {{ $message->user->name }}</li>
    <li>E-mail: {{ $message->user->email }}</li>
    <li>Message: {{ $message->content }} </li>
</ul>