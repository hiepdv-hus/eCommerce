<template>
    <div>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"><b>Category</b></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">List News</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Category</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href=""
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
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>Meta_Data</th>
                                    <th>Parent_Id</th>
                                    <th style="width: 85px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="category in categorys">
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td class="table-user">
                                        {{category.name}}
                                    </td>
                                    <td>
                                        {{category.slug}}
                                    </td>
                                    <td>
                                        {{category.description}}
                                    </td>
                                    <td>
                                        {{category.type}}
                                    </td>
                                    <td>
                                        {{category.meta_data}}
                                    </td>
                                    <td>
                                        {{category.parent_id}}
                                    </td>

                                    <td>
                                        <a class="action-icon">
                                            <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a @click="myFunction($event, category)"
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
    import Category from '../../../models/category';
    import Collection from '../../../libs/collection';

    export default {
        name: 'category',
        props: [],
        data() {
            return {
                categorys: new Collection(Category)
            };
        },
        created() {
            let category = new Category();
            category.loadCollection().then(collection => {
                this.categorys.addRange(collection);
            });
        },
        mounted() {

        },
        methods: {
            myFunction(event, category) {
                event.preventDefault();
                let result = confirm('Bạn có chắc chắn muốn xóa không ?');

                if (result == true){
                    let self = this;
                    try {
                        category.delete().then(response => {
                            if (response.isSuccess()) {
                                this.$helper.messageSuccess(response.message);
                                // setTimeout(function(){
                                //     self.$helper.redirect('news/list');
                                // }, 500);
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
