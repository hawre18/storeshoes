<template>
        <div class="mt-8">
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 lg:col-span-4">
                    <div class="mb-3">
                        <div class="mb-2">
                            <label for="choices-single-groups" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">دسته بندی محصول</label>
                        </div>
                        <select name="categories[]" multiple v-model="categories_selected" @change="onChange($event,null)">
                            <option v-for="category in categories" :value="category.id" >{{category.name}}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div v-if="flag" class="mt-8">
            <div v-for="(attribute,index) in attributes" class="grid grid-cols-12 gap-5">
                <div class="col-span-12 lg:col-span-4">
                    <div class="mb-3">
                        <div class="mb-2">
                            <label  class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">ویژگی {{attribute.title}}</label>
                        </div>
                        <select @change="addAttribute($event,index)">
                            <option>انتخاب کنید</option>
                            <option v-if="!product" v-for="attributeValue in attribute.attribute_value" :value="attributeValue.id" >{{attributeValue.title}}</option>
                            <option v-if="product" v-for="attributeValue in attribute.attribute_value" :value="attributeValue.id" :selected="product.attributeValues[index].id==attributeValue.id">{{attributeValue.title}}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="attributes[]" :value="computedAttribute">
</template>
<script>
export default {
    data(){
        return{
            categories: [],
            categories_selected: [],
            flag:false,
            attributes:[],
            selectedAttribute:[],
            computedAttribute:[]
        }
    },
    props:['product'],
    mounted(){
        axios.get('/api/categories').then(res=> {
            console.log(res);
            this.getAllChildren(res.data.categories,0);
        }).catch(err=>{
            console.log(err)
        })
        if (this.product){
            for (var i=0;i<this.product.categories.length;i++){
                this.categories_selected.push(this.product.categories[i].id)
            }
            for (var i=0;i<this.product.attributeValues.length;i++){
                this.selectedAttribute.push({
                    'index':i,
                    'value':this.product.attributeValues[i].id
                })
                this.computedAttribute.push(this.product.attributeValues[i].id)
            }
            const load='ok'
            this.onChange(null,load);
        }
    },
    methods:{
        getAllChildren: function (currentValue,level) {
            for (var i=0; i<currentValue.length;i++){
                var current=currentValue[i];
                this.categories.push({
                    id:current.id,
                    name:Array(level+1).join("----")+" "+current.name
                })
                if (current.children_recursive){
                    this.getAllChildren(current.children_recursive,level+1)
                }
            }
        },
        onChange:function ($event,load) {
            this.flag=false;
            axios.post('/api/categories/attribute',this.categories_selected).then(res=>{
                if (this.product&&load==null){
                    this.computedAttribute=[]
                    this.selectedAttribute=[]
                }
                this.attributes=res.data.attributes
                this.flag=true
            }).catch(err=>{
                console.log(err)
                this.flag=false
            })
        },
        addAttribute:function (event, index) {
            for (var i=0;i<this.selectedAttribute.length;i++){
                var current=this.selectedAttribute[i];
                if (current.index==index){
                    this.selectedAttribute.splice(i,1)
                }
            }
            this.selectedAttribute.push({
                'index':index,
                'value':event.target.value
            })
            this.computedAttribute=[]
            for (var i=0;i<this.selectedAttribute.length;i++){
                this.computedAttribute.push(this.selectedAttribute[i].value)
            }
        }
    }
}

</script>
