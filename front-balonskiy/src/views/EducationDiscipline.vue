<template>
  <div class="container">


    <div class="education-discipline-form mt-8">
      <h4 class="text-center">Дисциплины</h4>

      <PrimePreloader v-if="loading"/>

      <div v-else>
        <!--        <DataTable class="mt-4" :value="educationDisciplines" :paginator="true"-->
        <!--                   :rows="10"-->
        <!--                   showGridlines-->
        <!--                   paginatorTemplate="CurrentPageReport FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink RowsPerPageDropdown"-->
        <!--                   :rowsPerPageOptions="[10,20,50]"-->
        <!--                   filterDisplay="menu"-->
        <!--                   :globalFilterFields="['name', 'code']"-->
        <!--                   v-model:filters="filters"-->
        <!--                   currentPageReportTemplate="Showing {first} to {last} of {totalRecords}" stripedRows-->
        <!--                   responsiveLayout="scroll">-->

        <!--          <template #header>-->
        <!--            <div class="d-flex justify-content-between">-->
        <!--              <div>-->
        <!--                <Button icon="pi pi-plus" label="Добавить дисциплину" @click="addEducationDisciplineModalVisible = true"/>-->
        <!--              </div>-->

        <!--              <div>-->
        <!--                <span class="p-input-icon-left">-->
        <!--                <i class="pi pi-search"/>-->
        <!--                <InputText v-model="filters['global'].value" placeholder="Поиск"/>-->
        <!--              </span>-->
        <!--              </div>-->

        <!--            </div>-->
        <!--          </template>-->

        <!--          <Column field="code" header="Код"></Column>-->
        <!--          <Column field="name" header="Название"></Column>-->

        <!--          <Column field="studyLevel.name" header="Уровень обучения">-->

        <!--            <template #filter="{filterModel}">-->
        <!--              <Dropdown v-model="filterModel.value" :options="common_form.studyLevels" optionLabel="name" optionValue="name" placeholder="Любой"-->
        <!--                        class="p-column-filter" :showClear="true">-->
        <!--                <template #value="slotProps">-->
        <!--                  <span v-if="slotProps.value">{{ slotProps.value }}</span>-->
        <!--                  <span v-else>{{ slotProps.placeholder }}</span>-->
        <!--                </template>-->
        <!--                <template #option="slotProps">-->
        <!--                  <span>{{ slotProps.option.name }}</span>-->
        <!--                </template>-->
        <!--              </Dropdown>-->
        <!--            </template>-->
        <!--          </Column>-->
        <!--          <Column field="language.native_name" header="Язык">-->
        <!--            <template #body="{data}">-->
        <!--              {{ data.language ? data.language.native_name : '' }}-->
        <!--            </template>-->
        <!--            <template #filter="{filterModel}">-->
        <!--              <Dropdown v-model="filterModel.value" :options="common_form.studyLanguages" optionLabel="name" optionValue="name" placeholder="Любой"-->
        <!--                        class="p-column-filter" :showClear="true">-->
        <!--                <template #value="slotProps">-->
        <!--                  <span v-if="slotProps.value">{{ slotProps.value }}</span>-->
        <!--                  <span v-else>{{ slotProps.placeholder }}</span>-->
        <!--                </template>-->
        <!--                <template #option="slotProps">-->
        <!--                  <span>{{ slotProps.option.name }}</span>-->
        <!--                </template>-->
        <!--              </Dropdown>-->
        <!--            </template>-->
        <!--          </Column>-->
        <!--          <Column field="credit" header="Кредит"></Column>-->

        <!--          <Column header="Действия">-->
        <!--            <template #body="{data}">-->

        <!--              <Toolbar>-->
        <!--                <template #start>-->
        <!--                  <Button class="me-2" icon="pi pi-pencil" severity="warning" v-tooltip.top="'Редактировать'" type="button" @click="updateDiscipline(data.id)"/>-->
        <!--                  <Button class="me-2" icon="pi pi-plus" v-tooltip.top="'Добавить пререквизиты'" type="button" @click="openPrerequisiteDialog(data.id)"/>-->
        <!--                </template>-->
        <!--              </Toolbar>-->
        <!--            </template>-->
        <!--          </Column>-->


        <!--        </DataTable>-->


        <div class="card">
          <DataView :value="filteredDisciplines" paginator :rows="5">
            <!--            :layout="layout"-->
            <template #header>


              <div class="d-flex justify-content-between">
                <div>
                    <span class="p-input-icon-left">
                      <i class="pi pi-search"/>
                      <!--                      <InputText v-model="filters['global'].value" placeholder="Поиск ОП"/>-->
                      <InputText v-model="searchQuery" type="text" placeholder="Поиск дисциплины"/>
                    </span>
                </div>
                <div>
                  <Button icon="pi pi-plus" label="Добавить дисциплину" @click="openDisciplineDialog(0)"/>
                </div>
                <!--                <div>-->
                <!--                  <DataViewLayoutOptions v-model="layout" />-->
                <!--                </div>-->


              </div>
              <!--              <div class="flex justify-content-start">-->
              <!--                <span class="p-input-icon-left">-->
              <!--                      <i class="pi pi-search"/>-->
              <!--                      <InputText v-model="searchQuery" type="text" placeholder="Поиск дисциплины"/>-->
              <!--                    </span>-->
              <!--              </div>-->

              <!--              <div class="flex justify-content-end">-->
              <!--                <Button icon="pi pi-plus" label="Добавить дисциплину" @click="addEducationDisciplineModalVisible = true"/>-->
              <!--              </div>-->


            </template>
            <template #list="slotProps">
              <div class="col-12">

                <div class="flex flex-column xl:flex-row xl:align-items-start p-4 gap-4">

                  <div
                      class="flex flex-column sm:flex-row justify-content-between align-items-center xl:align-items-start flex-1 gap-4">
                    <div class="flex flex-column align-items-center sm:align-items-start gap-3">
                      <div class="text-2xl font-bold text-900">
                        {{ slotProps.data.code }} {{ slotProps.data.name }}
                      </div>

                      <div class="flex align-items-center gap-3">
                                    <span class="flex align-items-center gap-2">
                                        <i class="pi pi-language"></i>
                                        <span class="font-semibold">{{ slotProps.data?.education_language }}</span>
                                    </span>
                        <span class="flex align-items-center gap-2">
                                        <i class="pi pi-briefcase"></i>
                                        <span class="font-semibold">{{ slotProps.data?.study_level_id }}</span>
                                    </span>
                        <!--                        <span class="flex align-items-center gap-2">-->
                        <!--                                        <i class="pi pi-tag"></i>-->
                        <!--                                        <span class="font-semibold">{{ slotProps.data.decreeGosoTemplate.decree }}</span>-->
                        <!--                                    </span>-->
                      </div>
                    </div>
                    <div class="flex sm:flex-column align-items-center sm:align-items-end gap-3 sm:gap-2">
                      <Toolbar>
                        <template #start>
                          <Button class="me-2" icon="pi pi-pencil" severity="warning" v-tooltip.top="'Редактировать'"
                                  type="button" @click="openDisciplineDialog(slotProps.data.id)"/>
                          <Button class="me-2" icon="pi pi-trash" severity="danger" v-tooltip.top="'Удалить'"
                                  type="button" @click="deleteDiscipline(slotProps.data.id, $event)"/>
                          <Button class="me-2" icon="pi pi-plus" v-tooltip.top="'Добавить пререквизиты'" type="button"
                                  @click="openPrerequisiteDialog(data.id)"/>
                        </template>
                      </Toolbar>
                    </div>
                  </div>
                </div>
              </div>
            </template>

            <template #grid="slotProps">
              <div class="col-12 sm:col-6 lg:col-12 xl:col-4 p-2">
                <div class="p-4 border-1 surface-border surface-card border-round">
                  <div class="flex flex-wrap align-items-center justify-content-between gap-2">
                    <div class="flex align-items-center gap-2">
                      <div class="text-2xl font-bold">

                        {{ slotProps.data.code }} {{ slotProps.data.name }}
                      </div>

                    </div>

                  </div>
                  <div class="flex flex-column align-items-center gap-3 py-5">
                  <span class="flex align-items-center gap-2">
                    <i class="pi pi-language"></i>
                    <span class="font-semibold">{{ slotProps.data?.education_language }}</span>
                  </span>
                    <span class="flex align-items-center gap-2">
                    <i class="pi pi-briefcase"></i>
                    <span class="font-semibold">{{ slotProps.data?.study_level_id }}</span>
                  </span>
                    <!--                    <span class="flex align-items-center gap-2">-->
                    <!--                    <i class="pi pi-tag"></i>-->
                    <!--                    <span class="font-semibold">{{ slotProps.data.decreeGosoTemplate.decree }}</span>-->
                    <!--                  </span>-->
                  </div>
                  <div class="flex align-items-center justify-content-between">
                    <Toolbar>
                      <template #start>
                        <Button class="me-2" icon="pi pi-pencil" severity="warning" v-tooltip.top="'Редактировать'"
                                type="button" @click="openDisciplineDialog(slotProps.data.id)"/>
                        <Button class="me-2" icon="pi pi-plus" v-tooltip.top="'Добавить пререквизиты'" type="button"
                                @click="openPrerequisiteDialog(data.id)"/>
                      </template>
                    </Toolbar>
                  </div>
                </div>
              </div>
            </template>


          </DataView>
        </div>

        <Dialog v-model:visible="displayDisciplineDialog" modal
                :header="disciplineModel?.id?'Обновление дисциплины':'Добавление дисциплины'"
                :style="{ width: '50vw' }">

          <div class="col-md-12 education-discipline-form">

            <div class="row mt-4">

              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Кафедра</span>
                  <Dropdown v-model="disciplineModel.department_id" :options="common_form.departments"
                            optionLabel="name" optionValue="id" placeholder="Выберите кафедру"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Уровень обучения</span>
                  <Dropdown v-model="disciplineModel.study_level_id" :options="common_form.studyLevels"
                            optionLabel="name" optionValue="id" placeholder="Выберите уровень обучения"/>
                </div>
              </div>


            </div>


            <div class="row mt-4">
              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Язык обучения</span>
                  <Dropdown v-model="disciplineModel.education_language" :options="common_form.studyLanguages"
                            optionLabel="name" optionValue="id" placeholder="Выберите язык обучения"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Кредит</span>
                  <InputNumber v-model="disciplineModel.credit" inputId="integeronly"/>
                </div>
              </div>


            </div>


            <div class="row mt-4">
              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Код дисциплины</span>
                  <InputText type="text" v-model="disciplineModel.code"/>
                </div>
              </div>

            </div>

            <div class="row mt-4">
              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Название дисциплины</span>
                  <InputText type="text" v-model="disciplineModel.name"/>
                </div>
              </div>

            </div>

            <div class="row mt-4">
              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Описание</span>
                  <Textarea v-model="disciplineModel.description" rows="2" cols="3"/>
                </div>
              </div>

            </div>

            <div class="row mt-4">
              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Знания</span>
                  <Textarea v-model="disciplineModel.knowledge" rows="2" cols="3"/>
                </div>
              </div>

            </div>

            <div class="row mt-4">
              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Навыки</span>
                  <Textarea v-model="disciplineModel.skills" rows="2" cols="3"/>
                </div>
              </div>

            </div>

            <div class="row mt-4">
              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Умения</span>
                  <Textarea v-model="disciplineModel.abilities" rows="2" cols="3"/>
                </div>
              </div>

            </div>

            <div class="row mt-4">
              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Рекомендации</span>
                  <Textarea v-model="disciplineModel.recommendation" rows="2" cols="3"/>
                </div>
              </div>

            </div>


            <div class="row mt-4">
              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Стандартная норма времени</span>
                  <SelectButton v-model="disciplineModel.is_standard" :options="selectOptions" optionValue="value"
                                optionLabel="name" aria-labelledby="basic"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Нужен компьютер</span>
                  <SelectButton v-model="disciplineModel.need_computer" :options="selectOptions" optionValue="value"
                                optionLabel="name" aria-labelledby="basic"/>
                </div>
              </div>


            </div>

            <div class="row mt-4">
              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Только на английском</span>
                  <SelectButton v-model="disciplineModel.is_multilanguage" :options="selectOptions" optionValue="value"
                                optionLabel="name" aria-labelledby="basic"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Только на русском</span>
                  <SelectButton v-model="disciplineModel.is_russian" :options="selectOptions" optionValue="value"
                                optionLabel="name" aria-labelledby="basic"/>
                </div>
              </div>


            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Только на казахском</span>
                  <SelectButton v-model="disciplineModel.is_kazakh" :options="selectOptions" optionValue="value"
                                optionLabel="name" aria-labelledby="basic"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Модульная дисциплина</span>
                  <SelectButton v-model="disciplineModel.is_module" :options="selectOptions" optionValue="value"
                                optionLabel="name" aria-labelledby="basic"/>
                </div>
              </div>


            </div>


          </div>

          <template #footer>
            <Button label="Закрыть" icon="pi pi-times" severity="secondary" @click="displayDisciplineDialog = false"/>
            <Button :label="disciplineModel?.id?'Обновить':'Создать'"
                    :loading="loadingSave" icon="pi pi-check" @click="saveDiscipline"/>
          </template>

        </Dialog>
      </div>

      <ConfirmPopup></ConfirmPopup>


    </div>

  </div>
</template>

<script>
import {FilterMatchMode, FilterOperator} from 'primevue/api';
import {mapGetters, mapActions, mapMutations, mapState} from "vuex";

export default {
  name: "EducationDiscipline",
  data() {
    return {
      filters: {
        'global': {value: null, matchMode: FilterMatchMode.CONTAINS},

      },
      loadingSave: false,
      displayDisciplineDialog: false,
      loading: true,
      disciplineModel: {},

      selectOptions: [{value: 0, name: 'Нет'}, {value: 1, name: 'Да'}],

      // educationDisciplines: [
      //   {
      //     "id": "5182",
      //     "credit": "3",
      //     "department_id": "6",
      //     "code": "-",
      //     "name": "Химия",
      //     "description": "-",
      //     "knowledge": "-",
      //     "skills": "-",
      //     "abilities": "-",
      //     "recommendation": "-",
      //     "study_level_id": "10",
      //     "education_language": "82",
      //     "is_thread": "0",
      //     "is_selectable": "0",
      //     "credit_time_type_id": null,
      //     "is_standard": "1",
      //     "esuvo_subject_id": null,
      //     "need_computer": "0",
      //     "is_multilanguage": "0",
      //     "is_kazakh": "0",
      //     "is_russian": "0",
      //     "lang_level_id": null,
      //     "lang_parent_id": null,
      //     "is_module": "0",
      //     "language": {
      //       "id": "82",
      //       "639_1": "kk ",
      //       "639_2_t": "kaz",
      //       "639_2_b": "kaz",
      //       "language_name": "Kazakh",
      //       "native_name": "Қазақ тілі",
      //       "idPlatonus": "2",
      //       "esuvo_id": "2"
      //     },
      //     "studyLevel": {
      //       "id": "10",
      //       "name": "Постдокторантура",
      //       "esuvo_degreeid": null
      //     },
      //     "prerequisiteDisciplines": []
      //   },
      //   {
      //     "id": "5886",
      //     "credit": "5",
      //     "department_id": "6",
      //     "code": "3205 BOP",
      //     "name": "Business operations and processes",
      //     "description": "The objectives of mastering the discipline\nare the acquisition of practical skills\nin the field of identification, description, analysis and optimization of business processes of the enterprise.",
      //     "knowledge": "-to know the content and patterns of business process development, the principles of rational organization\nof management documentation;\n- methods of managing the main business processes, types and forms of organizational and management\ndocumentation;\n- basic principles of methods for improving business processes and modern technologies\nof management documentation support.",
      //     "skills": "methods of business process management; skills in selecting key indicators of business processes, drafting and processing documents",
      //     "abilities": "be able to analyze business processes and interpret the information obtained as a result of this\nanalysis, compile and execute documents",
      //     "recommendation": "",
      //     "study_level_id": "1",
      //     "education_language": "39",
      //     "is_thread": "0",
      //     "is_selectable": "0",
      //     "credit_time_type_id": null,
      //     "is_standard": "1",
      //     "esuvo_subject_id": "8068",
      //     "need_computer": "1",
      //     "is_multilanguage": "0",
      //     "is_kazakh": "0",
      //     "is_russian": "0",
      //     "lang_level_id": null,
      //     "lang_parent_id": null,
      //     "is_module": "0",
      //     "language": {
      //       "id": "39",
      //       "639_1": "en ",
      //       "639_2_t": "eng",
      //       "639_2_b": "eng",
      //       "language_name": "English",
      //       "native_name": "English",
      //       "idPlatonus": "3",
      //       "esuvo_id": "3"
      //     },
      //     "studyLevel": {
      //       "id": "1",
      //       "name": "Бакалавриат",
      //       "esuvo_degreeid": "1"
      //     },
      //     "prerequisiteDisciplines": [
      //       {
      //         "id": "38",
      //         "education_discipline_id": "5886",
      //         "prerequisite_discipline_id": "2057",
      //         "created_at": "1680509833",
      //         "updated_at": "1680509833",
      //         "prerequisites_and_or_id": "378",
      //         "prerequisiteDiscipline": {
      //           "id": "2057",
      //           "credit": "4",
      //           "department_id": "6",
      //           "code": "Men 2206",
      //           "name": "Management",
      //           "description": "The purpose of this course is to introduce students to the basics of management. The course contains general questions on the organizational elements of the management process, communication and decision making, management functions such as planning, organization, motivation and control, teamwork and leadership, as well as the study of various functional departments in the organization such as production, marketing, finance, and personnel management.",
      //           "knowledge": "- learn the basic theories and practices of modern management; - be familiar with the principles of\nnational and foreign management; - understand how effective management contributes to effective organizations",
      //           "skills": "- develop skills of critical thinking; - develop skills of working in teams; - master the leadership skills",
      //           "abilities": "- assess the foundations of management thought; - identify the various roles of managers in\norganizations; - begin to look at organizations from the perspective of managers",
      //           "recommendation": "",
      //           "study_level_id": "1",
      //           "education_language": "39",
      //           "is_thread": "1",
      //           "is_selectable": null,
      //           "credit_time_type_id": "3",
      //           "is_standard": "1",
      //           "esuvo_subject_id": "6747",
      //           "need_computer": "0",
      //           "is_multilanguage": "0",
      //           "is_kazakh": "0",
      //           "is_russian": "0",
      //           "lang_level_id": null,
      //           "lang_parent_id": null,
      //           "is_module": "0"
      //         }
      //       }
      //     ]
      //   }
      // ],
      layout: 'grid',
      searchQuery: '',
    }
  },
  computed: {
    ...mapState('educationDiscipline', ['educationDiscipline_form']),
    ...mapState('common', ['common_form']),
    filteredDisciplines() {
      // Use computed property to filter the data based on searchQuery
      const query = this.searchQuery.trim().toLowerCase();
      if (!query) return this.educationDiscipline_form.educationDisciplines;

      return this.educationDiscipline_form.educationDisciplines.filter((program) =>
          program.name.toLowerCase().includes(query) ||
          program.code.toLowerCase().includes(query)
      );
    },
  },

  methods: {
    ...mapActions('educationDiscipline', ['POST_EDUCATION_DISCIPLINE', 'PUT_EDUCATION_DISCIPLINE', 'GET_EDUCATION_DISCIPLINES', 'DELETE_EDUCATION_DISCIPLINE']),
    ...mapActions('common', ['GET_DEPARTMENTS', 'GET_STUDY_LEVELS']),
    ...mapMutations('educationDiscipline', ['UPDATE_EDUCATION_DISCIPLINE_DATA']),

    openDisciplineDialog(discipline_id = 0) {
      console.log(discipline_id, 'discipline_id')

      if (discipline_id) {
        this.disciplineModel = {...this.educationDiscipline_form.educationDisciplines.find(i => i.id === discipline_id)}
      } else {
        this.disciplineModel = {
          is_standard: 0,
          need_computer: 0,
          is_multilanguage: 0,
          is_russian: 0,
          is_kazakh: 0,
          is_module: 0
        }
      }

      this.displayDisciplineDialog = true
    },
    deleteDiscipline(discipline_id, event) {
      this.$confirm.require({
        target: event.currentTarget,
        message: 'Вы точно хотите удалить эту дисциплину?',
        icon: 'pi pi-info-circle',
        acceptClass: 'p-button-danger',
        accept: async () => {

          let res = await this.DELETE_EDUCATION_DISCIPLINE(discipline_id)
          if (res) {
            await this.GET_EDUCATION_DISCIPLINES()
            this.$toast.add({ severity: 'success', summary: 'Успешно', detail: 'Дисциплина успешна удалена', life: 3000 });
          }


        },
        // reject: () => {
        //   this.$toast.add({ severity: 'error', summary: 'Rejected', detail: 'You have rejected', life: 3000 });
        // }
      });
    },

    async saveDiscipline() {

      this.disciplineModel['education_language'] = 'kz'
      this.disciplineModel['is_thread'] = 0
      this.disciplineModel['is_selectable'] = 0

      this.loadingSave = true
      let res = false
      if (this.disciplineModel.id) {
        res = await this.PUT_EDUCATION_DISCIPLINE(this.disciplineModel)
      } else {
        res = await this.POST_EDUCATION_DISCIPLINE(this.disciplineModel)
      }
      if (res) {
        await this.GET_EDUCATION_DISCIPLINES()
        this.displayDisciplineDialog = false
        this.$toast.add({severity: 'success', summary: 'Успешно', detail: 'Дисциплина успешна добавлена', life: 3000});
      } else {
        this.$toast.add({severity: 'error', summary: 'Ошибка', detail: 'Произошла ошибка', life: 3000});
      }
      this.loadingSave = false
      console.log(this.disciplineModel, ' saveDiscipline newDiscipline')


    }


  },
  async mounted() {
    await this.GET_EDUCATION_DISCIPLINES()
    await this.GET_DEPARTMENTS()
    await this.GET_STUDY_LEVELS()
    this.loading = false
  }
}
</script>

<style scoped>
.education-discipline-form .col-md-6 span.p-inputgroup-addon {
  width: 52%!important;
}
.education-discipline-form .col-md-12 span.p-inputgroup-addon {
  width: 35%!important;
}

</style>