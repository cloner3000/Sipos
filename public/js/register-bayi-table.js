$(document).ready(function(){

  $('#table-register-1').DataTable({
    serverSide: true,
    processing: true,
    responsive: true,
    dom: 'tip',
    ajax: ajax,
    columns: [
      { data: 'no' },
      { data: 'anak.nama_anak' },
      { data: 'anak.tanggal_lahir' },
      { data: 'anak.berat_bayi_lahir' },
      { data: 'anak.status_ntob' },
      { data: 'anak.pemberian_asis.id_asi' },
      { data: 'anak.pemberianImunisasis.id' },
      { data: 'catatan' },
      { data: 'no' }
    ]
  });
});
