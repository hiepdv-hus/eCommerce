<template>
    <div>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"><b>Quản trị viên</b></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Danh sách</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Danh sách Users</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a :href="$helper.url('system-user/add')"
                                   class="btn btn-danger waves-effect waves-light"
                                   data-animation="fadein" data-plugin="custommodal"
                                   data-overlaycolor="#38414a">
                                    <i class="mdi mdi-plus-circle mr-1"></i>
                                    Thêm User
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
                                    <th>User</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Sinh nhật</th>
                                    <th>Ngày tạo</th>
                                    <th>Status</th>
                                    <th style="width: 85px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="systemUser in systemUsers">
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td class="table-user">
                                        <img v-bind:src="systemUser.avatar"
                                             alt="table-user" class="mr-2 rounded-circle">
                                        <a class="text-body font-weight-semibold">
                                            {{systemUser.username}}
                                        </a>
                                    </td>
                                    <td>
                                        {{systemUser.phone_number}}
                                    </td>
                                    <td>
                                        {{systemUser.email}}
                                    </td>
                                    <td>
                                        {{systemUser.date_of_birth}}
                                    </td>
                                    <td>
                                        {{systemUser.created_time}}
                                        07/07/2018
                                    </td>
                                    <td>
                                        <span class="badge bg-soft-success text-success shadow-none">Active</span>
                                    </td>

                                    <td>
                                        <a :href="$helper.url('system-user/edit/' + systemUser.id)" class="action-icon">
                                            <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a @click="myFunction($event, systemUser)"
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
    import SystemUser from '../../../models/system_user';
    import Collection from '../../../libs/collection';

    export default {
        name: 'SystemUserList',
        props: [],
        data() {
            return {
                systemUsers: new Collection(SystemUser)
            };
        },
        created() {
            let systemUser = new SystemUser();
            systemUser.loadCollection().then(collection => {
                this.systemUsers.addRange(collection);
            });
        },
        mounted() {
        },
        methods: {
            myFunction(event, systemUsers) {
                event.preventDefault();
                let result = confirm('Bạn có chắc chắn muốn xóa không ?');

                if (result == true){
                    let self = this;
                    try {
                        systemUsers.delete().then(response => {
                            if (response.isSuccess()) {
                                this.$helper.messageSuccess(response.message);
                                setTimeout(function(){
                                    self.$helper.redirect('system-user/list');
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
