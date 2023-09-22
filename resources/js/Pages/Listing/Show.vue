<template>
<div class="flex flex-col-reverse gap-4 md:grid md:grid-cols-12">
    <Box class="flex items-center w-full md:col-span-7">
        <div class="w-full font-medium text-center text-gray-500">No Images</div>  
    </Box>

    <div class="flex flex-col gap-4 md:col-span-5">
        <Box>
            <template #header>Basic Info</template>
            <Price :price="listing.price" class="text-2xl font-bold"></Price>
         <ListingSpace :listing="listing" class="text-lg"/>
        <ListingAddress :listing = "listing" class="text-gray-500"/>
        </Box>

        <Box>
            <template #header>Montly Payment</template>
            <div>
                <label class="label"> Intrest Rate ({{ intrestRate }}%)</label>
                <input v-model.number="intrestRate"
                type="range" min="0.1" max="30" step="0.1" 
                class="w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                <label class="label"> Duration ({{ duration }} years)</label>
                <input v-model.number="duration"
                 type="range" min="3" max="35" step="1" 
                class="w-full h-4 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                
                <div class="mt-2 text-gray-600 dark:text-gray-300">
                    <div class="text-gray-400">Your Monthly Payment</div>    
                    <Price :price="monthlyPayment" class="text-3xl"></Price>
                </div>
                <div class="mt-2 text-gray-500">
                    <div class="flex justify-between">
                        <div>Total Paid</div>
                        <div>
                            <Price :price = "totalPaid" class="font-medium"></Price>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div>principle Paid</div>
                        <div>
                            <Price :price = "listing.price" class="font-medium"></Price>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div>Intrest Paid</div>
                        <div>
                            <Price :price = "totalIntrest" class="font-medium"></Price>
                        </div>
                    </div>
                </div>
                
            </div>
        </Box>
    </div>
</div>
</template>

<script setup>
 import ListingAddress from '../../Components/ListingAddress.vue';
 import ListingSpace from '../../Components/ListingSpace.vue';
import Price from '../../Components/Price.vue';
import Box from '../../Components/UI/Box.vue'
import {ref, computed} from 'vue'
import {useMonthlyPayment} from '../../Composables/useMonthlyPayment'

const intrestRate = ref(2.5)
const duration = ref(25)

    const props = defineProps({
        listing: Object
    })


const {monthlyPayment, totalPaid, totalIntrest} = useMonthlyPayment(props.listing.price, intrestRate, duration)
    
// const monthlyPayment = computed(()=>{
//     const principle = props.listing.price
//     const monthlyIntrest = intrestRate.value / 100 / 12
//     const numberOfPaymentMonths = duration.value * 12
    
//     return principle * monthlyIntrest * (Math.pow(1 + monthlyIntrest, numberOfPaymentMonths)) /
//     (Math.pow(1 + monthlyIntrest, numberOfPaymentMonths) - 1)
// })

</script>