<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project UAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h3 class="text-center mb-4">Data Dokter</h3>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <div class="container">
            <button type="button" class="btn btn-info">Add</button>
                <div class="row">
                   
                    <table class="table"> 
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Alamat</th>
                        </tr>
                        </thead>
                        <tbody>

                    @foreach ($data as $tampil)
                        <tr>
                            <th scope="row">{{ $tampil->id }}</th>
                            <td>{{ $tampil->nama }}</td>
                            <td>{{ $tampil->NoHp }}</td>
                            <td>{{ $tampil->alamat }}</td>
                            <td>
                                <button type="button" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-secondary">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                        
                    </tbody>
                 </table>
            </div>
        </div>
    </body>
</html>