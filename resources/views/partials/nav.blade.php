<nav>
    <ul>
        <li class=" {{setActive('home')}} "><a href=" {{route('home')}} ">@lang('Home')</a></li>
        <li class=" {{setActive('about')}} "> <a href=" {{route('about')}} ">@lang('About')</a> </li>
        <li class=" {{setActive('project.*')}} "><a href=" {{route('project.index')}} ">@lang('Projects')</a></li>
        <li class=" {{setActive('contact')}} "><a href=" {{route('contact')}} ">@lang('Contact')</a></li>
    </ul>
</nav>