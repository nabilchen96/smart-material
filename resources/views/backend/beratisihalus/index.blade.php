@extends('backend.app')
@push('style')
    <style>
        #myTable_filter input {
            height: 29.67px !important;
        }

        #myTable_length select {
            height: 29.67px !important;
        }

        .btn {
            border-radius: 50px !important;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #9e9e9e21 !important;
        }
    </style>
@endpush
@section('content')
    <div class="row" style="margin-top: -200px;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-12 col-xl-8 mb-xl-0">
                    <h3 class="font-weight-bold text-white">Data Pengujian Berat Isi Agregat Halus/Pasir</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card w-100">
                <div class="card-body">
                    {{-- @if (Auth::user()->role == 'Admin')                         --}}
                    <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" data-target="#modal">
                        Tambah
                    </button>
                    {{-- @endif --}}

                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home" role="tab" data-toggle="tab"
                                onclick="getData()">Baru <sup><span
                                        class="badge badge-warning">{{ $baru }}</span></sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#buzz" role="tab" data-toggle="tab"
                                onclick="getData2()">Terverifikasi <sup><span
                                        class="badge badge-success">{{ $verif }}</span></sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#references" role="tab" data-toggle="tab"
                                onclick="getData3()">Ditolak <sup><span
                                        class="badge badge-danger">{{ $tolak }}</span></sup></a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="home">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Kode Uji</th>
                                            <th>Berat Pasir</th>
                                            <th>Berat Satuan Pasir</th>
                                            <th>Lampiran</th>
                                            <th>Status</th>
                                            <th width="5%"></th>
                                            <th width="5%"></th>
                                            <th width="5%"></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buzz">
                            <div class="table-responsive">
                                <table id="myTable2" class="table table-striped" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Kode Uji</th>
                                            <th>Berat Pasir</th>
                                            <th>Berat Satuan Pasir</th>
                                            <th>Lampiran</th>
                                            <th>Status</th>
                                            <th width="5%"></th>
                                            <th width="5%"></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="references">
                            <div class="table-responsive">
                                <table id="myTable3" class="table table-striped" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Kode Uji</th>
                                            <th>Berat Pasir</th>
                                            <th>Berat Satuan Pasir</th>
                                            <th>Lampiran</th>
                                            <th>Status</th>
                                            <th width="5%"></th>
                                            <th width="5%"></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="form" enctype="multipart/form-data">
                    <div class="modal-header p-3">
                        <h5 class="modal-title m-2" id="exampleModalLabel">Form Uji</h5>
                    </div>
                    <div class="modal-body">
                        <h4>Benda Uji :</h4>
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="exampleInputEmail1">a. Pasir Asal</label>
                            <input name="pasir_asal" id="pasir_asal" type="text" placeholder="Pasir Asal"
                                class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp"
                                required>
                            <span class="text-danger error" style="font-size: 12px;" id="pasir_asal_alert"></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">b. Diameter Maksimum</label>
                            <input name="diameter_maksimum" id="diameter_maksimum" type="text"
                                placeholder="Diameter Maksimum" class="form-control form-control-sm"
                                onKeyPress="return goodchars(event,'1234567890.',this)" aria-describedby="emailHelp"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">c. Keadaan Pasir</label>
                            <select name="keadaan_pasir" class="form-control" id="keadaan_pasir" required>
                                <option value="Kering Tungku">Kering Tungku</option>
                                <option value="Agak Basah">Agak Basah</option>
                                <option value="Jenuh Kering Muka">Jenuh Kering Muka</option>
                            </select>
                            <span class="text-danger error" style="font-size: 12px;" id="keadaan_pasir_alert"></span>
                        </div>
                        <h4>Hasil Pengujian</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">a. Berat Bejana (B1) Kg</label>
                            <input name="b1" id="b1" type="text" placeholder="Berat Bejana"
                                class="form-control form-control-sm"
                                onKeyPress="return goodchars(event,'1234567890.',this)" aria-describedby="emailHelp"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">b. Berat Pasir + Bejana (B2) Kg</label>
                            <input name="b2" id="b2" type="text" placeholder="Berat Pasir + Bejana"
                                class="form-control form-control-sm"
                                onKeyPress="return goodchars(event,'1234567890.',this)" aria-describedby="emailHelp"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">c. Ukuran Bejana</label><br>
                            <label for="exampleInputEmail1">diameter bagian dalam (mm)</label>
                            <input name="diameter_dalam" id="diameter_dalam"
                                onKeyPress="return goodchars(event,'1234567890.',this)" type="text"
                                placeholder="diameter bagian dalam" class="form-control form-control-sm"
                                aria-describedby="emailHelp" required>
                            <br>
                            <label for="exampleInputEmail1">tinggi bejana bagian dalam (mm)</label>
                            <input name="tinggi_bejana_dalam" id="tinggi_bejana_dalam"
                                onKeyPress="return goodchars(event,'1234567890.',this)" type="text"
                                placeholder="tinggi bejana dalam" class="form-control form-control-sm"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lampiran Bahan Uji (.pdf, max:5mb)</label>
                            <input name="lampiran_bahan_uji" id="lampiran_bahan_uji" type="file"
                                placeholder="Lampiran Bahan Uji (.pdf)" class="form-control form-control-sm"
                                aria-describedby="emailHelp">
                            <span class="text-danger error" style="font-size: 12px;"
                                id="lampiran_bahan_uji_alert"></span>
                        </div>

                    </div>
                    <div class="modal-footer p-3">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                        <button id="tombol_kirim" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal_tolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="form_tolak" enctype="multipart/form-data">
                    <div class="modal-header p-3">
                        <h5 class="modal-title m-2" id="exampleModalLabel">Form Uji</h5>
                    </div>
                    <div class="modal-body">
                        <h4>Benda Uji :</h4>
                        <input type="hidden" name="id" id="id_tolak">
                        <div class="form-group">
                            <label for="exampleInputEmail1">a. Pasir Asal</label>
                            <input name="pasir_asal" id="pasir_asal_tolak" type="text" placeholder="Pasir Asal"
                                class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp"
                                readonly>
                            <span class="text-danger error" style="font-size: 12px;" id="pasir_asal_alert"></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">b. Diameter Maksimum</label>
                            <input name="diameter_maksimum" id="diameter_maksimum_tolak" type="text"
                                placeholder="Diameter Maksimum" class="form-control form-control-sm"
                                onKeyPress="return goodchars(event,'1234567890.',this)" aria-describedby="emailHelp"
                                readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">c. Keadaan Pasir</label>
                            <select name="keadaan_pasir" class="form-control" id="keadaan_pasir_tolak" readonly>
                                <option value="Kering Tungku">Kering Tungku</option>
                                <option value="Agak Basah">Agak Basah</option>
                                <option value="Jenuh Kering Muka">Jenuh Kering Muka</option>
                            </select>
                            <span class="text-danger error" style="font-size: 12px;" id="keadaan_pasir_alert"></span>
                        </div>
                        <h4>Hasil Pengujian</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">a. Berat Bejana (B1) Kg</label>
                            <input name="b1" id="b1_tolak" type="text" placeholder="Berat Bejana"
                                class="form-control form-control-sm"
                                onKeyPress="return goodchars(event,'1234567890.',this)" aria-describedby="emailHelp"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">b. Berat Pasir + Bejana (B2) Kg</label>
                            <input name="b2" id="b2_tolak" type="text" placeholder="Berat Pasir + Bejana"
                                class="form-control form-control-sm"
                                onKeyPress="return goodchars(event,'1234567890.',this)" aria-describedby="emailHelp"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">c. Ukuran Bejana</label><br>
                            <label for="exampleInputEmail1">diameter bagian dalam (mm)</label>
                            <input name="diameter_dalam" id="diameter_dalam_tolak"
                                onKeyPress="return goodchars(event,'1234567890.',this)" type="text"
                                placeholder="diameter bagian dalam" class="form-control form-control-sm"
                                aria-describedby="emailHelp" readonly>
                            <br>
                            <label for="exampleInputEmail1">tinggi bejana bagian dalam (mm)</label>
                            <input name="tinggi_bejana_dalam" id="tinggi_bejana_dalam_tolak"
                                onKeyPress="return goodchars(event,'1234567890.',this)" type="text"
                                placeholder="tinggi bejana dalam" class="form-control form-control-sm"
                                aria-describedby="emailHelp" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alasan Tolak</label>
                            <textarea class="form-control" readonly name="" id="alasan_tolak" cols="30" rows="10"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer p-3">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            getData()
        })

        function getData() {

            $('#myTable').DataTable().clear().destroy();

            $("#myTable").DataTable({
                "ordering": false,
                ajax: '/data-berat-isi-halus',
                processing: true,
                'language': {
                    'loadingRecords': '&nbsp;',
                    'processing': 'Loading...'
                },
                columns: [{
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: "kode_uji"
                    },

                    {
                        data: "berat_pasir"
                    },

                    {
                        data: "berat_satuan_pasir"
                    },

                    {
                        render: function(data, type, row, meta) {
                            return `<a href=storage/${row.lampiran_bahan_uji} target="_blank">
                                  Lihat
                                </a>`
                        }
                    },

                    {
                        render: function(data, type, row, meta) {
                            return `<span class="badge badge-primary">Baru</span>`
                        }
                    },

                    {
                        render: function(data, type, row, meta) {
                            return `<a data-toggle="modal" data-target="#modal"
                                    data-bs-id=` + (row.id) + ` href="javascript:void(0)">
                                    <i style="font-size: 1.5rem;" class="text-success bi bi-grid"></i>
                                </a>`
                        }
                    },
                    {
                        render: function(data, type, row, meta) {
                            return `<span class="badge badge-warning">Menunggu Verifikasi</span>`
                        }
                    },
                    {
                        render: function(data, type, row, meta) {
                            return `<a href="javascript:void(0)" onclick="hapusData(` + (row
                                .id) + `)">
                                    <i style="font-size: 1.5rem;" class="text-danger bi bi-trash"></i>
                                </a>`
                        }
                    },
                ]
            })
        }

        function getData2() {

            $('#myTable2').DataTable().clear().destroy();

            $("#myTable2").DataTable({
                "ordering": false,
                ajax: '/data-berat-isi-halus-acc',
                processing: true,
                'language': {
                    'loadingRecords': '&nbsp;',
                    'processing': 'Loading...'
                },
                columns: [{
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: "kode_uji"
                    },

                    {
                        data: "berat_pasir"
                    },

                    {
                        data: "berat_satuan_pasir"
                    },

                    {
                        render: function(data, type, row, meta) {
                            return `<a href=storage/${row.lampiran_bahan_uji} target="_blank">
                      Lihat
                    </a>`
                        }
                    },

                    {
                        render: function(data, type, row, meta) {
                            return `<span class="badge badge-success">Terverifikasi</span>`
                        }
                    },


                    {
                        render: function(data, type, row, meta) {
                            return `<a href=/cetak-berat-isi-halus/${row.id} target="_blank">
                        <i style="font-size: 1.5rem;" class="text-warning bi bi-file-pdf"></i>
                    </a>`
                        }
                    },
                    {
                        render: function(data, type, row, meta) {
                            return `<a href="javascript:void(0)" onclick="hapusData(` + (row
                                .id) + `)">
                        <i style="font-size: 1.5rem;" class="text-danger bi bi-trash"></i>
                    </a>`
                        }
                    },
                ]
            })
        }

        function getData3() {

            $('#myTable3').DataTable().clear().destroy();

            $("#myTable3").DataTable({
                "ordering": false,
                ajax: '/data-berat-isi-halus-tolak',
                processing: true,
                'language': {
                    'loadingRecords': '&nbsp;',
                    'processing': 'Loading...'
                },
                columns: [{
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: "kode_uji"
                    },

                    {
                        data: "berat_pasir"
                    },

                    {
                        data: "berat_satuan_pasir"
                    },

                    {
                        render: function(data, type, row, meta) {
                            return `<a href=storage/${row.lampiran_bahan_uji} target="_blank">
          Lihat
        </a>`
                        }
                    },

                    {
                        render: function(data, type, row, meta) {
                            return `<span class="badge badge-danger">Ditolak</span>`
                        }
                    },

                    {
                        render: function(data, type, row, meta) {
                            return `<a data-toggle="modal" data-target="#modal_tolak"
                                    data-bs-id=` + (row.id) + ` href="javascript:void(0)">
                                    <i style="font-size: 1.5rem;" class="text-success bi bi-grid"></i>
                                </a>`
                        }
                    },

                    {
                        render: function(data, type, row, meta) {
                            return `<a href="javascript:void(0)" onclick="hapusData(` + (row
                                .id) + `)">
            <i style="font-size: 1.5rem;" class="text-danger bi bi-trash"></i>
        </a>`
                        }
                    },
                ]
            })
        }

        $('#modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('bs-id') // Extract info from data-* attributes
            var cok = $("#myTable").DataTable().rows().data().toArray()

            let cokData = cok.filter((dt) => {
                return dt.id == recipient;
            })

            document.getElementById("form").reset();
            document.getElementById('id').value = ''
            $('.error').empty();

            if (recipient) {
                var modal = $(this)
                modal.find('#id').val(cokData[0].id)
                modal.find('#pasir_asal').val(cokData[0].pasir_asal)
                modal.find('#diameter_maksimum').val(cokData[0].diameter_maksimum)
                modal.find('#keadaan_pasir').val(cokData[0].keadaan_pasir)
                modal.find('#b1').val(cokData[0].b1)
                modal.find('#b2').val(cokData[0].b2)
                modal.find('#diameter_dalam').val(cokData[0].diameter_dalam)
                modal.find('#tinggi_bejana_dalam').val(cokData[0].tinggi_bejana_dalam)
            }
        })

        $('#modal_tolak').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('bs-id') // Extract info from data-* attributes
            var cok = $("#myTable3").DataTable().rows().data().toArray()

            let cokData = cok.filter((dt) => {
                return dt.id == recipient;
            })

            document.getElementById("form_tolak").reset();
            document.getElementById('id_tolak').value = ''
            $('.error').empty();

            if (recipient) {
                var modal = $(this)
                modal.find('#id_tolak').val(cokData[0].id)
                modal.find('#pasir_asal_tolak').val(cokData[0].pasir_asal)
                modal.find('#diameter_maksimum_tolak').val(cokData[0].diameter_maksimum)
                modal.find('#keadaan_pasir_tolak').val(cokData[0].keadaan_pasir)
                modal.find('#b1_tolak').val(cokData[0].b1)
                modal.find('#b2_tolak').val(cokData[0].b2)
                modal.find('#diameter_dalam_tolak').val(cokData[0].diameter_dalam)
                modal.find('#tinggi_bejana_dalam_tolak').val(cokData[0].tinggi_bejana_dalam)
                modal.find('#alasan_tolak').val(cokData[0].alasan)
            }
        })

        form.onsubmit = (e) => {

            let formData = new FormData(form);

            e.preventDefault();

            document.getElementById("tombol_kirim").disabled = true;

            axios({
                    method: 'post',
                    url: formData.get('id') == '' ? '/store-berat-isi-halus' : '/update-berat-isi-halus',
                    data: formData,
                })
                .then(function(res) {
                    //handle success         
                    if (res.data.responCode == 1) {

                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: res.data.respon,
                            timer: 3000,
                            showConfirmButton: false
                        })

                        // $("#modal").modal("hide");
                        // $('#myTable').DataTable().clear().destroy();
                        // getData()
                        setTimeout(() => {
                            location.reload(res.data.respon);
                        }, 1500);

                    } else {
                        //error validation
                        document.getElementById('lampiran_bahan_uji_alert').innerHTML = res.data.respon
                            .lampiran_bahan_uji ?? ''
                        document.getElementById('email_alert').innerHTML = res.data.respon.email ?? ''
                    }

                    document.getElementById("tombol_kirim").disabled = false;
                })
                .catch(function(res) {
                    document.getElementById("tombol_kirim").disabled = false;
                    //handle error
                    console.log(res);
                    Swal.fire({
                            icon: 'error',
                            title: 'Perhitungan Error!',
                            text: res.response.data.message,
                            timer: 3000,
                            showConfirmButton: false
                        })
                });
        }

        hapusData = (id) => {
            Swal.fire({
                title: "Yakin hapus data?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Batal"

            }).then((result) => {

                if (result.value) {
                    axios.post('/delete-berat-isi-halus', {
                            id
                        })
                        .then((response) => {
                            if (response.data.responCode == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    timer: 2000,
                                    showConfirmButton: false
                                })

                                $('#myTable').DataTable().clear().destroy();
                                getData();

                            } else {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Gagal...',
                                    text: response.data.respon,
                                })
                            }
                        }, (error) => {
                            console.log(error);
                        });
                }

            });
        }
    </script>
@endpush
