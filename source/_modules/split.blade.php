<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/typography'),
    ]
  }
  ```
-->
<!-- style="max-height: 500px;" -->
@if($reverse !== '1')
<div class="relative flex flex-col lg:flex-row-reverse darkGrid max-h-500px-lg">
@else
<div class="relative flex flex-col lg:flex-row darkGrid max-h-500px-lg">
@endif
    <div class="lg:inset-0 flex-50">
      <div class="lg:inset-y-0 lg:left-0">
        <img class="h-56 min-w-full object-cover lg:h-full" style="max-height: 500px;" src="{{ $image }}" alt="">
      </div>
    </div>
    <div class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:pb-2 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2 flex-50">
      <div class="lg:col-start-2 lg:pl-8">
        <div class="text-base max-w-prose mx-auto lg:max-w-lg lg:ml-auto">
          <div class="brandBorder">
            <h3 class="leading-6 text-2xl text-white font-semibold tracking-wide uppercase sm:text-4xl">{!! $title1 !!}</h3>
            <h3 class="mt-2 text-2xl leading-8 font-semibold tracking-tight text-white sm:text-4xl">{!! $title2 !!}</h3>
          </div>
          <p class="mt-8 text-lg text-white font-bold">{!! $subtitle !!}</p>
          <p class="text-white">
            {!! $text !!}
          </p>
        </div>
      </div>
    </div>
    
</div>