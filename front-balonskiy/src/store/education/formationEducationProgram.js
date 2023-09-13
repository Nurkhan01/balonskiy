import formationEducationProgramService from "@/services/education/formationEducationProgram.service"

const formationEducationProgram = {
    namespaced: true,
    actions: {


        // async GET_EDUCATION_FIELDS({commit}) {
        //     try {
        //         const {status, data} = await educationProgramService.getEducationFields()
        //         if (status === 200) {
        //             console.log('GET_EDUCATION_FIELDS', data.data)
        //             commit('SET_EDUCATION_FIELDS', data.data)
        //         }
        //     } catch (e) {
        //         commit('SET_ERROR', e, {root: true})
        //     }
        //     return []
        // },
        async GET_GOSO_CYCLES({commit}) {
            try {
                const {status, data} = await formationEducationProgramService.getGosoCycles()
                if (status === 200) {
                    console.log('GET_GOSO_CYCLES', data.data)
                    commit('SET_GOSO_CYCLES', data.data)
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return []
        },
        async GET_GOSO_COMPONENTS({commit}) {
            try {
                const {status, data} = await formationEducationProgramService.getGosoComponents()
                if (status === 200) {
                    console.log('GET_GOSO_COMPONENTS', data.data)
                    commit('SET_GOSO_COMPONENTS', data.data)
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return []
        },
        async GET_EDUCATION_MODULES({commit}, education_program_id) {
            try {
                const {status, data} = await formationEducationProgramService.getEducationModules(education_program_id)
                if (status === 200) {
                    console.log('GET_EDUCATION_MODULES', data.data)
                    commit('SET_EDUCATION_MODULES', data.data)
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return []
        },

        async POST_EDUCATION_MODULE({commit, state}, form) {

            try {
                await formationEducationProgramService.postEducationModule(form)
                return true
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return false
        },
        async POST_FORMATION_EDUCATION_PROGRAM({commit, state}, form) {

            try {
                await formationEducationProgramService.post(form)
                return true
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return false
        },
        //
        // async PUT_EDUCATION_PROGRAM({commit, state}, form) {
        //
        //     try {
        //         await educationProgramService.put(form)
        //         return true
        //     } catch (e) {
        //         commit('SET_ERROR', e, {root: true})
        //     }
        //     return false
        // },
        async DELETE_EDUCATION_MODULE({commit}, education_module_id) {
            try {
                const data = await formationEducationProgramService.deleteEducationModule(education_module_id);
                if (data) {
                    console.log(data, 'education module deleted')
                    return true
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return false
        },

        // async GET_EDUCATION_PROGRAMS({commit}) {
        //     try {
        //         const {status, data} = await educationProgramService.get()
        //         if (status === 200) {
        //             console.log('GET_EDUCATION_PROGRAMS', data.data)
        //             commit('SET_EDUCATION_PROGRAMS', data.data)
        //         }
        //     } catch (e) {
        //         commit('SET_ERROR', e, {root: true})
        //     }
        //     return []
        // },

    },
    mutations: {

        SET_EDUCATION_MODULES(state, data) {
            state.formationEducationProgram_form.educationModules = data
        },
        SET_GOSO_CYCLES(state, data) {
            state.formationEducationProgram_form.gosoCycles = data
        },
        SET_GOSO_COMPONENTS(state, data) {
            state.formationEducationProgram_form.gosoComponents = data
        },
        // SET_EDUCATION_GROUPS(state, data) {
        //     state.educationProgram_form.educationGroups = data
        // },
        // SET_EDUCATION_PROGRAMS(state, data) {
        //     state.educationProgram_form.educationPrograms = data
        // },
        ADD_ROW_FORMATION_EDUCATION_PROGRAM_INFO(state, educationModule) {

            // const formations = state.formationEducationProgram_form.educationModules.find(i=>i.id == education_module_id).formations

            educationModule.formations.push({
                goso_cycle_name_id: 0,
                goso_component_name_id : 0,
                education_module_id: educationModule.id,
                semester: 0,
                credit: 0,
                education_discipline_id: 0,
                education_program_id: state.formationEducationProgram_form.urlEducationProgramId,
                //study_level_id: state.formationEducationProgram_form.selectedStudyLevelId,
                //put_status: 0
            });
            console.log(state.formationEducationProgram_form.educationModules, "STATE")
        },
    },
    state: {
        formationEducationProgram_form: {
            educationModules: [],
            // educationModules: [
            //     {
            //         id: 1,
            //         module: 'Модуль 1',
            //         name: 'zxc',
            //         formations: []
            //     }
            //
            // ],
            gosoCycles: [],
            gosoComponents: [],


            urlEducationProgramId: null,
            urlDecreeGosoTemplateId: null,
            formationEducationProgramInfos: [],
            selectedStudyLevelId: 1,
            studyLangId: 0,
            selectedEducationProgramId: null,
            studyLevels: [],
            educationPrograms: [],
            componentNames: [],
            educationDisciplines: [],
            gosoTemplateInfos: [],
            gosoTemplateCycle: [],
            selectedDecreeGosoTemplatesId: null,
            educationSemesters: [],
        }
    },
    getters: {}
}

export default formationEducationProgram