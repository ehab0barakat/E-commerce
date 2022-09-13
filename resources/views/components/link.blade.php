@props(["link"])


<li {{$attributes->class(["nav-item my-3 fs-5 fw-bolder"])}}>
    <a {{$attributes->class(["nav-link skincolor"])
                    ->merge(['href' => $link ?? '/'  ])
                    ->merge(["aria-current"=>"page"])
        }}>{{$slot}}</a>

</li>
