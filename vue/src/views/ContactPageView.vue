<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const contact = ref();

onMounted(async () => {
    try {
        const response = await axios.get("http://127.0.0.1:8000/api/contact");
        contact.value = response.data.data;

        console.log(contact.value);
    } catch {

    }
});
</script>

<template>
    <section>
        <div class="section_title text-center">
            <h3>Contact</h3>
        </div>
        <div class="contact_block">
            <div class="contact_info col-6">
                <div class="contact_item">
                    <h4>Phone</h4> {{ contact.phone }} +7 987 654 32 10
                </div>
                <hr>
                <div class="contact_item">
                    <h4>Mail</h4> info@mail.com
                </div>
                <hr>
                <div class="contact_item">
                    <h4>Adress</h4> 123 street
                </div>
                <hr>
            </div>
            <div class="col-6 maps image">
                <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/39/rostov-na-donu/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Ростов‑на‑Дону</a><a href="https://yandex.ru/maps/39/rostov-na-donu/?ll=39.765079%2C47.302928&utm_medium=mapframe&utm_source=maps&z=15.2" style="color:#eee;font-size:12px;position:absolute;top:14px;">Ростов‑на‑Дону — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=39.765079%2C47.302928&z=15.2" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
        </div>
    </section>
</template>

<style scoped>
    hr{
        width: 80%;
    }
    .contact_block{
        display: flex;
        z-index: 5;
        background-color: rgb(199, 197, 197);
        padding: 30px 100px;
        margin: 25px;
    }
</style>