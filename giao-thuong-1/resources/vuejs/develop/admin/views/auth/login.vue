<template>
    <div>
        <!--<div class="logo-wrap">-->
            <!--<img src="" alt="" title="" srcset="/cms/images/logo.png">-->
        <!--</div>-->
        <div class="card-box" style="background: none">
            <div class="p-20">
                <form id="form-login" class="form-horizontal m-t-20" method="post">
                    <div class="form-group-custom">
                        <input type="text" id="user-name" name="username" required="required" v-model="username" autocomplete="off" />
                        <label class="control-label" for="user-name">Email</label><i class="bar"></i>
                    </div>

                    <div class="form-group-custom">
                        <input type="password" id="user-password" name="password" required="required" v-model="password" />
                        <label class="control-label" for="user-password">Password</label><i class="bar"></i>
                    </div>

                    <!--<div class="form-group ">-->
                        <!--<div class="col-12">-->
                            <!--<div class="checkbox checkbox-primary">-->
                                <!--<input id="checkbox-remember-password" type="checkbox" name="remember" disabled="disabled" v-model="this.remember">-->
                                <!--<label for="checkbox-remember-password" class="text-dark">-->
                                    <!--Ghi nhớ mật khẩu-->
                                <!--</label>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->

                    <div class="form-group text-center m-t-40">
                        <div class="col-12">
                            <button class="btn btn-success btn-block text-uppercase waves-effect waves-light"
                                    type="submit" @click.prevent="login" :disabled="isBusy">
                                <span v-show="!isBusy">Đăng nhập</span>
                                <span><i class="fa fa-spinner fa-spin fa-lg" v-show="isBusy"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class="form-group m-t-30 m-b-0">
                        <div class="col-12">
                            <a href="#" class="text-dark">
                                <i class="fa fa-lock m-r-5"></i>
                                Quên mật khẩu?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                isBusy: false,
                username: 'dev@gen.vn',
                password: '111111',
                remember: false
            };
        },
        methods: {
            login: function (event) {
                !event || event.preventDefault();
                if(!this.isBusy)
                {
                    this.isBusy = true;

                    this.$api.login({username: this.username, password: this.password, remember: this.remember})
                        .then(response => {
                        if (response.success == 1) {
                            this.$helper.redirect();
                        }
                        else {
                            this.isBusy = false;
                            this.$helper.messageError(response.message);
                        }
                    }).catch(err => this.isBusy = false);
                }
            }
        },
        mounted() {

        }
    }
</script>
