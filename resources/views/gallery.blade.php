<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					@foreach($data['blogs'] as $blog)
					<article class="animate-box">
						<div class="blog-img" style="background-image">
						<img src="{{ $blog->photo }}" width="1250" height="550">
					</div>
						<div class="entry">
							<div class="meta text-center">
								<p>
									<span>{{$blog->created_at}}</span>
									
								</p>
							</div>
							<h2><a href="#">{{$blog->description}}</a></h2>
							
						</div>
					</article>

					@endforeach					
				</div>	
			</div>
		</div>
	
