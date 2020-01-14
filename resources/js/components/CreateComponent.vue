<template>
  <div>
    <h1>Create A Event</h1>
    <form @submit.prevent="addEvent">
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
          <button class="btn btn-primary">Create</button>
        </div>
    </form>
  </div>
</template>

<script>
    export default {
        data(){
        return {
          event:{}
        }
    },
    methods: {
      addEvent(){
          let uri = 'http://127.0.0.1:8000/api/event/create';
          this.axios.post(uri, this.event).then((response) => {
            this.$router.push({name: 'events'});
          });
      }
    }
  }
</script>