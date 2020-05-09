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
                                <li class="breadcrumb-item"><a href="javascript: void(0);"><b>Quản trị viên</b></a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Thêm mới</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Cập nhật quản trị viên</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Cập nhật user</h5>

                        <div class="form-group mb-3">
                            <label for="user-name">Username <span class="text-danger">*</span></label>
                            <input type="text" id="user-name" class="form-control" placeholder="Tên đăng nhập"
                                   :class="{ 'form-group--error': $v.systemUser.username.$error }"
                                   v-model="systemUser.username">
                        </div>

                        <div class="form-group mb-3">
                            <label for="user-email">Email <span class="text-danger">*</span></label>
                            <input type="email" id="user-email" class="form-control" placeholder="example@gen.vn"
                                   :class="{ 'form-group--error': $v.systemUser.email.$error }"
                                   v-model="systemUser.email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="user-phone">Số điện thoại <span class="text-danger">*</span></label>
                            <input type="text" id="user-phone" class="form-control" placeholder="0987654321"
                                   v-model="systemUser.phone_number">
                        </div>

                        <!--<div class="form-group mb-3">-->
                        <!--<label for="user-password">Password <span class="text-danger">*</span></label>-->
                        <!--<input type="password" class="form-control" id="user-password" rows="3"-->
                        <!--placeholder="Enter Password"-->
                        <!--:class="{ 'form-group&#45;&#45;error': $v.systemUser.password.$error }"-->
                        <!--v-model="systemUser.password">-->
                        <!--</div>-->

                        <!--<div class="form-group mb-3">-->
                        <!--<label for="user-confirm-password">Confirm Password <span class="text-danger">*</span></label>-->
                        <!--<input type="password" class="form-control" id="user-confirm-password" rows="3"-->
                        <!--placeholder="Confirm Password"-->
                        <!--:class="{ 'form-group&#45;&#45;error': $v.systemUser.passwordRetype.$error || passwordMatched !== true }"-->
                        <!--v-model="systemUser.passwordRetype">-->
                        <!--</div>-->

                        <div class="form-group mb-3">
                            <label for="user-role">Phân quyền <span class="text-danger">*</span></label>
                            <select class="form-control select2" id="user-role">
                                <optgroup label="Nhóm quyền">
                                    <option value="role1" autofocus="autofocus">Quản trị</option>
                                    <option value="role2">Duyệt</option>
                                    <option value="role3">Thêm, sửa, xóa</option>
                                    <option value="role4">Chỉ xem</option>
                                </optgroup>
                            </select>
                        </div>

                    </div> <!-- end card-box -->
                </div> <!-- end col -->

                <div class="col-lg-6">
                    <div class="card-box">
                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Thông tin cá nhân</h5>

                        <div class="form-group mb-3">
                            <label for="user-first-name">Họ: </label>
                            <input type="text" class="form-control" id="user-first-name" placeholder="First Name"
                                   v-model="systemUser.first_name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="user-last-name">Tên: </label>
                            <input type="text" class="form-control" id="user-last-name" placeholder="Last Name"
                                   v-model="systemUser.last_name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="user-gender">Giới tính: </label>
                            <div id="user-gender">
                                <input type="radio" name="gender" id="user-gender-male" @change="setGender"
                                       :checked="systemUser.gender=='male'" value="male"><span>&nbsp;Nam&nbsp;</span>
                                <input type="radio" name="gender" id="user-gender-female" @change="setGender"
                                       :checked="systemUser.gender=='female'" value="female"><span>&nbsp;Nữ</span>
                                <input type="radio" name="gender" id="user-gender-other" @change="setGender"
                                       :checked="systemUser.gender==null||systemUser.gender=='other'" value="other"><span>&nbsp;Khác</span>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="user-birth-date">Ngày tháng năm sinh: </label>
                            <input class="form-control" id="user-birth-date" type="date" name="user-birth-date"
                                   v-model="systemUser.date_of_birth">
                        </div>

                        <div>
                            <a href="#" class="fa fa-facebook-official"></a>
                        </div>

                    </div> <!-- end card-box -->

                    <div class="card-box">
                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Ảnh đại diện</h5>

                        <form enctype="multipart/form-data" action="/" method="post" class="dropzone" id="myAwesomeDropzone">
                            <div class="container">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg"/>
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                             style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div> <!-- end col-->

                </div> <!-- end col-->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-3">
                        <button type="button" class="btn w-sm btn-success waves-effect waves-light"
                                @click.prevent="save">Lưu</button>
                        <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Xóa</button>
                        <button type="button" class="btn w-sm btn-light waves-effect">Hủy</button>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
            <!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->

        </form>
    </div>
</template>
<script>
    import SystemUser from '../../../models/system_user';

    import Vue from 'vue'
    import Vuelidate from 'vuelidate';
    Vue.use(Vuelidate);
    import { required, minLength, between } from 'vuelidate/lib/validators'

    export default {
        name: 'SystemUserUpdate',
        props: {
            id: {
                type: Number,
                default: 0
            }
        },
        data () {
            return {
                isBusy: false,
                systemUser: new SystemUser()
            }
        },
        methods: {
            checkPasswordRetype() {
                if (this.systemUser.password != this.systemUser.passwordRetype) {
                    this.$v.systemUser.passwordRetype.$error = true;
                }
            },
            setGender(event) {
                this.systemUser.gender = event.target.value;
            },
            /**
             * Add new system user
             */
            async save(event){
                this.$v.systemUser.$touch();
                if (this.$v.$invalid) {
                    return;
                }

                this.systemUser.full_name = `${this.systemUser.first_name} ${this.systemUser.last_name}`;
                if(!this.isBusy)
                {
                    try {
                        let response = await this.systemUser.update();
                        this.$helper.messageSuccess(response.message);
                    } catch (e) {
                        this.$helper.messageError(e);
                    }
                }
            },
        },
        computed: {
            fullName: function () {
                return this.systemUser.first_name+ ' '+this.systemUser.last_name;
            }
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
            this.systemUser.load({
                id: this.id
            });
        },
        mounted: function () {
            let self = this;

            this.$nextTick(function () {
                // Code that will run only after the
                // entire view has been rendered

            })
        },
        validations: {
            systemUser: {
                username: {
                    required,
                    minLength: minLength(4)
                },
                email: {
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
