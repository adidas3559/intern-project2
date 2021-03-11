
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative darkGrid overflow-hidden">

    <!-- full size nav -->
    <div class="relative ">
      <nav class="flex items-center justify-between lg:justify-start navBar" aria-label="Global">
        <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0 w-full md:w-full absolute">
          <div class="flex items-center justify-between w-full md:w-4/5 md:m-auto">
            <a class="ml-4" href="#">
              <span class="sr-only">Workflow</span>
              <img class="h-12 w-auto sm:h-20" src="/assets/img/asco-logo-hero.png" alt="asco-logo">
            </a>
            <div class="mr-2 flex items-center md:hidden">
              <button type="button" @click.prevent="partsToggle()" class="navTrigger rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class="hidden md:block md:space-x-8 w-full text-right navBar__container">
          <div class="navTopRow">
            <div class="navTopRow__container">
              <a href="tel:8006870008" class="font-medium text-white-500 flex">
                <img src="../assets/img/phoneIcon.PNG">(800)687-0008
              </a>
               |
              FOLLOW US:
              <a href="https://www.facebook.com/ASCO-Equipment-151558694897966/" class="font-medium text-white-500">
                <img src="../assets/img/facebookIcon.PNG">
              </a>
              <a href="https://twitter.com/ASCO_Equipment" class="font-medium text-white-500">
                <img src="../assets/img/twitterIcon.PNG">
              </a>
              <a href="https://www.linkedin.com/company/asco-equipment/" class="font-medium text-white-500">
                <img src="../assets/img/linkedInIcon.PNG">
              </a>
              <a href="https://www.youtube.com/channel/UCY0RZ9tqGp3sBZSL6TGBMqg/videos" class="font-medium text-white-500">
                <img src="../assets/img/youtubeIcon.PNG">
              </a>
            </div>
          </div>
          <div class="navBottomRow">
            <div class="navBottomRow__container">
              <div class="navLink activeLink">
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">HOME</a>
              </div>
              <div class="navLink">
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">SALES</a>
              </div>
              <div class="navLink">
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">RENTALS</a>
              </div>
              <div class="navLink">
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">PARTS</a>
              </div>
              <div class="navLink">
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">SERVICE</a>
              </div>
              <div class="navLink">
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">CAREERS</a>
              </div>
              <div class="navLink">
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">LOCATIONS</a>
              </div>
              <div class="navLink">
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">FINANCE</a>
              </div>
            </div>
          </div>
          
        </div>
      </nav>
    </div>


    <div class="mx-auto py-24 w-11/12 lg:w-4/5">
      <div class="relative z-10 lg:max-w-2xl lg:w-full">  

        
  
        <!--
          Mobile menu, show/hide based on menu open state.
  
          Entering: "duration-150 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
        <div id="mobileNav" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" :class="{ 'active': partsToggleActive}">
          <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
              <div>
                <img class="h-8 w-auto" src="/assets/img/asco-logo-hero.png" alt="asco-logo">
              </div>
              <div class="-mr-2">
                <button type="button" @click.prevent="partsToggle()" class="navTrigger bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 xIcon">
                  <span class="sr-only">Close main menu</span>
                  <!-- Heroicon name: outline/x -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="px-2 pt-2 pb-3 space-y-1">
              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Product</a>
  
              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>
  
              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Marketplace</a>
  
              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Company</a>
            </div>
          </div>
        </div>
  
        <main class="mt-10 max-w-7xl pr-4 sm:mt-12 sm:pr-6 md:mt-16 lg:mt-20 lg:pr-8 xl:mt-28">
          <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-2xl md:text-5xl">
              <span class="inline text-brand xl:inline">WE'RE</span>
              <span class="inline text-gray-700 xl:inline">ON</span>
              <span class="inline text-brand xl:inline">IT</span>
            </h1>
            <p class="mt-3 text-base text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 brandBorder">
              Specializing in construction, agricultural and material handling equipment sales, rentals, parts and quality service since 1960 in Texas and New Mexico.
            </p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow">
                <a href="#indexContactUs" class="transform w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-black bg-brand hover:bg-brand-dark md:py-4 md:text-lg md:px-10">
                  CONTACT US
                </a>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 heroImage">
      <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/assets/img/heroImage.jpg" alt="">
    </div>
</div>

<!-- 
<script>

// function mobileNavToggle() {
//     console.log('clicked');
//     var nav = document.getElementById('mobileNav');
//     if(nav.style.display === "block") {
//         nav.style.display = "none";
//     }
//     else {
//         nav.style.display = "block";
//     }
// }


</script> -->