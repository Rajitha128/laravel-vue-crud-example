<template>
  <div>
      <h1>Events</h1>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <router-link :to="{ name: 'create' }" class="btn btn-primary">Create Event</router-link>
          </div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Item Price</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="event in events" :key="event.id">
                    <td>{{ event.id }}</td>
                    <td>{{ event.title }}</td>
                    <td>{{ event.body }}</td>
                    <td><router-link :to="{name: 'edit', params: { id: event.id }}" class="btn btn-primary">Edit</router-link></td>
                    <td><button class="btn btn-danger" @click.prevent="deleteevent(event.id)">Delete</button></td>
                </tr>
            </tbody>
        </table>
  </div>
</template>

<script>
  export default {
      data() {
        return {
          events: []
        }
      },
      created() {
      let uri = 'http://127.0.0.1:8000/api/events';
      this.axios.get(uri).then(response => {
        this.events = response.data.data;
      });
    },
    methods: {
      deleteevent(id)
      {
        let uri = `http://127.0.0.1:8000/api/event/delete/${id}`;
        this.axios.delete(uri).then(response => {
          this.events.splice(this.events.indexOf(id), 1);
        });
      }
    }
  }
</script>