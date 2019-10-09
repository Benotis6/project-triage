var patientTriageApp = new Vue({
  el: '#patientTriageApp',
  data: {
    patient: {}
  },
  methods: {
    handleSubmit() {
<<<<<<< HEAD
       fetch('api/waiting/post.php', {
          method:'POST',
          body: JSON.stringify(this.patient),
          headers:  {
            "Content-Type": "application/json; charset=utf-8"
          }
        })
        .then(resonse => response.json())
        .then(json => {waitingApp.patients = json})
        .catch(err =>{
          console.error('work triange error:'');
          console.error(err);
        })
       // waitingApp.patients.push(this.patient);
       this.handleReset();
=======
      fetch('api/waiting/post.php', {
        method:'POST',
        body: JSON.stringify(this.patient),
        headers: {
          "Content-Type": "application/json; charset=utf-8"
        }
      })
      .then(response => response.json())
      .then(json => { waitingApp.patients = json })

      this.handleReset();
>>>>>>> b34d72773f8d293f6f3d82023f2916019ee98346
    },
    handleReset() {
      this.patient = {
        patientGuid: '',
        firstName: '',
        lastName: '',
        dob: '',
        sexAtBirth: '',
        visitDescription: '',
        // visitDateUtc
        priority: 'low'
      }
    }
  },
  created() {
    this.handleReset();
  }
});
