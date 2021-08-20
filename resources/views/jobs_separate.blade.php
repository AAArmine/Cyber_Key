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
                                    echo "<div> - " . $el . "</div>";
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
                                    echo "<div> - " . $el . "</div>";
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
                                    echo "<div> - " . $el . "</div>";
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="job_desc_item2" id='applicantForm'>
                <h3 class="common_caption">Apply for this job</h3>
                <form action="{{route('apply_job', app()->getLocale())}}#applicantForm" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <input type="text" class='apply form-control' id='apply_name' placeholder='Name' name='name'>
                    <input type="text" class='apply form-control' id='apply_email' placeholder='Email' name='email'>
                    <input type="hidden" class='apply form-control' id='apply_position' value='<?php echo $careerData->job_title; ?>' name='job_title'>

                    <div class="upload_img_div common_text">
                        <input type="file" class='apply form-control' class='apply_cv' name='attached_cv'>

                        <img src="{{ asset('assets/icons/cloud-computing.png') }}" alt="Upload_icon" class='mr-3'>
                        <span id='upload_cv'>Upload your CV</span>
                    </div>
                    <div class='checkbox text-left'>
                        <div class='d-flex'>
                            <div><input type="checkbox" id='pol_agreement' name='checkbox'></div>
                            <div class='pl-4'><span class='agree_span common_text'>I agree to the Cyber Key <a href="">Cookie Policy</a> and <a href="">Privacy Policy</a>*
                                </span></div>
                        </div>
                    </div>
                    <button type='submit' name='submit' class="blue_but" id='apply_submit'>Apply</button>
                </form>
                @if($errors->has('name') || $errors->has('email') || $errors->has('attached_cv') || $errors->has('checkbox'))
                @foreach($errors->all() as $error)
                <div class='submitError'>{{$error}}</div>
                @endforeach

                @elseif(session()->has('Application_success'))
                <div class='submitSuccess'>@lang('validation.success_contact')</div>
                <script>
                    setTimeout(function() {
                        $('.submitSuccess').html('');
                    }, 3000)
                </script>
                @endif
            </div>
        </div>
        <!-- !!!!!!!!!!!!!!!!!!!!!!!! display the resume -->
        <!-- <a target="_blank" href="{{ asset('uploads/applicant/1629492149.png') }}" title="">resum</a> -->
    </div>
</section>
@endsection
<script type="text/javascript">
    $(document).ready(function() {
        console.log('ex');

    });
</script>