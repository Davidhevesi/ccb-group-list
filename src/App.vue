<template>
  <div class="container">
    <table>
      <thead>
        <tr>
          <th>name</th>
          <th>day of the week</th>
          <th>time of the day</th>
          <th>child care</th>
          <th>area of town</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(group, index) in groups" :key="index">
          <td>{{group.name}}</td>
          <td>{{group.dayOfTheWeek}}</td>
          <td>{{group.timeOfTheDay}}</td>
          <td>{{group.childCare}}</td>
          <td>{{group.areaOfTown}}</td>
          <td><button @click="openGroup()">></button></td>
        </tr> 
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
 data() {
   return{
     groups: [
       {
         name: "david",
         dayOfTheWeek:"Monday",
         timeOfTheDay: "evening",
         childCare: "yes",
         areaOfTown: "Duluth"
        
       },
       {
         name: "Bill",
         dayOfTheWeek:"Monday",
         timeOfTheDay: "evening",
         childCare: "yes",
         areaOfTown: "Duluth"
        
       },
      
     ]
   }
 },
 methods: {
   openGroup() {
     alert('click group')
   }
 }

}
</script>

<style>
.container {
  color: blue
}

.container table th{
  color: red
}
</style>
