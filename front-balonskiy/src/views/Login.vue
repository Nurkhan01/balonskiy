<template>
  <div class="my-login-page">
    <section>
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="card-wrapper mt-5">
            <div class="brand">
              <img src="@/assets/logo-4.png" alt="logo">
            </div>
            <div class="card fat border">
              <div class="card-body">
                <h4 class="card-title text-center">{{commonData.appName}}</h4>

                <form @submit.prevent="login">

                  <div class="form-group mt-4">
                    <label for="email">Email</label>
                    <input id="email" type="text" class="form-control" name="email"
                           v-model.trim="form.email" required autofocus>
                  </div>

                  <div class="form-group mt-4">
                    <label for="password">Пароль</label>
                    <input id="password" type="password" class="form-control" name="password"
                           v-model.trim="form.password" required data-eye>
                  </div>

                  <div class="mt-4">
                    <Button icon="pi pi-sign-in" label="Вход" type="submit" :loading="loginLoading"
                            style="width: 100%"/>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import authService from '@/services/auth.service'
import {commonData} from '@/utils/common.data'

export default {
  name: "Login",
  data() {
    return {
      // commonData: {
      //   appName: 'Bologna'
      // },
      commonData,
      form: {
        email: '',
        password: ''
      },
      loginLoading: false
    }
  },
  methods: {
    async login() {
      if (!this.form.email.length || !this.form.password.length) {
        return this.$error({title: `Введите логин и пароль`})
      }

      this.loginLoading = true

      const {response, success, errors} = await authService.login(this.form)

      if (success) {

        //this.$cookies.set('access_token', response.access_token)
        //console.log('access_token', this.$cookies.get('access_token'))

        return await authService.defaultHomePageForRole()
      }

      let textError = Object.values(errors)
      textError = textError.length && textError[0].length && textError[0][0]

      //this.$error({text: textError || 'Произошла ошибка'})
      this.loginLoading = false
    }
  }
}
</script>

<style scoped>

div.my-login-page {
  background-color: #f7f9fb;
  font-size: 14px;
  height: 100vh;
}

.my-login-page .brand {
  width: 200px;
  height: 200px;
  overflow: hidden;
  border-radius: 7%;
  margin: 15px auto;
  box-shadow: 0 4px 8px rgba(0,0,0,.05);
  position: relative;
  z-index: 1;
}

.my-login-page .brand img {
  width: 100%;
}

.my-login-page .card-wrapper {
  width: 400px;
}

.my-login-page .card {
  border-color: transparent;
  /*box-shadow: 0 4px 8px rgba(0,0,0,.05);*/
}

.my-login-page .card.fat {
  padding: 10px;
}

.my-login-page .card .card-title {
  margin-bottom: 30px;
}

.my-login-page .form-control {
  border-width: 2.3px;
}

.my-login-page .form-group label {
  width: 100%;
}

.my-login-page .btn.btn-block {
  padding: 12px 10px;
}

.my-login-page .footer {
  margin: 40px 0;
  color: #888;
  text-align: center;
}
.auth-btn {
  width: 100%;
}
.reg-btn {
  width: 100%;
}
@media screen and (max-width: 425px) {
  .my-login-page .card-wrapper {
    width: 90%;
    margin: 0 auto;
  }
}

@media screen and (max-width: 320px) {
  .my-login-page .card.fat {
    padding: 0;
  }

  .my-login-page .card.fat .card-body {
    padding: 15px;
  }
}
</style>