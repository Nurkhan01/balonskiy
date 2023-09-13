<template>
  <div class="container-fluid">
    <PrimePreloader v-if="loading"/>

    <div v-else-if="educationProgram" class="my-4">
      <h4 class="text-center my-3">Формирование ОП</h4>

      <ConfirmPopup></ConfirmPopup>

      <div class="text-center mb-3">
        <h5 class="mb-2">
          {{ educationProgram?.education_speciality_name }}
        </h5>
        <div>
          {{ educationProgram?.education_speciality_code }}
        </div>
        <div>
          {{ educationProgram?.admission_year }} ({{ educationProgram?.language?.native_name }})
        </div>
      </div>


      <!-- Delete Modal -->
      <div class="modal fade" id="deleteEducationModuleModal" tabindex="-1"
           aria-labelledby="deleteEducationModuleModalLabel"
           aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Удаление модуля</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div v-if="deleteEducationModuleId">
                Вы точно хотите удалить этот модуль?
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                      @click="deleteEducationModule">
                Удалить
              </button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Закрыть
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Delete Modal -->


      <div v-if="newEducationModules.length">
        <div class="form-row mt-2" v-for="(newModule, index) in newEducationModules"
             :key="index">


          <Card>
            <template #header>
              <div class="education-field-remove-item__button d-flex flex-row-reverse">
                <Button icon="pi pi-times" severity="danger" @click="deleteNewEducationModulesRow(index)" rounded/>
<!--                <i class="pi pi-times" @click="deleteNewEducationModulesRow(index)"></i>-->
              </div>
            </template>
            <template #title> Модуль {{index + 1}} </template>
            <template #content>


              <div class="row mt-2">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Номер модуля</span>
                  <InputText type="text" v-model="newEducationModules[index].module" />
                </div>
              </div>
              <div class="row mt-2">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Название модуля</span>
                  <InputText type="text" v-model="newEducationModules[index].name" />
                </div>
              </div>

              <div class="row mt-2">
                <div class="p-inputgroup">
                  <span class="p-inputgroup-addon">Описание модуля</span>
                  <Textarea v-model="newEducationModules[index].description" rows="2" cols="3" />
                </div>
              </div>

<!--              <div class="row mt-2">-->
<!--                <div class="p-inputgroup">-->
<!--                  <span class="p-inputgroup-addon">Приказ ГОСО</span>-->
<!--                  <Dropdown v-model="newEducationModules[index].decree_goso_template_id" :options="common_form.decreeGosoTemplates" optionLabel="decree" optionValue="id" placeholder="Выберите приказ ГОСО"/>-->
<!--                </div>-->
<!--              </div>-->

            </template>

          </Card>

        </div>
        <div class="form-group mt-4 text-center">
          <Button label="Создать модули" class="p-button-rounded" @click="saveNewEducationModules"/>
        </div>
      </div>


      <div class="form-group mt-3 d-inline-block">
        <Button icon="pi pi-plus" label="Добавить модуль" class="p-button-rounded p-button-secondary"
                @click="addNewEducationModulesRow"/>
      </div>

<!--      <div class="form-group ms-3 d-inline-block">-->
<!--        <router-link-->
<!--            :to="'/education-program-minor?education_program_id=' + educationProgram.id +-->
<!--            '&admission_year=' + educationProgram.admission_year + '&language_id=' + educationProgram.language_id +-->
<!--            '&decree_goso_template_id=' + $route.query.decree_goso_template_id">-->
<!--          <Button icon="pi pi-plus" label="Добавить майнор" class="p-button-rounded p-button-warning"/>-->
<!--        </router-link>-->
<!--      </div>-->

      <!-- Begin Modules -->
      <div class="row mt-4">
        <div v-for="(item, index) in formationEducationProgram_form.educationModules" :key="index">
          <div class="card mt-4">
            <div class="card-body">

              <div class="row my-1">
                <div class="col">
                  <b>{{ item.module }}: {{ item.name }}</b>
                </div>
                <div class="col text-end">
<!--                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteEducationModuleModal"-->
<!--                          @click="openDeleteEducationModuleModal(item.id)">-->
<!--                    <i class="fas fa-trash-alt"></i>-->
<!--                  </button>-->
                  <Button icon="pi pi-times" severity="danger" @click="deleteEducationModule(item.id, $event)" rounded/>
                </div>
              </div>

              <div>
                <Button icon="pi pi-plus" class="p-button-rounded p-button-secondary"
                        @click="addRowFormationEducationProgram(item)"/>
              </div>

              <div class="row my-2 py-1 rounded-3"
                   v-for="(item, index) in formationEducationProgram_form?.educationModules?.find(i => i.id == item.id).formations"
                   :key="index"
                   :style="{backgroundColor: colorForFGroup[item.f_group_id]||'#fff'}">
                <div class="col-md-2">
                  <select class="form-control form-select" id="goso_cycle_name_id"
                          v-model="item.goso_cycle_name_id"
                          :disabled="!!item?.id&&!item?.edit_status">
                    <option hidden>Выберите</option>
                    <option v-for="(cycle, index) in formationEducationProgram_form?.gosoCycles"
                            :value="cycle.id"
                            :key="index"
                            :selected="cycle.id == item.goso_cycle_name_id">
                      {{ cycle.name }}
                    </option>
                  </select>
<!--                  <Dropdown v-model="item.goso_cycle_name_id" :options="formationEducationProgram_form.gosoCycles"-->
<!--                            optionLabel="name" optionValue="id" placeholder="Выберите цикл"/>-->
                </div>
                <div class="col-md-2">
                  <select class="form-control form-select" name="component" id="component"
                          v-model="item.goso_component_name_id"
                          :disabled="(!!item?.id&&!item?.edit_status)||!!item.f_group_id">
                    <option hidden>Выберите</option>
                    <option
                        v-for="(component, index) in formationEducationProgram_form.gosoComponents"
                        :value="component.id"
                        :selected="component.id == item.goso_component_name_id"
                        :key="index">{{ component.name }}
                    </option>
                  </select>
<!--                  <Dropdown v-model="item.goso_component_name_id" :options="formationEducationProgram_form.gosoComponents"-->
<!--                            optionLabel="name" optionValue="id" placeholder="Выберите компоненту"/>-->
                </div>
                <div class="col-md-2">
                  <select class="form-control form-select" id="semestr"
                          v-model="item.semester"
                          :disabled="!!item?.id&&!item?.edit_status">
                    <option v-for="(semesters, index) in semesters"
                            :value="semesters.id"
                            :key="index"
                            :selected="semesters.id == item.semester">
                      {{ semesters.name }}
                    </option>
                  </select>
<!--                  <Dropdown v-model="item.semester" :options="semesters"-->
<!--                            optionLabel="name" optionValue="id" placeholder="Выберите семестр"/>-->
                </div>

                <div class="col-md-2">
                  <!--                  <DropdownList-->
                  <!--                      :options="options"-->
                  <!--                      :value="item.educationDiscipline"-->
                  <!--                      @change="changeSelectFormationEducationProgramData(item, 'education_discipline_id', $event)"-->
                  <!--                      @search="onSearch"/>-->

                  <Dropdown
                      style="width: 100%"
                      :disabled="!!item?.id&&!item?.edit_status"
                      :modelValue="item.education_discipline_id"
                      :options="item.disciplines"
                      optionLabel="name"
                      optionValue="id"
                      placeholder="Выберите дисциплину"
                      :filter="true"
                      @filter="searchDisciplines($event.value, item)"
                      @change="changeFormationEducationProgramData(item, 'education_discipline_id', $event)"
                  />
                </div>

                <!--                <div class="col-md-1 pt-2">-->
                <!--                  <div v-if="item?.educationDiscipline?.credit">Кредит: {{item?.educationDiscipline?.credit}}</div>-->
                <!--                </div>-->

                <div class="col-md-1">
                  <input id="credit" type="number" class="form-control"
                         placeholder="Количество кредитов"
                         v-model="item.credit"
                         :disabled="!!item?.id&&!item?.edit_status">
<!--                  <InputText type="text" v-model="item.credit" />-->
                </div>

                <div class="col-md-2">

                  <!-- edit button -->
                  <Button v-if="!item?.id" icon="pi pi-pencil" class="p-button-rounded p-button-warning mx-1"
                          disabled="disabled"/>
                  <Button v-else-if="item?.edit_status" icon="pi pi-check" class="p-button-rounded mx-1"
                          @click="putFormation(item.id)"/>
                  <Button v-else icon="pi pi-pencil" class="p-button-rounded p-button-warning mx-1"
                          @click="changeSelectFormationEducationProgramData(item, 'edit_status', 1)"/>
                  <!-- end edit button -->

                  <Button v-if="item.f_group_id" label="КВ" icon="pi pi-times"
                          class="p-button-rounded p-button-danger p-button-outlined mx-1"
                          @click="deleteFormationFromGroup(item)"/>
                  <Button v-else icon="pi pi-trash" class="p-button-rounded p-button-danger mx-1"
                          @click="deleteRowFormationEducationProgram(item)"/>


                  <Button v-if="item.minor_f_group_id != null" :label="'ID: '+ item.minor_f_group_id" icon="pi pi-times" class="p-button-rounded p-button-danger mx-1"
                          @click="deleteFormationFromMinorGroup(item.minor_f_group_id)"/>

                  <input
                      v-if="!item.f_group_id&&item?.id&&kvIds.includes(+item.goso_component_name_id)"
                      class="form-check-input m-2" type="checkbox" :value="item.id" v-model="groupingIds">

                  <input
                      v-if="((item.f_group_id != null) || item.is_minor == 1) && item.minor_f_group_id == null"
                      class="form-check-input m-2" type="checkbox" :value="item" v-model="minorGroupingIds">

                </div>

              </div>


            </div>
          </div>
        </div>
      </div>
      <!--  End Modules -->

      <div class="my-4 text-center" style="min-height: 100px">
        <Button label="Создать" class="p-button-rounded" @click="submitFormationEducationProgram"/>
      </div>


      <Sidebar v-model:visible="visibleBottom" :baseZIndex="1000" position="bottom" class="p-sidebar-lg">
        <div v-if="formationEducationProgram_form?.formationEducationProgramInfos.length">
          <div class="mb-3">
            <div class="my-1 text-center fw-bold">ГОСО</div>

            <div class="row m-0" style="background-color: #C5CAE9">
              <div class="col-md-3 border border-secondary"
                   v-for="(cycle, cycleIdx) in gosoG" :key="'cycle' + cycleIdx">
                <div class="row">
                  <div class="col-md-4 ps-2 fw-bold">
                    {{ cycle.cycleName }}
                  </div>

                  <div class="col-md-8" v-if="cycle.components.length">
                    <div class="row" v-for="(component, comIdx) in cycle.components" :key="`component${comIdx}`">
                      <div class="col-6 col-sm-6 col-md-6 border border-secondary">{{ component.name }}</div>
                      <div class="col-6 col-sm-6 col-md-6 border border-secondary">{{ component.credit }}</div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="text-left p-1 fw-bold">
              Итого: {{ allCreditsCountG }}
            </div>
          </div>

          <div>
            <div class="my-1 text-center fw-bold">ОП: {{ educationProgram?.education_speciality_name }}</div>

            <div class="row m-0">
              <div class="col-md-3 border border-secondary"
                   v-for="(cycle, cycleIdx) in goso" :key="'cycle' + cycleIdx">
                <div class="row">
                  <div class="col-md-4 ps-2 fw-bold">
                    {{ cycle.cycleName }}
                  </div>

                  <div class="col-md-8" v-if="cycle.components.length">
                    <div class="row" v-for="(component, comIdx) in cycle.components" :key="`component${comIdx}`">
                      <div class="col-6 col-sm-6 col-md-6 border border-secondary">{{ component.name }}</div>
                      <div class="col-6 col-sm-6 col-md-6 border border-secondary">{{ component.credit }}</div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="text-left p-1 fw-bold">
              Итого: {{ allCreditsCount }}
            </div>
          </div>
        </div>
      </Sidebar>

      <!-- credit count section -->
      <div class="fixed-bottom"
           v-if="formationEducationProgram_form?.formationEducationProgramInfos.length||groupingIds.length">

        <div class="text-center p-2">
          <Button v-if="formationEducationProgram_form?.formationEducationProgramInfos.length" icon="pi pi-arrow-up"
                  @click="visibleBottom = true" class="p-button-secondary p-button-rounded mx-2"/>
          <Button v-if="groupingIds.length" label="Сгруппировать" @click="groupingDisciplines"
                  class="p-button-rounded mx-2"/>


          <Button v-if="minorGroupingIds.length" label="Сгруппировать майноры" @click="groupingMinorDisciplines"
                  class="p-button-rounded mx-2" :disabled="isCvLength != 2 || isMinorLength != 1 || !isCreditEqual || !isFgroupIdEqual"/>
        </div>

      </div>
      <!-- end credit count section -->


    </div>

    <div v-else>
      <h5 class="text-center mt-4">
        Здесь пусто
      </h5>
    </div>

  </div>
</template>


<script>

import {mapActions, mapMutations, mapState} from "vuex";
//import {convertTimestampToDate} from "@/utils/helpers/convertTimestampToDate"
//import educationprogram from "@/store/modules/education-programme/educationprogram";


export default {
  name: "FormationEducationProgram",
  data() {
    return {
      urlEducationProgramId: this.$route.query.education_program_id || 0,
      urlDecreeGosoTemplateId: this.$route.query.decree_goso_template_id || 0,
      sumCredit: 0,
      remainderSum: 0,
      openSelectId: null,
      options: [],
      newEducationModules: [],
      //deleteEducationModuleId: null,
      filteredEducationSemesters: [],
      groupingIds: [],
      minorGroupingIds: [],
      loading: true,

      colorForFGroup: {},
      colors: ['#C5CAE9', '#FFCCBC', '#B2DFDB', '#FFECB3', '#C8E6C9', '#B3E5FC', '#FFCDD2', '#D7CCC8', '#F0F4C3', '#D1C4E9'],
      visibleBottom: false,
      kvIds: [6, 13, 21, 28, 34, 40, 47, 61],

      educationProgram: {
        "id": "654",
        "education_field_id": "16",
        "education_direction_id": "60",
        "education_speciality_code": " 7M04115",
        "education_speciality_name": "Executive MBA",
        "ep_aim": "Бағдарлама одан әрі өсуге әлеуеті бар және MBA дәрежесі өзінің кәсіби мақсаттарын іске асыру құралдарының бірі болып табылатын топ-менеджерлер мен басшылар әзірлеуге бағытталады.",
        "partner_university_sop": "Wyższa Szkoła Biznesu – National Louis University, Poland",
        "partner_university_ddop": "Бизнес школа \"Integral\", РЭУ им.Плеханова",
        "study_form_id": "1",
        "credit_volume": "60",
        "application_availability": "",
        "study_level_id": "6",
        "language_id": "82",
        "decree_goso_template_id": "12",
        "department_id": "5",
        "admission_year": "2022",
        "education_groups_id": "35",
        "education_result": null,
        "esuvo_specialization_id": null,
        "group_id": "0",
        "degree_type_id": "48",
        "education_program_semester_type_id": "1",
        "language": {
          "id": "82",
          "639_1": "kk ",
          "639_2_t": "kaz",
          "639_2_b": "kaz",
          "language_name": "Kazakh",
          "native_name": "Қазақ тілі",
          "idPlatonus": "2",
          "esuvo_id": "2"
        },
        "decreeGosoTemplate": {
          "id": "12",
          "decree": "Приказ МинЗдрав от 21 февраля 2020 № ҚР ДСМ-12/2020",
          "date": "1582243200",
          "created_at": "1651553004",
          "updated_at": "1651553004",
          "status": "0"
        },
        "educationProgramSemesterType": [
          {
            "id": "1",
            "name": "семестр"
          }
        ],
        "educationProgramMinors": [
          {
            "id": "23",
            "education_program_id": "654",
            "minor_education_program_id": "25",
            "minorEducationProgram": {
              "id": "25",
              "education_speciality_code": "PB-1 2221 M",
              "education_speciality_name": "Психология и бизнес",
              "study_level_id": "1",
              "language_id": "137",
              "department_id": "7",
              "admission_year": "2021",
              "education_program_semester_type_id": "1",
              "minor_education_program_type_id": "1"
            }
          }
        ]
      },
      //educationModules: [],
      semesters: [
          {
            id: 1,
            name: 1
          },
        {
          id: 2,
          name: 2
        },
        {
          id: 3,
          name: 3
        },
        {
          id: 4,
          name: 4
        },
        {
          id: 5,
          name: 5
        },
        {
          id: 6,
          name: 6
        },
        {
          id: 7,
          name: 7
        },
        {
          id: 8,
          name: 8
        },
      ],



    }
  },
  computed: {
    ...mapState('formationEducationProgram', ['formationEducationProgram_form']),
    ...mapState('decreeGosoTemplates', ['decreeGosoTemplates_form']),
    ...mapState('gosoTemplates', ['gosoTemplate_form']),

    ...mapState('common', ['common_form']),

    // minorGroupingIdsLength() {
    //   let isCvLength = minorGroupingIds.filter(i=>i.f_group_id != null).length
    //   let isMinorLength = minorGroupingIds.filter(i=>i.is_minor == 1).length
    //
    //   return isCvLength + isMinorLength
    // },
    isFgroupIdEqual() {
      let fGroupDisciplines = this.minorGroupingIds.filter(i=>i.f_group_id !== null)
      //
      let isFgroupIdEqual = false
      // for (let i = 0; i < fGroupDisciplines.length; i++) {
      //   fGroupDisciplines[i].f_group_id
      // }

      if (fGroupDisciplines[0].f_group_id == fGroupDisciplines[1].f_group_id) {
        isFgroupIdEqual = true
      }
      return isFgroupIdEqual

    },
    isCreditEqual() {

      let fGroupDisciplines = this.minorGroupingIds.filter(i=>i.f_group_id !== null)

      if((fGroupDisciplines[0].credit === fGroupDisciplines[1].credit) && (fGroupDisciplines[1].credit == this.minorGroupingIds.find(i=>i.is_minor == '1').credit)) {
        return true
      }
      else {
        return false
      }
    },
    isCvLength() {
      let isCvLength = this.minorGroupingIds.filter(i=>i.f_group_id !== null).length
      return isCvLength;
    },
    isMinorLength() {
      let isMinorLength = this.minorGroupingIds.filter(i=>i.is_minor == '1').length
      return isMinorLength;
    },
    allCreditsCount() {
      if (!this.formationEducationProgram_form) {
        return 0
      }
      return this.getCountableFormations(this.formationEducationProgram_form.formationEducationProgramInfos).reduce((sum, item) => +item.credit + sum, 0)
    },
    goso() {
      if (!this.formationEducationProgram_form) {
        return []
      }
      return this.formationEducationProgram_form.gosoTemplateCycle.map(cycle => {
        const formationsByCycleId = this.formationEducationProgram_form.formationEducationProgramInfos
            .filter(i => i.goso_cycle_name_id == cycle?.goso_cycle_name_id)

        const countableFormations = this.getCountableFormations(formationsByCycleId)

        return {
          cycleName: cycle?.gosoCycleName.short_name,
          components: [...new Set(countableFormations.map(i => i.goso_component_name_id))].map(id => ({
            name: this.formationEducationProgram_form.componentNames.find(i => i.id == id)?.short_name,
            credit: countableFormations.filter(i => i.goso_component_name_id == id).reduce((sum, item) => +item.credit + sum, 0)
          }))
        }
      })
    },

    allCreditsCountG() {
      if (!this.formationEducationProgram_form.gosoTemplateInfos) {
        return 0
      }
      return this.formationEducationProgram_form.gosoTemplateInfos.filter(i => i.parent_id != 0).reduce((sum, item) => +item.credit + sum, 0)
    },
    gosoG() {
      if (!this.formationEducationProgram_form.gosoTemplateInfos) {
        return 0
      }
      return this.formationEducationProgram_form.gosoTemplateInfos
          .filter(cycle => cycle.parent_id == 0)
          .map((cycle) => {
            let cycleName = cycle?.gosoCycleName.short_name
            return {
              cycleName,
              components: this.formationEducationProgram_form.gosoTemplateInfos
                  .filter(component => component.parent_id == cycle.id)
                  .map(component => {
                    let componentName = this.formationEducationProgram_form.componentNames.find(i => i.id == component.goso_components_name_id);
                    componentName = componentName?.short_name
                    return {
                      name: componentName,
                      credit: component.credit
                    }
                  })
            }
          })
    }

  },
  methods: {
    //...mapActions('decreeGosoTemplates', ['GET_DECREE_GOSO_TEMPLATES_DATA']),
    //...mapActions('gosoTemplates', ['GET_GOSO_TEMPLATE_DATA']),
    //...mapActions('educationmodule', ['DELETE_EDUCATION_MODULE_DATA']),
    ...mapActions('formationEducationProgram', ['POST_EDUCATION_MODULE', 'GET_EDUCATION_MODULES', 'DELETE_EDUCATION_MODULE',
      'GET_GOSO_CYCLES', 'GET_GOSO_COMPONENTS', 'POST_FORMATION_EDUCATION_PROGRAM']),
    ...mapMutations('formationEducationProgram', ['SET_STUDY_LEVEL_ID', 'SET_GOSO_TEMPLATE_DATA', 'SET_EDUCATION_PROGRAM_ID',
      'UPDATE_FORMATION_EDUCATION_PROGRAM_DATA', 'ADD_ROW_FORMATION_EDUCATION_PROGRAM_INFO', 'DELETE_ROW_FORMATION_EDUCATION_PROGRAM_INFO',
      'SET_DECREE_GOSO_TEMPLATES_ID', 'SET_URL_EDUCATION_PROGRAM_ID', 'SET_URL_DECREE_GOSO_TEMPLATE_ID',
      'SET_STUDY_LANG_ID']),
    //convertTimestampToDate,
    async searchDisciplines(name, item) {
      if (name.length > 3) {
        const disciplines = await this.SEARCH_DISCIPLINE(name)
        this.UPDATE_FORMATION_EDUCATION_PROGRAM_DATA({item, property: 'disciplines', value: disciplines})
      }
    },
    getCountableFormations(formations) {
      const countableFormations = []
      const formationWithFGroupId = formations.filter(i => !!i.f_group_id)
      formationWithFGroupId.forEach(i => {
        if (!countableFormations.find(cI => cI.f_group_id == i.f_group_id)) {
          countableFormations.push(i)
        }
      })

      return [...formations.filter(i => !i.f_group_id), ...countableFormations]
    },
    addNewEducationModulesRow() {
      this.newEducationModules.push({
        module: 'Модуль ' + (this.newEducationModules.length + 1),
        name: '',
        education_program_id: this.urlEducationProgramId,
        decree_goso_templates_id: this.urlDecreeGosoTemplateId,
        put_status: 1
      })
    },
    deleteNewEducationModulesRow(index) {
      this.newEducationModules.splice(index, 1);
    },
    changeNewModules(item, property, e) {
      const index = this.newModules.indexOf(item)
      this.newModules[index][property] = e.target.value
    },
    async saveNewEducationModules() {
      if (this.newEducationModules.length) {
        const res = await this.POST_EDUCATION_MODULE(this.newEducationModules)
        if (res) {
          this.newEducationModules = []
        }
      }
      await this.GET_EDUCATION_MODULES(this.urlEducationProgramId)
    },
    onSearch(search) {
      if (search.length > 3) {
        this.SEARCH_DISCIPLINE(search).then(json => (this.options = json));
      }
    },
    addRowFormationEducationProgram(educationModule) {
      this.ADD_ROW_FORMATION_EDUCATION_PROGRAM_INFO(educationModule)
      //this.SET_FORMATION_EDUCATION_PROGRAM_EDUCATION_MODULE_ID(this.formationEducationProgram_form.educationModules[0].id)
    },
    async deleteRowFormationEducationProgram(item) {
      if (item.id) {
        const {success} = await this.DELETE_FORMATION_EDUCATION_PROGRAM_DATA(item.id)
        if (success) {
          this.DELETE_ROW_FORMATION_EDUCATION_PROGRAM_INFO(item)
          this.$message({title: 'Удаление', text: 'Данные успешно удалены'})
        }
      } else {
        this.DELETE_ROW_FORMATION_EDUCATION_PROGRAM_INFO(item)
      }
    },
    openDeleteEducationModuleModal(id) {
      this.deleteEducationModuleId = id
    },
    // async deleteEducationModule() {
    //   console.log(this.deleteEducationModuleId, 'DELETE EDUCATION MODULE ID')
    //   await this.DELETE_EDUCATION_MODULE_DATA(this.deleteEducationModuleId)
    //   await this.DELETE_FORMATION_EDUCATION_PROGRAM_EDUCATION_MODULE(this.deleteEducationModuleId)
    //   await this.GET_FORMATION_EDUCATION_PROGRAM_DATA()
    //   await this.GET_EDUCATION_MODULE_DATA()
    // },
    deleteEducationModule(education_module_id, event) {
      console.log(123)
      this.$confirm.require({
        target: event.currentTarget,
        message: 'Вы точно хотите удалить этот модуль?',
        icon: 'pi pi-info-circle',
        acceptClass: 'p-button-danger',
        accept: async () => {

          let res = await this.DELETE_EDUCATION_MODULE(education_module_id)
          if (res) {
            await this.GET_EDUCATION_MODULES(this.urlEducationProgramId)
            this.$toast.add({ severity: 'success', summary: 'Успешно', detail: 'Модуль успешно удален', life: 3000 });
          }


        },
        // reject: () => {
        //   this.$toast.add({ severity: 'error', summary: 'Rejected', detail: 'You have rejected', life: 3000 });
        // }
      });
    },
    changeFormationEducationProgramData(item, property, e, val = 'value') {
      if (property === 'education_discipline_id') {
        console.log('education_discipline_id', e)
      }

      const value = property === 'education_discipline_id' ? e.value : e.target[val]
      this.UPDATE_FORMATION_EDUCATION_PROGRAM_DATA({item, property, value})
    },
    changeSelectFormationEducationProgramData(item, property, value) {
      this.UPDATE_FORMATION_EDUCATION_PROGRAM_DATA({item, property, value})
      this.minorGroupingIds = []
    },
    async putFormation(id) {
      const formation = this.formationEducationProgram_form.formationEducationProgramInfos.find(i => i.id == id && i.edit_status == 1)
      if (formation) {
        const res = await this.PUT_FORMATION_EDUCATION_PROGRAM_DATA(formation)
        if (res.success == true) {
          await this.GET_FORMATION_EDUCATION_PROGRAM_DATA()
          this.$message({title: 'Обновление', text: 'Данные успешно обновились'})
        } else {
          const errorText = res.errors[0].map(err => err.message).join('\n');
          this.$error({title: 'Обновление', text: errorText})
        }
      }
    },
    async submitFormationEducationProgram() {
      console.log(this.formationEducationProgram_form.educationModules)
      let mergedFormations = []

      for (let i=0; i < this.formationEducationProgram_form.educationModules.length; i++){

        for (let j=0; j < this.formationEducationProgram_form.educationModules[i].formations.length; j++){

          mergedFormations.push(this.formationEducationProgram_form.educationModules[i].formations[j])
        }


        //mergedFormations.push(this.formationEducationProgram_form.educationModules[i].formations)
      }

      console.log(mergedFormations, 'mergedFormations')

      let postFormationEducationProgram = mergedFormations.filter(v => v.id == undefined)

      console.log(postFormationEducationProgram, 'postFormationEducationProgram')
      // const postFormationEducationProgram = this.formationEducationProgram_form.formationEducationProgramInfos.filter(v => v.id == undefined)
      // console.log(postFormationEducationProgram, 'postFormationEducationProgram')
      if (postFormationEducationProgram) {

        const res = await this.POST_FORMATION_EDUCATION_PROGRAM(postFormationEducationProgram)
        if (res) {
          await this.GET_EDUCATION_MODULES(this.urlEducationProgramId)
          this.$toast.add({severity: 'success', summary: 'Успешно', detail: 'Успешно добавлено', life: 3000});
        }
        else {
          this.$toast.add({severity: 'error', summary: 'Ошибка', detail: 'Произошла ошибка', life: 3000});
        }

      }
    },
    async groupingDisciplines() {
      console.log(this.groupingIds, 'groupingIds')
      const res = await this.POST_GROUPING_DISCIPLINES({ids: this.groupingIds})
      if (res) {
        await this.GET_FORMATION_EDUCATION_PROGRAM_DATA()
        this.bindColorForFormation()
        this.groupingIds = []
        this.$message({text: 'Успешная группировка'})
      }
    },

    async groupingMinorDisciplines() {
      console.log(this.minorGroupingIds, 'minorGroupingIds')
      console.log(this.isMinorLength, 'isMinorLength')
      console.log(this.isCvLength, 'isCvLength')
      console.log(this.isCreditEqual, 'isCreditEqual')
      const res = await this.POST_GROUPING_MINOR_DISCIPLINES({ids: this.minorGroupingIds})
      if (res) {
        await this.GET_FORMATION_EDUCATION_PROGRAM_DATA()
        this.bindColorForFormation()
        this.minorGroupingIds = []
        this.$message({text: 'Успешная группировка майноров'})
      }
    },
    async deleteFormationFromGroup(item) {

      if (item.minor_f_group_id == null) {
        const res = await this.DELETE_FORMATION_FROM_GROUP(item.group_id)
        if (res) {
          await this.GET_FORMATION_EDUCATION_PROGRAM_DATA()
          this.bindColorForFormation()
          this.$message({text: 'Группа успешно удалено'})
        }
      }
      else {
        this.$error({text: 'Прежде чем удалить группировку КВ удалите группировку майноров'})
      }

    },

    async deleteFormationFromMinorGroup(minor_f_group_id) {
      const res = await this.DELETE_FORMATION_FROM_MINOR_GROUP(minor_f_group_id)
      if (res) {
        await this.GET_FORMATION_EDUCATION_PROGRAM_DATA()
        this.bindColorForFormation()
        this.$message({text: 'Группа майнора успешно удалена'})
      }
    },
    bindColorForFormation() {
      const fGroups = [...new Set(this.formationEducationProgram_form.formationEducationProgramInfos.filter(i => !!i.f_group_id).map(i => i.f_group_id))]
      fGroups.forEach((item, index) => {
        this.colorForFGroup[item] = this.colors[index % 10]
      })
    }
  },

  async mounted() {
    await this.GET_EDUCATION_MODULES(this.urlEducationProgramId)
    await this.GET_GOSO_CYCLES()
    await this.GET_GOSO_COMPONENTS()
    // this.SET_URL_EDUCATION_PROGRAM_ID(this.urlEducationProgramId);
    // this.SET_URL_DECREE_GOSO_TEMPLATE_ID(this.urlDecreeGosoTemplateId);
    // await this.GET_EDUCATION_PROGRAM(this.urlEducationProgramId);
    //
    // let firstEducationProgram = this.formationEducationProgram_form.educationPrograms[0];
    // if (firstEducationProgram) {
    //   this.educationProgram = firstEducationProgram
    //   this.SET_EDUCATION_PROGRAM_ID(firstEducationProgram.id)
    //   this.SET_STUDY_LEVEL_ID(this.educationProgram.study_level_id)
    //   this.SET_STUDY_LANG_ID(this.educationProgram.language_id)
    // }
    //
    //
    // await this.GET_FORMATION_EDUCATION_PROGRAM_DATA()
    // await this.GET_GOSO_TEMPLATE_CYCLE()
    // await this.GET_EDUCATION_SEMESTR()
    //
    // let filteredEducationSemesters = this.formationEducationProgram_form.educationSemesters.filter(i => i.education_program_semester_type_id == this.educationProgram.education_program_semester_type_id)
    // if (filteredEducationSemesters && firstEducationProgram) {
    //   if (+firstEducationProgram.department_id === 5) {
    //     filteredEducationSemesters.splice(6)
    //   } else if (+firstEducationProgram.department_id !== 40) {
    //     filteredEducationSemesters.splice(8)
    //   }
    // }
    // this.filteredEducationSemesters = filteredEducationSemesters
    //
    // await this.GET_EDUCATION_MODULE_DATA()
    // await this.GET_DECREE_GOSO_TEMPLATES_DATA()
    //
    // this.SET_DECREE_GOSO_TEMPLATES_ID(this.formationEducationProgram_form.urlDecreeGosoTemplateId)
    //
    // await this.GET_STUDY_LEVEL()
    // await this.GET_GOSO_COMPONENTS_NAME()
    // // await this.GET_GOSO_CYCLE_NAME()
    //
    // // await this.SET_STUDY_LEVEL_ID(this.educationProgram.study_level_id)
    // await this.GET_GOSO_TEMPLATE_DATA()
    //
    // console.log(this.formationEducationProgram_form.gosoTemplateInfos, 'gosoTemplateInfos')

    //this.bindColorForFormation()
    this.loading = false
  }
}
</script>

<style scoped>
</style>