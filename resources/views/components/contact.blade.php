@extends('layout.main')
@section('component_content')
<main class="bg-[#FFFCF0]">
    @include('components.navbar')
    <!-- header -->
    <div class="w-auto h-[145px] bg-[#FFCE01] flex justify-center">
        <h1 class="font-Poppins text-[32px] md:text-[48px] lg:text-[58px] text-[#282222] font-bold pt-[1rem]">
            CONTACT US
        </h1>
    </div>
    <!-- Content -->
    <div>
        <div class="w-full max-w-[1145px] h-auto bg-[#FFEEB1] m-auto my-[50px] md:my-[80px] lg:my-[100px] p-[20px] md:p-[30px] lg:p-[50px] leading-relaxed">
            <div class="font-Poppins text-[#282222]">

                <h3 class="text-[24px] md:text-[32px] lg:text-[40px] font-bold">COMPANY SUPPORT</h3>

                <p class="text-[16px] md:text-[18px] lg:text-[20px] mt-[10px] md:mt-[15px] lg:mt-[20px]">
                    We support our partners, volunteers, and members. Regarding concern and request we would like to
                    connect with you
                </p>

                <p class="text-[14px] md:text-[16px] lg:text-[18px] mt-[40px] md:mt-[60px] lg:mt-[80px] text-[#5E5E5E]">
                    For further question, contacts are available below:
                </p>

                <p class="text-[16px] md:text-[18px] lg:text-[20px] mt-[10px] md:mt-[15px] lg:mt-[20px]">
                    T: +62 (261) 3058270
                </p>
                <p class="text-[16px] md:text-[18px] lg:text-[20px]">
                    info@merrymeal.co.i
                </p>

                <p class="text-[16px] md:text-[18px] lg:text-[20px] mt-[10px] md:mt-[15px] lg:mt-[20px]">
                    Jl. Gunungsari Sawunggaling Wonokromo Surabaya Jawa Timur
                </p>
                <p class="text-[16px] md:text-[18px] lg:text-[20px]">
                    Surabaya, East Java
                </p>
                <p class="text-[16px] md:text-[18px] lg:text-[20px]">
                    60264
                </p>
            </div>
        </div>
    </div>
    @include('components.footer')
</main>
@endsection