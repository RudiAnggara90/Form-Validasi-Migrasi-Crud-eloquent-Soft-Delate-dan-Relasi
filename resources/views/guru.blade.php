<!DOCTYPE html>
<html>
<head>
    <title>Soft Delete</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
 
<div class="container">
 
    <div class="card mt-5">
        <div class="card-header text-center">
            Data Guru | <a href="https://www.malasngoding.com/laravel">www.malasngoding.com</a>
        </div>
        <div class="card-body">
            <a href="/guru" class="btn btn-sm btn-primary">Data Guru</a> |
            <a href="/guru/trash">Data Yang Dihapus</a>
            <br/>
            <br/>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th width="1%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($guru as $g)
                    <tr>
                        <td>{{ $g->nama }}</td>
                        <td>{{ $g->umur }}</td>
                        <td>
                            <form action="/guru/hapus/{{ $g->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
 
</body>
</html>