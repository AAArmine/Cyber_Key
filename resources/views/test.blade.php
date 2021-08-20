<form  id='applicantForm' action="{{route('upload', app()->getLocale())}}#apply_for_job" method='post' enctype='multipart/form-data'>
    @csrf
        <input type="file" class='apply form-control' id='apply_position' name='user_cv'>

    <button type='submit' class="blue_but" id='apply_submit'>Apply</button>
</form>