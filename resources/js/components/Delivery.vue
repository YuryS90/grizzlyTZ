<!--<script setup>-->

<!--</script>-->

<!--<template>-->
<!--  <div class="container mx-auto py-10 flex flex-row lg:flex-row items-start">-->
<!--    &lt;!&ndash; Группа логотипов &ndash;&gt;-->
<!--    <div class="flex flex-col w-full lg:w-1/2">-->
<!--      <div class="text-center lg:text-left mb-8">-->
<!--        <h2 class="text-2xl font-semibold">Nasi kurierzy</h2>-->
<!--      </div>-->
<!--      <div class="grid grid-cols-2 gap-2 md:grid-cols-3 mb-8">-->

<!--        <img src="/assets/images/clients/Vector.png" alt="Vector">-->

<!--        <img src="/assets/images/clients/Frame 1907.png" alt="Frame 1907">-->

<!--        <img src="/assets/images/clients/Frame 1906.png" alt="Frame 1906">-->

<!--        <img src="/assets/images/clients/Frame 1908.png" alt="Frame 1908">-->

<!--        <img src="/assets/images/clients/Frame 1909.png" alt="Frame 1909">-->

<!--        <img src="/assets/images/clients/Frame 1910.png" alt="Frame 1910">-->

<!--        <img src="/assets/images/clients/Frame 1911.png" alt="Frame 1911">-->

<!--        <img src="/assets/images/clients/Frame 1912.png" alt="Frame 1912">-->

<!--        <img src="/assets/images/clients/Frame 1913.png" alt="Frame 1913">-->
<!--      </div>-->
<!--    </div>-->

<!--    &lt;!&ndash; Изображение справа &ndash;&gt;-->
<!--    <div class="flex flex-col w-full lg:w-auto justify-center lg:justify-start">-->
<!--      <img-->
<!--          src="/assets/images/clients/Rectangle 1.jpg"-->
<!--          alt="Rectangle"-->
<!--          class="rounded-lg shadow-lg object-cover"-->
<!--      >-->
<!--    </div>-->
<!--  </div>-->
<!--</template>-->

<!--<style scoped>-->
<!--.container {-->
<!--  max-width: 900px;-->
<!--}-->
<!--</style>-->

<template>
    <div class="container mx-auto py-10 flex flex-row lg:flex-row items-center">
        <!-- Группа логотипов -->
        <div class="flex flex-col w-full lg:w-1/2">
            <div class="text-center lg:text-left mb-8">
                <h2 class="text-2xl font-semibold">Nasi kurierzy</h2>
            </div>
            <div class="grid grid-cols-2 gap-2 md:grid-cols-3 mb-8">
                <img src="/assets/images/clients/Vector.png" alt="Vector" class="logo">
                <img src="/assets/images/clients/Frame 1907.png" alt="Frame 1907" class="logo">
                <img src="/assets/images/clients/Frame 1906.png" alt="Frame 1906" class="logo">
                <img src="/assets/images/clients/Frame 1908.png" alt="Frame 1908" class="logo">
                <img src="/assets/images/clients/Frame 1909.png" alt="Frame 1909" class="logo">
                <img src="/assets/images/clients/Frame 1910.png" alt="Frame 1910" class="logo">
                <img src="/assets/images/clients/Frame 1911.png" alt="Frame 1911" class="logo">
                <img src="/assets/images/clients/Frame 1912.png" alt="Frame 1912" class="logo">
                <img src="/assets/images/clients/Frame 1913.png" alt="Frame 1913" class="logo">
            </div>
        </div>

        <!-- Изображение справа -->
        <div class="flex flex-col w-full lg:w-auto justify-center lg:justify-start">
            <img
                src="/assets/images/clients/Rectangle 1.jpg"
                alt="Rectangle"
                class="shadow-lg object-cover img-rect"
            >
        </div>
    </div>
</template>

<style scoped>
.container {
    max-width: 900px;
}

.logo {
    width: 900px;
    height: auto;
}

.img-rect {
    width: 500px;
    height: auto;
}
</style>
