<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>

<body>
    @if(session()->has('success'))
    <p>{{ session()->get('success') }}</p>
    @endif

    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Aksi</th>
        </tr>
        @foreach($dataUser as $index => $user)
        <tr>
            <td>{{ ++$index }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->isoFormat('dddd, D MMMM YYYY') }}</td>
            <td>
                <div>
                    <form action="{{ route('users.hapus', $user->id) }}" method="post" onsubmit="return confirm('Data akan dihapus. Lanjutkan?')">
                        @csrf
                        @method('delete')
                        <button type="submit">Hapus</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>