<template>
    <div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="custom-search">
                        <div class="row m-t-10 m-b-10">
                            <div class="col-sm-4" style="max-width: 400px;">
                                <form role="form">
                                    <div class="form-group contact-search m-b-30 input-group">
                                        <input type="text" id="search"
                                               class="form-control"
                                               placeholder="Tìm kiếm theo tiêu đề."
                                               v-model="params.querySearch"
                                               @keyup="search()">
                                        <div class="input-group-append">
                                            <span class="input-group-text btn-grey"><i class="fa fa-search"></i></span>
                                        </div>
                                    </div>
                                    <!-- form-group -->
                                </form>
                            </div>
                            <div class="col-sm-6 col-lg-4">

                            </div>
                        </div>
                    </div>
                    <b-table hover bordered
                             :busy.sync="isBusy"
                             :items="articles"
                             :fields="fields">
                        <template slot="featuredImage" slot-scope="data">
                            <img :src="data.item.featuredImage.getThumbnail(300)" width="120" />
                        </template>
                        <template slot="title" slot-scope="data">
                            <span>{{data.item.title}}</span>
                        </template>
                        <template slot="category" slot-scope="data">
                            <ul>
                                <li v-for="category in data.item.categories">
                                    {{category.name}}
                                </li>
                            </ul>
                        </template>
                        <template slot="modifiedTime" slot-scope="data">
                            {{data.item.lastModifiedTime()}}
                        </template>
                        <template slot="id" slot-scope="data">
                            <div class="row-actions">
                                <button type="button" class="btn btn-sm" @click="edit(data.item)">
                                    <i class="fa fa-fw fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-sm" @click="delete(data.item)">
                                    <i class="fa fa-fw fa-trash-o"></i>
                                </button>
                            </div>
                        </template>
                    </b-table>
                    <b-pagination align="right"
                                  size="sm"
                                  v-show="articles.recordsTotal"
                                  v-model="params.filter.currentPage"
                                  :total-rows="articles.recordsTotal"
                                  :per-page="params.filter.take"
                                  @change="list"></b-pagination>
                </div>
            </div>
        </div>

        <!-- Dialog -->
        <v-dialog />
        <!-- Loading -->
        <loading />
    </div>
</template>

<script>
    import Article from '../../../models/article';
    import Collection from '../../../libs/collection';
    import Params from '../../../libs/params';

    export default {
        data () {
            return {
                isBusy: false,
                fields: [
                    {
                        key: 'featuredImage',
                        label: 'Ảnh đại diện',
                        sortable: false
                    },
                    {
                        key: 'title',
                        label: 'Tiêu đề'
                    },
                    {
                        key: 'category',
                        label: 'Danh mục'
                    },
                    {
                        key: 'status',
                        label: 'T.Thái'
                    },
                    {
                        key: 'modifiedTime',
                        label: 'Cập nhật'
                    },
                    {
                        key: 'id',
                        label: ''
                    }
                ],
                articles: new Collection(Article),
                params: new Params()
            }
        },
        methods: {
            list (page) {
                // Here we don't set isBusy prop, so busy state will be handled by table itself
                this.isBusy = true;
                let currentPage = (page||1);
                this.params.skip = (currentPage - 1) * this.params.filter.take;

                let promise = this.$api.articleList(this.params);

                return promise.then((response) => {
                    // Here we could override the busy state, setting isBusy to false
                    this.isBusy = false;
                    if(response.data.success)
                    {
                        this.articles.clear()
                            .addRange(response.data.data.list)
                            .setRecordsTotal(response.data.recordsTotal);
                    }
                }).catch(error => {
                    this.$helper.handleRequestError(this, error);
                })
            },
            filter (event, type, value) {
                event.preventDefault();
                this.params.set(type, value);
                this.params.filter.currentPage = 1;
                this.list();
            },
            edit (item) {
                this.$helper.startLoading(this);
                this.$helper.redirectAdmin('article/edit/'+item.id);
            },
            delete(item)
            {

            },
            /**
             * Search product
             */
            search (){
                let self = this;

                this.$helper.timeoutWaitChange(function(){
                    self.params.filter.currentPage = 1;
                    self.list();
                });
            },
            reset: function () {
                this.params = new Params();
                this.list(1);
            }
        },
        mounted: function () {
            let self = this;

            this.$nextTick(function () {
                // Code that will run only after the
                // entire view has been rendered
                self.list(1);
            })
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
        }
    }
</script>
