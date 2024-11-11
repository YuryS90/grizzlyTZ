<script setup>

</script>

<template>
  <header class="container mx-auto py-4 flex justify-between items-center">
    <div class="flex items-center space-x-2">
      <img src="/assets/images/header/Vector.png" alt="Logo" class="h-8">
    </div>

    <nav class="md:flex space-x-6 text-gray-700">
      <a href="#" class="hover:text-gray-900">O nas</a>
      <a href="#" class="hover:text-gray-900">Usługi</a>
      <a href="#" class="hover:text-gray-900">Cennik</a>
      <a href="#" class="hover:text-gray-900">Kontakt</a>
      <a href="#" class="hover:text-gray-900">Opinie</a>
      <a href="#" class="hover:text-gray-900">Pytania i odpowiedzi</a>
    </nav>

    <div class="flex items-center space-x-6">
      <!-- Номер телефона -->
      <div class="text-right">
        <p class="text-gray-900 font-semibold">+48609500089</p>
        <p class="text-sm text-gray-500">Zamów rozmowę</p>
      </div>

      <!-- Переключатель языка -->
      <div class="flex items-center space-x-1">
        <span class="text-gray-700">PL</span>
        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 6.5L8 10.5L4 6.5" stroke="#333333" stroke-width="1.5"/>
        </svg>
      </div>
    </div>
  </header>
</template>

<style scoped>
.container {
  max-width: 900px;
}
</style>
