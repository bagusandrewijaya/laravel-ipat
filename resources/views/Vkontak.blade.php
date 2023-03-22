<a href="#"> + Add New Data</a>


<table border="1">
    <tr>
        <th>nama</th>
        <th>kontak</th>
 
    </tr>
    @foreach($kontak as $Get)
    <tr>
        <td>{{ $Get->nama}}</td>
        <td>{{ $Get->kontak}}</td>
       
        <td>
            <a href="/controller/edit/{{ $Get->id }}">Update</a>
            |
            <a href="/controller/hapus/{{ $Get->id }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
