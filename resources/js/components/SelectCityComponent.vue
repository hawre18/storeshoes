<template>
        <div class="tf-field style-1 mb_15">
            <select id="province" class="tf-field-input tf-input"  name="province" v-model="province" @change="getAllCities()">
                <option v-for="province in provinces" :value="province.id" >{{province.name}}</option>
            </select>
            <label class="tf-field-label fw-4 text_black-2" for="province">استان</label>
        </div>
        <div class="tf-field style-1 mb_15" v-if="cities.length>0">
            <select  class="tf-field-input tf-input" id="city" name="city">
                <option> --- لطفا انتخاب کنید --- </option>
                <option v-for="city in cities" :value="city.id" >{{city.name}}</option>
            </select>
            <label class="tf-field-label fw-4 text_black-2" for="city">شهر</label>
        </div>
</template>

<script>
export default {
    data() {
        return {
            province: 'استان را انتخاب کنید',
            provinces: [],
            flag: false,
            cities: []
        }
    },
    mounted() {
        axios.get('/apiUser/province').then(res => {
            this.provinces = res.data.provinces
        }).catch(err => {
            console.log(err)
        })
    },
    methods: {
        getAllCities: function () {
            axios.get('/apiUser/cities/' + this.province).then(res => {
                this.cities = res.data.cities
            }).catch(err => {
                console.log(err)
            })
        }
    }
}
</script>
