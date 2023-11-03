<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Data User</title>
</head>

<body>
    <h3> Data User</h3>
    </hr>
    <table style="width:100%">
        <thead>
            <tr>
                <td bgcolor="red" width="5%">No</td>
                <td bgcolor="yellow">Judul Anime</td>
                <td bgcolor="yellow">Deskripsi Anime</td>
                <td bgcolor="red">Create Account</td>
                <td bgcolor="red">Update Account</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($R_animeku as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->judul }}</td>
                    <td>{{ $row->Deskripsi_anime }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td>{{ $row->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p align="right">
        Date : {{ $row->created_at }} </br>
        Personal In Charge</br>

        @if (Auth::check())
            <span class="hidden-xs" fontsize=15>{{ Auth::user()->level }}</span>
        @endif
        </br>
        </br>

        </br>
        </br>
        @if (Auth::check())
            <span class="hidden-xs">({{ Auth::user()->name }})</span>
        @endif
</body>

</html>
