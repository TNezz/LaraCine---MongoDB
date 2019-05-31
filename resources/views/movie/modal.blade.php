	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar pelicula</h4>
      </div>
      <div class="modal-body">

      	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
      	<input type="hidden" id="id">
        @include('movie.form.movie')
      </div>
      <div class="modal-footer">
        <a href="#" id="actualizar" class="btn btn-primary">Actualizar</a>
      </div>
    </div>
  </div>
</div>