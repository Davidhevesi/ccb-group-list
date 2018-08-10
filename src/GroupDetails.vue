<template>
<td colspan="6">
  <img :src="image" alt="">
  
<div>
  <b-btn class="float-right" @click="openModal">Sign Up</b-btn>
  
  <!-- Modal Component -->
  <b-modal :id="`modal-${index}`" title="Emmaus Sign up form">
    
     <b-form-group
      id="fieldset1"
      description="Let us know your name."
      label="Enter your name"
      label-for="input1"
      :invalid-feedback="invalidFeedback"
      :valid-feedback="validFeedback"
      :state="state"
  >
    <b-form-input id="input1" :state="state" v-model.trim="name"></b-form-input>
  </b-form-group>
  </b-modal>
</div>
</td>


</template>

<script>
export default {
  props: {
    group: Object,
    index: Number
  },
  methods: {
    openModal() {
      debugger;
    }
  },
  computed: {
    image() {
      return require(`./assets/${this.group.image}`);
    },
    state() {
      return this.name.length >= 4 ? true : false;
    },
    invalidFeedback() {
      if (this.name.length > 4) {
        return "";
      } else if (this.name.length > 0) {
        return "Enter at least 4 characters";
      } else {
        return "Please enter something";
      }
    },
    validFeedback() {
      return this.state === true ? "Thank you" : "";
    }
  },
  data() {
    return {
      name: ""
    };
  }
};
</script>

<style>
.float-right {
  margin-right: 2.6em;
}
</style>
