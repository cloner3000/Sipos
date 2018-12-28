<form class="form-horizontal" action="base_forms_pickers_select.html" method="post" onsubmit="return false;" id="tahun-form">
    <div class="form-group">
        <label class="col-md-10 control-label" for="example-select2">Tahun</label>
        <div class="col-md-2 right">
            <select class="js-select2 form-control" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Pilih tahun">
                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
            </select>
        </div>
    </div>
</form>

<script>
  $(document).ready(function() {
    $('#example-select2').val({{ $tahun }});
    $('#example-select2').on('change', function(){
      window.location.href = $('#example-select2').val();
    })
  });
</script>
