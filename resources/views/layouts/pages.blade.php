<!DOCTYPE html>
<html lang="en">
	<head>
    	@include('partials._head')
    </head>
  	<body>

	    @include('partials._nav')

	    @include('partials._messages')

	    <div class="container">

	    	@yield('content')

	    </div>
	      
	    	@include('partials._footer')

	    	@include('partials._javascript')   
        
  	</body>
</html>