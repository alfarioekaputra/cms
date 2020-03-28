<template>
  <main>
    <nav>
      <div class="container mx-auto px-6 py-2 flex justify-between items-center">
        <a href="#" class="font-bold text-2xl lg:text-4xl">
          School Name
        </a>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:block">
          <ul class="inline-flex">
            <li><inertia-link href="/" class="hover:bg-gray-700 hover:text-white rounded px-5 py-3 font-bold">Home</inertia-link></li>
            <li><inertia-link href="/site/about" class="hover:bg-gray-700 hover:text-white rounded px-5 py-3">About</inertia-link></li>
            <li><a class="hover:bg-gray-700 hover:text-white rounded px-5 py-3" href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>        
    <article>
      <slot />
    </article>
  </main>
</template>

<script>
  export default {
    props: {
      title: String,
    },
    watch: {
      title: {
        immediate: true,
        handler(title) {
          document.title = title
        },
      },
    },
  }
</script>