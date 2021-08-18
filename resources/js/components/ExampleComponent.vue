<template>
  <div class="row p-5">
    <div class="col-3">
      <h3><b>Pending</b></h3>
      <draggable ghostClass="on-drag" animation="400" class="list-group" :list="pendingTasks" group="people" @change="sortTasks">
        <div
          class="list-group-item"
          v-for="(element, index) in pendingTasks"
          :key="element.index"
        >
          <b> {{ index+1 }}:</b> {{ element.body }}
        </div>
      </draggable>
    </div>

    <div class="col-3">
      <h3><b>Completed</b></h3>
      <draggable ghostClass="on-drag" animation="400" class="list-group" :list="completedTasks" group="people" @change="log">
        <div
          class="list-group-item"
          v-for="(element, index) in completedTasks"
          :key="element.index"
        >
          <b> {{ index+1 }}:</b> {{ element.body }}
        </div>
      </draggable>
    </div>

  </div>
</template>
<script>
import draggable from "vuedraggable";

export default {
  data() {
    return {
        // progressingTasks: [],
        pendingTasks: [],
        completedTasks: [],
    };
  },

  components: {
    draggable,
  },

  mounted() {
    this.loadPendingTasks();
    this.loadCompletedTasks();
  },

  methods: {
    log: function(evt) {
      window.console.log(evt);
    },
    loadPendingTasks() {
        axios.get('/api/tasks/pending').then(response => {
            this.pendingTasks = response.data;
        });
    },
    loadCompletedTasks() {
        axios.get('/api/tasks/completed').then(response => {
            this.completedTasks = response.data;
        });
    },
    sortTasks() {
        axios.post('/api/tasks/order').then(response => {
            // this.completedTasks = response.data;
            console.log('sorting');
        });
    },
  }
};
</script>

<style scoped>
.on-drag{
    background-color: #4833C0;
    color: #fff;
    z-index: 10;
}
</style>
