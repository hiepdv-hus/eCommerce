<template>
    <div>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"><b>NEWS</b></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Detail</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">DETAIL</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="tab-content pt-0">
                                <img v-bind:src="news.media_id"
                                     alt="" class="img-fluid mx-auto d-block rounded">
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="pl-xl-3 mt-3 mt-xl-0">
                                <h5 class="mb-3">
                                    <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                    Title:
                                    <span class="mb-4">
                                        {{news.title}}</span>
                                </h5>
                                <h5 class="mb-3">
                                    <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                    Slug:
                                    <span class="mb-4">
                                        {{news.slug}}</span>
                                </h5>
                                <h5 class="mb-3">
                                    <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                    Description: <span class="mb-4">
                                        {{news.description}}</span>
                                </h5>
                                <h5 class="mb-3">
                                    <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                    Detail:
                                    <span class="mb-4">
                                        {{news.detail}}</span>
                                </h5>
                                <h5 class="mb-3">
                                    <i class="mdi mdi-checkbox-marked-circle-outline h6 text-primary mr-2"></i>
                                    Category_id:
                                    <span class="mb-4">
                                        {{news.category_name}}</span>
                                </h5>
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
    import News from '../../../models/news';
    import Category from '../../../models/category';
    import Vue from 'vue'
    import Vuelidate from 'vuelidate';
    import Collection from "../../../libs/collection";
    Vue.use(Vuelidate);

    export  default {
        name: 'NewsDetail',
        props: {
            id: {
                type: Number,
                default: 0
            }
        },
        data () {
            return {
                isBusy: false,
                news: new News()
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
            if (this.id > 0) {
                this.news.loadById(this.id);
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
