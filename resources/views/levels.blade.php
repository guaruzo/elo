<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Usuarios de {{$level->name}}</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Fonts -->
        

        
       
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 my-3 pt-3 shadow">
                    
                    
                    
                    <h1>Contenido de usuarios nivel {{$level->name}}</h1>
                    <hr>
                    
                    <div class="row">
                    	@foreach($posts as $post)
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
												{{Str::plural('Comentario', $post->comments_count)}}
											</h6>
										</div>
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    	@endforeach
                    </div>
                    
                    </div>
                    
                    
                    
                     <h1>Contenido en video de usuarios nivel {{$level->name}}</h1>
                    <hr>
                   
                    
                    <div class="row">
                    	@foreach($videos as $videos)
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
												{{Str::plural('Comentario', $post->comments_count)}}
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
