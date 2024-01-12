<body onload="window.print()">

<h1>Data Siswa</h1>
<table border="1" width="75%">
    <tr>
    <th>No</th>
    <th>ID Guru</th>
    <th>Nama Guru</th>
    <th>Genre</th>
    <td>Tanggal</td>
    </tr>

    @foreach($guru as $row)
    <tr>
    <td>{{ $loop->iteration }} </td>
    <td>{{ $row->id_guru }}</td>
    <td>{{ $row->nama_guru }}</td>
    <td>{{ ($row->gender=='M') ? 'Male' : 'Female' }}</td>
    <td>{{ $row->created_at }}</td>
    </tr>
    @endforeach
</table>
    
</body>