@extends ("home")

	@section("content")
		
		<div class="row">		
			<div class="heading_container">		<h4> Featured Blogs </h4>
			</div>
			<div class="col-sm-7 col-md-7 col-lg-7 blog_title_container">

				@foreach($blogs as $blog)

					<a href="#" data-toggle="modal" data-target="#quick_view{{$blog->id}}">
						<h3 class="modal-title">
							{{ $blog->blog_title }}
						</h3>
					</a>
					<h6>
						{{ str_limit($blog->blog_content, $limit = 200, $end = '...') }}
						<hr>
					</h6>
			
					<div class="modal fade" id="quick_view{{$blog->id}}">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="modal-title">
										{{ $blog->blog_title }}
									</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">X</span>
									</button>
								</div><!--modal header-->
								<div class="modal-body">	
									<h6>
										{{ str_limit($blog->blog_content, $limit = 200, $end = '...') }}										
									</h6>
								</div><!--modal body-->	
								<div class="modal-footer">
									<div class="row">
										<div class="col-sm-8 col-md-8 col-lg-8 add_tags_container">
											<form method="POST" action="addTag/{{$blog->id}}">
											{{ csrf_field() }}
												<label for="add_tags">Add Tags:</label>	
												<input type="text" name="add_tags" placeholder="Add Tags">
												<input type="submit" name="add_tags_button" value="Submit">
											</form>
										</div>
										<div class="col-sm-4 col-md-4 col-lg-4">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">
												Close
											</button>
										</div>	
									</div>	
								</div>
									<!-- <hr> -->		
							</div><!--modal content-->
						</div><!--modal dialog-->	
					</div> <!--modal fade-->
				@endforeach
			</div>

			<div class="col-sm-4 col-md-4 col-lg-4 blog_tags_container">
			<h3>Tags</h3>
			@foreach($tags as $tag)
				<a href="#"><span class="tag_name_container">{{ "#".$tag->tag_name }} |<span></a>
				@endforeach
			</div>
		</div>		

	@endsection