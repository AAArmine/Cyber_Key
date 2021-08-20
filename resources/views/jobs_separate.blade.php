@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('assets/css/jobs_separate.css') }}" rel="stylesheet" type='text/css'>

@endsection

@section('title')
Jobs
@endsection


@section('content')
<div class="ab_us_top"></div>
<section class="job_description width85 mb-4">
    <a href="{{route('careers', app()->getLocale())}}"><img src="{{ asset('assets/icons/left-arrow.png') }}" alt="" class='go_back'></a>
    <div class="job_desc_content mt-3">
        <h3 class="common_caption text-center">{{$careerData->job_title}}</h3>
        <div class="job_desc_flex d-flex justify-content-start">
            <div class="job_desc_item1">
                <table>
                    <colgroup>
                        <col style="width:35%">
                        <col style="width:65%">
                    </colgroup>  
                    <tbody>
                        <tr>
                            <td class='secondary_caption capt_column'>
                                Location
                            </td>
                            <td class='tab_row_content common_text'>
                                {{$careerData->location}}
                            </td>
                        </tr>

                        <tr>
                            <td class='secondary_caption capt_column'>
                                Description
                            </td>
                            <td class='tab_row_content common_text'>
                                {{$careerData->job_desc}}
                            </td>
                        </tr>
                        <tr>
                            <td class='secondary_caption capt_column'>
                                Technologies
                            </td>
                            <td class='tab_row_content common_text'>
                                <?php $arr_tech = explode(", ", $careerData->technologies);
                                foreach ($arr_tech  as $el) {
                                    echo "<div> - " .$el. "</div>";
                                }
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td class='secondary_caption capt_column'>
                                Requirements
                            </td>
                            <td class='tab_row_content common_text'>
                                <?php $arr_req = explode(", ", $careerData->requirements);
                                foreach ($arr_req  as $el) {
                                    echo "<div> - " .$el. "</div>";
                                }
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td class='secondary_caption capt_column'>
                            Benefits
                            </td>
                            <td class='tab_row_content common_text'>
                                <?php $arr_ben = explode(", ", $careerData->benefits);
                                foreach ($arr_ben  as $el) {
                                    echo "<div> - " .$el. "</div>";
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="job_desc_item2">
                <h3 class="common_caption" id='apply_for_job'>Apply for this job</h3>
                <form  id='applicantForm' action="{{route('application-sent', app()->getLocale())}}#apply_for_job" method='post' enctype='multipart/form-data'>
                    @csrf
                    <input type="text" class='apply form-control' id='apply_name' placeholder='Name' name='applName'>
                    <input type="text" class='apply form-control' id='apply_email' placeholder='Email' name='applEmail'>
                    <input type="text" class='apply form-control' id='apply_position' name='applTitle' value='<?php echo $careerData->job_title;?>'>

                    <div class="upload_img_div common_text">
                        <input type="file" class='apply form-control' id='apply_position' name='applcv'>

                        <img src="{{ asset('assets/icons/cloud-computing.png') }}" alt="Upload_icon" class='mr-3'>
                        Upload your CV
                    </div>
                
                    <div class='checkbox text-left'> 
                        <div class='d-flex'>
                            <div><input type="checkbox" id='pol_agreement'></div>
                            <div class='pl-4'><span class='agree_span common_text'>I agree to the Cyber Key <a href="">Cookie Policy</a> and <a href="">Privacy Policy</a>*  
                            </span></div>
                        </div>
                    </div>
                    <button type='submit' class="blue_but" id='apply_submit'>Apply</button>
                    @if($errors->has('applName') || $errors->has('applEmail'))
                    @foreach($errors->all() as $error)
                    <div class='submitError'>{{$error}}</div>
                    @endforeach

                    @elseif(session()->has('success_application'))
                    <div class='submitSuccess'>@lang('validation.success_contact')</div>
                    <script>
                        setTimeout(function() {
                            $('.submitSuccess').html('');
                        }, 6000)
                    </script>
                    @endif
                </form>
            </div>
        </div>
        {{ csrf_token() }}
    </div>
</section>
<!-- <script>
    $('#applicantForm').submit(function(e){
        e.preventDefault();
        let applName=$('#apply_name').val();
        let applEmail=$('#apply_email').val();
        let posTitle=$('#apply_position').val();
        let _token = $("input[name=_token]").val();
       
        $.ajax({
            url:"{{route('application-sent', app()->getLocale())}}",
            type:"POST",
            data:{
                applName: applName,
                applEmail: applEmail,
                posTitle: posTitle,
                _token:_token
            },
            success:function(response){
                if(response){
                    
                    $('#ifSent').html('sent');
                }
            }
            // $('#applicantForm')[0].reset();

        });

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
    });

</script> -->


@endsection