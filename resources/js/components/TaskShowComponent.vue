<script>
     export default {}
     export default {
         data: function () {
             return {
                 tasks: []
             }
         },
         methods: {
             getTasks() {
                 axios.get('/api/posts')
                     .then((res) => {
                         this.posts = res.data;
                     });
             }
         },
         mounted() {
             this.getPosts();
         }
     }

</script>

<div class="form-group row border-bottom">
    <label for="id" class="col-sm-3 col-form-label">ID</label>
    <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id"
           v-bind:value="taskId">
          v-model="task.id">

</div>

<div class="form-group row border-bottom">
    <label for="title" class="col-sm-3 col-form-label">Title</label>
    <input type="text" class="col-sm-9 form-control-plaintext" readonly id="title"
           value="title title">
           v-model="task.title">

</div>

<div class="form-group row border-bottom">
    <label for="content" class="col-sm-3 col-form-label">Content</label>
    <input type="text" class="col-sm-9 form-control-plaintext" readonly id="content"
           value="content content">
          v-model="task.content">

</div>

<div class="form-group row border-bottom">
    <label for="person-in-charge" class="col-sm-3 col-form-label">Person In Charge</label>
    <input type="text" class="col-sm-9 form-control-plaintext" readonly id="person-in-charge"
           value="Ichiro">
           v-model="task.person_in_charge">

</div>
