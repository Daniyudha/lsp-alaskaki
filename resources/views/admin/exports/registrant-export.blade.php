<table>
  <thead>
  <tr>
    <th>ID</th>
    <th>Waktu</th>
    <th>Skema</th>
    <th>Jenis Uji</th>
    <th>No KTP</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>No HP</th>
    <th>Email</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Provinsi</th>
    <th>Kabupaten</th>
    <th>Kecamatan</th>
    <th>Kelurahan</th>
    {{--<th>Kode Pos</th>--}}
    <th>Alamat Sesuai KTP</th>
    <th>Pendidikan Terakhir</th>
    {{--<th>Universitas/Sekolah</th>--}}
    <th>Bidang Usaha</th>
    <th>Nama Perusahaan</th>
    <th>Jabatan</th>
    <th>>Alamat Perusahaan</th>
    <th>Telp/Fax/E-mail</th>
    <th>Foto KTP</th>
    <th>Foto Ijazah</th>
    <th>Foto Sertifikat Pelatihan</th>
    <th>Status</th>
  </tr>
  </thead>
  <tbody>
  @foreach($registrants as $registrant)
    <tr>
      <td>{{ $registrant->unique_id }}</td>
      <td>{{ \Carbon\Carbon::parse($registrant->created_at)->format('d/m/Y H:i') }}</td>
      <td>{{ getSchemaCertificate($registrant->skema_sertifikasi) }}</td>
      <td>{{ $registrant->jenis_uji }}</td>
      <td>{{ $registrant->no_ktp }}</td>
      <td>{{ $registrant->nama_lengkap }}</td>
      <td>{{ $registrant->jenis_kelamin }}</td>
      <td>{{ $registrant->no_hp }}</td>
      <td>{{ $registrant->email }}</td>
      <td>{{ $registrant->tempat_lahir }}</td>
      <td>{{ \Carbon\Carbon::parse($registrant->tanggal_lahir)->format('d/m/Y H:i') }}</td>
      <td>{{ $registrant->provinsi }}</td>
      <td>{{ $registrant->kabupaten }}</td>
      <td>{{ $registrant->kecamatan }}</td>
      <td>{{ $registrant->kelurahan }}</td>
      {{--<td>{{ $registrant->kode_pos }}</td>--}}
      <td>{{ $registrant->alamat_sesuai_ktp }}</td>
      <td>{{ $registrant->pendidikan_terakhir }}</td>
      {{--<td>{{ $registrant->universitas_sekolah }}</td>--}}
      <td>{{ $registrant->bidang_usaha ?? '' }}</td>
      <td>{{ $registrant->kantor_sekarang ?? '' }}</td>
      <td>{{ $registrant->jabatan ?? '' }}</td>
      <td>{{ $registrant->alamat_kantor ?? '' }}</td>
      <td>{{ $registrant->phone_fax_email_kantor ?? '' }}</td>
      <td>{{ asset('storage/foto_ktp/'.$registrant->foto_ktp) }}</td>
      <td>{{ asset('storage/foto_ijazah/'.$registrant->foto_ijazah) }}</td>
      <td>{{ $registrant->sertifikat_pelatihan ? asset('storage/sertifikat_pelatihan/'.$registrant->sertifikat_pelatihan) : '' }}</td>
      <td>{{ ucwords($registrant->status) }}</td>
    </tr>
  @endforeach
  </tbody>
</table>