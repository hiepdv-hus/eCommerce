<template>
    <div>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"><b>Khách hàng</b></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Thông tin</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Thông tin cá nhân</h4>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="tab-content pt-0">
                                    <img v-bind:src="customer.avatar"
                                         alt="" class="img-fluid mx-auto d-block rounded">
                                </div>
                            </div>

                            <div class="col-xl-7">
                                <div class="pl-xl-3 mt-3 mt-xl-0">
                                    <h5 class="mb-3">
                                        <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                        Tên khách hàng:
                                        <span class="mb-4">
                                        {{customer.full_name}}</span>
                                    </h5>
                                    <h5 class="mb-3">
                                        <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                        Sinh nhật: <span class="mb-4">
                                        {{customer.date_of_birth}}</span>
                                    </h5>
                                    <h5 class="mb-3">
                                        <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                        Giới tính: <span class="mb-4">
                                        {{customer.gender}}</span>
                                    </h5>
                                    <h5 class="mb-3">
                                        <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                        Di động:
                                        <span class="mb-4">
                                            {{customer.phone_number}}</span>
                                    </h5>
                                    <h5 class="mb-3">
                                        <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                        Facebook:
                                        <span class="mb-4">
                                            {{customer.facebook_id}}</span>
                                    </h5>
                                    <h5 class="mb-3">
                                        <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                        Zalo:
                                        <span class="mb-4">
                                            {{customer.phone_number}}</span>
                                    </h5>
                                    <h5 class="mb-3">
                                        <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                        Email:
                                        <span class="mb-4">
                                            {{customer.email}}</span>
                                    </h5>
                                    <h5 class="mb-3">
                                        <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                        Hạng khách hàng:
                                        <span class="mb-4">
                                            {{customer.rank_id}}</span>
                                    </h5>
                                    <p class="text-muted float-left mr-3">
                                        <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                        <span class="mdi mdi-star text-warning"/>
                                        <span class="mdi mdi-star text-warning"/>
                                        <span class="mdi mdi-star text-warning"/>
                                        <span class="mdi mdi-star text-warning"/>
                                        <span class="mdi mdi-star"/>
                                    </p>
                                    <p class="mb-4">
                                        (Đánh giá khách hàng)</p>
                                    <h5 class="mb-3">
                                        <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                        Địa chỉ nhà:
                                        <span class="mb-4">
                                            {{customer.address}}</span>
                                    </h5>
                                    <h5 class="mb-3">
                                        <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                        Địa chỉ Công ty:
                                        <span class="mb-4">
                                            {{customer.company_address}}</span>
                                    </h5>
                                    <button type="button" class="btn btn-danger mr-2">
                                        <i class="mdi mdi-heart-outline"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="titleproject">
                            <h5>Thông tin dự án</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-centered mb-0">
                                <thead class="thead-light">
                                <tr>
                                    <th>Đường dẫn</th>
                                    <th>Gói</th>
                                    <th>Phiên bản</th>
                                    <th>Trạng thái</th>
                                    <th>Cập nhật</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>16</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>
<script type="text/javascript">
    import Customer from '../../../models/customer';
    import Vue from 'vue'
    import Vuelidate from 'vuelidate';
    Vue.use(Vuelidate);

    export  default {
        name: 'CustomerDetail',
        props: {
            id: {
                type: Number,
                default: 0
            }
        },
        data () {
            return {
                isBusy: false,
                customer: new Customer()
            }
        },
        method: {

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
        created: function() {
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
        }
    }
</script>

<style lang="scss">
    h5.mb-3 {
        font-weight: 400;
    }
    span.mb-4 {
        font-weight: 500;
        padding-left: 10px;
    }
    label.my-1.mr-2 {
        font-weight: 400;
    }
    .titleproject {
        padding-top: 30px;
        padding-bottom: 5px;
    }
</style>
