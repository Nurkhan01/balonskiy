import educationDisciplineService from "@/services/education/educationDiscipline.service"

const educationDiscipline = {
    namespaced: true,
    actions: {

        async DELETE_EDUCATION_DISCIPLINE({commit}, discipline_id) {
            try {
                const data = await educationDisciplineService.delete(discipline_id);
                if (data) {
                    console.log(data, 'discipline deleted')
                    return true
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return false
        },

        async PUT_EDUCATION_DISCIPLINE({commit, state}, form) {

            try {
                await educationDisciplineService.put(form)
                return true
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return false
        },

        async POST_EDUCATION_DISCIPLINE({commit, state}, form) {

            try {
                await educationDisciplineService.post(form)
                return true
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return false
        },

        async GET_EDUCATION_DISCIPLINES({commit}) {
            try {
                const {status, data} = await educationDisciplineService.get()
                if (status === 200) {
                    console.log('GET_EDUCATION_DISCIPLINES', data.data)
                    commit('SET_EDUCATION_DISCIPLINES', data.data)
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return []
        },

    },
    mutations: {

        SET_EDUCATION_DISCIPLINES(state, data) {
            state.educationDiscipline_form.educationDisciplines = data
        },
    },
    state: {
        educationDiscipline_form: {

            educationDisciplines: []
        }
    },
    getters: {}
}

export default educationDiscipline