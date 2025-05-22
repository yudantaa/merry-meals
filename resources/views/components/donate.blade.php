@extends('layout.main')
@section('component_content')
<main class="font-poppins">
    <div class="bg-donate-before-login h-[400px] sm:h-[500px] md:h-[600px] lg:h-[600px] w-full leading-relaxed flex items-center">
        <div class="donate-section-one h-full w-full px-4 bg-no-repeat bg-cover bg-center flex items-center"
            style="background-image: linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('storage/images/donateBackground2.jpg');">
            <div
                class="donate-section-one-content bg-[#FFFCF0] h-auto md:h-[352px] w-full max-w-[90%] sm:max-w-[80%] md:max-w-[680px] sm:ml-0 sm:pl-6 md:pl-[48px] py-8 md:py-[89px] px-6 text-[#282222] flex flex-col space-y-6 md:space-y-[24px] text-left bg-opacity-40">
                <h1 class="text-[28px] md:text-[40px] font-medium">We need your help</h1>
                <h2 class="text-[16px] md:text-[20px] text-justify">Donated contributions help lonely seniors and persons with
                    disabilities have access to nutritious, well-balanced meals that promote independence and
                    overall health.</h2>
            </div> <!-- donate-section-one-content -->
        </div> <!-- donate-section-one -->
    </div> <!-- bg-donate-before-login -->

    <div class="donate-section-two bg-[#FFFCF0] py-12 md:py-[129px] flex justify-center">
        <div
            class="donate-section-two-content h-fit w-full md:w-[615px] text-[#282222] flex flex-col items-center space-y-8 md:space-y-[56px] px-4">
            <h1 class="text-[28px] md:text-[40px] font-medium text-center">Single help create a difference</h1>
            <p class="text-[16px] md:text-[20px] text-justify">
                Your contribution to Merry Meal will make a difference in the lives of our elders and the
                homebound. Every dollar counts in ending senior hunger. Please be as charitable as you can. And
                I appreciate your help in advance. Every day, our drivers and volunteers visit the most
                vulnerable members of our communities, the elders. Simply stated, a meal is provided. In
                actuality, though, these deliveries bring far more everyday engagement and camaraderie. This
                visitor may be the only person the senior sees all day on some days. It is critical that we
                check on our elderly neighbors.
            </p>
            <a href="{!! route('donation.form') !!}">
                <button
                    class="h-[50px] md:h-[63px] w-[200px] sm:w-[200px] md:w-[200px] bg-[#FFFCF0] text-[#A07C00] border-2 border-[#A07C00] box-border hover:scale-105 duration-500">
                    Start to Donate
                </button>
            </a>
        </div> <!-- donate-section-two-content -->
    </div> <!-- donate-section-two -->
</main>
@endsection