<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Crud</a>

<div class="text-right m-3">
    <select class="form-select p-3" name="language" style="width: 10%;">
        <option value="en" {{ Session::get('language') == 'en' ? 'selected' : '' }}>English</option>
        <option value="es" {{ Session::get('language') == 'es' ? 'selected' : '' }}>Español</option>
    </select>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name=language]').change(function() {
            var lang = $(this).val();
            window.location.href = "{{ route('changeLanguage') }}?language="+lang;
        });
    });
</script>
</nav>
