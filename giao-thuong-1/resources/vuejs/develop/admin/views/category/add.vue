<template>
    <div>
        <!-- Start Content-->
        <form class="container-fluid">
            <link rel="stylesheet"
                  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"><b>Khách hàng</b></a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Thêm khách hàng</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Thêm khách hàng</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Thêm mới</h5>

                        <div class="form-group mb-3">
                            <label for="user-name">Name <span class="text-danger">*</span></label>
                            <input type="text" id="user-name" class="form-control" placeholder="Đỗ Văn Hiệp"
                                   :class="{ 'form-group--error': $v.category.name.$error }"
                                   v-model="category.name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="user-phone">Slug <span class="text-danger">*</span></label>
                            <input type="text" id="user-phone" class="form-control" placeholder="0359462619"
                                   v-model="category.slug">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Parent_Id <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="email" rows="3" placeholder="example@gen.vn"
                                   :class="{ 'form-group--error': $v.category.parent_id.$error }"
                                   v-model="category.parent_id">
                        </div>

                        <div class="form-group mb-3">
                            <label for="facebook">Description <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="facebook" rows="3" placeholder="Facebook"
                                   v-model="category.description">
                        </div>

                        <div class="form-group mb-3">
                            <label for="zalo">Type <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="zalo" rows="3" placeholder="Zalo"
                                   v-model="category.type">
                        </div>

                        <div class="form-group mb-3">
                            <label for="rank">Meta_Data <span class="text-danger">*</span></label>
                            <input type="text" id="rank" class="form-control" placeholder="Rank"
                                   v-model="category.meta_data">
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card-box">
                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Ảnh đại diện</h5>

                        <div class="" style="height: 314px;">
                            <div id="imagePreview">

                                <vue-dropzone type="file" id="inputFile" class="dropify"
                                              name="avatar" data-height="300"
                                              :options="dropzoneOptions">
                                </vue-dropzone>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-3">
                        <button type="submit" class="btn w-sm btn-success waves-effect waves-light"
                                @click.prevent="save">Lưu</button>
                        <a href="/gen-admin/customer/list" type="submit" class="btn w-sm btn-light waves-effect">Hủy</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>
<script>
    import Category from '../../../models/category';

    import Vue from 'vue'
    import Vuelidate from 'vuelidate';
    Vue.use(Vuelidate);
    import { required, minLength, between } from 'vuelidate/lib/validators';
    import vue2Dropzone from 'vue2-dropzone';
    import 'vue2-dropzone/dist/vue2Dropzone.min.css';

    export default {
        name: 'category',
        components: {
            vueDropzone: vue2Dropzone
        },
        data () {
            return {
                isBusy: false,
                category: new Category(),
                dropzoneOptions: {
                    url: 'upload',
                    method: 'post',
                    autoProcessQueue: false,
                    thumbnailWidth: 200,
                    maxFiles: 1,
                    addRemoveLinks: true,
                    dictDefaultMessage:
                        "<i class='fa fa-image' style='font-size: 100px'></i> " +
                        "<br>" +
                        "Chọn ảnh vào đây"
                }
            }
        },
        methods: {
            /**
             * Add new system user
             */
            async save(event){
                this.$v.category.$touch();
                if (this.$v.$invalid) {
                    return;
                }

                let self = this;
                try {
                    let formData = new FormData();

                    let token = document.head.querySelector('meta[name="csrf-token"]').content;
                    for(let i in this.category) {
                        formData.append(i, this.category[i]);
                    }
                    formData.append('_token', token);
                    // formData.append('media_url', this.media_url);

                    $.ajax({
                        url: this.$helper.url('category/add'),
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: formData,
                        type: 'post',
                        success: function(response){
                            if (response.success === 1) {
                                self.$helper.messageSuccess('Thêm mới thành công');
                                // setTimeout(function(){
                                //     self.$helper.redirect('article/list');
                                // }, 1000);
                            }
                            else {
                                self.$helper.messageSuccess(response.message);
                            }

                        },
                        error: function (err) {
                            this.$helper.messageError('Lỗi kết nối api');
                        }
                    });
                } catch (e) {
                    this.$helper.messageError(e);
                }

            }
        },
        computed: {

        },
        watch: {
            isBusy()
            {
                if(this.isBusy){
                    this.$helper.startLoading(this);
                }
                else{
                    this.$helper.stopLoading(this);
                }
            }
        },
        created: function(){
            this.category.name = 'Category 3';
            this.category.slug = 'Slug 3';
            this.category.parent_id = '1';
            this.category.description = 'Description 3';
            this.category.type = 'category_news';
            this.category.meta_data = 'meta_data 3';

        },
        mounted: function () {
            let self = this;

            this.$nextTick(function () {
                // Code that will run only after the
                // entire view has been rendered

            })
        },
        validations: {
            category: {
                name: {
                    required
                },
                parent_id: {
                    required
                },
                slug:{
                    required
                },
                description: {
                    required
                },
                type: {
                    required
                },
                meta_data: {
                    required
                }
            }
        }
    }
</script>
<style lang="scss">
    a.fa {
        font-size: 52px;
        color: #3b5998;
    }

    a.fa:hover {
        opacity: 0.92;
    }

    body {
        background: whitesmoke;
        font-family: 'Open Sans', sans-serif;
    }

    .container {
        max-width: 960px;
        margin: 30px auto;
        padding: 20px;
    }

    h1 {
        font-size: 20px;
        text-align: center;
        margin: 20px 0 20px;
        small {
            display: block;
            font-size: 15px;
            padding-top: 8px;
            color: gray;
        }
    }

    .avatar-upload {
        position: relative;
        max-width: 205px;
        margin: 50px auto;
        .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
            input {
                display: none;
                + label {
                    display: inline-block;
                    width: 34px;
                    height: 34px;
                    margin-bottom: 0;
                    border-radius: 100%;
                    background: #FFFFFF;
                    border: 1px solid transparent;
                    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                    cursor: pointer;
                    font-weight: normal;
                    transition: all .2s ease-in-out;
                    &:hover {
                        background: #f1f1f1;
                        border-color: #d6d6d6;
                    }
                    &:after {
                        content: "\f040";
                        font-family: 'FontAwesome';
                        color: #757575;
                        position: absolute;
                        top: 10px;
                        left: 0;
                        right: 0;
                        text-align: center;
                        margin: auto;
                    }
                }
            }
        }
        .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
            > div {
                width: 100%;
                height: 100%;
                border-radius: 100%;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            }
        }
    }

    .form-group--error {
        border-color: red;
    }
</style>
