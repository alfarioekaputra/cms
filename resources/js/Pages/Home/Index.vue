<template>
  <layout title="Home">
    <div class="py-1">
        <img :src="images.hero1" class="object-cover h-64 w-full" /> 
    </div>
  </layout>
</template>

<script>
import Layout from '@/Shared/Layout'
export default {
    metaInfo: { title: 'Home' },
    components: {
        Layout,
    },
    data() {
        return {
            user: {
                name: "Admin",
            },
            images: {
                hero1: "/images/hero1.jpg"
            }
        }
    }
}
</script>