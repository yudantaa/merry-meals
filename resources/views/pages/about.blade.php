<x-app-layout>
  <div class="bg-[#FFFCF0]">
    <!-- content1 -->
    <div
      class="font-Poppins flex h-auto flex-col items-center justify-between gap-6 bg-[#FFE383] px-6 leading-relaxed text-[#282222] lg:h-auto lg:flex-row lg:gap-10 lg:pl-[147px]"
    >
      <div class="mt-[50px] flex h-auto w-full flex-col justify-center space-y-4 lg:mt-[100px] lg:h-auto lg:w-[504px]">
        <h1 class="font-Poppins text-[32px] font-bold text-[#282222] lg:text-[64px]">Our Mission</h1>
        <p class="font-Poppins text-justify text-[16px] text-[#282222] lg:text-[20px]">
          The most vulnerable elderly and individuals with disabilities in Indonesia are presently confronting extreme
          food insecurity. Merry Meal continues to expand to satisfy the rising need for healthy and inexpensive meals.
        </p>
      </div>

      <div class="mt-[20px] flex h-auto w-full justify-center lg:mt-[10px] lg:w-[710px] lg:justify-end xl:w-[800px]">
        <img
          class="h-auto w-full max-w-full shrink-0 object-contain lg:w-auto xl:w-auto"
          src="{{ asset('images/peopleGathering.jpg') }}"
          alt="aboutUs"
        />
      </div>
    </div>

    <!-- content2 -->
    <div
      class="font-Poppins flex h-fit w-full flex-col justify-center bg-[#FFFCF0] px-6 pt-[80px] leading-relaxed text-[#282222] lg:px-[147px] lg:pt-[163px]"
    >
      <div class="flex w-full flex-col justify-center">
        <h1 class="mb-[20px] text-[28px] font-bold lg:mb-[30px] lg:text-[40px]">What is Merry Meal</h1>

        <div
          class="about-us-paragraph flex flex-col space-y-[20px] text-justify text-[16px] lg:space-y-[30px] lg:text-[20px]"
        >
          <p>
            Merry Meal provides healthy, tasty, and cheap meals to a number of populations, including elderly, those
            with physical disabilities and cognitive impairments, people who are ill or recuperating from surgery, and
            others who require special dietary planning and support.
          </p>
          <p>
            The majority of Merry Meal initiatives in Indonesia were launched by local groups that noticed a need to
            assist feed the elderly in their areas. The programs are still run at the local level today. Programs differ
            greatly in terms of size, service given, organization, and finance.
          </p>
          <p>
            The bulk of our programs provide hot and ready-to-eat meals, while others offer frozen meals in
            microwave-ready containers. Some hot meal programs offer an additional frozen meal in the days preceding a
            weekend or holiday when there would otherwise be none.
          </p>
        </div>
      </div>
    </div>

    <!-- content3 -->
    <div class="bg-constribution h-fit w-full bg-[#FFFCF0] px-6 py-[100px] leading-relaxed lg:px-[147px] lg:py-[216px]">
      <div class="constribution flex w-full flex-col space-y-[50px] text-center text-[#282222] lg:space-y-[84px]">
        <div class="constribution-text">
          <h1 class="text-[28px] font-semibold lg:text-[40px]">Our contributions on communities</h1>
        </div>

        <div
          class="constribution-icons flex h-fit w-full flex-wrap justify-center gap-6 sm:flex-nowrap sm:justify-between sm:gap-8"
        >
          <div class="bg-i-fork flex flex-col items-center justify-center">
            <div
              class="i-fork flex h-[120px] w-[120px] items-center justify-center rounded-[50%] bg-gradient-to-t from-[#FFA800] to-[#FFCE01] text-[50px] text-[#FFFCF0] lg:h-[177px] lg:w-[177px] lg:text-[75px]"
            >
              <i class="fa-solid fa-utensils"></i>
            </div>
            <h2 class="mt-[16px] text-[20px] font-semibold text-[#282222] lg:mt-[26px] lg:text-[24px]">2,000</h2>
            <h3 class="text-[16px] font-normal text-[#282222] lg:text-[20px]">Meals Delivered</h3>
          </div>

          <div class="bg-i-user flex flex-col items-center justify-center">
            <div
              class="i-user flex h-[120px] w-[120px] items-center justify-center rounded-[50%] bg-gradient-to-t from-[#FFA800] to-[#FFCE01] text-[50px] text-[#FFFCF0] lg:h-[177px] lg:w-[177px] lg:text-[75px]"
            >
              <i class="fa-solid fa-user"></i>
            </div>
            <h2 class="mt-[16px] text-[20px] font-semibold text-[#282222] lg:mt-[26px] lg:text-[24px]">527</h2>
            <h3 class="text-[16px] font-normal text-[#282222] lg:text-[20px]">Individuals Served</h3>
          </div>

          <div class="bg-i-handlove flex flex-col items-center justify-center">
            <div
              class="i-handlove flex h-[120px] w-[120px] items-center justify-center rounded-[50%] bg-gradient-to-t from-[#FFA800] to-[#FFCE01] text-[50px] text-[#FFFCF0] lg:h-[177px] lg:w-[177px] lg:text-[75px]"
            >
              <i class="fa-solid fa-hand-holding-heart"></i>
            </div>
            <h2 class="mt-[16px] text-[20px] font-semibold text-[#282222] lg:mt-[26px] lg:text-[24px]">31</h2>
            <h3 class="text-[16px] font-normal text-[#282222] lg:text-[20px]">Received Partner Funding</h3>
          </div>

          <div class="bg-i-person flex flex-col items-center justify-center">
            <div
              class="i-person flex h-[120px] w-[120px] items-center justify-center rounded-[50%] bg-gradient-to-t from-[#FFA800] to-[#FFCE01] text-[50px] text-[#FFFCF0] lg:h-[177px] lg:w-[177px] lg:text-[75px]"
            >
              <i class="fa-solid fa-person-walking-with-cane"></i>
            </div>
            <h2 class="mt-[16px] text-[20px] font-semibold text-[#282222] lg:mt-[26px] lg:text-[24px]">73%</h2>
            <h3 class="text-[16px] font-normal text-[#282222] lg:text-[20px]">Recipients 58+ Years</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
