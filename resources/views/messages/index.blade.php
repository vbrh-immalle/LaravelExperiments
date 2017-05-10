<h2>All messages</h2>
<ul>
@foreach($messages as $message)
    <li>
      <a href="/users/{{ $message->user->id }}">{{ $message->user->name }} ({{ $message->user->email }})</a>:
      {{ $message->content }}
      <a href="/messages/{{ $message->id }}">(details)</a>
    </li>
@endforeach
</ul>