<template>
    <div>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"><b>Tin tức</b></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Thêm tin mới</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Thêm tin mới</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Thêm tin</h5>

                    <div class="form-group mb-3">
                        <label for="user-name">Title <span class="text-danger">*</span></label>
                        <input type="text" id="user-name" class="form-control" placeholder="Đỗ Văn Hiệp"
                               :class="{ 'form-group--error': $v.event.title.$error }"
                               v-model="event.title">
                    </div>

                    <div class="form-group mb-3">
                        <label for="user-phone">Description <span class="text-danger">*</span></label>
                        <input type="text" id="user-phone" class="form-control" placeholder="0359462619"
                               :class="{ 'form-group--error': $v.event.description.$error }"
                               v-model="event.description">
                    </div>

                    <div class="form-group mb-3">
                        <label for="name">Detail <span class="text-danger">*</span></label>
                        <input type="text" id="name" class="form-control" placeholder="Đỗ Văn Hiệp"
                               :class="{ 'form-group--error': $v.event.detail.$error }"
                               v-model="event.detail">
                    </div>

                    <div class="form-group mb-3">
                        <label for="slug">Slug <span class="text-danger">*</span></label>
                        <input type="text" id="slug" class="form-control" placeholder="Đỗ Văn Hiệp"
                               v-model="event.slug">
                    </div>

                    <div class="form-group mb-3">
                        <label for="category">Category <span class="text-danger">*</span></label>
                        <input type="text" id="category" class="form-control" placeholder="Đỗ Văn Hiệp"
                               v-model="event.category_id">
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Ảnh đại diện</h5>
                    <div class="container">
                        <img v-bind:src="event.media_id" style="max-width: 100%" v-if="event.media_id != null">
                        <modal name="mediaModal"
                               :width="914"
                               :height="565"
                               @before-open="beforeOpen"
                               @before-close="beforeClose">

                            <div class="row">
                                <h5 class="title">Chọn ảnh hồ sơ</h5>
                                <a @click.prevent="hide" class="iconx" style="margin-top: 3%;
                                                                              margin-left: 70%;
                                                                              font-size: 20px;">
                                    <i class="fa fa-close"></i>
                                </a>
                            </div>

                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" class="nav-link" href="#menu1">Tải ảnh lên</a></li>
                                <li>
                                    <a data-toggle="tab" class="nav-link" href="#menu2">
                                        Ảnh trong thư mục</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="menu1" class="container tab-pane fade active show">
                                    <div class="" style="height: 314px;">
                                        <div id="imagePreview">
                                            <input type="file" name="avatar" @change="GetImage"/>
                                            <img type="image" :src="avatarBase64">

                                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light" @click.prevent="upload">
                                                Upload</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="menu2" class="container tab-pane fade">
                                    <div class="row tableimage">
                                        <div class="col-sm-6 col-xl-3 filter-item all web illustrator"
                                             v-for="media in medias">
                                            <div class="gal-box">
                                                <a @dblclick.prevent="setAvatar(media)" title="Screenshot-1">
                                                    <img v-bind:src="media.url" class="img-fluid"
                                                         alt="work-thumbnail">
                                                </a>
                                                <div class="gall-info">
                                                    <h4 class="font-16 mt-0">{{media.name}}</h4>
                                                    <a href="javascript: void(0);">
                                                        <span class="text-muted ml-1">Diamond</span>
                                                    </a>
                                                    <a href="javascript: void(0);" class="gal-like-btn">
                                                        <i class="mdi mdi-heart-outline text-danger"/></a>
                                                </div> <!-- gallery info -->
                                            </div> <!-- end gal-box -->
                                        </div>
                                    </div>

                                    <div class="col-12 text-center" v-show="loadMore">
                                        <button class="btn w-sm btn-success waves-effect waves-light"
                                                @click="myFunction">
                                            Xem thêm
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </modal>
                        <button class="btn btn-primary" @click="show">
                            Chọn ảnh mới
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="text-center mb-3">
                    <button type="submit" class="btn w-sm btn-success waves-effect waves-light"
                            @click.prevent="save">Lưu</button>
                    <a href="/gen-admin/event/list" type="submit" class="btn w-sm btn-light waves-effect">Hủy</a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Event from '../../../models/event';
    import Category from '../../../models/category';
    import Collection from '../../../libs/collection';
    import Media from "../../../models/media";

    import Vue from 'vue'
    import Vuelidate from 'vuelidate';
    Vue.use(Vuelidate);
    import { required, minLength, between } from 'vuelidate/lib/validators';
    import vue2Dropzone from 'vue2-dropzone';
    import 'vue2-dropzone/dist/vue2Dropzone.min.css';

    export default {
        name: 'EventAdd',
        components: {
            vueDropzone: vue2Dropzone
        },
        data () {
            return {
                isBusy: false,
                event: new Event(),
                categorys: new Collection(Category),
                avatarBase64 : null,
                medias: new Collection(Media),
                file: null,
                loadMore: true,
            }
        },
        created() {
            let category = new Category();
            category.loadCollection().then(collection => {
                this.categorys.addRange(collection);
            });

            let media = new Media();
            media.loadCollection({
                skip: this.medias.length
            }).then(collection => {
                this.medias.addRange(collection);
            });

            this.event.title = 'Đây là title 3';
            this.event.slug = 'Đây là slug 3';
            this.event.description = 'Đây là mô tả 3';
            this.event.detail = 'Đây là chi tiết 3';
            this.event.category_id = '1';
        },
        methods: {
            show () {
                this.$modal.show('mediaModal');
            },
            hide () {
                this.$modal.hide('mediaModal');
            },
            beforeOpen (event) {
                this.time = Date.now()
            },
            beforeClose (event) {
                if (this.time + this.duration < Date.now()) {
                    event.stop()
                }
            },
            myFunction(){
                let media = new Media();
                media.loadCollection({
                    skip: this.medias.length
                }).then(collection => {
                    this.medias.addRange(collection);
                    this.loadMore = this.medias.length < collection.recordsTotal;
                });

            },
            GetImage(e){
                let image = e.target.files[0];
                let data = new FormData();
                this.file = image;
                data.append('image', image[0]);
                let reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = (e) => {
                    this.avatarBase64 = e.target.result;
                }
            },
            setAvatar(media){
                this.event.media_id = media.url;
                this.hide();
            },
            async upload(event){
                let self = this;
                try {
                    let formData = new FormData();
                    let token = document.head.querySelector('meta[name="csrf-token"]').content;
                    formData.append('_token', token);
                    formData.append('file', this.file);

                    $.ajax({
                        url: this.$helper.url('media/upload'),
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: formData,
                        type: 'post',
                        success: function(response){
                            if (response.success === 1) {
                                self.medias.addTop(response.data);
                                self.$helper.messageSuccess('Thêm mới thành công');
                                self.avatarBase64 = null;
                                $('input[type="file"]').val(null);
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

            },
            async save(event){
                this.$v.event.$touch();
                if (this.$v.$invalid) {
                    return;
                }

                let self = this;
                try {
                    let formData = new FormData();

                    let token = document.head.querySelector('meta[name="csrf-token"]').content;
                    for(let i in this.event) {
                        formData.append(i, this.event[i]);
                    }
                    formData.append('_token', token);
                    formData.append('media_id', this.media_id);

                    $.ajax({
                        url: this.$helper.url('event/add'),
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
                                //     self.$helper.redirect('event/list');
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

            },
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
        mounted: function () {
            let self = this;

            this.$nextTick(function () {
                // Code that will run only after the
                // entire view has been rendered

            })
        },
        validations: {
            event: {
                title: {
                    required
                },
                description: {
                    required
                },
                detail: {
                    required
                },
                slug: {
                    required
                },
                media_id: {
                    required
                }
            }
        }
    }
</script>
<style lang="scss">

    #wrapper > div > div > div > div > div > div:nth-child(3)
    > div:nth-child(2) > div > div > div > div
    > div.v--modal-box.v--modal{
        overflow-y: auto;
    }

    #imagePreview{
        padding: 0 25%;
    }

    #imagePreview > img{
        width: 200px;
    }

    .Re-nk-tk-ze {
        padding: 20px;
        border-top: 1px solid #eee;
    }

    button.btn.btn-primary {
        margin-left: 35%;
        margin-top: 5%;
    }

    button.btn.btn-blue {
        margin-right: 10px;
    }

    h5.title {
        padding: 14px;
        font-size: 25px;
    }

    ul.nav.nav-tabs {
        -webkit-box-shadow: 0 2px 0px rgba(0, 0, 0, 0.1);
    }

    .gal-box img.img-fluid {
        height: 150px;
        width: 205px;
    }


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
