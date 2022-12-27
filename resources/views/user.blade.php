<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <th scope="row">{{$user->id ?? null}}</th>
        <td>{{$user->name ?? null}}</td>
        <td>{{$user->email ?? null}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
