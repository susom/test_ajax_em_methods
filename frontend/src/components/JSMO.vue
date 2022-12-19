<template>
    <div>
      {{data["1"]}}
    </div>
</template>

<script>
export default {
  name: "JSMO",
  methods: {
    init: function () {
      window.module.log('Hello from JavaScript!', {"record": 4, "foo": "bar"}).then(function (logId) {
        // Do stuff with the logId
        console.log(logId);
      }).catch(function (err) {
        // Report error
        alert(err);
      });

      window.module.ajax('MyAction', this.data).then(function (response) {
        // Do stuff with response
        console.log("ajax complete", response);
      }).catch(function (err) {
        // Report error
        console.log(err)
        console.log("error")
      });
    }
  },
  data() {
    return {
      data:{
        '1' : '1',
        '2' : '2'
      }
    }
  },
  mounted() {
    this.init()
  }
}
</script>

<style scoped>

</style>