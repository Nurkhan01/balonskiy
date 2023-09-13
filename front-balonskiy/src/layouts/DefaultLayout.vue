<template>
  <div class="fixed-navbar">
    <Menubar :model="items" />
  </div>
  <router-view/>
</template>

<script>
import authService from "../services/auth.service"
import router from "@/router";
export default {
  data() {
    return {
      items: [
        {
          label: 'Home',
          to: '/',
          icon: 'pi pi-home'

        },
        {
          label: 'Education Program',
          to: '/education-program',
          icon: 'pi pi-book'
        },
        {
          label: 'Education Discipline',
          to: '/education-discipline',
          icon: 'pi pi-book'
        },
        {
          label: 'Выход',
          icon: 'pi pi-fw pi-power-off',
          command: (event) => {
            this.logout()
          }
        }
      ],
    };
  },
  computed: {
    error() {
      return this.$store.getters.error
    },

  },
  watch: {
    error(err) {
      this.$error({title: `Ошибка ${err.message}`, text: JSON.stringify(err.errors)})
    }
  },
  methods: {
    logout() {
      authService.logout()
    },
  }
};
</script>

<style>
.fixed-navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000;
}
</style>