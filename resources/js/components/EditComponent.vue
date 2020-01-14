<template>
  <div>
    <h1>Edit Event</h1>
    <form @submit.prevent="updateEvent">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Event Title:</label>
            <input type="text" class="form-control" v-model="event.title">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Event Body:</label>
              <textarea class="form-control" v-model="event.body" rows="5"></textarea>
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-primary">Update</button>
        </div>
    </form>
  </div>
</template>

<script>
    export default {

      data() {
        return {
          event: {}
        }
      },
      created() {
        let uri = `http://127.0.0.1:8000/api/event/edit/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.event = response.data;
        });
      },
      methods: {
        updateEvent() {
          let uri = `http://127.0.0.1:8000/api/event/update/${this.$route.params.id}`;
          this.axios.post(uri, this.event).then((response) => {
            this.$router.push({name: 'events'});
          });
        }
      }
    }
</script>