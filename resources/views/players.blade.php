<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Players</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Logout Button -->
    <div class="position-absolute top-0 end-0 mt-3 me-3">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger">Logout</button>
        </form>
    </div>

    <div class="container">
        <div class="card mt-4">
            <div class="card-header bg-white">
                <h5 class="mb-0">Players List</h5>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Player</th>
                            <th>Added On</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($players->count() > 0)
                            @foreach($players as $player)
                                <tr>
                                    <td>{{ $player->id }}</td>
                                    <td>{{ $player->name }}</td>
                                    <td>{{ $player->created_at }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" class="text-center">No players found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
