import commonService from "@/services/common/common.service"

const common = {
    namespaced: true,
    actions: {

        async GET_DEPARTMENTS({commit}) {
            console.log('GET_DEPARTMENTS')
            try {
                const {status, data} = await commonService.getDepartments()
                if (status === 200) {
                    console.log('GET_DEPARTMENTS', data.data)
                    commit('SET_DEPARTMENTS', data.data)
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return []
        },

        async GET_STUDY_LEVELS({commit}) {
            try {
                const {status, data} = await commonService.getStudyLevels()
                if (status === 200) {
                    console.log('GET_STUDY_LEVELS', data.data)
                    commit('SET_STUDY_LEVELS', data.data)
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return []
        },

        async GET_EDUCATION_FIELDS({commit}) {
            try {
                const {status, data} = await commonService.getEducationFields()
                if (status === 200) {
                    console.log('GET_EDUCATION_FIELDS', data.data)
                    commit('SET_EDUCATION_FIELDS', data.data)
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return []
        },

        async GET_DECREE_GOSO_TEMPLATES({commit}) {
            try {
                const {status, data} = await commonService.getDecreeGosoTemplates()
                if (status === 200) {
                    console.log('GET_DECREE_GOSO_TEMPLATES', data.data)
                    commit('SET_DECREE_GOSO_TEMPLATES', data.data)
                }
            } catch (e) {
                commit('SET_ERROR', e, {root: true})
            }
            return []
        },

    },
    mutations: {
        SET_DEPARTMENTS(state, data) {
            state.common_form.departments = data
        },
        SET_STUDY_LEVELS(state, data) {
            state.common_form.studyLevels = data
        },
        SET_EDUCATION_FIELDS(state, data) {
            state.common_form.educationFields = data
        },
        SET_DECREE_GOSO_TEMPLATES(state, data) {
            state.common_form.decreeGosoTemplates = data
        },
    },
    state: {
        common_form: {
            // departments: [
            //     {
            //         "id": 3,
            //         "name_ru": "Программа Foundation",
            //         "name_kz": "Программа Foundation",
            //         "name_en": null,
            //         "name_short_kz": "Программа Foundation",
            //         "name_short_ru": "Программа Foundation",
            //         "name_short_en": null,
            //         "is_cathedra": 1,
            //         "put_status": 1,
            //         "mdl_category_id": null,
            //         "esuvo_cafedraid": null
            //     },
            //     {
            //         "id": 4,
            //         "name_ru": "Факультет Базового Высшего Образования",
            //         "name_kz": "Basic Higher Education",
            //         "name_en": "Basic Higher Education",
            //         "name_short_kz": "Факультет Базового Высшего Образования",
            //         "name_short_ru": "Факультет Базового Высшего Образования",
            //         "name_short_en": "FBHE",
            //         "is_cathedra": 1,
            //         "put_status": 1,
            //         "mdl_category_id": 11,
            //         "esuvo_cafedraid": null
            //     },
            //     {
            //         "id": 5,
            //         "name_ru": "Graduate School of Business",
            //         "name_kz": "Graduate School of Business",
            //         "name_en": "Graduate School of Business",
            //         "name_short_kz": "Graduate School of Business",
            //         "name_short_ru": "Graduate School of Business",
            //         "name_short_en": "GSB",
            //         "is_cathedra": 1,
            //         "put_status": 1,
            //         "mdl_category_id": 2,
            //         "esuvo_cafedraid": 10
            //     },
            //     {
            //         "id": 6,
            //         "name_ru": "Кафедра Менеджмента и Бизнеса",
            //         "name_kz": "Кафедра Менеджмента и Бизнеса",
            //         "name_en": null,
            //         "name_short_kz": "Кафедра Менеджмента и Бизнеса",
            //         "name_short_ru": "Кафедра Менеджмента и Бизнеса",
            //         "name_short_en": "MIB",
            //         "is_cathedra": 1,
            //         "put_status": 1,
            //         "mdl_category_id": 3,
            //         "esuvo_cafedraid": 5
            //     },
            //     {
            //         "id": 7,
            //         "name_ru": "Кафедра Социально-Гуманитарных Наук",
            //         "name_kz": "Кафедра Социально-Гуманитарных Наук",
            //         "name_en": null,
            //         "name_short_kz": " Кафедра Социально-Гуманитарных Наук",
            //         "name_short_ru": " Кафедра Социально-ГуманитарныхНаук",
            //         "name_short_en": "SGN",
            //         "is_cathedra": 1,
            //         "put_status": 1,
            //         "mdl_category_id": 4,
            //         "esuvo_cafedraid": 3
            //     },
            //     {
            //         "id": 8,
            //         "name_ru": "Кафедра Финансов и Учета",
            //         "name_kz": "Кафедра Финансов и Учета",
            //         "name_en": null,
            //         "name_short_kz": "Кафедра Финансов и Учета",
            //         "name_short_ru": "Кафедра Финансов и Учета",
            //         "name_short_en": "FIU",
            //         "is_cathedra": 1,
            //         "put_status": 1,
            //         "mdl_category_id": 5,
            //         "esuvo_cafedraid": 7
            //     },
            //     {
            //         "id": 9,
            //         "name_ru": "Языковой Центр",
            //         "name_kz": "Языковой Центр",
            //         "name_en": null,
            //         "name_short_kz": "ЯЦ",
            //         "name_short_ru": "ЯЦ",
            //         "name_short_en": "LANG",
            //         "is_cathedra": 1,
            //         "put_status": 1,
            //         "mdl_category_id": 6,
            //         "esuvo_cafedraid": 8
            //     },
            //     {
            //         "id": 37,
            //         "name_ru": "Кафедра Бизнес Информатики",
            //         "name_kz": "Кафедра Бизнес Информатики",
            //         "name_en": null,
            //         "name_short_kz": "Кафедра Бизнес Информатики",
            //         "name_short_ru": "Кафедра Бизнес Информатики",
            //         "name_short_en": "BI",
            //         "is_cathedra": 1,
            //         "put_status": 1,
            //         "mdl_category_id": 7,
            //         "esuvo_cafedraid": 9
            //     },
            //     {
            //         "id": 39,
            //         "name_ru": "Кафедра «Туризма и Гостеприимства»",
            //         "name_kz": null,
            //         "name_en": "Tourism and Hospitality Department",
            //         "name_short_kz": null,
            //         "name_short_ru": "TH department",
            //         "name_short_en": "TIG",
            //         "is_cathedra": 1,
            //         "put_status": 1,
            //         "mdl_category_id": 8,
            //         "esuvo_cafedraid": 11
            //     },
            //     {
            //         "id": 40,
            //         "name_ru": "International Medical School",
            //         "name_kz": null,
            //         "name_en": "International Medical School",
            //         "name_short_kz": "IMS",
            //         "name_short_ru": "IMS",
            //         "name_short_en": "IMS",
            //         "is_cathedra": 1,
            //         "put_status": 1,
            //         "mdl_category_id": 9,
            //         "esuvo_cafedraid": 12
            //     }
            // ],
            departments: [],
            // studyLevels: [
            //     {
            //         "id": 1,
            //         "name": "Бакалавриат",
            //         "esuvo_degreeid": 1
            //     },
            //     {
            //         "id": 2,
            //         "name": "Магистратура (1 годичное,профильное)",
            //         "esuvo_degreeid": 3
            //     },
            //     {
            //         "id": 3,
            //         "name": "Магистратура (1,5 годичное, профильное)",
            //         "esuvo_degreeid": 3
            //     },
            //     {
            //         "id": 4,
            //         "name": "Магистратура (2 годичное, научно-педагогическое)",
            //         "esuvo_degreeid": 2
            //     },
            //     {
            //         "id": 5,
            //         "name": "MBA",
            //         "esuvo_degreeid": null
            //     },
            //     {
            //         "id": 6,
            //         "name": "EMBA",
            //         "esuvo_degreeid": 3
            //     },
            //     {
            //         "id": 7,
            //         "name": "Докторантура (научно-педагогическое направление)",
            //         "esuvo_degreeid": 6
            //     },
            //     {
            //         "id": 8,
            //         "name": "DBA",
            //         "esuvo_degreeid": null
            //     },
            //     {
            //         "id": 9,
            //         "name": "Другое",
            //         "esuvo_degreeid": null
            //     },
            //     {
            //         "id": 10,
            //         "name": "Постдокторантура",
            //         "esuvo_degreeid": null
            //     },
            //     {
            //         "id": 11,
            //         "name": "Резидентура",
            //         "esuvo_degreeid": 5
            //     },
            //     {
            //         "id": 12,
            //         "name": "Магистр медицинских наук",
            //         "esuvo_degreeid": null
            //     }
            // ],
            studyLevels: [],
            // educationFields: [
            //     {
            //         "id": 5,
            //         "name": "6B05 Естественные науки, математика и статистика",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 6,
            //         "name": "6B06 Информационно-коммуникационные технологии",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 7,
            //         "name": "6B07 Инженерные, обрабатывающие и строительные отрасли",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 8,
            //         "name": "6B08 Сельское хозяйство и биоресурсы",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 9,
            //         "name": "6B09 Ветеринария",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 10,
            //         "name": "6B10 Здравоохранение",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 11,
            //         "name": "6B11 Услуги",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 12,
            //         "name": "6B12 Национальная безопасность и военное дело",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 13,
            //         "name": "7M01 Педагогические науки",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 14,
            //         "name": "7M02 Искусство и гуманитарные науки",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 15,
            //         "name": "7M03 Социальные науки, журналистика и информация",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 16,
            //         "name": "7M04 Бизнес, управление и право",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 17,
            //         "name": "7M05 Естественные науки, математика и статистика",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 18,
            //         "name": "7M06 Информационно-коммуникационные технологии",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 19,
            //         "name": "7M07 Инженерные, обрабатывающие и строительные отрасли",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 20,
            //         "name": "7M08 Сельское хозяйство и биоресурсы",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 21,
            //         "name": "7M09 Ветеринария",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 22,
            //         "name": "7M10 Здравоохранение",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 23,
            //         "name": "7M11 Услуги",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 24,
            //         "name": "7M12 Национальная безопасность и военное дело",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 25,
            //         "name": "7R01 Здравоохранение (медицина)",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 26,
            //         "name": "8D01 Педагогические науки",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 27,
            //         "name": "8D02 Искусство и гуманитарные науки",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 28,
            //         "name": "8D03 Социальные науки, журналистика и информация",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 29,
            //         "name": "8D04 Бизнес, управление и право ",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 30,
            //         "name": "8D05 Естественные науки, математика и статистика",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 31,
            //         "name": "8D06 Информационно-коммуникационные технологии",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 32,
            //         "name": "8D07 Инженерные, обрабатывающие и строительные отрасли",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 33,
            //         "name": "8D08 Сельское хозяйство и биоресурсы",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 34,
            //         "name": "8D09 Ветеринария",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 35,
            //         "name": "8D10 Здравоохранение",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 36,
            //         "name": "8D11 Услуги",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 37,
            //         "name": "8D12 Национальная безопасность и военное дело",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 38,
            //         "name": "6B01 Педагогические науки",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 39,
            //         "name": "6B02 Искусство и гуманитарные науки",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 40,
            //         "name": "6B03 Социальные науки, журналистика и информация",
            //         "put_status": 1
            //     },
            //     {
            //         "id": 41,
            //         "name": "6B04 Бизнес, управление и право",
            //         "put_status": 1
            //     }
            // ],
            // educationDirections: [
            //     {
            //         "id": 17,
            //         "education_field_id": 5,
            //         "name": "6B051 Биологические и смежные науки",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.05.001"
            //     },
            //     {
            //         "id": 18,
            //         "education_field_id": 5,
            //         "name": "6B052 Окружающая среда",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.05.002"
            //     },
            //     {
            //         "id": 19,
            //         "education_field_id": 5,
            //         "name": "6B053 Физические и химические науки",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.05.003"
            //     },
            //     {
            //         "id": 20,
            //         "education_field_id": 5,
            //         "name": "6B054 Математика и статистика",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.05.004"
            //     },
            //     {
            //         "id": 21,
            //         "education_field_id": 5,
            //         "name": "6B055 Геология",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.05.005"
            //     },
            //     {
            //         "id": 22,
            //         "education_field_id": 6,
            //         "name": "6B061 Информационно-коммуникационные технологии",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.06.001"
            //     },
            //     {
            //         "id": 23,
            //         "education_field_id": 6,
            //         "name": "6B062 Телекоммуникации",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.06.002"
            //     },
            //     {
            //         "id": 24,
            //         "education_field_id": 6,
            //         "name": "6B063 Информационная безопасность",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.06.003"
            //     },
            //     {
            //         "id": 25,
            //         "education_field_id": 7,
            //         "name": "6B071 Инженерия и инженерное дело",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.07.001"
            //     },
            //     {
            //         "id": 26,
            //         "education_field_id": 7,
            //         "name": "6B072 Производственные и обрабатывающие отрасли",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.07.002"
            //     },
            //     {
            //         "id": 27,
            //         "education_field_id": 7,
            //         "name": "6B073 Архитектура и строительство",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.07.003"
            //     },
            //     {
            //         "id": 28,
            //         "education_field_id": 7,
            //         "name": "6B074 Водное хозяйство",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.07.004"
            //     },
            //     {
            //         "id": 29,
            //         "education_field_id": 7,
            //         "name": "6B075 Стандартизация, сертификация и метрология (по отраслям)",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.07.005"
            //     },
            //     {
            //         "id": 30,
            //         "education_field_id": 8,
            //         "name": "6B081 Агрономия",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 31,
            //         "education_field_id": 8,
            //         "name": "6B082 Животноводство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 32,
            //         "education_field_id": 8,
            //         "name": "6B083 Лесное хозяйство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 33,
            //         "education_field_id": 8,
            //         "name": "6B084 Рыбное хозяйство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 34,
            //         "education_field_id": 8,
            //         "name": "6B085 Землеустройство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 35,
            //         "education_field_id": 8,
            //         "name": "6B086 Водные ресурсы и водопользования",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 36,
            //         "education_field_id": 8,
            //         "name": "6B087 Агроинженерия",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 37,
            //         "education_field_id": 9,
            //         "name": "6B091 Ветеринария",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 38,
            //         "education_field_id": 10,
            //         "name": "6B101 Здравоохранение",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 39,
            //         "education_field_id": 11,
            //         "name": "6B111 Сфера обслуживания",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.11.001"
            //     },
            //     {
            //         "id": 40,
            //         "education_field_id": 11,
            //         "name": "6B112 Гигиена и охрана труда на производстве",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 41,
            //         "education_field_id": 11,
            //         "name": "6B113 Транспортные услуги",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.11.003"
            //     },
            //     {
            //         "id": 42,
            //         "education_field_id": 11,
            //         "name": "6B114 Социальная работа",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 43,
            //         "education_field_id": 12,
            //         "name": "6B121 Военное дело",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 44,
            //         "education_field_id": 12,
            //         "name": "6B122 Национальная безопасность",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 45,
            //         "education_field_id": 12,
            //         "name": "6B123 Общественная безопасность",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 46,
            //         "education_field_id": 13,
            //         "name": "7M011 Педагогика и психология",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 47,
            //         "education_field_id": 13,
            //         "name": "7M012 Педагогика дошкольного воспитания и обучения",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 48,
            //         "education_field_id": 13,
            //         "name": "7M013 Подготовка педагогов без предметной специализации",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 49,
            //         "education_field_id": 13,
            //         "name": "7M014 Подготовка педагогов с предметной специализацией общего развития",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 50,
            //         "education_field_id": 13,
            //         "name": "7M015 Подготовка педагогов по естественнонаучным предметам",
            //         "put_status": 1,
            //         "nobd_spec_code": "6.01.005"
            //     },
            //     {
            //         "id": 51,
            //         "education_field_id": 13,
            //         "name": "7M016 Подготовка педагогов по гуманитарным предметам",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 52,
            //         "education_field_id": 13,
            //         "name": "7M017 Подготовка педагогов по языкам и литературе",
            //         "put_status": 1,
            //         "nobd_spec_code": "6.01.007"
            //     },
            //     {
            //         "id": 53,
            //         "education_field_id": 13,
            //         "name": "7M018 Подготовка специалистов по социальной педагогике и самопознанию",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 54,
            //         "education_field_id": 13,
            //         "name": "7M019 Специальная педагогика",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 55,
            //         "education_field_id": 14,
            //         "name": "7M021 Искусство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 56,
            //         "education_field_id": 14,
            //         "name": "7M022 Гуманитарные науки",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 57,
            //         "education_field_id": 14,
            //         "name": "7M023 Языки и литература",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 58,
            //         "education_field_id": 15,
            //         "name": "7M031 Социальные науки",
            //         "put_status": 1,
            //         "nobd_spec_code": "6.03.001"
            //     },
            //     {
            //         "id": 59,
            //         "education_field_id": 15,
            //         "name": "7M032 Журналистика и информация",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 60,
            //         "education_field_id": 16,
            //         "name": "7M041 Бизнес и управление",
            //         "put_status": 1,
            //         "nobd_spec_code": "6.04.001"
            //     },
            //     {
            //         "id": 61,
            //         "education_field_id": 16,
            //         "name": "7M042 Право",
            //         "put_status": 1,
            //         "nobd_spec_code": "6.04.002"
            //     },
            //     {
            //         "id": 62,
            //         "education_field_id": 17,
            //         "name": "7M051 Биологические и смежные науки",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 63,
            //         "education_field_id": 17,
            //         "name": "7M052 Окружающая среда",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 64,
            //         "education_field_id": 17,
            //         "name": "7M053 Физические и химические науки",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 65,
            //         "education_field_id": 17,
            //         "name": "7M054 Математика и статистика",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 66,
            //         "education_field_id": 17,
            //         "name": "7M055 Геология",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 67,
            //         "education_field_id": 18,
            //         "name": "7M061 Информационно-коммуникационные технологии",
            //         "put_status": 1,
            //         "nobd_spec_code": "6.06.001"
            //     },
            //     {
            //         "id": 68,
            //         "education_field_id": 18,
            //         "name": "7M062 Телекоммуникации",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 69,
            //         "education_field_id": 18,
            //         "name": "7M063 Информационная безопасность",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 70,
            //         "education_field_id": 19,
            //         "name": "7M071 Инженерия и инженерное дело",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 71,
            //         "education_field_id": 19,
            //         "name": "7M072 Производственные и обрабатывающие отрасли",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 72,
            //         "education_field_id": 19,
            //         "name": "7M073 Архитектура и строительство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 73,
            //         "education_field_id": 19,
            //         "name": "7M074 Водное хозяйство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 74,
            //         "education_field_id": 19,
            //         "name": "7M075 Стандартизация, сертификация и метрология (по отраслям)",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 75,
            //         "education_field_id": 20,
            //         "name": "7M081 Агрономия",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 76,
            //         "education_field_id": 20,
            //         "name": "7M082 Животноводство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 77,
            //         "education_field_id": 20,
            //         "name": "7M083 Лесное хозяйство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 78,
            //         "education_field_id": 20,
            //         "name": "7M084 Рыбное хозяйство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 79,
            //         "education_field_id": 20,
            //         "name": "7M085 Землеустройство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 80,
            //         "education_field_id": 20,
            //         "name": "7M086 Водные ресурсы и водопользование",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 81,
            //         "education_field_id": 20,
            //         "name": "7M087 Агроинженерия",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 82,
            //         "education_field_id": 21,
            //         "name": "7M091 Ветеринария",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 83,
            //         "education_field_id": 22,
            //         "name": "7M101 Здравоохранение",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 84,
            //         "education_field_id": 23,
            //         "name": "7M111 Сфера обслуживания",
            //         "put_status": 1,
            //         "nobd_spec_code": "6.11.001"
            //     },
            //     {
            //         "id": 85,
            //         "education_field_id": 23,
            //         "name": "7M112 Гигиена и охрана труда на производстве",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 86,
            //         "education_field_id": 23,
            //         "name": "7M113 Транспортные услуги",
            //         "put_status": 1,
            //         "nobd_spec_code": "6.11.003"
            //     },
            //     {
            //         "id": 87,
            //         "education_field_id": 23,
            //         "name": "7M114 Социальная работа",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 88,
            //         "education_field_id": 24,
            //         "name": "7M121 Военное дело",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 89,
            //         "education_field_id": 24,
            //         "name": "7M122 Национальная безопасность",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 90,
            //         "education_field_id": 24,
            //         "name": "7M123 Общественная безопасность",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 91,
            //         "education_field_id": 25,
            //         "name": "7R011 Здравоохранение",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 92,
            //         "education_field_id": 26,
            //         "name": "8D011 Педагогика и психология",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 93,
            //         "education_field_id": 26,
            //         "name": "8D012 Педагогика дошкольного воспитания и обучения",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 94,
            //         "education_field_id": 26,
            //         "name": "8D013 Подготовка педагогов без предметной специализации",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 95,
            //         "education_field_id": 26,
            //         "name": "8D014 Подготовка педагогов с предметной специализацией общего развития",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 96,
            //         "education_field_id": 26,
            //         "name": "8D015 Подготовка педагогов по естественнонаучным предметам",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 97,
            //         "education_field_id": 26,
            //         "name": "8D016 Подготовка педагогов по гуманитарным предметам",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 98,
            //         "education_field_id": 26,
            //         "name": "8D017 Подготовка педагогов по языкам и литературе",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 99,
            //         "education_field_id": 26,
            //         "name": "8D018 Подготовка специалистов по социальной педагогике и самопознанию",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 100,
            //         "education_field_id": 26,
            //         "name": "8D019 Специальная педагогика",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 101,
            //         "education_field_id": 27,
            //         "name": "8D021 Искусство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 102,
            //         "education_field_id": 27,
            //         "name": "8D022 Гуманитарные науки",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 103,
            //         "education_field_id": 27,
            //         "name": "8D023 Языки и литература",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 104,
            //         "education_field_id": 28,
            //         "name": "8D031 Социальные науки",
            //         "put_status": 1,
            //         "nobd_spec_code": "8.03.001"
            //     },
            //     {
            //         "id": 105,
            //         "education_field_id": 28,
            //         "name": "8D032 Журналистика и информация",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 106,
            //         "education_field_id": 29,
            //         "name": "8D041 Бизнес и управление",
            //         "put_status": 1,
            //         "nobd_spec_code": "8.04.001"
            //     },
            //     {
            //         "id": 107,
            //         "education_field_id": 29,
            //         "name": "8D042 Право",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 108,
            //         "education_field_id": 30,
            //         "name": "8D051 Биологические и смежные науки",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 109,
            //         "education_field_id": 30,
            //         "name": "8D052 Окружающая среда",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 110,
            //         "education_field_id": 30,
            //         "name": "8D053 Физические и химические науки",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 111,
            //         "education_field_id": 30,
            //         "name": "8D054 Математика и статистика",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 112,
            //         "education_field_id": 30,
            //         "name": "8D055 Геология",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 113,
            //         "education_field_id": 31,
            //         "name": "8D061 Информационно-коммуникационные технологии",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 114,
            //         "education_field_id": 31,
            //         "name": "8D062 Телекоммуникации",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 115,
            //         "education_field_id": 31,
            //         "name": "8D063 Информационная безопасность",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 116,
            //         "education_field_id": 32,
            //         "name": "8D071 Инженерия и инженерное дело",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 117,
            //         "education_field_id": 32,
            //         "name": "8D072 Производственные и обрабатывающие отрасли",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 118,
            //         "education_field_id": 32,
            //         "name": "8D073 Архитектура и строительство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 119,
            //         "education_field_id": 32,
            //         "name": "8D074 Водное хозяйство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 120,
            //         "education_field_id": 32,
            //         "name": "8D075 Стандартизация, сертификация и метрология (по отраслям)",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 121,
            //         "education_field_id": 33,
            //         "name": "8D081 Агрономия",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 122,
            //         "education_field_id": 33,
            //         "name": "8D082 Животноводство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 123,
            //         "education_field_id": 33,
            //         "name": "8D083 Лесное хозяйство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 124,
            //         "education_field_id": 33,
            //         "name": "8D084 Рыбное хозяйство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 125,
            //         "education_field_id": 33,
            //         "name": "8D085 Землеустройство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 126,
            //         "education_field_id": 33,
            //         "name": "8D086 Водные ресурсы и водопользование",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 127,
            //         "education_field_id": 33,
            //         "name": "8D087 Агроинженерия",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 128,
            //         "education_field_id": 34,
            //         "name": "8D091 Ветеринария",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 129,
            //         "education_field_id": 35,
            //         "name": "8D101 Здравоохранение",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 130,
            //         "education_field_id": 36,
            //         "name": "8D111 Сфера обслуживания",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 131,
            //         "education_field_id": 36,
            //         "name": "8D112 Гигиена и охрана труда на производстве",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 132,
            //         "education_field_id": 36,
            //         "name": "8D113 Транспортные услуги",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 133,
            //         "education_field_id": 36,
            //         "name": "8D114 Социальная работа",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 134,
            //         "education_field_id": 37,
            //         "name": "8D121 Военное дело",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 135,
            //         "education_field_id": 37,
            //         "name": "8D122 Национальная безопасность",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 136,
            //         "education_field_id": 37,
            //         "name": "8D123 Общественная безопасность",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 137,
            //         "education_field_id": 38,
            //         "name": "6B011 Педагогика и психология",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.01.001"
            //     },
            //     {
            //         "id": 250,
            //         "education_field_id": 38,
            //         "name": "6B012 Педагогика дошкольного воспитания и обучения",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 251,
            //         "education_field_id": 38,
            //         "name": "6B013 Подготовка учителей без предметной специализации",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 252,
            //         "education_field_id": 38,
            //         "name": "6B014 Подготовка учителей с предметной специализацией общего развития",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 253,
            //         "education_field_id": 38,
            //         "name": "6B015 Подготовка учителей по естественнонаучным предметам",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 254,
            //         "education_field_id": 38,
            //         "name": "6B016 Подготовка учителей по гуманитарным предметам",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 255,
            //         "education_field_id": 38,
            //         "name": "6B017 Подготовка учителей по языкам и литературе",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 256,
            //         "education_field_id": 38,
            //         "name": "6B018 Подготовка специалистов по социальной педагогике и самопознанию",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 257,
            //         "education_field_id": 38,
            //         "name": "6B019 Специальная педагогика",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 258,
            //         "education_field_id": 39,
            //         "name": "6B021 Искусство",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 259,
            //         "education_field_id": 39,
            //         "name": "6B022 Гуманитарные науки",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.02.002"
            //     },
            //     {
            //         "id": 260,
            //         "education_field_id": 39,
            //         "name": "6B023 Языки и литература",
            //         "put_status": 1,
            //         "nobd_spec_code": null
            //     },
            //     {
            //         "id": 261,
            //         "education_field_id": 40,
            //         "name": "6B031 Социальные науки",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.03.001"
            //     },
            //     {
            //         "id": 262,
            //         "education_field_id": 40,
            //         "name": "6B032 Журналистика и информация",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.03.002"
            //     },
            //     {
            //         "id": 263,
            //         "education_field_id": 41,
            //         "name": "6B041 Бизнес и управление",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.04.001"
            //     },
            //     {
            //         "id": 264,
            //         "education_field_id": 41,
            //         "name": "6B042 Право",
            //         "put_status": 1,
            //         "nobd_spec_code": "5.04.002"
            //     }
            // ],
            // educationGroups: [
            //     {
            //         "id": 1,
            //         "code": "B008",
            //         "name": "Подготовка учителей основы права и экономики",
            //         "study_level_id": 1,
            //         "prof_caf_id": 101
            //     },
            //     {
            //         "id": 2,
            //         "code": "B040",
            //         "name": "Политология",
            //         "study_level_id": 1,
            //         "prof_caf_id": 102
            //     },
            //     {
            //         "id": 3,
            //         "code": "B140",
            //         "name": "Международные отношения и дипломатия",
            //         "study_level_id": 1,
            //         "prof_caf_id": 134
            //     },
            //     {
            //         "id": 4,
            //         "code": "B041",
            //         "name": "Психология",
            //         "study_level_id": 1,
            //         "prof_caf_id": 103
            //     },
            //     {
            //         "id": 5,
            //         "code": "B042",
            //         "name": "Журналистика и репортерское дело",
            //         "study_level_id": 1,
            //         "prof_caf_id": 104
            //     },
            //     {
            //         "id": 6,
            //         "code": "B044",
            //         "name": "Менеджмент и управление",
            //         "study_level_id": 1,
            //         "prof_caf_id": 105
            //     },
            //     {
            //         "id": 7,
            //         "code": "B045",
            //         "name": "Аудит и налогообложение",
            //         "study_level_id": 1,
            //         "prof_caf_id": 106
            //     },
            //     {
            //         "id": 8,
            //         "code": "B046",
            //         "name": "Финансы, экономика, банковское и страховое дело",
            //         "study_level_id": 1,
            //         "prof_caf_id": 107
            //     },
            //     {
            //         "id": 9,
            //         "code": "B047",
            //         "name": "Маркетинг и реклама",
            //         "study_level_id": 1,
            //         "prof_caf_id": 108
            //     },
            //     {
            //         "id": 10,
            //         "code": "B049",
            //         "name": "Право",
            //         "study_level_id": 1,
            //         "prof_caf_id": 109
            //     },
            //     {
            //         "id": 11,
            //         "code": "B057",
            //         "name": "Информационные технологии",
            //         "study_level_id": 1,
            //         "prof_caf_id": 110
            //     },
            //     {
            //         "id": 12,
            //         "code": "B086",
            //         "name": "Общая медицина",
            //         "study_level_id": 1,
            //         "prof_caf_id": 114
            //     },
            //     {
            //         "id": 13,
            //         "code": "B091",
            //         "name": "Туризм",
            //         "study_level_id": 1,
            //         "prof_caf_id": 111
            //     },
            //     {
            //         "id": 14,
            //         "code": "B093",
            //         "name": "Ресторанное дело  и гостиничный бизнес",
            //         "study_level_id": 1,
            //         "prof_caf_id": 112
            //     },
            //     {
            //         "id": 15,
            //         "code": "B095",
            //         "name": "Транспортные услуги",
            //         "study_level_id": 1,
            //         "prof_caf_id": 113
            //     },
            //     {
            //         "id": 16,
            //         "code": "M009",
            //         "name": "Подготовка учителей математики",
            //         "study_level_id": 2,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 17,
            //         "code": "M010",
            //         "name": "Подготовка учителей физики",
            //         "study_level_id": 2,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 18,
            //         "code": "M011",
            //         "name": "Подготовка учителей информатики",
            //         "study_level_id": 2,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 19,
            //         "code": "M016",
            //         "name": "Подготовка учителей казахского языка и литературы",
            //         "study_level_id": 2,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 20,
            //         "code": "M018",
            //         "name": "Подготовка учителей иностранного языка",
            //         "study_level_id": 2,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 21,
            //         "code": "7MB140",
            //         "name": "Международные отношения и дипломатия",
            //         "study_level_id": 2,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 22,
            //         "code": "M072",
            //         "name": "Менеджмент и управление",
            //         "study_level_id": 2,
            //         "prof_caf_id": 121
            //     },
            //     {
            //         "id": 23,
            //         "code": "M073",
            //         "name": "Аудит и налогообложение",
            //         "study_level_id": 2,
            //         "prof_caf_id": 122
            //     },
            //     {
            //         "id": 24,
            //         "code": "M074",
            //         "name": "Финансы, экономика, банковское и страховое дело",
            //         "study_level_id": 2,
            //         "prof_caf_id": 123
            //     },
            //     {
            //         "id": 25,
            //         "code": "M075",
            //         "name": "Маркетинг и реклама",
            //         "study_level_id": 2,
            //         "prof_caf_id": 124
            //     },
            //     {
            //         "id": 26,
            //         "code": "M078",
            //         "name": "Право",
            //         "study_level_id": 2,
            //         "prof_caf_id": 125
            //     },
            //     {
            //         "id": 27,
            //         "code": "M094",
            //         "name": "Информационные технологии",
            //         "study_level_id": 2,
            //         "prof_caf_id": 126
            //     },
            //     {
            //         "id": 28,
            //         "code": "M147",
            //         "name": "Туризм",
            //         "study_level_id": 2,
            //         "prof_caf_id": 127
            //     },
            //     {
            //         "id": 29,
            //         "code": "D044",
            //         "name": "Менеджмент и управление",
            //         "study_level_id": 7,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 30,
            //         "code": "D046",
            //         "name": "Финансы, экономика, банковское и страховое дело",
            //         "study_level_id": 7,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 31,
            //         "code": "D047",
            //         "name": "Маркетинг и реклама",
            //         "study_level_id": 7,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 32,
            //         "code": "D045",
            //         "name": "Аудит и налогообложение",
            //         "study_level_id": 7,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 33,
            //         "code": "7M04114",
            //         "name": "MBA",
            //         "study_level_id": 5,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 34,
            //         "code": "7M04116",
            //         "name": "Сити менеджмент",
            //         "study_level_id": 6,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 35,
            //         "code": "7M04115",
            //         "name": "Управление развитием",
            //         "study_level_id": 6,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 36,
            //         "code": "M064",
            //         "name": "Международные отношения",
            //         "study_level_id": 2,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 37,
            //         "code": "M144",
            //         "name": "Медицина ",
            //         "study_level_id": 4,
            //         "prof_caf_id": null
            //     },
            //     {
            //         "id": 38,
            //         "code": "D141",
            //         "name": "Медицина",
            //         "study_level_id": 7,
            //         "prof_caf_id": 136
            //     },
            //     {
            //         "id": 39,
            //         "code": "R038",
            //         "name": "Семейная медицина",
            //         "study_level_id": 11,
            //         "prof_caf_id": 137
            //     },
            //     {
            //         "id": 40,
            //         "code": "M001",
            //         "name": "Педагогика и психология",
            //         "study_level_id": 4,
            //         "prof_caf_id": 141
            //     },
            //     {
            //         "id": 41,
            //         "code": "M070",
            //         "name": "Экономика",
            //         "study_level_id": 4,
            //         "prof_caf_id": 143
            //     }
            // ],
            educationSemesterTypes: [
                {
                    "id": 1,
                    "name": "семестр"
                },
                {
                    "id": 2,
                    "name": "триместр"
                }
            ],
            studyLanguages: [
                { id: 39, name: 'English' },
                { id: 82, name: 'Қазақ тілі' },
                { id: 137, name: 'Русский язык' }
            ],
            studyForms: [{id: 1, name: 'Очное'}, {id: 2, name: 'Заочное'}],
            degreeTypes: [
                {
                    "id": 1,
                    "name_kz": "гуманитарлық білім бакалавры",
                    "name_ru": "бакалавра гуманитарных знаний ",
                    "name_eng": "Bachelor of Humanities"
                },
                {
                    "id": 2,
                    "name_kz": "әлеуметтік білім бакалавры",
                    "name_ru": "бакалавра социальных знаний ",
                    "name_eng": "Bachelor of Social Knowledge"
                },
                {
                    "id": 4,
                    "name_kz": "экономика және бизнес бакалавры",
                    "name_ru": "бакалавра экономики и бизнеса",
                    "name_eng": "Bachelor of Economics and Business"
                },
                {
                    "id": 11,
                    "name_kz": "экономика және бизнес бакалавры",
                    "name_ru": "бакалавра экономики и бизнеса ",
                    "name_eng": "Bachelor of Economics and Business"
                },
                {
                    "id": 12,
                    "name_kz": "қызмет көрсету саласының бакалавры",
                    "name_ru": "бакалавра в области услуг ",
                    "name_eng": "Bachelor of Services"
                },
                {
                    "id": 13,
                    "name_kz": "экономика және бизнес бакалавры",
                    "name_ru": "бакалавра экономики и бизнеса ",
                    "name_eng": "Bachelor of Economics and Business"
                },
                {
                    "id": 15,
                    "name_kz": "құқық бакалавры",
                    "name_ru": "бакалавра права ",
                    "name_eng": "Bachelor of Law"
                },
                {
                    "id": 17,
                    "name_kz": "техника және технологиялар бакалавры",
                    "name_ru": "бакалавра техники и технологий ",
                    "name_eng": "Bachelor of Engineering and Technology"
                },
                {
                    "id": 19,
                    "name_kz": "қызмет көрсету саласының бакалавры",
                    "name_ru": "бакалавра в области услуг ",
                    "name_eng": "Bachelor of Services"
                },
                {
                    "id": 22,
                    "name_kz": "педагогика ғылымдарының магистрі",
                    "name_ru": "магистра педагогических наук ",
                    "name_eng": "Master of Pedagogical Sciences"
                },
                {
                    "id": 24,
                    "name_kz": "әлеуметтік ғылымдар магистрі",
                    "name_ru": "магистра социальных наук ",
                    "name_eng": "Master of Social Sciences"
                },
                {
                    "id": 25,
                    "name_kz": "экономика ғылымдарының магистрі",
                    "name_ru": "магистра экономических наук ",
                    "name_eng": "Master of Economic Sciences"
                },
                {
                    "id": 30,
                    "name_kz": "құқық ғылымдарының магистрі",
                    "name_ru": "магистра юридических наук ",
                    "name_eng": "Master of Law Sciences"
                },
                {
                    "id": 31,
                    "name_kz": "қызмет көрсету саласының ғылым магистрі",
                    "name_ru": "магистра наук в области услуг ",
                    "name_eng": "Master of Science in Services"
                },
                {
                    "id": 32,
                    "name_kz": "әлеуметтік білім магистрі",
                    "name_ru": "магистра социальных знаний ",
                    "name_eng": "Master of Social Knowledge"
                },
                {
                    "id": 33,
                    "name_kz": "бизнес және басқару магистрі",
                    "name_ru": "магистра бизнеса и управления ",
                    "name_eng": "Master of business and management  "
                },
                {
                    "id": 37,
                    "name_kz": "құқық магистрі",
                    "name_ru": "магистра права ",
                    "name_eng": "Master of Law"
                },
                {
                    "id": 38,
                    "name_kz": "бизнес және басқару магистрі",
                    "name_ru": "магистра бизнеса и управления ",
                    "name_eng": "Master of business and management  "
                },
                {
                    "id": 48,
                    "name_kz": "Master of Business Administration",
                    "name_ru": "Master of Business Administration",
                    "name_eng": "Master of Business Administration"
                },
                {
                    "id": 49,
                    "name_kz": "медицина ғылымдарының магистрі",
                    "name_ru": "магистра медицинских наук",
                    "name_eng": "Master of Medical Sciences"
                },
                {
                    "id": 50,
                    "name_kz": "денсаулық сақтау бакалавры",
                    "name_ru": "бакалавра здравоохранения",
                    "name_eng": "Bachelor in Healthcare"
                },
                {
                    "id": 51,
                    "name_kz": "философия докторы",
                    "name_ru": "доктор философии",
                    "name_eng": "Doctor of philosophy"
                },
                {
                    "id": 52,
                    "name_kz": "отбасылық дәрігер",
                    "name_ru": "врач семейной медицины",
                    "name_eng": "general practitioner"
                },
                {
                    "id": 53,
                    "name_kz": "бизнес және менеджмент бакалавры",
                    "name_ru": "бакалавра бизнеса и управления",
                    "name_eng": "Bachelor of Business and Management"
                },
                {
                    "id": 54,
                    "name_kz": "Іскерлік әкімшіліктің докторы",
                    "name_ru": "доктор делового администрирования",
                    "name_eng": "Doctor of Business Administration"
                },
                {
                    "id": 55,
                    "name_kz": "Ақпараттық-коммуникациялық технологиялар саласындағы бакалавры",
                    "name_ru": "бакалавра в области информационно - коммуникационных технологий",
                    "name_eng": "Bachelor of information and communication technologies "
                },
                {
                    "id": 56,
                    "name_kz": "техника ғылымдарының магистрі",
                    "name_ru": "магистр технических наук",
                    "name_eng": "Master of technical sciences"
                },
                {
                    "id": 57,
                    "name_kz": "Ақпараттық-коммуникациялық технологиялар саласындағы бакалавры",
                    "name_ru": "бакалавра в области информационно - коммуникационных технологий ",
                    "name_eng": "Bachelor in Information and Communication Technologies"
                },
                {
                    "id": 58,
                    "name_kz": "Ақпараттық-коммуникациялық технологиялар саласындағы бакалавры",
                    "name_ru": "бакалавра в области информационно - коммуникационных технологий ",
                    "name_eng": "Bachelor in Information and Communication Technologies "
                }
            ],
            // decreeGosoTemplates: [
            //     {
            //         "id": 6,
            //         "decree": "Приказ от 31 октября 2018 года № 604.",
            //         "date": 1540944000,
            //         "created_at": 1627040914,
            //         "updated_at": 1627040914,
            //         "status": 0
            //     },
            //     {
            //         "id": 12,
            //         "decree": "Приказ МинЗдрав от 21 февраля 2020 № ҚР ДСМ-12/2020",
            //         "date": 1582243200,
            //         "created_at": 1651553004,
            //         "updated_at": 1651553004,
            //         "status": 0
            //     },
            //     {
            //         "id": 14,
            //         "decree": "Приказ Министра здравоохранения РК от 4 июля 2022 года №ҚР ДСМ-63",
            //         "date": 1656892800,
            //         "created_at": 1676445219,
            //         "updated_at": 1676445219,
            //         "status": 0
            //     },
            //     {
            //         "id": 15,
            //         "decree": "Приказ Министра науки и высшего образования РК от 19.01.2023 № 21 ",
            //         "date": 1674086400,
            //         "created_at": 1676445367,
            //         "updated_at": 1676445367,
            //         "status": 0
            //     },
            //     {
            //         "id": 16,
            //         "decree": "Приказ Министра науки и высшего образования РК от 19.01.2023 № 21.",
            //         "date": 1674086400,
            //         "created_at": 1680675167,
            //         "updated_at": 1680675167,
            //         "status": 0
            //     },
            //     {
            //         "id": 17,
            //         "decree": "О внесении изменений в приказ исполняющего обязанностей Министра здравоохранения и социального развития Республики Казахстан от 31 июля 2015 года № 647 Об утверждении государственных общеобязательных стандартов и типовых профессиональных учебных программ по медицинским и фармацевтическим специальностям",
            //         "date": 1438300800,
            //         "created_at": 1683187020,
            //         "updated_at": 1683187020,
            //         "status": 0
            //     }
            // ]
            decreeGosoTemplates: []

        }
    },
    getters: {}
}

export default common