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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Chỉnh sửa</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Chỉnh sửa thông tin</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Sửa mới</h5>

                        <div class="form-group mb-3">
                            <label for="user-name">Tên khách hàng <span class="text-danger">*</span></label>
                            <input type="text" id="user-name" class="form-control" placeholder="Tên đăng nhập"
                                   :class="{ 'form-group--error': $v.customer.full_name.$error }"
                                   v-model="customer.full_name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="user-birth-date">Ngày tháng năm sinh: </label>
                            <input class="form-control" id="user-birth-date" type="date" name="user-birth-date"
                                   v-model="customer.date_of_birth">
                        </div>

                        <div class="form-group mb-3">
                            <label for="user-gender">Giới tính: </label>
                            <div id="user-gender">
                                <input type="radio" name="gender" id="user-gender-male" @change="setGender"
                                       :checked="customer.gender==='male'" value="male"><span>&nbsp;Nam&nbsp;</span>
                                <input type="radio" name="gender" id="user-gender-female" @change="setGender"
                                       :checked="customer.gender==='female'" value="female"><span>&nbsp;Nữ</span>
                                <input type="radio" name="gender" id="user-gender-other" @change="setGender"
                                       :checked="customer.gender==null||customer.gender==='other'" value="other">
                                <span>&nbsp;Khác</span>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="user-phone">Số điện thoại <span class="text-danger">*</span></label>
                            <input type="text" id="user-phone" class="form-control" placeholder="0987654321"
                                   v-model="customer.phone_number">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="email" rows="3"
                                   placeholder="Enter Password"
                                   :class="{ 'form-group--error': $v.customer.email.$error }"
                                   v-model="customer.email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="facebook">Facebook <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="facebook" rows="3"
                                   placeholder="Enter Password"
                                   :class="{ 'form-group--error': $v.customer.facebook_id.$error }"
                                   v-model="customer.facebook_id">
                        </div>

                        <div class="form-group mb-3">
                            <label for="zalo">Zalo <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="zalo" rows="3"
                                   placeholder="Confirm Password"
                                   :class="{ 'form-group--error': $v.customer.zalo_id.$error}"
                                   v-model="customer.zalo_id">
                        </div>

                        <div class="form-group mb-3">
                            <label for="rank">Hạng khách hàng <span class="text-danger">*</span></label>
                            <input type="text" id="rank" class="form-control" placeholder="example@gen.vn"
                                   :class="{ 'form-group--error': $v.customer.rank_id.$error }"
                                   v-model="customer.rank_id">
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Địa chỉ nhà <span class="text-danger">*</span></label>
                            <input type="text" id="address" class="form-control" placeholder="example@gen.vn"
                                   :class="{ 'form-group--error': $v.customer.address.$error }"
                                   v-model="customer.address">
                        </div>

                        <div class="form-group mb-3">
                            <label for="company-address">Địa chỉ công ty <span class="text-danger">*</span></label>
                            <input type="text" id="company-address" class="form-control" placeholder="example@gen.vn"
                                   :class="{ 'form-group--error': $v.customer.company_address.$error }"
                                   v-model="customer.company_address">
                        </div>

                    </div>
            </div>

                <div class="col-lg-6">
                    <div class="card-box">
                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Ảnh đại diện</h5>

                        <div class="container">
                            <img v-bind:src="customer.avatar" style="max-width: 100%" v-if="customer.avatar != null">
                            <modal name="mediaModal"
                                   :width="914"
                                   :height="565"
                                   @before-open="beforeOpen"
                                   @before-close="beforeClose">

                                <div class="row">
                                    <h5 class="title">Chọn ảnh hồ sơ</h5>
                                    <a @click.prevent="hide" class="iconx" style="padding: 35px 0 0 40rem;">
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
                                                <vue-dropzone type="file" id="inputFile" class="dropify text-center"
                                                              name="avatar" data-height="500"
                                                              v-on:vdropzone-files-added="GetImage"
                                                              :options="dropzoneOptions"
                                                              :src="avatarBase64">
                                                </vue-dropzone>
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

                                <div class="Re-nk-tk-ze">
                                    <div class="">
                                        <button class="btn btn-blue">Đặt làm ảnh đại <diện></diện></button>
                                        <button class="btn btn-danger" @click.prevent="hide">Đóng</button>
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
                        <a href="/gen-admin/customer/list" type="submit" class="btn w-sm btn-light waves-effect">Hủy</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>
<script>
    import Customer from '../../../models/customer';

    import Vue from 'vue'
    import Vuelidate from 'vuelidate';
    Vue.use(Vuelidate);
    import { required, minLength, between } from 'vuelidate/lib/validators';
    import vue2Dropzone from "vue2-dropzone";
    import 'vue2-dropzone/dist/vue2Dropzone.min.css';
    import Collection from "../../../libs/collection";
    import Media from "../../../models/media";

    export default {
        name: 'CustomerEdit',
        components: {
            vueDropzone: vue2Dropzone
        },
        props: {
            id: {
                type: Number,
                default: 0
            }
        },
        data () {
            return {
                isBusy: false,
                customer: new Customer(),
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
                },
                time: 0,
                avatarBase64 : null,
                avatar: null,
                duration: 5000,
                medias: new Collection(Media),
                file: null,
                loadMore: true,
            }
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
            GetImage(e){
                let image = e[0];
                let data = new FormData();
                this.avatar = image;
                data.append('image', image);
                let reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = (e) => {
                    this.avatarBase64 = e.target.result;
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
            setAvatar(media){
                this.customer.avatar = media.url;
                this.hide();
            },
            setGender(event) {
                this.customer.gender = event.target.value;
            },
            /**
             * Add new system user
             */
            async save(event){
                this.$v.customer.$touch();
                if (this.$v.$invalid) {
                    return;
                }
                if(!this.isBusy)
                {
                    try {
                        let response = await this.customer.update();
                        this.$helper.messageSuccess(response.message);

                        let seft = this;
                        setTimeout(function () {
                            seft.$helper.redirect('customer/list')
                        }, 1000);
                    } catch (e) {
                        this.$helper.messageError(e);
                    }
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
        created: function(){
            // Load customer
            if (this.id > 0) {
                this.customer.loadById(this.id);
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
            customer: {
                full_name: {
                    required
                },
                email: {
                    required
                },
                date_of_birth:{
                    required
                },
                address:{
                  required
                },
                company_address: {
                    required
                },
                facebook_id: {
                    required
                },
                zalo_id: {
                    required
                },
                rank_id: {
                    required
                },
                phone_number: {
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
