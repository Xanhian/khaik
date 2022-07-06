<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="fixed-bottom-bar">
    <div class="d-none">
        @include('components.logo')

    </div>

    <div id="app">
        <example-component></example-component>
    </div>
    @include('layouts.navigation')

</body>


@include('layouts.scripts')
<script type="text/javascript" src="{{asset('js/vue.js')}}"></script>


</html>