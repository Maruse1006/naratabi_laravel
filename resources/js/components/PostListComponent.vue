

 <tr>
     <th scope="row">1</th>
     <td>Title1</td>
     <td>Content1</td>
     <td>Ichiro</td>
     <td>
         <button class="btn btn primary">Show</button>
     </td>
     <td>
         <button class="btn btn success">Edit</button>
      </td>
      <td>
          <button class="btn btn danger">Delete</button>
      </td>
  </tr>
  <tr>
      <th scope="row">2</th>
      <td>Title2</td>
      <td>Content2</td>
      <td>Jiro</td>
      <td>
          <button class="btn btn primary">Show</button>
      </td>
   <td>
          <button class="btn btn success">Edit</button>
      </td>
      <td>
          <button class="btn btn danger">Delete</button>
      </td>
  </tr>
  <tr>
      <th scope="row">3</th>
      <td>Title3</td>
      <td>Content3</td>
      <td>Saburo</td>
      <td>
          <button class="btn btn primary">Show</button>
      </td>
      <td>
          <button class="btn btn success">Edit</button>
      </td>
      <td>
          <button class="btn btn danger">Delete</button>
      </td>
  </tr>


  <tr v for="task in tasks">
      <th scope="row">{{ task.id }}</th>
      <td>{{ task.title }}</td>
      <td>{{ task.content }}</td>
      <td>{{ task.person_in_charge }}</td>
      <td>
          <router link v bind:to="{name: 'task.show', params: {taskId: task.id }}">
              <button class="btn btn primary">Show</button>
          </router link>
      </td>
      <td>
          <router link v bind:to="{name: 'task.edit', params: {taskId: task.id }}">
              <button class="btn btn success">Edit</button>
          </router link>
      </td>
      <td>
          <button class="btn btn danger">Delete</button>
      </td>
  </tr>

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
