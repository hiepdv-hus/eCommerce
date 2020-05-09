<template>
    <div>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"><b>Sự kiện</b></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Danh sách</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Sự kiện</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href="/gen-admin/news/add"
                                   class="btn btn-danger waves-effect waves-light"
                                   data-animation="fadein" data-plugin="custommodal"
                                   data-overlaycolor="#38414a">
                                    <i class="mdi mdi-plus-circle mr-1"></i>
                                    Thêm mới
                                </a>
                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-right">
                                    <button type="button" class="btn btn-success mb-2 mr-1">
                                        <i class="mdi mdi-settings"></i></button>
                                    <button type="button" class="btn btn-light mb-2 mr-1">Import</button>
                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-striped" id="products-datatable">
                                <thead>
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Detail</th>
                                    <th>Media_Id</th>
                                    <th>Category</th>
                                    <th style="width: 85px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="item in news">
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td class="table-user">
                                        <a v-bind:href="'/gen-admin/news/detail/' + item.id"
                                           class="text-body font-weight-semibold">
                                            <b>{{item.title}}</b>
                                        </a>
                                    </td>
                                    <td>
                                        {{item.slug}}
                                    </td>
                                    <td>
                                        {{item.description}}
                                    </td>
                                    <td>
                                        {{item.detail}}
                                    </td>
                                    <td class="table-user">
                                        <img v-bind:src="item.media_id"
                                             alt="table-user" class="mr-2 rounded-circle">
                                    </td>
                                    <td>
                                        {{item.category_id}}
                                    </td>

                                    <td>
                                        <a v-bind:href="'/gen-admin/news/edit/' + item.id" class="action-icon">
                                            <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a @click="myFunction($event, item)"
                                           class="action-icon">
                                            <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <ul class="pagination pagination-rounded justify-content-end mb-0">
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
    </div>
</template>
<script type="text/javascript">
    import News from '../../../models/news';
    import Collection from '../../../libs/collection';

    export default {
        name: 'newsList',
        props: [],
        data() {
            return {
                news: new Collection(News)
            };
        },
        created() {
            let _news = new News();
            _news.loadCollection().then(collection => {
                this.news.addRange(collection);
            });
        },
        mounted() {
        },
        methods: {
            myFunction(event, _news) {
                event.preventDefault();
                let result = confirm('Bạn có chắc chắn muốn xóa không ?');

                if (result == true){
                    let self = this;
                    try {
                        _news.delete().then(response => {
                            if (response.isSuccess()) {
                                this.$helper.messageSuccess(response.message);
                                setTimeout(function(){
                                    self.$helper.redirect('news/list');
                                }, 500);
                            }
                            else {
                                this.$helper.messageError(response.message);
                            }
                        });
                    } catch (e) {
                        this.$helper.messageError(e);
                    }
                }
            }
        },
        watch: {

        },
        computed: {

        }
    }

</script>
