<template>
  <div class="container">


    <div class="education-program-form mt-8">
      <h4 class="text-center">Паспорт образовательной программы</h4>

      <PrimePreloader v-if="loading"/>
<!--      <DeletePassportEducationProgramModal/>-->
<!--      <AddPassportEducationProgramModal/>-->



<!--      <div class="row">-->
<!--        <div class="col-md-12">-->
<!--          <Button icon="pi pi-plus" label="Добавить ОП" @click="addEducationProgramModalVisible = true"/>-->
<!--        </div>-->
<!--      </div>-->

<!--      <Toolbar class="mt-4">-->
<!--        <template #start>-->
<!--          <Button icon="pi pi-plus" label="Добавить ОП" @click="addEducationProgramModalVisible = true"/>-->
<!--        </template>-->
<!--      </Toolbar>-->

<!--            <DataTable class="mt-4" :value="educationPrograms" :paginator="true" :rows="10"-->
<!--                       showGridlines-->
<!--                       paginatorTemplate="CurrentPageReport FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink RowsPerPageDropdown"-->
<!--                       :rowsPerPageOptions="[10,20,50]"-->
<!--                       filterDisplay="menu"-->
<!--                       :globalFilterFields="['education_speciality_name', 'education_speciality_code']"-->
<!--                       v-model:filters="filters"-->
<!--                       currentPageReportTemplate="Showing {first} to {last} of {totalRecords}" stripedRows-->
<!--                       responsiveLayout="scroll">-->

<!--              <template #header>-->
<!--                <div class="d-flex justify-content-between">-->
<!--                  <div>-->
<!--                    <Button icon="pi pi-plus" label="Добавить ОП" @click="addEducationProgramModalVisible = true"/>-->
<!--                  </div>-->
<!--                  <div>-->
<!--                    <span class="p-input-icon-left">-->
<!--                      <i class="pi pi-search"/>-->
<!--                      <InputText v-model="filters['global'].value" placeholder="Поиск ОП"/>-->
<!--                    </span>-->
<!--                  </div>-->

<!--                </div>-->

<!--              </template>-->

<!--              <Column field="education_speciality_code" header="Код ОП"></Column>-->

<!--              <Column header="Название ОП">-->
<!--                <template #body="{data}">-->
<!--                  <router-link-->
<!--                      :to="'/formation-education-program?education_program_id=' + data.id + '&decree_goso_template_id=' + data.decree_goso_template_id">-->
<!--                    {{ data.education_speciality_name }}-->
<!--                  </router-link>-->
<!--                </template>-->
<!--              </Column>-->
<!--              <Column field="language.native_name" header="Язык обучения">-->
<!--                <template #body="{data}">-->
<!--                  {{ data.language ? data.language.native_name : '' }}-->
<!--                </template>-->
<!--                <template #filter="{filterModel}">-->
<!--                  <Dropdown v-model="filterModel.value" :options="studyLanguages" placeholder="Любой"-->
<!--                            class="p-column-filter" :showClear="true">-->
<!--                    <template #value="slotProps">-->
<!--                      <span v-if="slotProps.value">{{ slotProps.value }}</span>-->
<!--                      <span v-else>{{ slotProps.placeholder }}</span>-->
<!--                    </template>-->
<!--                    <template #option="slotProps">-->
<!--                      <span>{{ slotProps.option }}</span>-->
<!--                    </template>-->
<!--                  </Dropdown>-->
<!--                </template>-->
<!--              </Column>-->

<!--              <Column field="admission_year" header="Год набора">-->

<!--                <template #filter="{filterModel}">-->
<!--                  <Dropdown v-model="filterModel.value" :options="admissionYears" placeholder="Любой"-->
<!--                            class="p-column-filter" :showClear="true">-->
<!--                    <template #value="slotProps">-->
<!--                      <span v-if="slotProps.value">{{ slotProps.value }}</span>-->
<!--                      <span v-else>{{ slotProps.placeholder }}</span>-->
<!--                    </template>-->
<!--                    <template #option="slotProps">-->
<!--                      <span>{{ slotProps.option }}</span>-->
<!--                    </template>-->
<!--                  </Dropdown>-->
<!--                </template>-->
<!--              </Column>-->
<!--              <Column header="Название приказа ГОСО">-->
<!--                <template #body="{data}">-->
<!--                  {{ data.decreeGosoTemplate ? data.decreeGosoTemplate.decree : '' }}-->
<!--                </template>-->
<!--              </Column>-->
<!--              <Column header="Результаты обучения">-->
<!--                <template #body="{data}">-->
<!--                  <router-link :to="'/education-program-result?education_program_id=' + data.id" target="_blank">-->
<!--                    Перейти-->
<!--                  </router-link>-->
<!--                </template>-->
<!--              </Column>-->
<!--              <Column header="Действия">-->
<!--                <template #body="{data}">-->

<!--                  <Toolbar>-->
<!--                    <template #start>-->
<!--                      <Button class="me-2" icon="pi pi-pencil" severity="warning" v-tooltip.top="'Редактировать'" type="button" @click="updateEducation(data.id)"/>-->
<!--                      <Button class="me-2" icon="pi pi-clone" severity="info" v-tooltip.top="'Дублировать'" type="button" @click="openDuplicateEducationProgramModal(data.id)"/>-->
<!--                      <Button class="me-2" icon="pi pi-plus" v-tooltip.top="'Добавить разработчиков'" type="button" @click="openAddDevelopers(data.id)"/>-->
<!--                      <Button class="me-2" icon="pi pi-link" v-tooltip.top="'Добавить майнор'" type="button" @click="openAddMinor(data.id)"/>-->
<!--                    </template>-->
<!--                  </Toolbar>-->

<!--                </template>-->
<!--              </Column>-->
<!--            </DataTable>-->

      <div v-else>

        <div class="card">
          <DataView :value="filteredEducationPrograms" paginator :rows="5">
            <!--          :layout="layout"-->
            <template #header>



              <div class="d-flex justify-content-between">
                <div>
                    <span class="p-input-icon-left">
                      <i class="pi pi-search"/>
                      <!--                      <InputText v-model="filters['global'].value" placeholder="Поиск ОП"/>-->
                      <InputText v-model="searchQuery" type="text" placeholder="Поиск ОП"/>
                    </span>
                </div>
                <div>
                  <Button icon="pi pi-plus" label="Добавить ОП" @click="openEducationProgramDialog(0)"/>
                </div>
                <!--              <div>-->
                <!--                <DataViewLayoutOptions v-model="layout" />-->
                <!--              </div>-->


              </div>


            </template>
            <template #list="slotProps">
              <div class="col-12">

                <div class="flex flex-column xl:flex-row xl:align-items-start p-4 gap-4">

                  <div class="flex flex-column sm:flex-row justify-content-between align-items-center xl:align-items-start flex-1 gap-4">
                    <div class="flex flex-column align-items-center sm:align-items-start gap-3">
                      <div class="text-2xl font-bold text-900">
                        <router-link
                            :to="'/formation-education-program?education_program_id=' + slotProps.data.id + '&decree_goso_template_id=' + slotProps.data.decree_goso_template_id">
                          {{slotProps.data.code}} {{slotProps.data.name}}
                        </router-link>

                      </div>

                      <div class="flex align-items-center gap-3">
                                    <span class="flex align-items-center gap-2">
                                        <i class="pi pi-language"></i>
                                        <span class="font-semibold">{{ slotProps.data?.language_id }}</span>
                                    </span>
                        <span class="flex align-items-center gap-2">
                                        <i class="pi pi-calendar"></i>
                                        <span class="font-semibold">{{ slotProps.data?.registration_date }}</span>
                                    </span>
                        <span class="flex align-items-center gap-2">
                                        <i class="pi pi-tag"></i>
                                        <span class="font-semibold">{{ slotProps.data?.type }}</span>
                                    </span>
                      </div>
                    </div>
                    <div class="flex sm:flex-column align-items-center sm:align-items-end gap-3 sm:gap-2">
                      <Toolbar>
                        <template #start>
                          <Button class="me-2" icon="pi pi-check-circle" severity="success" v-tooltip.top="'Результаты обучения'" type="button" @click="openAddMinor(data.id)"/>
                          <Button class="me-2" icon="pi pi-pencil" severity="warning" v-tooltip.top="'Редактировать'" type="button" @click="openEducationProgramDialog(slotProps.data.id)"/>
                          <Button class="me-2" icon="pi pi-trash" severity="danger" v-tooltip.top="'Удалить'"
                                  type="button" @click="deleteEducationProgram(slotProps.data.id, $event)"/>
                          <Button class="me-2" icon="pi pi-clone" severity="info" v-tooltip.top="'Дублировать'" type="button" @click="openDuplicateEducationProgramModal(data.id)"/>
                          <Button class="me-2" icon="pi pi-plus" v-tooltip.top="'Добавить разработчиков'" type="button" @click="openAddDevelopers(data.id)"/>
                          <Button class="me-2" icon="pi pi-link" v-tooltip.top="'Добавить майнор'" type="button" @click="openAddMinor(data.id)"/>
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
                        <router-link
                            :to="'/formation-education-program?education_program_id=' + slotProps.data.id + '&decree_goso_template_id=' + slotProps.data?.decree_goso_template_id">
                          {{slotProps.data.code}} {{slotProps.data.name}}
                        </router-link>
                      </div>

                    </div>

                  </div>
                  <div class="flex flex-column align-items-center gap-3 py-5">
                  <span class="flex align-items-center gap-2">
                    <i class="pi pi-language"></i>
                    <span class="font-semibold">{{ slotProps.data?.language_id }}</span>
                  </span>
                    <span class="flex align-items-center gap-2">
                    <i class="pi pi-calendar"></i>
                    <span class="font-semibold">{{ slotProps.data?.registration_date }}</span>
                  </span>
                    <span class="flex align-items-center gap-2">
                    <i class="pi pi-tag"></i>
                    <span class="font-semibold">{{ slotProps.data?.type }}</span>
                  </span>
                  </div>
                  <div class="flex align-items-center justify-content-between">
                    <Toolbar>
                      <template #start>
                        <Button class="me-2" icon="pi pi-check-circle" severity="success" v-tooltip.top="'Результаты обучения'" type="button" @click="openAddMinor(data.id)"/>
                        <Button class="me-2" icon="pi pi-pencil" severity="warning" v-tooltip.top="'Редактировать'" type="button" @click="openEducationProgramDialog(slotProps.data.id)"/>
                        <Button class="me-2" icon="pi pi-clone" severity="info" v-tooltip.top="'Дублировать'" type="button" @click="openDuplicateEducationProgramModal(data.id)"/>
                        <Button class="me-2" icon="pi pi-plus" v-tooltip.top="'Добавить разработчиков'" type="button" @click="openAddDevelopers(data.id)"/>
                        <Button class="me-2" icon="pi pi-link" v-tooltip.top="'Добавить майнор'" type="button" @click="openAddMinor(data.id)"/>

                      </template>
                    </Toolbar>
                  </div>
                </div>
              </div>
            </template>


          </DataView>
        </div>

      </div>






      <Dialog v-model:visible="displayEducationProgramDialog" modal maximizable
              :header="educationProgramModel?.id?'Обновление ОП':'Добавление ОП'" :style="{ width: '50vw' }">

          <div class="col-md-12 education-program-form">

            <div class="row mt-4">

              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Кафедра</span>
                  <Dropdown v-model="educationProgramModel.department_id" :options="common_form.departments" optionLabel="name" optionValue="id" placeholder="Выберите кафедру"/>
                </div>
              </div>

              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Набор</span>
                  <Dropdown v-model="educationProgramModel.admission_year" :options="admissionYears" placeholder="Выберите год набора"/>
                </div>
              </div>



            </div>

            <div class="row mt-4">

              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Уровень обучения</span>
                  <Dropdown v-model="educationProgramModel.study_level_id" :options="common_form.studyLevels" optionLabel="name" optionValue="id" placeholder="Выберите уровень обучения"/>
                </div>
              </div>

              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Область образования</span>
                  <Dropdown v-model="educationProgramModel.education_field_id" :options="educationProgram_form.educationFields" optionLabel="name" optionValue="id" placeholder="Выберите область образования"/>
                </div>
              </div>


            </div>


            <div class="row mt-4">

              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Направление подготовки</span>
                  <Dropdown v-model="educationProgramModel.education_direction_id" :options="educationProgram_form.educationDirections" optionLabel="name" optionValue="id" placeholder="Выберите направление подготовки"/>
                </div>
              </div>

              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Группа ОП</span>
                  <Dropdown v-model="educationProgramModel.education_group_id" :options="educationProgram_form.educationGroups" optionLabel="name" optionValue="id" placeholder="Выберите группу образовательных"/>
                </div>
              </div>


            </div>


            <div class="row mt-4">

              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Тип семестра</span>
                  <Dropdown v-model="educationProgramModel.education_program_semester_type_id" :options="common_form.educationSemesterTypes" optionLabel="name" optionValue="id" placeholder="Выберите тип семестра"/>
                </div>
              </div>

              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Язык обучения</span>
                  <Dropdown v-model="educationProgramModel.language_id" :options="common_form.studyLanguages" optionLabel="name" optionValue="id" placeholder="Выберите язык обучения"/>
                </div>
              </div>




            </div>

            <div class="row mt-4">

              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Присуждаемая академическая степень</span>
                  <Dropdown v-model="educationProgramModel.degree_type_id" :options="common_form.degreeTypes" optionLabel="name_ru" optionValue="id" placeholder="Выберите академическую степень"/>
                </div>
              </div>

              <div class="col-md-6">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Форма обучения</span>
                  <Dropdown v-model="educationProgramModel.study_form_id" :options="common_form.studyForms" optionLabel="name" optionValue="id" placeholder="Выберите форму обучения"/>
                </div>
              </div>

            </div>


            <div class="row mt-4">

              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Код ОП</span>
                  <InputText type="text" v-model="educationProgramModel.code" />
                </div>
              </div>

            </div>

            <div class="row mt-4">
              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Название ОП</span>
                  <InputText type="text" v-model="educationProgramModel.name" />
                </div>
              </div>

            </div>

            <div class="row mt-4">
              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Цель ОП</span>
                  <Textarea v-model="educationProgramModel.ep_aim" rows="2" cols="3" />
                </div>
              </div>

            </div>


            <div class="row mt-4">
              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">ВУЗ-партнер(СОП)</span>
                  <InputText type="text" v-model="educationProgramModel.partner_university_sop" />
                </div>
              </div>

            </div>

            <div class="row mt-4">

              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">ВУЗ-партнер(ДДОП)</span>
                  <InputText type="text" v-model="educationProgramModel.partner_university_ddop" />
                </div>
              </div>

            </div>



            <div class="row mt-4">
              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Объем кредитов</span>
                  <InputNumber v-model="educationProgramModel.credits" inputId="integeronly" />
                </div>
              </div>


            </div>

            <div class="row mt-4">

              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Наличие приложения к лицензии на направление подготовки кадров</span>
                  <InputText type="text" v-model="educationProgramModel.application_availability" />
                </div>
              </div>

            </div>

            <div class="row mt-4">
              <div class="col-md-12">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Приказ ГОСО</span>
                  <Dropdown v-model="educationProgramModel.decree_goso_template_id" :options="common_form.decreeGosoTemplates" optionLabel="decree" optionValue="id" placeholder="Выберите приказ ГОСО"/>
                </div>
              </div>

            </div>


          </div>

        <template #footer>
          <Button label="Закрыть" icon="pi pi-times" severity="secondary" @click="displayEducationProgramDialog = false"/>
          <Button :label="educationProgramModel?.id?'Обновить':'Создать'"
                  :loading="loadingSave" icon="pi pi-check" @click="saveEducationProgram" />
        </template>

      </Dialog>

      <ConfirmPopup></ConfirmPopup>





    </div>

  </div>
</template>

<script>
import {FilterMatchMode, FilterOperator} from 'primevue/api';
import {mapGetters, mapActions, mapMutations, mapState} from "vuex";
//import DeletePassportEducationProgramModal from '@/components/education-programme/passport-education-program/DeletePassportEducationProgramModal.vue'
//import AddPassportEducationProgramModal from '@/components/education-programme/passport-education-program/AddPassportEducationProgramModal.vue';
export default {
  name: "EducationProgram",
  components: {
    //DeletePassportEducationProgramModal,
    //AddPassportEducationProgramModal,
  },

  data() {
    return {
      filters: {
        'global': {value: null, matchMode: FilterMatchMode.CONTAINS},

      },

      admissionYears: [2018, 2019, 2020, 2021, 2022, 2023],
      // educationPrograms: [
      //   {
      //     "id": "654",
      //     "education_field_id": "16",
      //     "education_direction_id": "60",
      //     "education_speciality_code": " 7M04115",
      //     "education_speciality_name": "Executive MBA",
      //     "ep_aim": "Бағдарлама одан әрі өсуге әлеуеті бар және MBA дәрежесі өзінің кәсіби мақсаттарын іске асыру құралдарының бірі болып табылатын топ-менеджерлер мен басшылар әзірлеуге бағытталады.",
      //     "partner_university_sop": "Wyższa Szkoła Biznesu – National Louis University, Poland",
      //     "partner_university_ddop": "Бизнес школа \"Integral\", РЭУ им.Плеханова",
      //     "study_form_id": "1",
      //     "credit_volume": "60",
      //     "application_availability": "",
      //     "study_level_id": "6",
      //     "language_id": "82",
      //     "decree_goso_template_id": "12",
      //     "department_id": "5",
      //     "admission_year": "2022",
      //     "education_groups_id": "35",
      //     "education_result": null,
      //     "esuvo_specialization_id": null,
      //     "group_id": "0",
      //     "degree_type_id": "48",
      //     "education_program_semester_type_id": "1",
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
      //     "decreeGosoTemplate": {
      //       "id": "12",
      //       "decree": "Приказ МинЗдрав от 21 февраля 2020 № ҚР ДСМ-12/2020",
      //       "date": "1582243200",
      //       "created_at": "1651553004",
      //       "updated_at": "1651553004",
      //       "status": "0"
      //     },
      //     "educationProgramSemesterType": [
      //       {
      //         "id": "1",
      //         "name": "семестр"
      //       }
      //     ],
      //     "educationProgramMinors": [
      //       {
      //         "id": "23",
      //         "education_program_id": "654",
      //         "minor_education_program_id": "25",
      //         "minorEducationProgram": {
      //           "id": "25",
      //           "education_speciality_code": "PB-1 2221 M",
      //           "education_speciality_name": "Психология и бизнес",
      //           "study_level_id": "1",
      //           "language_id": "137",
      //           "department_id": "7",
      //           "admission_year": "2021",
      //           "education_program_semester_type_id": "1",
      //           "minor_education_program_type_id": "1"
      //         }
      //       }
      //     ]
      //   },
      //   {
      //     "id": "482",
      //     "education_field_id": "40",
      //     "education_direction_id": "261",
      //     "education_speciality_code": "5B020200",
      //     "education_speciality_name": "Международные отношения",
      //     "ep_aim": "Целью ОП является подготовка профессиональных дипломатов и аналитиков консультантов международных отношении",
      //     "partner_university_sop": "",
      //     "partner_university_ddop": "Wyższa Szkoła Biznesu – National-Louis University (WSB-NLU)",
      //     "study_form_id": "1",
      //     "credit_volume": "240",
      //     "application_availability": "В наличии",
      //     "study_level_id": "1",
      //     "language_id": "137",
      //     "decree_goso_template_id": "6",
      //     "department_id": "7",
      //     "admission_year": "2018",
      //     "education_groups_id": "3",
      //     "education_result": null,
      //     "esuvo_specialization_id": null,
      //     "group_id": "2",
      //     "degree_type_id": "1",
      //     "education_program_semester_type_id": "1",
      //     "language": {
      //       "id": "137",
      //       "639_1": "ru ",
      //       "639_2_t": "rus",
      //       "639_2_b": "rus",
      //       "language_name": "Russian",
      //       "native_name": "Русский язык",
      //       "idPlatonus": "1",
      //       "esuvo_id": "1"
      //     },
      //     "decreeGosoTemplate": {
      //       "id": "6",
      //       "decree": "Приказ от 31 октября 2018 года № 604.",
      //       "date": "1540944000",
      //       "created_at": "1627040914",
      //       "updated_at": "1627040914",
      //       "status": "0"
      //     },
      //     "educationProgramSemesterType": [
      //       {
      //         "id": "1",
      //         "name": "семестр"
      //       }
      //     ],
      //     "educationProgramMinors": []
      //   }
      // ],
      displayEducationProgramDialog: false,
      loadingSave: false,
      educationProgramModel: {},
      layout: 'grid',
      searchQuery: '',
      loading: true
    }
  },
  computed: {
    ...mapState('educationProgram', ['educationProgram_form']),
    ...mapState('common', ['common_form']),
    filteredEducationPrograms() {
      // Use computed property to filter the data based on searchQuery
      const query = this.searchQuery.trim().toLowerCase();
      if (!query) return this.educationProgram_form.educationPrograms;

      return this.educationProgram_form.educationPrograms.filter((program) =>
          program.name.toLowerCase().includes(query) ||
          program.code.toLowerCase().includes(query)
      );
    },
  },

  methods: {
    ...mapActions('educationProgram', ['GET_EDUCATION_FIELDS', 'GET_EDUCATION_DIRECTIONS', 'GET_EDUCATION_GROUPS',
      'POST_EDUCATION_PROGRAM', 'GET_EDUCATION_PROGRAMS', 'PUT_EDUCATION_PROGRAM', 'DELETE_EDUCATION_PROGRAM']),
    ...mapActions('common', ['GET_DEPARTMENTS', 'GET_STUDY_LEVELS', 'GET_DECREE_GOSO_TEMPLATES']),
    ...mapMutations('educationProgram', ['']),


    deleteEducationProgram(education_program_id, event) {
      console.log(123)
      this.$confirm.require({
        target: event.currentTarget,
        message: 'Вы точно хотите удалить эту ОП?',
        icon: 'pi pi-info-circle',
        acceptClass: 'p-button-danger',
        accept: async () => {

          let res = await this.DELETE_EDUCATION_PROGRAM(education_program_id)
          if (res) {
            await this.GET_EDUCATION_PROGRAMS()
            this.$toast.add({ severity: 'success', summary: 'Успешно', detail: 'Образовательная программа успешна удалена', life: 3000 });
          }


        },
        // reject: () => {
        //   this.$toast.add({ severity: 'error', summary: 'Rejected', detail: 'You have rejected', life: 3000 });
        // }
      });
    },

    openEducationProgramDialog(education_program_id = 0) {
      console.log(education_program_id, 'education_program_id')

      if (education_program_id) {
        this.educationProgramModel = {...this.educationProgram_form.educationPrograms.find(i => i.id === education_program_id)}
      } else {
        this.educationProgramModel = {}
      }

      this.displayEducationProgramDialog = true
    },

    async saveEducationProgram() {

      this.educationProgramModel['is_inclusive_study'] = 1
      this.educationProgramModel['professional_standard_id'] = 1
      this.educationProgramModel['language_id'] = 1
      this.educationProgramModel['type'] = 'A'
      this.educationProgramModel['registration_date'] = '2023-07-19'

      this.loadingSave = true
      let res = false
      if (this.educationProgramModel.id) {
        res = await this.PUT_EDUCATION_PROGRAM(this.educationProgramModel)
      } else {
        res = await this.POST_EDUCATION_PROGRAM(this.educationProgramModel)
      }
      if (res) {
        await this.GET_EDUCATION_PROGRAMS()
        this.displayEducationProgramDialog = false
        this.$toast.add({severity: 'success', summary: 'Успешно', detail: 'Образовательная программа успешна добавлена', life: 3000});
      } else {
        this.$toast.add({severity: 'error', summary: 'Ошибка', detail: 'Произошла ошибка', life: 3000});
      }
      this.loadingSave = false

      console.log(this.educationProgramModel, ' saveEducationProgram newEducationProgram')

    }

  },
  async mounted() {
    await this.GET_EDUCATION_PROGRAMS();
    await this.GET_DEPARTMENTS();
    await this.GET_STUDY_LEVELS();
    await this.GET_EDUCATION_FIELDS();
    await this.GET_EDUCATION_DIRECTIONS();
    await this.GET_EDUCATION_GROUPS();
    await this.GET_DECREE_GOSO_TEMPLATES();
    this.loading = false
  }
}
</script>
<style scoped>
.education-program-form .col-md-6 span.p-inputgroup-addon {
  width: 35%!important;
}
.education-program-form .col-md-12 span.p-inputgroup-addon {
  width: 25%!important;
}
</style>