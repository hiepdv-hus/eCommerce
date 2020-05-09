<template>
    <div>
        <div class="row">
            <div class="col-md-9">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title">Thông tin chung</h4>

                    <form role="form">
                        <div class="form-group">
                            <label for="articleTitle">Tiêu đề bài viết</label>
                            <input type="text" class="form-control" id="articleTitle"
                                   aria-describedby="titleHelp"
                                   placeholder="Title" v-model="article.title">
                        </div>
                        <div class="form-group">
                            <label for="articleDescription">Mô tả</label>
                            <textarea rows="4" class="form-control" id="articleDescription" v-model="article.description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="articleDetail">Chi tiết</label>
                            <textarea rows="5" class="form-control" id="articleDetail" :value="article.detail"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end col -->

            <div class="col-md-3">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-20 header-title">Xuất bản</h4>
                    <div class="form-group mb-1">
                        <div class="checkbox">
                            <input id="is-published1" type="radio" v-model="article.isPublished" value="1">
                            <label for="is-published1">
                                Hoạt động
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-1">
                        <div class="checkbox">
                            <input id="is-published0" type="radio" v-model="article.isPublished" value="0">
                            <label for="is-published0">
                                Chưa hoạt động
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title">Lịch đăng</h4>
                </div>
                <div class="card-box">
                    <h4 class="m-t-0 m-b-20 header-title">Danh mục</h4>
                    <div v-for="category in categories" class="form-group mb-1">
                        <div class="checkbox">
                            <input :id="'category-' + category.id" type="checkbox" :value="category.id" v-model="article.categories.selected">
                            <label :for="'category-' + category.id">
                                {{category.name}}
                            </label>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p>
                            <a href="javascript:void(0)" @click="addCategory($event)" style="text-decoration: underline; color: rgb(51, 51, 51);">
                                <i class="md md-add"></i>Quản lý danh mục
                            </a>
                        </p>
                    </div>
                </div>
                <div class="card-box">
                    <h4 class="m-t-0 m-b-20 header-title">Ảnh đại diện</h4>
                    <div class="form-group mb-1">
                        <fieldset>
                            <section>
                                <div class="text-align-center">
                                    <img id="featured-image" :src="article.featuredImage.getThumbnail(768)" @click="setFeaturedImage($event)" style="max-width: 100%">
                                </div>
                                <div class="text-center mt-4">
                                    <p>
                                        <a href="javascript:void(0)" @click="removeFeaturedImage($event)" v-show="article.mediaId > 0" style="text-decoration: underline; color: rgb(51, 51, 51);">
                                            <i class="fa fa-fw fa-times"></i>Xóa ảnh
                                        </a>
                                    </p>
                                </div>
                            </section>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        <loading />
    </div>
</template>
<script>
    import Article from '../../../models/article';
    import Category from '../../../models/category';
    import Collection from '../../../libs/collection';

    export default {
        name: 'ArticleEdit',
        props: ['id'],
        data () {
            return {
                modalWidth: window.innerWidth * 0.9,
                timeoutSet: null,
                isBusy: false,
                article: new Article(),
                categories: new Collection(Category)
            }
        },
        methods: {
            async load(){
                this.isBusy = true;
                await this.article.loadById(this.id).then(response => {console.log(response)}).catch(error => {
                    this.isBusy = false;
                    this.$helper.messageError("Lỗi tải thông tin sản phẩm.");
                });

                this.article.categories.selected = this.article.categories.pluck('id');
                this.isBusy = false;
            },
            /**
             * Add new product
             */
            save () {
                if(!this.isBusy)
                {
                    this.isBusy = true;

                    // Update elements which has been controlled by CKEditor
                    if (typeof CKEDITOR !== "undefined") {
                        for (let instance in CKEDITOR.instances) {
                            CKEDITOR.instances[instance].updateElement();
                        }
                    }

                    this.article.update()
                        .then((response) => {
                            if(response.success === 1)
                            {
                                this.$helper.messageSuccess(response.message);
                                // setTimeout(() => {
                                //     window.location.reload();
                                // }, 2e3);
                            }
                            else{
                                this.$helper.messageError(response.message);
                            }

                            this.isBusy = false;
                        }).catch(error => {
                            this.$helper.handleRequestError(this, error);
                        });
                }
            },
            loadCategories(){
                this.isBusy = true;
                this.$api.articleCategoryListAll().then(response => {
                    this.isBusy = false;
                    if(response.data.success === 1){
                        this.categories.addRange(response.data.data);
                    }
                }).catch(error => {
                    this.isBusy = false;
                });
            },
            addCategory(){

            },
            setFeaturedImage(event){
                let self = this;
                F.Media.inbox().set({
                    bootstrap: function (items)
                    {
                        let item = items.pop();
                        self.article.mediaId = item.id;
                        self.article.featuredImage.url = item.getThumbnail(768);
                    }
                }).open();
            },
            removeFeaturedImage(event){
                this.article.mediaId = 0;
                this.article.featuredImage.setDefaultUrl();
            },
            setImages(){
                let self = this;
                F.Media.inbox().set({
                    bootstrap: function (items)
                    {
                        items.forEach(item => {
                            if(!self.article.images.findById(item.id)){
                                self.article.images.add(item);
                            }
                        });
                    }
                }).open();
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
        mounted: function () {
            let self = this;

            this.$nextTick(function () {
                // Init ckeditor
                CKEDITOR.replace(
                    'articleDetail',
                    {
                        height: 420,
                        uiColor: '#eeeeee'
                    }
                );

                this.load();
            })
        },
    }
</script>
<style>

</style>
