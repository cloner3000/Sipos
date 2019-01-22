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
            setUmur(data);
            var ban = [];
            var ban_asi = [];
            if($('#umur-anak-form').val() == data['umur']){
              for (var d in data['pemberian_ntobs']) {
                  var ntob = data['pemberian_ntobs'][d];
                  var num = parseInt(ntob.tanggal.split('-')[1]);
                  ban.push(num);
              }
              var asis = data['pemberian_asis'][0];
              for (var i = 0; i < 7; i++) {
                  if (asis["e" + i] != null) {
                      ban_asi.push("e" + i);
                  }
              }
              pemberianImunisasiCheckBox(data);
            } else{
              resetImunisasiCheckBox();
            }
            createOptions(12, ban, options, bulans);
            createAsiRadio(ban_asi);
        }
    });
});

$('#option-bulan').change(function() {
    pemberianVitaminCheckBox();
});

function createOptions(n, ban, element, o) {
    for (var i = 1; i <= n; i++) {
        var a = document.createElement("option");
        if (ban[0] == i) {
            ban.shift();
            continue;
        }
        a.value = i;
        a.text = o[i];
        element.appendChild(a);
    }
    $('#option-bulan').change();
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
    if (bulan == 2 || bulan == 8) {
        $('#vitamin-a-form')[0].hidden = false;
    } else {
        $('#vitamin-a-form')[0].hidden = true;
    }
}

function pemberianImunisasiCheckBox(data) {
    var datas = data['pemberian_imunisasis'][0];
    var labels = $('#imunisasi-form').find("label");
    for (var i = 0; i < labels.length; i++) {
        var checkbox = labels[i].getElementsByTagName("input")[0];
        if (datas[checkbox.name] != null) {
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

function setUmur(data) {
    var d = new Date();
    var date_now = d.getFullYear() + '-' + d.getMonth() + 1 + '-' + d.getDate()
    var date_birth = data['anak']['tanggal_lahir'];
    var m_now = d.getMonth() + 1;
    var m_birth = date_birth.split('-')[1];
    var umur = Math.floor((12 * (d.getFullYear() - date_birth.split('-')[0]) - (Math.abs(m_birth - m_now))) / 12);
    $('#umur-anak-form').val(umur);
}

// createAsiRadio();

$.ajax({
    url: "http://localhost:8000/ajax/test/" + 10,
    cache: true,
    success: function(data) {
        console.log(data);
    }
});
