<h2>All messages</h2>
<ul>
@foreach($messages as $message)
    <li>{{ $message->user->name }} ({{ $message->user->email }}): {{ $message->content }}</li>
@endforeach
</ul>