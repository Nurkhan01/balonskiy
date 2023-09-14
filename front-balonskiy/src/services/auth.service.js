import httpClient from "@/services/http.service"
import router from "@/router"
import axios from "axios";
//import {Role} from "@/utils/helpers/Role"
import {checkCookieVariable, getCookie, setCookie, deleteCookie} from "@/utils/helpers/cookies.helpers";

const authService = {
    currentUser: null,
    isValidAuthKey: true,
    isLoggedIn() {
        // return !!localStorage.getItem('auth_key')
        // return !!this.$cookies.get('access_token')
        return !!getCookie('ACCESS_TOKEN')
    },
    getToken() {
        //return localStorage.getItem('auth_key')

        // return this.$cookies.get('access_token')
        // return this.$cookies.get('access_token')
        return getCookie('ACCESS_TOKEN')

    },
    defaultHomePageForRole() {
        //const roles = this.currentUser?.roles || []

        // if (roles.length) {
        //     const role = roles[0]
        //     if ([Role.admin, Role.greeter].includes(role)) {
        //         return this.routerPush('register-enrollee')
        //     }
        //     if ([Role.uibTeam, Role.tehFrontOffice].includes(role)) {
        //         return this.routerPush('queue-list')
        //     }
        //     if ([Role.tehBackOffice].includes(role)) {
        //         return this.routerPush('back-tech-secretary-enrollees')
        //     }
        // }
        return this.routerPush('home')
    },
    routerPush(name) {
        return router.push({name})
    },
    async login(formData) {
        const {status, data} = await axios.post('http://localhost:1111/api/authenticate', formData)
        try {
            if (status === 200) {
                setCookie('ACCESS_TOKEN', data.access_token, 1200)
                //this.setupUserData(data)
                return {response: data, success: true}
            }
        } catch (e) {
            return {
                success: false,
                errors: e?.response?.data?.errors || {}
            }
        }
        //return {response: data, success: false, errors: {}}
    },
    checkAuthorized(){
        if(checkCookieVariable('ACCESS_TOKEN')){
        }
    },
    async logout() {
        //localStorage.clear()
        // if (this.$cookies.isKey('access_token')) {
        //     this.$cookies.remove('access_token')
        //     await router.push({name: 'login'})
        // }
        if (checkCookieVariable('ACCESS_TOKEN')) {
            deleteCookie('ACCESS_TOKEN')
        }
        await router.push({name: 'login'})
    },
    // async getUserData() {
    //     const auth_key = localStorage.getItem('auth_key')
    //     if (!this.currentUser && auth_key) {
    //         try {
    //             const {status, data} = await httpClient.get(`user/get-user-by-auth-key?auth_key=${auth_key}`)
    //             if (status === 200) {
    //                 this.setupUserData(data)
    //                 return
    //             }
    //         } catch (e) {
    //             this.isValidAuthKey = false
    //             return e
    //         }
    //     }
    //     this.isValidAuthKey = false
    // },
    // setupUserData(data) {
    //     this.isValidAuthKey = true
    //
    //     this.currentUser = {
    //         username: data.user.username,
    //         firstname: data.user.firstname,
    //         lastname: data.user.lastname,
    //         email: data.user.email,
    //         roles: Object.keys(data.roles)
    //     }
    // }

}

export default authService