<style scoped>

</style>

<template>
    <div :style="{background: backgraund}">
        <h3 :style="{color: text_color}">{{props.text_value}}: {{ CurrentValue }}</h3>
    </div>
</template>

<script setup>
import { ref, watch, onMounted } from "vue";

const props = defineProps({
    text_value: {
        type: String,
        default: "text"
    },
    startValue: {
        type: Number,
        default: 0
    },
    endValue: {
        type: Number,
        Required: true
    },
    duration: {
        type: Number,
        default: 2000
    },
    backgraund: {
        type: String,
        default: "black"
    },
    text_color: {
        type: String,
        default: "black"
    }
});

const CurrentValue = ref(props.startValue);

function animateCounter() {
    const startTime = Date.now();
    const endTime = startTime + props.duration;

    function step(){
        const now = Date.now();
        if(now < endTime){
            const progress = (now - startTime) / props.duration;
            CurrentValue.value = Math.round(props.startValue + (props.endValue - props.startValue) * progress);
            requestAnimationFrame(step);
        } else {
            CurrentValue.value = props.endValue
        }
    }
    step();
}

onMounted(() => {
    animateCounter();
})
</script>