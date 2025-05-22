@extends('layout.main')
@section('component_content')
<main class="bg-[#FFFCF0]">
    <!-- content1 -->
    <div class="bg-[#FFE383] font-Poppins text-[#282222] h-auto flex flex-col md:flex-row items-center justify-between px-6 md:px-0 leading-relaxed text-pretty">
        <!-- Text Section -->
        <div class="w-full md:w-auto flex-1 h-full mt-[50px] md:mt-[100px] flex flex-col justify-center space-y-4 px-6 md:pl-[147px]">
            <h1 class="font-Poppins text-[28px] sm:text-[32px] md:text-[48px] lg:text-[64px] text-[#282222] font-bold">Our Mission</h1>
            <p class="font-Poppins text-[14px] sm:text-[16px] md:text-[18px] lg:text-[20px] text-[#282222] text-justify">
                The most vulnerable elderly and individuals with disabilities in Indonesia are presently confronting extreme food insecurity. Merry Meal continues to expand to satisfy the rising need for healthy and inexpensive meals.
            </p>
        </div>

        <!-- Image Section -->
        <div class="w-full md:w-auto flex-1 h-full flex justify-center md:justify-end mt-[20px] md:mt-0">
            <img class="w-full md:w-auto h-auto max-w-full object-cover" src={{ asset('storage/images/peopleGathering.jpg') }} alt="aboutUs">
        </div>
    </div>

    <!-- content2 -->
    <div class="bg-[#FFFCF0] w-full h-fit flex flex-col justify-center font-Poppins text-[#282222] px-6 sm:px-[147px] pt-[80px] sm:pt-[163px] leading-relaxed text-pretty">
        <div class="w-full flex flex-col justify-center">
            <h1 class="text-[28px] sm:text-[40px] font-bold mb-[20px] sm:mb-[30px]">
                What is Merry Meal
            </h1>

            <div class="about-us-paragraph text-[16px] sm:text-[20px] flex flex-col space-y-[20px] sm:space-y-[30px] text-justify">
                <p>
                    Merry Meal provides healthy, tasty, and cheap meals to a number of populations, including elderly,
                    those with physical disabilities and cognitive impairments, people who are ill or recuperating from
                    surgery, and others who require special dietary planning and support.
                </p>
                <p>
                    The majority of Merry Meal initiatives in Indonesia were launched by local groups that noticed a
                    need to assist feed the elderly in their areas. The programs are still run at the local level today.
                    Programs differ greatly in terms of size, service given, organization, and finance.
                </p>
                <p>
                    The bulk of our programs provide hot and ready-to-eat meals, while others offer frozen meals in
                    microwave-ready containers. Some hot meal programs offer an additional frozen meal in the days
                    preceding a weekend or holiday when there would otherwise be none.
                </p>
            </div>
        </div>
    </div>

    <!-- content3 -->
    <div class="bg-constribution bg-[#FFFCF0] w-full h-fit py-[100px] sm:py-[216px] px-6 sm:px-[147px] leading-relaxed text-pretty">
        <div class="constribution text-[#282222] text-center flex flex-col space-y-[50px] sm:space-y-[84px] w-full">
            <div class="constribution-text">
                <h1 class="font-semibold text-[28px] sm:text-[40px]">Our contributions on communities</h1>
            </div>
    
            <!-- Icons Section -->
            <div class="constribution-icons w-full h-fit grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                <!-- Icon 1 -->
                <div class="bg-i-fork flex flex-col items-center justify-center">
                    <div
                        class="i-fork h-[120px] sm:h-[177px] w-[120px] sm:w-[177px] bg-gradient-to-t from-[#FFA800] to-[#FFCE01] rounded-[50%] flex items-center justify-center text-[#FFFCF0] text-[50px] sm:text-[75px]">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <h2 class="text-[#282222] text-[20px] sm:text-[24px] font-semibold mt-[16px] sm:mt-[26px]">2,000</h2>
                    <h3 class="text-[#282222] text-[16px] sm:text-[20px] font-normal">Meals Delivered</h3>
                </div>
    
                <!-- Icon 2 -->
                <div class="bg-i-user flex flex-col items-center justify-center">
                    <div
                        class="i-user h-[120px] sm:h-[177px] w-[120px] sm:w-[177px] bg-gradient-to-t from-[#FFA800] to-[#FFCE01] rounded-[50%] flex items-center justify-center text-[#FFFCF0] text-[50px] sm:text-[75px]">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h2 class="text-[#282222] text-[20px] sm:text-[24px] font-semibold mt-[16px] sm:mt-[26px]">527</h2>
                    <h3 class="text-[#282222] text-[16px] sm:text-[20px] font-normal">Individuals Served</h3>
                </div>
    
                <!-- Icon 3 -->
                <div class="bg-i-handlove flex flex-col items-center justify-center">
                    <div
                        class="i-handlove h-[120px] sm:h-[177px] w-[120px] sm:w-[177px] bg-gradient-to-t from-[#FFA800] to-[#FFCE01] rounded-[50%] flex items-center justify-center text-[#FFFCF0] text-[50px] sm:text-[75px]">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </div>
                    <h2 class="text-[#282222] text-[20px] sm:text-[24px] font-semibold mt-[16px] sm:mt-[26px]">31</h2>
                    <h3 class="text-[#282222] text-[16px] sm:text-[20px] font-normal">Received Partner Funding</h3>
                </div>
    
                <!-- Icon 4 -->
                <div class="bg-i-person flex flex-col items-center justify-center">
                    <div
                        class="i-person h-[120px] sm:h-[177px] w-[120px] sm:w-[177px] bg-gradient-to-t from-[#FFA800] to-[#FFCE01] rounded-[50%] flex items-center justify-center text-[#FFFCF0] text-[50px] sm:text-[75px]">
                        <i class="fa-solid fa-person-walking-with-cane"></i>
                    </div>
                    <h2 class="text-[#282222] text-[20px] sm:text-[24px] font-semibold mt-[16px] sm:mt-[26px]">73%</h2>
                    <h3 class="text-[#282222] text-[16px] sm:text-[20px] font-normal">Recipients 58+ Years</h3>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection