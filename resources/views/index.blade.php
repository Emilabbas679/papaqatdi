@extends('layouts.site')

@section('content')
    <main class="clearfix">
        <div class="main_center clearfix">
            <div class="header_contain clearfix">
                <h1><span>"PAPAQATDI"</span>ya xos geldiniz </h1>
            </div>
            <form action="{{route('save')}}" method="post" id="start_form" class="worker_info clearfix">
                @csrf
{{--                <div class="accses_area clearfix">Siz uğurla qeydiyyatdan keçdiniz </div>--}}
                <div class="form_body clearfix">
                    <div class="form_row clearfix">
                        <div class="fcol-3 clearfix">
                            <label for="name_1" class="inpt_label">Ad</label>
                        </div>
                        <div class="fcol-9 clearfix">
                            <input type="text" id="name_1" name="name" placeholder="Adınızı daxil edin" class="inpt_info">
                        </div>
                    </div>

                    <div class="form_row clearfix">
                        <div class="fcol-3 clearfix">
                            <label for="name_1" class="inpt_label">Soyad</label>
                        </div>
                        <div class="fcol-9 clearfix">
                            <input type="text" id="name_1" name="surname" placeholder="Soyadınızı daxil edin" class="inpt_info">
                        </div>
                    </div>

                    <div class="form_row clearfix">
                        <div class="fcol-3 clearfix">
                            <label for="name_5" class="inpt_label">Mobile nömrə</label>
                        </div>
                        <div class="fcol-9 clearfix">
                            <input type="text" id="name_5" name="phone"  placeholder="0502002020" class="inpt_info phone">
                        </div>
                    </div>

                    <div class="form_row clearfix">
                        <div class="fcol-3 clearfix">
                            <!-- <label for="name_5" class="inpt_label">Tel:</label> -->
                        </div>
                    </div>
                </div>
                <div class="info_area">
                    Bu  Novruz Texnomartda...
                </div>
                <div class="btn_area clearfix">
                    <div class="info_btn">Bunun ucun</div>
                    <button type="submit" class="str-btn">Başlayaq </button>
                </div>
                <div class="image_area clearfix">
                    <img src="/site/img/papaq.png?v1" alt="">
                </div>
            </form>
        </div>
    </main>
@endsection


