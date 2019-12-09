(function() {
     var x = new mdDateTimePicker.default({
      type: 'date',
      init: moment('2016-03-31', 'YYYY-MM-DD'),
      orientation: 'PORTRAIT'
    });
    document.getElementById('cal_r').addEventListener('click', function() {
      x.toggle();
    });
    document.getElementById('dob_r').addEventListener('click', function() {
      x.toggle();
    });
       
    // dispatch event test
    x.trigger = document.getElementById('dob_r');
    document.getElementById('dob_r').addEventListener('onOk', function() {
      var xy = x.time.toString();
      this.value = moment(xy).format('DD-MM-YYYY');
      var reg = this.value;
      var mydate = moment(reg,"DD-MM-YYYY");
      var compdate1 = moment("01-04-2015","DD-MM-YYYY");
      var compdate2 = moment("31-03-2016","DD-MM-YYYY");
      if(mydate > compdate1 && mydate < compdate2)
        return;
      else
        alert("The date of birth should be between 01-04-2015 & 31-03-2016");
        $('#dob_r').val('');
  });
    }).call(this);

(function() {
     var x = new mdDateTimePicker.default({
     type: 'date',
      init: moment('2016-03-31', 'YYYY-MM-DD'),
      orientation: 'PORTRAIT'
    });
    document.getElementById('cal_a').addEventListener('click', function() {
      x.toggle();
    });
    document.getElementById('dob_a').addEventListener('click', function() {
      x.toggle();
    });
       
    // dispatch event test
    x.trigger = document.getElementById('dob_a');
    document.getElementById('dob_a').addEventListener('onOk', function() {
      var xy = x.time.toString();
      this.value = moment(xy).format('DD-MM-YYYY');
    });
      }).call(this);

(function() {
     var x = new mdDateTimePicker.default({
      type: 'date',
      init: moment('2016-03-31', 'YYYY-MM-DD'),
      orientation: 'PORTRAIT'
    });
    document.getElementById('cal_d').addEventListener('click', function() {
      x.toggle();
    });
    document.getElementById('dob_d').addEventListener('click', function() {
      x.toggle();
    });
       
    // dispatch event test
    x.trigger = document.getElementById('dob_d');
    document.getElementById('dob_d').addEventListener('onOk', function() {
      var xy = x.time.toString();
      this.value = moment(xy).format('DD-MM-YYYY');
    });
      }).call(this);

(function(){
var select = document.getElementById('day_r');
  for (var i = 1; i < 31; i++) {
    var option = document.createElement("option");
    option.text = i;
    option.value = i;
    select.appendChild(option);
  }  
});

 
