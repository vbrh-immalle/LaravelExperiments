<h2>All users</h2>
<ul>
@foreach($users as $user)
    <li><a href="/users/{{ $user->id }}">{{ $user->name }}</a>
        ({{ $user->email }}): 
        birthdate = {{ $user->birthdate }}
    </li>
@endforeach
</ul>