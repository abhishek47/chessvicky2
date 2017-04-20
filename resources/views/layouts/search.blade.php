 <div class="widget search-widget">
    <form class="form" method="get" action="/{{$model}}">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-search"></i></div>
          <input  style="font-size: 15px;" type="text" class="form-control" id="search" name="query" placeholder="Search here.." value="{{ isset($q) ? $q : '' }}">
        </div>
    </form>
    <br>
</div>

@if(isset($q))
	<div class="page-heading">
		<h3>Showing {{ $data->total() }} results for query '{{$q}}'.</h3>
		<hr>
	</div>
@endif
