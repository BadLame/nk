<?php
/**
 * @var array $leads
 */
?>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>Список Лидов</title>
</head>
<body>

<div class="container" id="app">
{{--    <pre>--}}
{{--        @json($leads)--}}
{{--    </pre>--}}
    <leads-table :leads='@json($leads)'/>
</div>

@vite('resources/js/app.js')
</body>
</html>
