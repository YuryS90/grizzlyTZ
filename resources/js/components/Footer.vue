<script setup>

</script>

<template>
  <footer class="bg-gray-50 py-10 border-t">
    <div class="container mx-auto px-4 lg:px-0 flex flex-row lg:flex-row justify-between space-y-10 lg:space-y-0 lg:space-x-10">

      <!-- Логотип и контактная информация -->
      <div class="lg:w-1/4 text-gray-700 space-y-4">
        <!-- Логотип -->
        <div class="flex items-center space-x-2">
          <img src="/assets/images/header/Vector.png" alt="Logo" class="h-8">
        </div>
        <!-- Контактная информация -->
        <div class="space-y-1">
          <p class="text-gray-800 font-medium">+48609500089</p>
          <a href="#" class="text-purple-600">Zamów rozmowę</a>
          <p class="text-gray-800">info@enemer.pl</p>
          <p class="text-gray-800">Błonie, Pass 20I, budynek 15, 05-870</p>
        </div>
      </div>

      <!-- Услуги -->
      <div class="lg:w-1/4 text-gray-700">
        <h3 class="font-semibold text-gray-800">Usługi</h3>
        <ul class="space-y-1">
          <li>Usługi logistyczne dla e-commerce</li>
          <li>Outsourcing magazynu</li>
          <li>Outsourcing logistyczny</li>
          <li>Obsługa logistyczna sklepów internetowych</li>
          <li>Logistyka kontraktowa</li>
          <li><a href="#" class="text-purple-600">Zobacz wszystkie →</a></li>
        </ul>
      </div>

      <!-- Навигация -->
      <div class="lg:w-1/4 text-gray-700">
        <h3 class="font-semibold text-gray-800">Informacje</h3>
        <ul class="space-y-1">
          <li>O nas</li>
          <li>Cennik</li>
          <li>Pytania i odpowiedzi</li>
          <li>Kontakt</li>
          <li>Blog</li>
        </ul>
      </div>

      <!-- Юридическая информация -->
      <div class="lg:w-1/4 text-gray-700">
        <h3 class="font-semibold text-gray-800">Firma</h3>
        <p>Space Logistics Sp.z.o.o. 02-727</p>
        <p>Warszawa ul. Wołodyjowskiego 67A</p>
        <p>KRS: 0000824771 NIP: 5213888029</p>
        <p>REGON: 385377605</p>
      </div>
    </div>

    <!-- Нижний блок с политикой и информацией о разработчике -->
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center mt-10 px-4 border-t pt-4 space-y-4 md:space-y-0">
      <a href="#" class="text-gray-600">Polityka prywatności</a>
      <div class="flex items-center space-x-2 text-gray-600">
        <span>dev.grizzly.by</span>
        <span>seo.grizzly.by</span>
      </div>
    </div>
  </footer>
</template>

<style scoped>
.container {
  max-width: 900px;
}
</style>
