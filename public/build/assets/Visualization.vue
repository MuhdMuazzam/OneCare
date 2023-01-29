<script setup>
import{ref, onMounted} from 'vue'
import * as echarts from 'echarts'

const line = ref(null)
onMounted (() => {
    const echart = echarts.init(line.value)
})
</script>

<template>
    <div ref="line" style="width:1024px;height:600px"></div>
</template>