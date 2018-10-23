<style>
.widget-user-header{
    background-position: center center;
    background-size: cover;
}
</style>


<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-3">
                <div class="card card-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header text-white" style="background: url('./img/profilebg.jpg')">
                        <div class="widget-user-header">
                            <div class="widget-user-image">
                            <img class="img-circle elevation-2" :src="getProfilePhoto()" alt="User Avatar">
                            </div>
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">{{this.form.name}}</h3>
                            <h5 class="widget-user-desc">{{this.form.type}}</h5>
                        </div>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            Total Matches Played <span class="float-right badge bg-primary">30</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            Consecutive Wins <span class="float-right badge bg-danger">5</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            Number of matches won <span class="float-right badge bg-info">25</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            Number of matches lost <span class="float-right badge bg-success">5</span>
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                 form: new Form({
                    id:'',
                    name : '',
                    email: '',
                    password: '',
                    type: '',
                    bio: '',
                    photo: ''
                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            getProfilePhoto(){
                let photo = (this.form.photo.length > 200) ? this.form.photo : "./img/profile/"+ this.form.photo ;
                return photo;
            }
        },
        created() {
            axios.get("api/profile")
            .then(({ data }) => (this.form.fill(data)));
        }

    }
</script>
