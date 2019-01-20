$('#option-anak').change(function() {
    var options = document.getElementById('option-bulan');
    clearOptions(options);
    resetAsiRadio();
    resetImunisasiCheckBox();
    var data = $('#option-anak option:selected').val();
    console.log(data);
    $.ajax({
        url: "http://localhost:8000/ajax/test/" + data,
        cache: false,
        success: function(data) {
            // console.log(data['pemberian_ntobs']);
            var ban = [];
            for (var d in data['pemberian_ntobs']) {
                var ntob = data['pemberian_ntobs'][d];
                var num = parseInt(ntob.tanggal.split('-')[1]);
                ban.push(num);
            }
            createOptions(12, ban, options, bulans);
            var asis = data['pemberian_asis'][0];
            console.log(asis);
            ban = [];
            for (var i = 0; i < 7; i++) {
                if (asis["e" + i] != null) {
                    ban.push("e" + i);
                }
            }
            pemberianImunisasiCheckBox(data);
            createAsiRadio(ban);
        }
    });
});

$('#option-bulan').change(function(){
  pemberianVitaminCheckBox();
});

function createOptions(n, ban, element, o) {
    for (var i = 1; i <= n; i++) {
        if (ban[0] == i) {
            ban.shift();
            continue;
        }
        var a = document.createElement("option");
        a.value = i;
        a.text = o[i];
        element.appendChild(a);
    }
}

function clearOptions(element) {
    elements = element.getElementsByTagName("option");
    for (var o in elements) {
        element[o] = null;
    }
}

function createAsiRadio(ban) {
    var labels = document.getElementsByClassName('asi-box');
    for (var i = 0; i < labels.length; i++) {
        var checkbox = labels[i].getElementsByTagName('input')[0];
        if (ban[0] == checkbox.name) {
            ban.shift();
            checkbox.checked = true;
            labels[i].readonly = true;
            labels[i].style.cursor = "not-allowed";
            checkbox.disabled = true;
        }
    }
}

function resetAsiRadio() {
    var labels = document.getElementsByClassName('asi-box');
    for (var i = 0; i < labels.length; i++) {
        var checkbox = labels[i].getElementsByTagName('input')[0];
        checkbox.checked = false;
        labels[i].readonly = false;
        labels[i].style.cursor = "pointer";
        checkbox.disabled = false;
    }
}

function pemberianVitaminCheckBox() {
  var bulan = $('#option-bulan').val();
  if(bulan == 2 || bulan == 8){
    $('#vitamin-a-form')[0].hidden = false;
  } else{
    $('#vitamin-a-form')[0].hidden = true;
  }
}

function pemberianImunisasiCheckBox(data) {
  var datas = data['pemberian_imunisasis'][0];
  var labels = $('#imunisasi-form').find("label");
  for(var i=0; i<labels.length; i++){
    var checkbox = labels[i].getElementsByTagName("input")[0];
    if(datas[checkbox.name] != null){
      checkbox.checked = true;
      labels[i].readonly = true;
      labels[i].style.cursor = "not-allowed";
      checkbox.disabled = true;
    }
  }
}

function resetImunisasiCheckBox() {
  var labels = $('#imunisasi-form').find("label");
  for (var i = 0; i < labels.length; i++) {
      var checkbox = labels[i].getElementsByTagName('input')[0];
      checkbox.checked = false;
      labels[i].readonly = false;
      labels[i].style.cursor = "pointer";
      checkbox.disabled = false;
  }
}

// createAsiRadio();

// $.ajax({
//     url: "http://localhost:8000/ajax/test/" + 6,
//     cache: true,
//     success: function(data) {
//         // pemberianImunisasiCheckBox(data);
//     }
// });
