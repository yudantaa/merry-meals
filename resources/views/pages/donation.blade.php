<x-app-layout>
  <div>

  </div>
  <div class="bg-donate-before-login flex h-[800px] w-full items-center leading-relaxed md:h-[937px]">
    <div
      style="background: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('images/donateBackground2.jpg')"
      class="donate-section-one flex h-full w-full items-center bg-cover bg-center bg-no-repeat px-4"
    >
      <div
        class="donate-section-one-content mx-auto flex h-auto w-full max-w-[90%] flex-col space-y-6 bg-[#FFFCF0] bg-opacity-90 px-6 py-8 text-[#282222] backdrop-blur-sm sm:max-w-[80%] md:h-[352px] md:max-w-[680px] md:space-y-[24px] md:px-[48px] md:py-[89px] md:backdrop-blur-none"
      >
        <h1 class="text-center text-[28px] font-medium md:text-left md:text-[40px]">We need your help</h1>
        <h2 class="text-justify text-[16px] md:text-[20px]">
          Donated contributions help lonely seniors and persons with disabilities have access to nutritious,
          well-balanced meals that promote independence and overall health.
        </h2>
      </div>
      <!-- donate-section-one-content -->
    </div>
    <!-- donate-section-one -->
  </div>
  <!-- bg-donate-before-login -->

  <div class="donate-section-two flex justify-center bg-[#FFFCF0] py-12 md:py-[129px]">
    <div
      class="donate-section-two-content flex h-fit w-full flex-col items-center space-y-8 px-4 text-[#282222] md:w-[615px] md:space-y-[56px]"
    >
      <h1 class="text-center text-[28px] font-medium md:text-[40px]">Single help create a difference</h1>
      <p class="text-justify text-[16px] md:text-[20px]">
        Your contribution to Merry Meal will make a difference in the lives of our elders and the homebound. Every
        dollar counts in ending senior hunger. Please be as charitable as you can. And I appreciate your help in
        advance. Every day, our drivers and volunteers visit the most vulnerable members of our communities, the elders.
        Simply stated, a meal is provided. In actuality, though, these deliveries bring far more everyday engagement and
        camaraderie. This visitor may be the only person the senior sees all day on some days. It is critical that we
        check on our elderly neighbors.
      </p>
      <a href="{!! route('donation.create') !!}">
        <button
          class="box-border h-[50px] w-full border-2 border-[#A07C00] bg-[#FFFCF0] text-[#A07C00] duration-500 hover:scale-105 md:h-[63px] md:w-[370px]"
        >
          Start to Donate
        </button>
      </a>
    </div>
    <!-- donate-section-two-content -->
  </div>
  <!-- donate-section-two -->
</x-app-layout>
