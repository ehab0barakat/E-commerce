@props(["link"])

<li {{ $attributes->class(["nav-item"])}}>


    <a {{ $attributes->class(["nav-link"])->merge(["href"=> $link ??"#" ])}}>

        {{$slot}}

    </a>

</li>
