@extends('assets/body')
{{------------------------------------------- CSS ---------------------------------------}}
@section('css')

    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/vendors/css/extensions/dragula.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/plugins/forms/form-quill-editor.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/pages/app-todo.css">
@endsection

{{------------------------------------------- JS ---------------------------------------}}
@section('js')


    <script src="{{ asset('vuexy') }}/app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/vendors/js/extensions/dragula.min.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/js/core/app-menu.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/js/core/app.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/js/scripts/pages/app-todo.js"></script>


@endsection
{{------------------------------------------- Content ---------------------------------------}}
@section('content')

    <div class="todo-application">
        <div class="content-area-wrapper container-xxl p-0">
            <div class="sidebar-left">
                <div class="sidebar">
                    <div class="sidebar-content todo-sidebar">
                        <div class="todo-app-menu">
                            <div class="add-task">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#new-task-modal">
                                            Tambah Peserta
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-primary w-100 " data-bs-toggle="modal" data-bs-target="#import-excel">
                                            Import Excel
                                        </button>
                                    </div>
                                    <a href="/superadmin/webinar/laporan" class="btn btn-gradient-dark w-100 mt-1">
                                        Download Laporan
                                    </a>
{{--                                    <button type="button" class="btn btn-gradient-dark w-100 mt-1" data-bs-toggle="modal" data-bs-target="#import-excel">--}}
{{--                                        Download Records--}}
{{--                                    </button>--}}
                                </div>
                            </div>
                            <div class="sidebar-menu-list">
                                <div class="mt-3 px-2 d-flex justify-content-between">
                                    <h6 class="section-label mb-1">Tipe pendaftaran</h6>
                                </div>
                                <div class="list-group list-group-labels">
                                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <span class="bullet bullet-sm bullet-primary me-1"></span>Admin
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <span class="bullet bullet-sm bullet-success me-1"></span>Register
                                    </a>
                                </div>
                                <div class="mt-3 px-2 d-flex justify-content-between">
                                    <h6 class="section-label mb-1">Kabupaten</h6>
                                </div>
                                <div class="list-group list-group-labels">
                                    @foreach($kabupatens as $kabupaten)
                                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                            <span style="background-color: grey" class="bullet bullet-sm me-1"></span>{{$kabupaten->value}}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="content-right">
                <div class="content-wrapper container-xxl p-0">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <div class="body-content-overlay"></div>
                        <div class="todo-app-list">
                            <!-- Todo search starts -->
                            <div class="app-fixed-search d-flex align-items-center">
                                <div class="sidebar-toggle d-block d-lg-none ms-1">
                                    <i data-feather="menu" class="font-medium-5"></i>
                                </div>
                                <div class="d-flex align-content-center justify-content-between w-100">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                        <input type="text" class="form-control" id="todo-search" placeholder="Search task" aria-label="Search..." aria-describedby="todo-search" />
                                    </div>
                                </div>

                            </div>
                            <!-- Todo search ends -->

                            <!-- Todo List starts -->
                            <div class="todo-task-list-wrapper ">
                                @if(count($webinars) == 0)
                                    <div class="m-1 alert alert-warning">Maaf anda belum memiliki peserta untuk trial, silahkan daftar peserta trial dengan menggunakan tombol yang ada pada kiri atas ( warna hijau untuk menambah peserta satu persatu, warna biru untuk menambah melalui excel )</div>
                                @else
                                    <ul class="todo-task-list media-list" id="todo-task-list">
                                        @foreach($webinars as $webinar)
                                            <a href="/superadmin/webinar/{{$webinar->id}}">
                                                <li class="todo-item">
                                                    <div class="todo-title-wrapper">
                                                        <div class="todo-title-area">
                                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                                            <div class="title-wrapper">
                                                                <span class="todo-title">{{$webinar->namaSekolah}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="todo-item-action">
                                                            <div class="badge-wrapper me-1">
                                                                <span class="badge rounded-pill badge-light-secondary">{{$webinar->kabupaten}}</span>
                                                            </div>
                                                            <div class="badge-wrapper me-1">
                                                                @if($webinar->from == "admin")
                                                                    <span class="badge rounded-pill badge-light-primary">Admin</span>
                                                                @else
                                                                    <span class="badge rounded-pill badge-light-success">Register</span>
                                                                @endif
                                                            </div>
                                                            <small class="text-nowrap text-muted me-1">{{\Carbon\Carbon::parse($webinar->created_at)->toDateString()}}</small>
                                                            {{--                                                        <div class="avatar">--}}
                                                            {{--                                                            <img src="{{ asset('vuexy') }}/app-assets/images/portrait/small/avatar-s-4.jpg" alt="user-avatar" height="32" width="32" />--}}
                                                            {{--                                                        </div>--}}
                                                        </div>
                                                    </div>
                                                </li>
                                            </a>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="no-results">
                                    <h5>No Items Found</h5>
                                </div>
                            </div>
                            <!-- Todo List ends -->
                        </div>

                        <!-- Right Sidebar starts -->
                        <div class="modal modal-slide-in sidebar-todo-modal fade" id="new-task-modal">
                            <div class="modal-dialog sidebar-lg">
                                <div class="modal-content p-0">
                                    <form id="" class="todo-modal needs-validation" method="post" action="/superadmin/webinar/add">@csrf
                                        <div class="modal-header align-items-center mb-1">
{{--                                            <h5 class="modal-title">Tambah Pesertas</h5>--}}
                                            <div class="todo-item-action d-flex align-items-center justify-content-between ms-auto">
                                                <i data-feather="x" class="cursor-pointer" data-bs-dismiss="modal" stroke-width="3"></i>
                                            </div>
                                        </div>
                                        <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                                            <div class="action-tags">
                                                <div class="mb-1">
                                                    <label for="todoTitleAdd" class="form-label">Nama Sekolah</label>
                                                    <input type="text" id="todoTitleAdd" name="namaSekolah" class="new-todo-item-title form-control" placeholder="SMK Negeri Kita Pintar 1" />
                                                </div>
                                                <div class="mb-1">
                                                    <label for="todoTitleAdd" class="form-label">Alamat Seklah</label>
                                                    <input type="text" id="todoTitleAdd" name="alamatSekolah" class="new-todo-item-title form-control" placeholder="Jl. Kita Masih Panjang, Semarang" />
                                                </div>
                                                <div class="mb-1">
                                                    <label for="todoTitleAdd" class="form-label">Email</label>
                                                    <input type="email" id="todoTitleAdd" name="email" class="new-todo-item-title form-control" placeholder="office@afresto.id" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-1">
                                                            <label for="todoTitleAdd" class="form-label">Nama Kepala Sekolah</label>
                                                            <input type="text" id="todoTitleAdd" name="namaKepalaSekolah" class="new-todo-item-title form-control" placeholder="Joko Aditya" />
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-1">
                                                            <label for="todoTitleAdd" class="form-label">No Telp Kepala Sekolah</label>
                                                            <input type="text" id="todoTitleAdd" name="notelpKapsek" class="new-todo-item-title form-control" placeholder="628********" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="task-tag" class="form-label d-block">Jenjang</label>
                                                    <select class="form-select task-tag" id="task-tag" name="jenjang" >
                                                        <option value="sma">SMA ( Sekolah Menengah Atas )</option>
                                                        <option value="smk">SMK ( Sekolah Menengah Kejuruan )</option>
                                                        <option value="slb">SLB ( Sekolah Luar Biasa )</option>
                                                    </select>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="task-tag" class="form-label d-block">Kabupaten</label>
                                                    <select class="form-select task-tag" id="task-tag" name="kabupaten" >
                                                        @foreach($kabupatens as $kabupaten)
                                                            <option value="{{$kabupaten->value}}">{{$kabupaten->value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="my-1">
                                                <button type="submit" class="btn btn-primary d-none add-todo-item me-1">Tambah Peserta</button>
                                                <button type="button" class="btn btn-outline-secondary add-todo-item d-none" data-bs-dismiss="modal">
                                                    Batal
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="modal modal-slide-in sidebar-todo-modal fade" id="import-excel">
                            <div class="modal-dialog sidebar-lg">
                                <div class="modal-content p-0">
                                    <form id="" class="todo-modal needs-validation" method="post" action="/superadmin/webinar/import" enctype="multipart/form-data">@csrf
                                        <div class="modal-header align-items-center mb-1">
                                            {{--                                            <h5 class="modal-title">Tambah Pesertas</h5>--}}
                                            <div class="todo-item-action d-flex align-items-center justify-content-between ms-auto">
                                                <i data-feather="x" class="cursor-pointer" data-bs-dismiss="modal" stroke-width="3"></i>
                                            </div>
                                        </div>
                                        <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                                            <div class="action-tags">
                                                <p>Untuk mendownload template Excelnya silahkan download disini ! <a href="/templatev1.xlsx">Template Excel</a> </p>
                                                <div class="mb-1">
                                                    <label for="todoTitleAdd" class="form-label">Upload Excel</label>
                                                    <input type="file" id="todoTitleAdd" name="file" class="new-todo-item-title form-control" placeholder="SMK Negeri Kita Pintar 1" />
                                                </div>
                                            </div>
                                            <div class="my-1">
                                                <button type="submit" class="btn btn-primary d-none add-todo-item me-1">Import Peserta</button>
                                                <button type="button" class="btn btn-outline-secondary add-todo-item d-none" data-bs-dismiss="modal">
                                                    Batal
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Right Sidebar ends -->

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
