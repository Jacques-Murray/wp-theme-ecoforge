<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eco_Conscious_Brand
 */

get_header(); // Includes header.php
?>

<div class="@container">
  <div class="@[480px]:p-4">
    <div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-center justify-center p-4" data-alt="A lush green forest with sunlight filtering through the trees" style='background-image: linear-gradient(rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.6) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAA2PtA11MRssRQh0rEY0sBxJHiKmnaA9YR6B4LcCctuQyIbdyteeAStLwWV53kyCRtmjPH4ViNlzm2uFqgCwgcouKTiTC2C5gv9IUcovIZZqaz1KAJGNOamlOg_bsadrUeetznTTdWDa9svEgv8tkd4VG3Bls2kyGZT2hCu_KX3HlNHze22w5VncFyQ-82Bp5UsB4x6kZxbLUEChzIrDVM-Mfmp0CcU4bWuZLSct72YjlMJJq1Gkgf2N5Vrys7z7Q1rI_DMSmWCW0");'>
      <div class="flex flex-col gap-2 text-center">
        <h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl">
          <?php echo get_bloginfo('name'); ?> <!-- Dynamic Site Title -->
        </h1>
        <h2 class="text-gray-200 text-sm font-normal leading-normal @[480px]:text-base">
          <?php echo get_bloginfo('description'); ?> <!-- Dynamic Site Tagline -->
        </h2>
      </div>
      <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-primary text-primary-content text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base">
        <span class="truncate">Shop Sustainably</span>
      </button>
    </div>
  </div>
</div>

<h2 class="text-text-light dark:text-text-dark text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Sustainable Products</h2>
<div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-4 p-4">
  <!-- Product 1 -->
  <div class="flex flex-col gap-3 pb-3 group">
    <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg overflow-hidden relative">
      <div class="w-full h-full bg-cover bg-center" data-alt="A plain beige t-shirt made of organic cotton" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDeTFY-_jD8Zu5W0x9wrTx-TU76I1wl9xTMUaN4-MduaHYETuX-bP1NAZqQYwiPvZgLhUqx_iulhFDrB5Btfxh1TVBBBUnFRldpSvF8xj35BfNQTidEU15PcBgndCak47IeKbLgQTGq5O16OMw-YY31EwedVYr9DI8QhkEPSfGZZb_fT6C6bYvrgR71AeuCObR1dZ8j-psC7u4OcOl8vvBPdW7uQJzmABDqM");'></div>
      <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
        <p class="text-white text-center px-2">Organic Cotton Tee</p>
      </div>
      <div class="absolute top-2 right-2 bg-green-500/80 text-white p-2 rounded-full">
        <span class="material-symbols-outlined text-lg">energy_savings_leaf</span>
      </div>
    </div>
    <div>
      <p class="text-text-light dark:text-text-dark text-base font-medium leading-normal">Organic Cotton Tee</p>
      <p class="text-emerald-600 dark:text-emerald-300 text-sm font-normal leading-normal">Made from 100% GOTS certified organic cotton.</p>
      <p class="text-emerald-600 dark:text-emerald-300 text-sm font-normal leading-normal font-bold">Green Badge: Organic</p>
    </div>
  </div>
  <!-- Product 2 -->
  <div class="flex flex-col gap-3 pb-3 group">
    <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg overflow-hidden relative">
      <div class="w-full h-full bg-cover bg-center" data-alt="A clear glass water bottle with a wooden cap" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAejeo7yje0qv4u5RcKBy8QvYlc-ZtzGF6pw702pk-aVOyNsKk94TP4RlEUdlJd6xMvUB3Q3HIIMx72X2mB7aYHsnO7riebjnYNL7PjcoCd9wN6_aWBTfyPkjE9gcBrfsuEy4zo9qFQpfRuBVJlWvYwoNrtUO6R6LnonucMYNHJjurALdyq8_Im__p2QRrkxgrsAo4YFJuJslIzoSkB_noUhBWuLR8Lv3QQKWivkysGL6v9tXqdh1u91iv7KGfDsGJLeTFFhmmMJhY");'></div>
      <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
        <p class="text-white text-center px-2">Recycled Glass Bottle</p>
      </div>
      <div class="absolute top-2 right-2 bg-teal-500/80 text-white p-2 rounded-full">
        <span class="material-symbols-outlined text-lg">recycling</span>
      </div>
    </div>
    <div>
      <p class="text-text-light dark:text-text-dark text-base font-medium leading-normal">Recycled Glass Bottle</p>
      <p class="text-emerald-600 dark:text-emerald-300 text-sm font-normal leading-normal">Beautifully crafted from recycled glass.</p>
      <p class="text-emerald-600 dark:text-emerald-300 text-sm font-normal leading-normal font-bold">Green Badge: Recycled</p>
    </div>
  </div>
  <!-- Product 3 -->
  <div class="flex flex-col gap-3 pb-3 group">
    <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg overflow-hidden relative">
      <div class="w-full h-full bg-cover bg-center" data-alt="A wooden toothbrush with white bristles" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAaWRIcHaAf32kOD5jEMSDjli0WC8GwwZwTLaaRDO_Xi-FniU-B7ywQlsbeat09vmmpbEYQIwUL13nXnXxMC__pQS6oc8Xl1QoirnCBPu21J7tp_n8Bys1Il5baXoR8bmxoRSqm2UxV1jcHn04bV_5GzO3jLlU1Jvr4sSESq92pIwvSNAkDQk8oCMiiiualvQ3zoB6IHvWWCxfwYLynLXq-U-gVxMD9WwH-mRAaiB8QCjk2rnn37unlmLXCqVOhXozKg_QYVybnWfA");'></div>
      <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
        <p class="text-white text-center px-2">Bamboo Toothbrush</p>
      </div>
      <div class="absolute top-2 right-2 bg-lime-500/80 text-white p-2 rounded-full">
        <span class="material-symbols-outlined text-lg">eco</span>
      </div>
    </div>
    <div>
      <p class="text-text-light dark:text-text-dark text-base font-medium leading-normal">Bamboo Toothbrush</p>
      <p class="text-emerald-600 dark:text-emerald-300 text-sm font-normal leading-normal">A sustainable alternative to plastic toothbrushes.</p>
      <p class="text-emerald-600 dark:text-emerald-300 text-sm font-normal leading-normal font-bold">Green Badge: Biodegradable</p>
    </div>
  </div>
  <!-- Product 4 -->
  <div class="flex flex-col gap-3 pb-3 group">
    <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg overflow-hidden relative">
      <div class="w-full h-full bg-cover bg-center" data-alt="A woven jute bag with handles" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDD2sUEmdbrgDdtqB9Y3k_O1zDrmUN0gPLzBcaxGkKbvhg7wSx29rwsPMJK1PGgXhb9lHMt1MCD64Kf6LU5duWt-yeEE6TSdxr06gOFm1-I4M4dxaqQ2M6MhJOf0lohOWk_3vmxkp-CGtU_GAj1hi3yHT1QWKeBtB5ymPjrYcZnCN5bihuTNzllXjO-Df1fXu0ZLFwW7z4lNw0GFGNU5MWz2cFsCsboTvZ0HMEqrF-WDBVHmMcmHvEFlE571Tr3nsuORnHuqHv_QkA");'></div>
      <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
        <p class="text-white text-center px-2">Natural Jute Bag</p>
      </div>
      <div class="absolute top-2 right-2 bg-green-600/80 text-white p-2 rounded-full">
        <span class="material-symbols-outlined text-lg">grass</span>
      </div>
    </div>
    <div>
      <p class="text-text-light dark:text-text-dark text-base font-medium leading-normal">Natural Jute Bag</p>
      <p class="text-emerald-600 dark:text-emerald-300 text-sm font-normal leading-normal">Durable and biodegradable, perfect for everyday use.</p>
      <p class="text-emerald-600 dark:text-emerald-300 text-sm font-normal leading-normal font-bold">Green Badge: Natural</p>
    </div>
  </div>
</div>

<h2 class="text-text-light dark:text-text-dark text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Carbon Footprint Calculator</h2>
<div class="p-4 bg-background-light dark:bg-slate-800 rounded-lg">
  <div class="flex flex-col md:flex-row max-w-[480px] flex-wrap items-end gap-4 py-3">
    <label class="flex flex-col min-w-40 flex-1">
      <p class="text-text-light dark:text-text-dark text-base font-medium leading-normal pb-2">Destination</p>
      <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-0 border-accent dark:border-gray-600 bg-white dark:bg-slate-700 focus:border-primary h-14 placeholder:text-emerald-700 p-[15px] text-base font-normal leading-normal" placeholder="Enter your city" value="" />
    </label>
    <label class="flex flex-col min-w-40 flex-1">
      <p class="text-text-light dark:text-text-dark text-base font-medium leading-normal pb-2">Package Weight (kg)</p>
      <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-0 border-accent dark:border-gray-600 bg-white dark:bg-slate-700 focus:border-primary h-14 placeholder:text-emerald-700 p-[15px] text-base font-normal leading-normal" placeholder="Enter weight" value="" />
    </label>
    <button class="flex min-w-[84px] w-full md:w-auto max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-14 px-5 bg-primary text-primary-content text-base font-bold leading-normal">
      <span class="truncate">Calculate</span>
    </button>
  </div>
  <p class="px-4 text-sm text-emerald-600 dark:text-emerald-300">Learn more about our <a class="underline" href="#">carbon offset program</a>.</p>
</div>

<h2 class="text-text-light dark:text-text-dark text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-8">Recycling Guide</h2>
<div class="px-4 space-y-2">
  <details class="group bg-white dark:bg-slate-800 p-4 rounded-lg cursor-pointer">
    <summary class="flex justify-between items-center font-medium text-text-light dark:text-text-dark">
      Plastic
      <span class="material-symbols-outlined transform transition-transform duration-200 group-open:rotate-180">expand_more</span>
    </summary>
    <p class="text-emerald-600 dark:text-emerald-300 mt-2">Rinse containers and remove lids. Check for the recycling symbol (numbers 1-7) to see if it's accepted in your area. Avoid plastic bags and films.</p>
  </details>
  <details class="group bg-white dark:bg-slate-800 p-4 rounded-lg cursor-pointer">
    <summary class="flex justify-between items-center font-medium text-text-light dark:text-text-dark">
      Glass
      <span class="material-symbols-outlined transform transition-transform duration-200 group-open:rotate-180">expand_more</span>
    </summary>
    <p class="text-emerald-600 dark:text-emerald-300 mt-2">Rinse bottles and jars. Labels can usually be left on. Separate colors (clear, brown, green) if required by your local facility.</p>
  </details>
  <details class="group bg-white dark:bg-slate-800 p-4 rounded-lg cursor-pointer">
    <summary class="flex justify-between items-center font-medium text-text-light dark:text-text-dark">
      Fabric
      <span class="material-symbols-outlined transform transition-transform duration-200 group-open:rotate-180">expand_more</span>
    </summary>
    <p class="text-emerald-600 dark:text-emerald-300 mt-2">Clean, dry garments can be donated or taken to textile recycling centers. Check with local charities or our partner programs for drop-off locations.</p>
  </details>
</div>

<h2 class="text-text-light dark:text-text-dark text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-8">Our Partners</h2>
<div class="p-4 grid grid-cols-2 md:grid-cols-4 gap-4 items-center justify-items-center">
  <a class="grayscale hover:grayscale-0 transition-all" href="#"><img class="rounded-lg" data-alt="Partner 1 Logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2iEfbDpNYzFLv4VxzFn5kXzh-khEAhy_YJsq6TGZXxTpPRWkVy7AlwCOsG0FZXKTTnTPj58E7isUt2RItVtVt0B7xPtUyloGhzDBFbH6eZ0OipXBz4ArCer3Pdu0qnCRSYP0PFJ3jM7KxpTJXnSI9lTD75-QthhTvQeXMgJ5Bp1XhlLk4c75Q7yzhHa-xamJ2hm4zO0kNG078SfxHMU9IB3aqBB1KnhDvwcMiLWyhhUyDGKxpYGiDqzgKic0q8L6g9jIuvScj2co" /></a>
  <a class="grayscale hover:grayscale-0 transition-all" href="#"><img class="rounded-lg" data-alt="Partner 2 Logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYU3TFO2TaCreWweC0UePZR--nBqfLuDTHnM6aN03LoPawdWbvxuQq72z8xGkZVnDozAD8w_57XoeA8mZ8o_1RFZY39pSBccDPaYHKbKwVjnwAX0Zv2_eCi_Nz8D5gm9KwtbMp3KFiMODNGqi-yNtdfGK9EX9psvV8WrF460ZrAPbVO0_fqHPA6Xau9R1S9vfaN2S5EwERwFBUkCTJZwnsyXHBl8rJurKRlp5D19aQU-n-HYQPpo9pXcNfpqs_d3sVFujFNAMP4fo" /></a>
  <a class="grayscale hover:grayscale-0 transition-all" href="#"><img class="rounded-lg" data-alt="Partner 3 Logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAefoDmqpsd5ItjdH6iLymZzjG9EaKvyRjOTew_dEPmpAvfXnGLVVePvL036AS2WXFzVN9_1hn_KdkbNnOfZGVfOsSIzEUwffgoWmAWMdvoWgkGrjH-dUGvcz1_gI6aEw6y0hUyxh4R9-Z9RVbjPS4tpnATOD9Ps2N6XRozPTaf3UgJ-G4SgOiG57FPz5cpYg43QxVMnGi-GPXiguIQevtKXe4pYjDd9XJypAGId8ntxhNtq7BySW0ETsbKUQgFc7xh0YsKviS6YYI" /></a>
  <a class="grayscale hover:grayscale-0 transition-all" href="#"><img class="rounded-lg" data-alt="Partner 4 Logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDl1-iy71pwdJUN8xo_z81C6zWSYJVxgiLoEx-z9PrdzwUk2n1h-zja0zQbCFEPgOyPRiifz9nRg7L9JssB6MyINw8juGwpPcmyQ-W4m2VVe7adRmqhv1_oxQiskrFZxybtqRPRuz6Ed-U8TjsZXcE63B-bYvRh-oCNmlfMdBV6gGH1XYjCG-_iS1qJs4xzZWobeTI5wgVCcxSPTsRXjYDZreFBbtm8QhDIh1PaJFPRMNt18TnYRTsVi1D5f_ANN9vBjM13jY0St-s" /></a>
</div>


<?php get_footer(); // Includes footer.php 
?>