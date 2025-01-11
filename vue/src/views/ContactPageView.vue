<script setup></script>

<template>
    <section>
        <div class="section_title text-center">
            <h3>Contact</h3>
        </div>
        <div class="contact_block">
            <div class="contact_info col-6">
                <div class="contact_item">
                    Phone - +7 987 654 32 10
                </div>
                <hr>
                <div class="contact_item">
                    Mail - info@mail.com
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
        padding: 30px 100px;
        margin: 15px;
    }
</style>