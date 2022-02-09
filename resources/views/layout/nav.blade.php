<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'titulo por parametro si no definimos')</title>
</head>
<style>
    .active{
        color: red;
        text-decoration: none;
    }
</style>
<body>

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="{{route("tutor.index")}}">Crud</a>

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
@yield('content')

</body>
</html>
