<template>
    <div class="relative w-full h-screen bg-cover bg-center background-image-class">
        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
            <div
                class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg p-8 rounded-lg w-full max-w-lg space-y-6">
                <!-- Заголовок формы -->
                <h2 class="text-white text-2xl font-semibold">Szukasz najlepszej oferty?</h2>
                <p class="text-gray-200">Zostaw aplikację, a nasz menedżer skontaktuje się z Tobą w celu konsultacji</p>

                <div>
                    <form v-if="!isSubmitted" @submit.prevent="submitForm" @keydown.enter.prevent class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                            <div>
                                <input v-model="name" type="text" placeholder="Twoje imię" class="input-field"
                                       required/>
                                <p v-if="!isNameValid" class="text-red-500 text-sm">Введите имя.</p>
                            </div>


                            <div>
                                <input v-model="family" type="text" placeholder="Twoje nazwisko" class="input-field"
                                       required/>
                                <p v-if="!isFamilyValid" class="text-red-500 text-sm">Введите фимилию.</p>
                            </div>

                            <div>
                                <input v-model="lastname" type="text" placeholder="Twoje drugie imię"
                                       class="input-field"/>
                                <p v-if="!isLastnameValid" class="text-red-500 text-sm">
                                    Отчество не должно превышать 10 символов.</p>
                            </div>

                            <div>
                                <input v-model="dateOfBirth" type="date" placeholder="Twoja data urodzenia"
                                       class="input-field"
                                       required/>
                                <p v-if="!isDateOfBirthValid" class="text-red-500 text-sm">
                                    Введите дату рождения.</p>
                            </div>
                        </div>

                        <div>
                            <input v-model="email" type="email" placeholder="E-mail" class="input-field w-full"/>
                            <p v-if="!isEmailValid" class="text-red-500 text-sm">
                                Формат exapmle@mail.ru.</p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <select v-model="code" class="input-field" required>
                                <option disabled value="">Code</option>
                                <option value="+375">+375</option>
                                <option value="+7">+7</option>
                            </select>
                            <input v-model="phone" type="tel" placeholder="Telefon" class="input-field w-full"
                                   required/>
                            <p v-if="!isPhoneValid" class="text-red-500 text-sm">
                                Введите код и телефон. Телефон от 7 до 15 цифр</p>
                        </div>

                        <div>
                            <select v-model="status" class="input-field" required>
                                <option value="" disabled>Stan cywilny</option>
                                <option value="Холост/не замужем">Холост/не замужем</option>
                                <option value="Женат/замужем">Женат/замужем</option>
                                <option value="В разводе">В разводе</option>
                                <option value="Вдовец/вдова">Вдовец/вдова</option>
                            </select>
                            <p v-if="!isStatusValid" class="text-red-500 text-sm">Выбрать статус.</p>
                        </div>

                        <div>
                            <textarea v-model="about" class="input-field" placeholder="O mnie"
                                      maxlength="1000"></textarea>
                            <p v-if="!isAboutValid" class="text-red-500 text-sm">До 1000 символов.</p>
                        </div>

                        <div class="flex items-center space-x-2">
                            <input v-model="termsAccepted" type="checkbox" id="terms"
                                   class="form-checkbox h-4 w-4 text-purple-600"/>
                            <label for="terms" class="text-gray-200 text-sm">Przeczytałem zasady</label>
                        </div>

                        <button type="submit" :disabled="!isFormValid"
                                class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700">
                            Wyślij
                        </button>
                    </form>

                    <div v-else class="text-green-600 text-center mt-4">
                        Успешно
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {computed, ref} from "vue";
import axios from "axios";

const name = ref("");
const family = ref("");
const lastname = ref("");
const dateOfBirth = ref("");
const email = ref("");
const code = ref("");
const phone = ref("");
const status = ref("");
const about = ref("");
const termsAccepted = ref(false);
const isSubmitted = ref(false); // флаг состояния успешной отправки

// Валидация
// проверка на заполненность (не пустое)
const isNameValid = computed(() => name.value.trim() !== "");
const isFamilyValid = computed(() => family.value.trim() !== "");

// допускается пустое или текст до 10 символов
const isLastnameValid = computed(() => lastname.value === "" || lastname.value.trim().length <= 10);

// проверка на заполненность (не пустое)
const isDateOfBirthValid = computed(() => dateOfBirth.value !== "");

// допускается пустое или проверка на правильность формата email
const isEmailValid = computed(() => email.value === "" || /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(email.value));

// Телефонный код и номер оба поля должны быть заполнены.
// Номер телефона соответствует международному формату (содержит от 7 до 15 цифр)
const isPhoneValid = computed(() => {
    const phonePattern = /^\d{7,15}$/;
    return code.value !== "" && phone.value.trim() !== "" && phonePattern.test(phone.value);
});

// проверка на выбранное значение (не пустое)
const isStatusValid = computed(() => status.value !== "");

// проверка на длину текста (до 1000 символов)
const isAboutValid = computed(() => about.value.length <= 1000);

const isFormValid = computed(() =>
    isNameValid.value &&
    isFamilyValid.value &&
    isLastnameValid.value &&
    isDateOfBirthValid.value &&
    isEmailValid.value &&
    isPhoneValid.value &&
    isStatusValid.value &&
    isAboutValid.value
);

const submitForm = async () => {
    if (!termsAccepted.value) {
        alert("Вы должны принять условия");
        return;
    }

    const formData = {
        name: name.value,
        family: family.value,
        lastname: lastname.value,
        dateOfBirth: dateOfBirth.value,
        email: email.value,
        code: code.value,
        phone: phone.value,
        status: status.value,
        about: about.value,
    };

    try {
        const response = await axios.post("https://grizztz/api/users", formData);
        console.log("Form submitted successfully", response.data);

        // Если сохранение успешно, скрываем форму и показываем сообщение
        isSubmitted.value = true;
    } catch (error) {
        console.error("Error submitting form", error);
    }
};
</script>

<style scoped>
.background-image-class {
    background-image: url('/assets/images/contact/Frame 1855 2.jpg');
    background-size: cover;
    background-position: center;
}

.input-field {
    @apply w-full px-4 py-2 rounded-lg bg-white bg-opacity-20 text-black placeholder-gray-950 focus:outline-none focus:bg-opacity-30;
}
</style>
