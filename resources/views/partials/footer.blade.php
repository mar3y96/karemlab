<footer class=" text-center  {{ session()->get('theme','dark')=='dark'?'main-footer':'  ' }}">
    @include('partials.socials')
    <strong>{{$info['footer']}}</strong>
</footer>