@include('components.page_head')
 
<body>

@include('components.page_nav')

<div class="container">
  @if(Session::has('message'))
      <p class="alert">{{ Session::get('message') }}</p>
  @else
    <div class="alert alert-info">
      <a href="/">6bey又一次蛋疼的改版界面了</a>
    </div> 
  @endif
        
    <div class="row">
            <div class="span9">
                    <div class="content-unit">
                      @include('components.page_sort')
                                @yield('content')
                        </div><!-- end content-unit -->
                </div> <!-- end span9 -->
                <div class="span3 sidebar">
                  @include('components.page_sidebar')
                </div><!-- end span3 -->
        </div><!-- end row-->
</div><!-- end container -->
@include('components.page_tail')
