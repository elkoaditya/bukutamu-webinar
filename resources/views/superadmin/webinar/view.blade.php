@extends('assets/body')
{{------------------------------------------- CSS ---------------------------------------}}
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/pages/app-invoice.css">
@endsection

{{------------------------------------------- JS ---------------------------------------}}
@section('js')
    <script src="{{ asset('vuexy') }}/app-assets/js/scripts/pages/app-invoice.js"></script>
@endsection
{{------------------------------------------- Content ---------------------------------------}}
@section('content')

    <section class="invoice-preview-wrapper">
        <div class="row invoice-preview">
            <!-- Invoice -->
            <div class="col-xl-9 col-md-8 col-12">
                <div class="card invoice-preview-card">
                    <div class="card-body invoice-padding pb-0">
                        <!-- Header starts -->
                        <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                            <div>
                                <div class="logo-wrapper">
                                    <h3 class="text-primary invoice-logo">Afresto System Indonesia</h3>
                                </div>
                            </div>
                            <div class="mt-md-0 mt-2">
                                <h4 class="invoice-title">
                                    trial Id:
                                    <span class="invoice-number">{{$webinar->id}}</span>
                                </h4>
                                <div class="invoice-date-wrapper">
                                    <p class="invoice-date-title">Created :</p>
                                    <p class="invoice-date">{{\Carbon\Carbon::parse($webinar->created_at)->toDateString()}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Header ends -->
                    </div>

                    <hr class="invoice-spacing" />

                    <!-- Address and Contact starts -->
                    <div class="card-body invoice-padding pt-0">
                        <div class="row invoice-spacing">
{{--                            <div class="col-xl-8 p-0">--}}
{{--                                <h6 class="mb-2">Invoice To:</h6>--}}
{{--                                <h6 class="mb-25">Thomas shelby</h6>--}}
{{--                                <p class="card-text mb-25">Shelby Company Limited</p>--}}
{{--                                <p class="card-text mb-25">Small Heath, B10 0HF, UK</p>--}}
{{--                                <p class="card-text mb-25">718-986-6062</p>--}}
{{--                                <p class="card-text mb-0">peakyFBlinders@gmail.com</p>--}}
{{--                            </div>--}}
                            <div class="col-xl-8 p-0 mt-xl-0 mt-2">
                                <h6 class="mb-2">Peserta trial Detail:</h6>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="pe-1">Nama Sekolah:</td>
                                        <td><span class="fw-bold">{{$webinar->namaSekolah}}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">Alamat sekolah</td>
                                        <td>{{$webinar->alamatSekolah}}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">Email</td>
                                        <td>{{$webinar->email}}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">Nama kepala sekolah</td>
                                        <td>{{$webinar->namaKepalaSekolah}}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">Nomor Telp kepala sekolah</td>
                                        <td>{{$webinar->notelpKapsek}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Address and Contact ends -->

                    <!-- Invoice Description starts -->

                    <!-- Invoice Description ends -->

                    <hr class="invoice-spacing" />

                    <!-- Invoice Note starts -->
                    <div class="card-body invoice-padding pt-0">
                        <div class="row">
                            <div class="col-12">
                                <span class="fw-bold">Note:</span>
                                <span>Data yang tertera diatas merupakan data yang di input oleh Admin atau saat peserta trial mendaftarkan diri</span>
                            </div>
                        </div>
                    </div>
                    <!-- Invoice Note ends -->
                </div>
            </div>
            <!-- /Invoice -->

            <!-- Invoice Actions -->
            <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                <div class="card">
                    <div class="card-body">
                        <form action="/superadmin/webinar/delete" method="post">@csrf
                            <input type="hidden" name="id" value="{{$webinar->id}}">
                            <button class="btn btn-danger w-100 mb-75" data-bs-toggle="modal" data-bs-target="#send-invoice-sidebar">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Invoice Actions -->
        </div>
    </section>

@endsection
