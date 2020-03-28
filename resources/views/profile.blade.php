<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$us->name}}</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Fonts -->
        

        
       
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 my-3 pt-3 shadow">
                    <img src="{{$us->image->url}}" class="float-left rounded-circle mr-2">
                    <h1>{{$us->name}}</h1>
                    <h3>{{$us->email}}</h3>
                    <p>
                        <strong>Instagram</strong>: {{$ins}}<br>
                        <strong>Github</strong>: {{$git}}<br>
                        <strong>Web</strong>: {{$web}}<br>
                    </p>
                    <p>
                    	<strong>País</strong>: {{$pa}}<br>
                    	<strong>Nivel</strong>: 
                        
                    	@if ($ni) 
                    		
                    		<a href="{{url("/levels/{$ni->id}")}}">{{$ni->name}}</a> 
                    		
                    	@else 
                    	--- 
                    	@endif 
                    	<br>
                    </p>
                    <hr>
                    <p>
                    	<strong>Grupos</strong>
                    		
                    	@forelse($us->groups as $group)
                    	<span class="badge badge-primary">{{$group->name}}</span>
                    	@empty
                    	<em>No pertenece a ningún grupo</em>
                    	@endforelse
                    </p>
                    <hr>
                    
                    
                    
                    <h3>Post</h3>
                   
                    
                    <div class="row">
                    	@foreach($pos as $post)
                    	<div class="col-6">
                    		<div class="card mb-3">
                    			<div class="row no-gutters">
                    				<div class="col-md-4">
                    					<img src="https://images.freeimages.com/images/large-previews/540/dandelion-37-1388001.jpg" class="card-img">
                    				</div>
                    				<div class="col-md-8">
										<div class="card-body">
											<h5 class="card-title">{{$post->name}}</h5>
											<h6 class="card-subtitle text-muted">
												{{$post->category->name}} |
												{{$post->comments_count}}
												{{Str::plural('Comentario', $post->comment_count)}}
											</h6>
										</div>
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    	@endforeach
                    </div>
                    
                    
                    
                    
                    
                     <h3>Videos</h3>
                   
                    
                    <div class="row">
                    	@foreach($vid as $videos)
                    	<div class="col-6">
                    		<div class="card mb-3">
                    			<div class="row no-gutters">
                    				<div class="col-md-4">
                    					<img src="https://images.freeimages.com/images/large-previews/1c9/maine-at-4-45-am-1370871.jpg" class="card-img">
                    				</div>
                    				<div class="col-md-8">
										<div class="card-body">
											<h5 class="card-title">{{$videos->name}}</h5>
											<h6 class="card-subtitle text-muted">
												{{$videos->category->name}} |
												{{$videos->comments_count}}
												{{Str::plural('Comentario', $post->comment_count)}}
											</h6>
										</div>
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    	@endforeach
                    </div>
                    
                    
                    
                    
                </div>
                
            </div>
           
        </div>
    </body>
</html>
