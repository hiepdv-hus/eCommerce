<template>
    <div>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"><b>Thư viện Media</b></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Kho ảnh</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Thư viện Media</h4>
                </div>
            </div>
        </div>

        <div id="loadmore-btn" class="col col-sm-12 text-center mt-3">
            <input type="file" name="avatar" @change="GetImage"/>
            <img type="image" :src="avatarBase64">

            <button type="submit" class="btn w-sm btn-success waves-effect waves-light" @click.prevent="upload">
                Upload</button>
        </div>

        <div class="row">
            <div class="col-sm-6 col-xl-3 col-6 filter-item all web illustrator" v-for="media in medias">
                <div class="gal-box">
                    <a v-bind:href="media.url" class="image-popup" title="Screenshot-1">
                        <img v-bind:src="media.url" class="img-fluid" alt="work-thumbnail">
                    </a>
                    <div class="gall-info">
                        <h4 class="font-16 mt-0">{{media.name}}</h4>
                        <a href="javascript: void(0);">
                            <span class="text-muted ml-1">Diamond</span>
                        </a>
                        <a class="action-icon">
                            <i class="mdi mdi-delete"/></a>
                        <a href="javascript: void(0);" class="gal-like-btn">
                            <i class="mdi mdi-heart-outline text-danger"/></a>
                    </div> <!-- gallery info -->
                </div> <!-- end gal-box -->
            </div>
        </div>

        <div class="col-12 text-center" v-show="loadMore">
            <button class="btn btn-danger" @click="myFunction">
                Xem thêm
            </button>
        </div>
    </div>
</template>
<script>
    import Media from '../../../models/media';
    import Collection from '../../../libs/collection';

    export default {
        name: 'mediaList',
        props: [],
        data () {
            return {
                medias: new Collection(Media),
                avatarBase64 : null,
                file: null,
                loadMore: true
            }
        },
        created() {
            let media = new Media();
            media.loadCollection({
                skip: this.medias.length
            }).then(collection => {
                this.medias.addRange(collection);
                console.log(this.medias)
            });
        },
        methods: {

            myFunction(){
                let media = new Media();
                media.loadCollection({
                    skip: this.medias.length
                }).then(collection => {
                    this.medias.addRange(collection);
                    this.loadMore = this.medias.length < collection.recordsTotal;
                });
            },

            GetImage(e){
                let image = e.target.files[0];
                let data = new FormData();
                this.file = image;
                data.append('image', image[0]);
                let reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = (e) => {
                    this.avatarBase64 = e.target.result;
                }
            },
            async upload(event){
                let self = this;
                try {
                    let formData = new FormData();
                    let token = document.head.querySelector('meta[name="csrf-token"]').content;
                    formData.append('_token', token);
                    formData.append('file', this.file);

                    $.ajax({
                        url: this.$helper.url('media/upload'),
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: formData,
                        type: 'post',
                        success: function(response){
                            if (response.success === 1) {
                                self.medias.addTop(response.data);
                                self.$helper.messageSuccess('Thêm mới thành công');
                                self.avatarBase64 = null;
                                $('input[type="file"]').val(null);
                            }
                            else {
                                self.$helper.messageSuccess(response.message);
                            }
                        },
                        error: function (err) {
                            this.$helper.messageError('Lỗi kết nối api');
                        }
                    });
                } catch (e) {
                    this.$helper.messageError(e);
                }

            }
        },
        computed: {

        },
        watch: {

        },
        mounted: function () {
            let self = this;

            this.$nextTick(function () {
                // Code that will run only after the
                // entire view has been rendered

            })
        },
        validations: {

        }
    }
</script>
<style>
    .gal-box img.img-fluid {
        height: 150px;
        width: 205px;
    }
    .gal-box .image-popup img {
        cursor: zoom-in;
    }
    div#loadmore-btn img {
        width: 200px;
        display: block;
        margin-left: 24rem;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }
    div#loadmore-btn {
        margin-bottom: 1rem;
    }
</style>
