<h1>Data Pegawai</h1>
<ul>
@foreach($pegawai as $p)
    <li>{{ $p->nama }} - {{ $p->email }}</li>
@endforeach
</ul>
