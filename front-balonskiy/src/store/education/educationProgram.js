import educationProgramService from "@/services/education/educationProgram.service"

const educationProgram = {
    namespaced: true,
    actions: {


        async GET_EDUCATION_FIELDS({commit}) {
            try {
                const {status, data} = await educationProgramService.getEducationFields()
                if (status === 200) {
                    console.log('GET_EDUCATION_FIELDS', data.data)
                    commit('SET_EDUCATION_FIELDS', data.data)
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return []
        },
        async GET_EDUCATION_DIRECTIONS({commit}) {
            try {
                const {status, data} = await educationProgramService.getEducationDirections()
                if (status === 200) {
                    console.log('GET_EDUCATION_DIRECTIONS', data.data)
                    commit('SET_EDUCATION_DIRECTIONS', data.data)
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return []
        },
        async GET_EDUCATION_GROUPS({commit}) {
            try {
                const {status, data} = await educationProgramService.getEducationGroups()
                if (status === 200) {
                    console.log('GET_EDUCATION_GROUPS', data.data)
                    commit('SET_EDUCATION_GROUPS', data.data)
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return []
        },

        async POST_EDUCATION_PROGRAM({commit, state}, form) {

            try {
                await educationProgramService.post(form)
                return true
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return false
        },

        async PUT_EDUCATION_PROGRAM({commit, state}, form) {

            try {
                await educationProgramService.put(form)
                return true
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return false
        },
        async DELETE_EDUCATION_PROGRAM({commit}, education_program_id) {
            try {
                const data = await educationProgramService.delete(education_program_id);
                if (data) {
                    console.log(data, 'education program deleted')
                    return true
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return false
        },

        async GET_EDUCATION_PROGRAMS({commit}) {
            try {
                const {status, data} = await educationProgramService.get()
                if (status === 200) {
                    console.log('GET_EDUCATION_PROGRAMS', data.data)
                    commit('SET_EDUCATION_PROGRAMS', data.data)
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return []
        },

    },
    mutations: {

        SET_EDUCATION_FIELDS(state, data) {
            state.educationProgram_form.educationFields = data
        },
        SET_EDUCATION_DIRECTIONS(state, data) {
            state.educationProgram_form.educationDirections = data
        },
        SET_EDUCATION_GROUPS(state, data) {
            state.educationProgram_form.educationGroups = data
        },
        SET_EDUCATION_PROGRAMS(state, data) {
            state.educationProgram_form.educationPrograms = data
        },
    },
    state: {
        educationProgram_form: {
            educationFields: [],
            educationDirections: [],
            educationGroups: [],
            educationPrograms: []
        }
    },
    getters: {}
}

export default educationProgram