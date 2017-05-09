<h2>All users</h2>
<ul>
@foreach($users as $user)
    <li>{{ $user->name }} ({{ $user->email }}): {{ $user->birthdate }}</li>
@endforeach
</ul>