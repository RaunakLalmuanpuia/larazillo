
<template>
    <form @submit.prevent="create">
      <div class="grid grid-cols-6 gap-4">

        <div class="col-span-2">
          <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Beds</label>
          <input type="text" v-model.number="form.beds"  class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
          <div v-if="form.errors.beds" class="input-error">{{ form.errors.beds}}</div>
        </div>
   
   
        <div class="col-span-2">
          <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Baths</label>
          <input type="text" v-model.number="form.baths"  class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
          <div v-if="form.errors.baths" class="input-error">{{ form.errors.baths}}</div>
        </div>
   
   
        <div class="col-span-2">
          <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Area</label>
          <input type="text" v-model.number="form.area"  class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
          <div v-if="form.errors.area" class="input-error">{{ form.errors.area}}</div>
        </div>
   
   
        <div class="col-span-4">
          <label class="label">City</label>
          <input type="text" v-model="form.city"  class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
          <div v-if="form.errors.city" class="input-error">{{ form.errors.city}}</div>
        </div>
   
   
        <div class="col-span-2">
          <label class="label">Post Code</label>
          <input type="text" v-model="form.code"  class="input" />
          <div v-if="form.errors.code" class="input-error">{{ form.errors.code}}</div>
        </div>
   
   
        <div class="col-span-4">
          <label class="label">Street</label>
          <input type="text" v-model="form.street"  class="input"/>
          <div v-if="form.errors.street" class="input-error">{{ form.errors.street}}</div>
        </div>
   
   
        <div class="col-span-2">
          <label class="label">Street Nr</label>
          <input type="text" v-model="form.street_nr"  class="input"/>
          <div v-if="form.errors.street_nr" class="input-error">{{ form.errors.street_nr}}</div>
        </div>
   
   
        <div class="col-span-6">
          <label class="label">Price</label>
          <input type="text"  v-model.number="form.price"  class="input"/>
          <div v-if="form.errors.price" class="input-error">{{ form.errors.price}}</div>
        </div>
   
   
        <div  class="col-span-6">
          <button type="submit" class="btn-primary">Create</button>
        </div>
      </div>
    </form>
   </template>
   

   <script setup>
    // import { reactive } from 'vue'
    import { useForm } from '@inertiajs/vue3';

    const form = useForm({
        beds: 0,
        baths:0,
        area:0,
        city:null,
        street:null,
        code:null,
        street_nr: null,
        price: 0,

    })
    const create = () =>form.post("/listing")
   
   </script>

   
 <style scoped>
   label {
    margin-right: 2em;
   }
   
   
   div {
    padding: 2px
   }
   </style>
