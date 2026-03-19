<?php include 'header.php'; ?>

<section class="min-h-screen pt-24 pb-20 bg-[#0a0005]">
  <div class="max-w-6xl mx-auto px-6">
    <h1 class="text-6xl text-center accent mb-16">CURRENT FLASH</h1>
    <p class="text-center text-xl mb-12">Reserve with e-transfer deposit • More added monthly</p>
    
    <div class="grid md:grid-cols-3 gap-10">
      <!-- Add as many cards as you want -->
      <div class="flash-card bg-zinc-950 rounded-3xl overflow-hidden gold-border">
        <img src="Images/portfolio/57D5DF8B-57DD-4B3B-A4A0-60C065132A0B.webp" class="w-full h-80 object-cover">
        <div class="p-8">
          <h3 class="text-3xl">Ladybug Realism</h3>
          <ul class="mt-6 text-sm space-y-2">
            <li>Small (3×3") – $160</li>
            <li>Medium (5×5") – $260</li>
          </ul>
          <button onclick="reserveFlash('Ladybug Realism')" class="mt-10 w-full py-6 bg-[#4a0e0e] hover:bg-[#d4af37] hover:text-black text-lg font-bold">RESERVE THIS FLASH – E-TRANSFER</button>
        </div>
      </div>

      <!-- Tree Frog -->
      <div class="flash-card bg-zinc-950 rounded-3xl overflow-hidden gold-border">
        <img src="Images/portfolio/2D40FBC6-7DE1-4220-9A91-90CFC5C00007.webp" class="w-full h-80 object-cover">
        <div class="p-8">
          <h3 class="text-3xl">Tree Frog</h3>
          <ul class="mt-6 text-sm space-y-2">
            <li>Small (4×4") – $180</li>
            <li>Medium (6×6") – $280</li>
          </ul>
          <button onclick="reserveFlash('Tree Frog')" class="mt-10 w-full py-6 bg-[#4a0e0e] hover:bg-[#d4af37] hover:text-black text-lg font-bold">RESERVE THIS FLASH – E-TRANSFER</button>
        </div>
      </div>

      <!-- Rooster -->
      <div class="flash-card bg-zinc-950 rounded-3xl overflow-hidden gold-border">
        <img src="Images/portfolio/78F48591-8536-4262-9B9C-51E31A7395F2.webp" class="w-full h-80 object-cover">
        <div class="p-8">
          <h3 class="text-3xl">Rooster Color</h3>
          <ul class="mt-6 text-sm space-y-2">
            <li>Small (4×6") – $220</li>
            <li>Medium (6×8") – $340</li>
          </ul>
          <button onclick="reserveFlash('Rooster Color')" class="mt-10 w-full py-6 bg-[#4a0e0e] hover:bg-[#d4af37] hover:text-black text-lg font-bold">RESERVE THIS FLASH – E-TRANSFER</button>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>