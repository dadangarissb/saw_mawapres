@extends('user.v_template_user')

@section('content')
<div class="row">
<div class="col-md-10">
  <h3>Data Peringkat Mawapres FMIPA UNS</h3>
</div>
<div class="col-md-2 pull-right">
  <a href="./add-mahasiswa" class="btn btn-success">Tambah data mahasiswa</a>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">LKTI (35%)</th>
      <th scope="col">Prestasi (25%)</th>
      <th scope="col">B. Inggris (20%)</th>
      <th scope="col">IPK (20%)</th>
      <th scope="col">Peringkat</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
  </tbody>
</table>
</div>
@endsection