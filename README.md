### original Git

> https://github.com/piotr-jura-udemy/master-laravel-vue-fullstack

# My git

> https://github.com/samedan/2502_VueJS_Laravel

# Udemy

> https://www.udemy.com/course/master-laravel-6-with-vuejs-fullstack-development/learn/lecture/46496743#questions/21827194

### Vite Vue

> npm i --save-dev @vitejs/plugin-vue --legacy-peer-deps

> https://laravel.com/docs/10.x/vite#vue

> vite.config.js

### Inertia root file

> resources/views/app.blade.php

> php artisan inertia:middleware

### Run app

> php artisan serve

> npm run dev

### Pages Routes Inertia

> resources/js/Pages/Index/index.vue

### First PAges

> php artisan make:controller IndexController

> php artisan route:list

### Layout

> <template><slot>Default</slot></template>

### Persistent Layout

```
<script>
import MainLayout from "../../Layouts/MainLayout.vue";
export default {
    layout: MainLayout,
};
</script>
```

### Default Layout

> resources/js/app.js -> page.default.layout = page.default.layout || MainLayout

### Migrations, factories

> php artisan make:factory ListingFactory

> php artisan migrate:refresh

> php artisan db:seed

> php artisan migrate:refresh --seed

### Clean Tinker

> composer dumpautoload

> php artisan tinker

> TINKER> Listing::all()

```
Listing::create([
    'beds' => 2, 'baths' => 2, 'area' => 100, 'city' => 'North', 'street' => 'Tinker st', 'street_nr' => 20, 'code' => 'TS', 'price' => 200_000
    ])
```

### ListingController

> php artisan make:controller --resource ListingController

# Routes in Controller

> web.php-> Route::resource('listing', ListingController::class);

> php artisan route:list

### Vue pages

```
<template>
    <div v-for="listing in listings" :key="listing.id">
        <Link :href="`/listing/${listing.id}`">
            <ListingAddress :listing="listing" />
        </Link>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import ListingAddress from "@/Components/ListingAddress.vue";

defineProps({
    listings: Array,
});
</script>
```
