<template>
  <div class="container">
    <table class="table">
      
      <thead>
        <tr class="bg-warning" id="main">
          <th>name</th>
          <th>day of the week</th>
          <th>time of the day</th>
          <th>child care</th>
          <th>area of town</th>
          <th></th>
        </tr>
      
      </thead>
      <tbody>
        <template v-for="(group, index) in groups">
          <tr>
            
            <td>{{group.name}}</td>
            
            <td>{{group.dayOfTheWeek}}</td>
            <td>{{group.timeOfTheDay}}</td>
            <td>{{group.childCare}}</td>
            <td>{{group.areaOfTown}}</td>
            <td>
              <button class="btn btn-dark" @click="group.isExpanded = !group.isExpanded">
              <i class="fa" :class="{'fa-arrow-right': !group.isExpanded, 'fa-arrow-down': group.isExpanded}"></i>
             </button>
            </td> 
                       
          </tr>
          <tr v-show="group.isExpanded">
            <GroupDetails :group="group" :index="index"></GroupDetails>
          </tr>
        </template>
      </tbody>
    </table>
  </div>
</template>

<script>
import GroupDetails from "./GroupDetails";

export default {
  components: { GroupDetails },
  data() {
    return {
      groups: [
        {
          name: "THE ABERNATHY/WILCZAK ",
          dayOfTheWeek: "Wednesday",
          timeOfTheDay: "Evening",
          childCare: "yes",
          areaOfTown: "Flowery Branch",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "THE BALBOA GROUP",
          dayOfTheWeek: "Wednesday",
          timeOfTheDay: "Evening",
          childCare: "",
          areaOfTown: "Duluth",
          isExpanded: false,
          image: "da.jpg"
        },
        {
          name: "The Beck/Balanescu Group",
          dayOfTheWeek: "Tuesday",
          timeOfTheDay: "Evening",
          childCare: "yes",
          areaOfTown: "Duluth",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Boeckman/Messerschmidt",
          dayOfTheWeek: "",
          timeOfTheDay: "",
          childCare: "",
          areaOfTown: "",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Bowen Group",
          dayOfTheWeek: "",
          timeOfTheDay: "",
          childCare: "",
          areaOfTown: "",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Brashear Group",
          dayOfTheWeek: "Tuesday",
          timeOfTheDay: "Evening",
          childCare: "Yes",
          areaOfTown: "Gainsville",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Bray Group",
          dayOfTheWeek: "",
          timeOfTheDay: "",
          childCare: "",
          areaOfTown: "",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The DiAntonio Group",
          dayOfTheWeek: "Monday",
          timeOfTheDay: "Evening",
          childCare: "Yes",
          areaOfTown: "Suwanee",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Erath Group",
          dayOfTheWeek: "Wednesday",
          timeOfTheDay: "Evening",
          childCare: "Yes",
          areaOfTown: "Lawrenceville",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Hill/Beck Group",
          dayOfTheWeek: "",
          timeOfTheDay: "",
          childCare: "",
          areaOfTown: "",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Hillman/Migliori Group",
          dayOfTheWeek: "",
          timeOfTheDay: "",
          childCare: "",
          areaOfTown: "",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Klinect/Terry Group",
          dayOfTheWeek: "Wednesday",
          timeOfTheDay: "Evening",
          childCare: "Yes",
          areaOfTown: "Suwanee",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Kucala Group",
          dayOfTheWeek: "Tuesday",
          timeOfTheDay: "Evening",
          childCare: "",
          areaOfTown: "Suwanee",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Mizell/Walter Group",
          dayOfTheWeek: "Sunday",
          timeOfTheDay: "Afternoon",
          childCare: "Yes",
          areaOfTown: "Dacula",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Moon Group",
          dayOfTheWeek: "Tuesday",
          timeOfTheDay: "Evening",
          childCare: "Yes",
          areaOfTown: "Lawrenceville",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Nic Smith Group",
          dayOfTheWeek: "Wednesday",
          timeOfTheDay: "Evening",
          childCare: "Yes",
          areaOfTown: "Suwanee",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Petito/Clance Group",
          dayOfTheWeek: "Sunday",
          timeOfTheDay: "Evening",
          childCare: "Yes",
          areaOfTown: "Suwanee",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Porta Group",
          dayOfTheWeek: "",
          timeOfTheDay: "",
          childCare: "",
          areaOfTown: "",
          isExpanded: false,
          image: "logo.png"
        },

        {
          name: "The Romero Group",
          dayOfTheWeek: "Monday",
          timeOfTheDay: "Evening",
          childCare: "Yes",
          areaOfTown: "Dacula",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Seckinger/DeReimer Group",
          dayOfTheWeek: "",
          timeOfTheDay: "",
          childCare: "",
          areaOfTown: "",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Shorr Group",
          dayOfTheWeek: "Wednesday",
          timeOfTheDay: "Evening",
          childCare: "",
          areaOfTown: "Buford",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Smith Group",
          dayOfTheWeek: "Thursday",
          timeOfTheDay: "Evening",
          childCare: "",
          areaOfTown: "Sugarhill",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Starling/Ryall Group",
          dayOfTheWeek: "Thursday",
          timeOfTheDay: "Evening",
          childCare: "",
          areaOfTown: "Sugarhill",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Watson Group",
          dayOfTheWeek: "Wednsday",
          timeOfTheDay: "Evening",
          childCare: "Yes",
          areaOfTown: "Church",
          isExpanded: false,
          image: "logo.png"
        },
        {
          name: "The Wit Group",
          dayOfTheWeek: "Thursday",
          timeOfTheDay: "Evening",
          childCare: "Yes",
          areaOfTown: "Sugarhill",
          isExpanded: false,
          image: "logo.png"
        }
      ]
    };
  }
};
</script>

<style>
th {
  text-transform: uppercase;
}
img {
  max-width: 20%;
}
</style>