@extends('app')

@section('content')

<div class="container">

    <script type="text/javascript">
         if(!w.ApplicationData){
             w.ApplicationData = {
             	  POSTS:JSON.parse({{ json_encode($posts); }})
             }
         }    
    </script> 
	
     <div class="row">
		
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
	            <form method="post" action="formprocessor" class="">
				        <div class="input-group">
							<input type="text" class="form-control" placeholder="Search" name="s" id="search" value="">
							<span class="input-group-btn">
								<button class="btn btn-primary whiteonblack" type="submit">Go!</button>
							</span>
						</div>
	            </form>
          </div>

		  <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                <div class="well">
                     <h2>Posts</h2>  
                     <ul class="list-group">
                         @foreach($posts as $post)
                           <li class="list-group-item">
                                    <h5 class="list-group-item-heading">$post->post_title</h5>
                                    <p class="list-group-item-text">
                                        $post->post_description

                                        <span class="badge">$post->created_at</span>
                                    </p>
                           </li>
                         @endforeach
                     </ul>
                </div>
           </div>
    </div>
</div>
@endsection
