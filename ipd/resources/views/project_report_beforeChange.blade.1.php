@extends('layouts.baselayout')
@section('title', 'CCC - Report')

@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript" src="/iPD/public/js/projectReport.js"></script>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<script src="https://cdn.geolonia.com/community-geocoder.js"></script>
<script type="text/javascript" src="/iPD/public/js/select2/select2.min.js"></script>
<link rel="stylesheet" href="/iPD/public/css/select2.min.css">
<link rel="stylesheet" href="/iPD/public/css/projectReport.css">
<!--<link rel="stylesheet" href="../public/css/bootstrap-multi-carousel.css">-->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />

<!--<link rel="stylesheet" href="../public/css/bootstrap-slider.css">-->
<!--<script src="../public/js/library/bootstrap-slider.js"></script>-->
<script type="text/javascript" src="/iPD/public/js/box.js"></script>
<!--<script type="text/javascript" src="../public/js/library/html2canvas.js"></script>-->
<!--<script type="text/javascript" src="../public/js/library/canvas2image.js"></script>-->
<script type="text/javascript" src="/iPD/public/js/common.js"></script>

<script type="text/javascript" src="https://cdn01.boxcdn.net/platform/preview/2.57.0/en-US/preview.js"></script>
<link rel="stylesheet" href="https://cdn01.boxcdn.net/platform/preview/2.57.0/en-US/preview.css">

<link rel="stylesheet" href="https://boxdicom.com/dist/1.3.5/dicom.min.css"/>
<script src="https://boxdicom.com/dist/1.3.5/dicom-en-US.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
<!--<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">   -->

<!--<script src="https://superal.github.io/canvas2image/canvas2image.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
<!--for bootstrap modal-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/iPD/public/css/jquery.hashtags.css">
<script type="text/javascript" src="/iPD/public/js/library/jquery.hashtags.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Caret.js/0.3.1/jquery.caret.js"></script>

<!--<link rel="stylesheet" href="../public/css/jquery-autotag.css">-->
<!--<script type="text/javascript" src="../public/js/library/jquery-autotag-1.3.min.js"></script>-->


<!--<link rel="stylesheet" href="../public/css/jquery.mentiony.css">-->
<!--<script type="text/javascript" src="../public/js/library/jquery.mentiony.js"></script>-->

<link rel="stylesheet" href="/iPD/public/css/swiper.min.css">
<script type="text/javascript" src="/iPD/public/js/swiper.min.js"></script>

<style>
.swiper-custom-button{
  background-image: none !important;
  background: #000d1a;
  color: white;
  font-size: 36px;
  text-align: center;
  width: 24px !important;
  height: 34px !important;
  line-height: 64px;
}
.swiper-custom-button .fa{
  line-height: 44px;
}
.swiper-button-next.swiper-button-disabled,
.swiper-button-prev.swiper-button-disabled {
    opacity: .35;
    cursor: none !important;
    pointer-events: none !important;
}
.swiper-button-next:after, .swiper-container-rtl .swiper-button-prev:after{
    content:none;
}
.swiper-button-prev:after, .swiper-container-rtl .swiper-button-next:after{
     content:none;
}

.has-search .form-control-feedback {
    right: initial;
    left: 0;
    color: #ccc;
}

.has-search .form-control {
    padding-right: 12px;
    padding-left: 34px;
}
.tab_switch_on{
    background-color:silver;
}
hr{
 border:1px solid #fff;
 margin-top:0;
 
}
.form-group{
    margin-bottom:7px;
}
#image-bar hr{
margin-bottom:5px;
}
.myIcon{
 font-weight:bold;
 padding:2px 4px 2px 4px;
 margin-left:5px;
 background-color:whitesmoke;
 color:#1a0d00;
 border : 2px solid #1a0d00;
 border-radius:3px;
 font-size:12px;
}
.hideIcon{
   display:none;
}
.showIcon{
    visibility:visible;
}
.modal{
    /*<!--position:absolute;-->*/
    /*<!--outline:0;-->*/
}
.cus-popu-title{
 color:blue;
 font-weight:bold;
}
.modal-content{
    top:15vh;
}
#txtASpecialFeature{
    min-height:200px;
}
.right-click-content {
    display: none;
    z-index:1000;
    width:300px;
    height:200px;
    padding:5px;
    position: absolute;
    background-color:#eee;
    border: 1px solid #ddd;
    border-radius:5px;
}
.right-click-content h4{
    color:#1a0d00;
    font-weight:bold;
    font-size:18px;
}
.custom_popup{
	min-height:120px;
	display:block;
	background-color:#ddd;
	width:200px;
	height:auto;
}

#hashtag_popup {
    display: none;
    z-index:10;
    position: absolute;
    height:auto !important;
}
#hashtag_popup .list-group-item{
	display: block;
	padding:5px;
	color:#1a0d00;
	margin-bottom: 1px solid #ddd !important;
    background-color: #dce6f8;
    border: 1px solid #ddd;
??????
}
#hashtag_popup .list-group-item:hover{
	background:whitesmoke;
}
#report-content ul{
    margin:0; 
    padding:5px;
}
#report-content ul li{
    list-style:none;
    margin:0; 
    padding:10px;
}
.reports{
    min-height: 230px;
    border:1px solid #ddd;
    width:100%;
    padding:5px;
}
.reports_header{
    background:#BAD3FF;
    padding:3px;
    font-weight: bold;
}
.box3{
    min-height:70px;
    border:1px solid #ddd;
    height: auto;
    opacity: 0.7;
    margin-top: 10px;
    background-color: #f2f2f2;
}

.reports  {
  font-size: 18px;
}
.general_info_minimize{
    width:30px;
    min-height: 100%;
    background:whitesmoke;
    padding:0 !important;
}
.col-md-5,.col-md-6,.col-md-7,.col-md-12{
    padding-left:5px !important;
    padding-right:5px;

}
.report_type_list{
    display: flex;
   flex-wrap: wrap;
}
.report_type_list li{
    margin-top:10px !important;
}
#text1,#text2,#text3{
    font-size:16px;
    padding:5px;
}
.row{
 margin-right: 0 !important; 
}  

.mrq-div{
    
    height: 100px;
    margin:auto;
    margin-top:30%;
    background-color: whitesmoke;
    vertical-align: middle;
    display:block;
    text-align: center;
    border:1px solid whitesmoke;
}
.mrq-div marquee{
    padding-top:30px;
    text-align: center;
    font-weight: bold;
    font-size: 20px;
    color:#1a0d00;
}
</style>
<script>
</script>
@endsection

@section('content')
@include('layouts.loading')
<main>

    <input type="hidden" id="hidLoginID" name="hidLoginID" value="{{Session::get('login_user_id')}}"/>
    <input type="hidden" id="hidProjectCode" name="hidProjectCode" value="{{$param_pj_code}}"/>
    <input type="hidden" id="hidSearchStates" name="hidSearchStates" value="{{@json_encode($search_states)}}"/>
    <!--<div class="row col-md-11">-->
    <div id="parent" class="">
            
            <div id="search-content" class="col-md-5" style="padding-right:20px!important;">
                <div class="row">
                   <div class="col-md-12" style="display:flex;">
                       <h4 class=" cus-title">????????????</h4>
                       <div class="" style="margin-left:auto;order:2;">
                           <!--<i class="fa fa-cloud-upload" aria-hidden="true"></i>-->
                           <a class="" href="javascript:void(0)" onClick="UploadImages()">BOX UPLOAD</a>&nbsp;&nbsp;&nbsp;&nbsp;
                           <i id="minimize-arrow" class="fa fa-toggle-left arrow-design" aria-hidden="true"></i>
                      </div>
                    </div>
                </div>
                <hr> 
                <div class="col-md-12" style="margin-right:30px !important;">
                    <div class="form-group has-feedback has-search" style="width:90%;">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    <input type="text" id="txtSearch" class="form-control" placeholder="?????????">
                    </div>
                    <div class="filter-item">
                        <select  class="select-width" id="branchName" multiple="multiple">
                        </select>
                    </div>
                    <div class="filter-item">
                        <select  class="select-width" id="inCharge" multiple="multiple">
                        </select>
                    </div>
                    <div class="filter-item">
                        <select  class="select-width" id="kouji_kubun" multiple="multiple">
                        </select>
                    </div>
                    <div class="filter-item">
                        <select  class="select-width" id="report_type" multiple="multiple">
                            <option value="ipd_report">iPDC??????????????????</option>
                            <option value="leader_meeting_ipd_part1">??????????????????????????????????????????iPDC???1???</option>
                            <option value="leader_meeting_ipd_part2">??????????????????????????????????????????iPDC???2???</option>
                            <option value="leader_meeting_ipd_part3">??????????????????????????????????????????iPDC???3???</option>
                            <option value="leader_meeting_techno_dept">?????????????????????????????????????????????????????????</option>
                            <option value="architecture_leader_meeting_ipd_part1">?????????????????????????????????????????????????????????iPDC???1???</option>
                            <option value="architecture_leader_meeting_ipd_part2">?????????????????????????????????????????????????????????iPDC???2???</option>
                            <option value="architecture_leader_meeting_ipd_part3">?????????????????????????????????????????????????????????iPDC???3???</option>
                            <option value="leader_meeting_civil_engineer">?????????????????????????????????????????????</option>
                            <option value="structure_report">????????????</option>
                            <option value="design_report">????????????</option>
                            <option value="estimation_report">??????????????????</option>
                            <option value="renewal_report">?????????????????????</option>
                            <option value="equipment_design_report">????????????</option>
                            <option value="quality_control_report">???????????????</option>
                            <option value="construction_report">?????????</option>
                            <option value="production_engineer_report">???????????????</option>
                            <option value="production_design_report">???????????????</option>
                            <option value="construction_office_report">????????????????????????????????????????????????</option>
                            <option value="construction_equipment_report">???????????????????????????</option>
                        </select>
                    </div>
                    <div class="filter-item">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="chkOpenNewTag">
                          <label class="form-check-label" for="chkOpenNewTag">
                            ????????????????????????
                          </label>
                        </div>
                    </div>
                    <!--<div class="filter-item">-->
                        <div class="tblScroll">
                            <table id="tblProjectList" class="">
                            <thead>
                                <tr>
                                    <th class="col-wd-lg">?????????</th>
                                    <th class="col-wd-md">?????????
                                        <span class="icon-stack">
                                            <i class="fa fa-sort-down icon-stack-3x"></i>
                                        </span>
                                    </th>
                                    <th class="col-wd-md">iPD????????????
                                        <select id="cmbDisplayOrder">
                                          <option value="dataDisplay">??????</option>
                                          <option value="chartDisplay">??????</option>
                                        </select>
                                        <!--<span class="icon-stack">
                                            <i class="fa fa-sort-down icon-stack-3x"></i>
                                        </span>-->
                                    </th>
                                    <th class="col-wd-md">???????????????</th>
                                    <th class="col-wd-sm" data-toggle="tooltip" data-placement="top" title="??? ??? BIM?????????????????????">???</th>
                                    <th class="col-wd-sm" data-toggle="tooltip" data-placement="top" title="??? ??? ?????????????????????????????????">???</th>
                                    <th class="col-wd-sm" data-toggle="tooltip" data-placement="top" title="??? ??? BIM?????????????????????">???</th>
                                    <th class="col-wd-sm" data-toggle="tooltip" data-placement="top" title="??? ??? BIM360??????????????????">???</th>
                                    <th class="col-wd-sm" data-toggle="tooltip" data-placement="top" title="??? ??? ??????????????????">???</th>
                                    <th colspan='2' class="col-wd-lg" data-toggle="tooltip" data-placement="top" title="??? ??? iPD?????????????????????">???</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                        
                            <!--<div style="float:right;margin:20px 50px 20px 0;"><input type="button" class="btn btn-primary" value="?????????????????????" onClick="MultiCapture()"/></div>-->
                        </div>
                       @if (Session::has('access_token'))
                            <input type="hidden" id="access_token" value="{{Session::get('access_token')}}"/>
                        @endif
                    <!--</div>-->
                </div>
            </div>
            <div id="map-content" class="col-md-7">
                <div id="project_regions">
                    <div id="default_region_design">
                        <div>
                            <input type="button" onclick="LoadMap()" class="btn btn-link " value="???????????????"/>
                        </div>
                        <div class="mrq-div">
                            <marquee align="middle">
                                <span>????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</span>
                            </marquee>
                        </div> 
                    </div>
                </div>
                <div class="menu-title">
                    <img id="menuImage" src="/iPD/public/image/menu.png" alt="????????????" style="float: right; margin: 6px 15px 0 0;" onClick="toggleFilter()">
                </div>
                
            </div>
            
            <div id="report-content" class="col-md-7 outer-border-design">
                <div class="row" id="capture_report_content">
                    <div class="col-md-5 " id="general_report_info" style="margin-left:5px;">
                            <div style="background:whitesmoke;height:40px;" class="">
                                <i id="general_info_minimize_arrow" class="fa fa-toggle-left arrow-design " aria-hidden="true" style="float:right;right:0px;"></i>
                            </div>
                            <hr>
                            <div id="general-info" class="box5">
                                <span id="square2">&nbsp;&nbsp;&#9632;</span>&nbsp;<label id="branch_store"></label>
                                <ul id="outerList">
                                    <li><span id="square3">&#9632;</span>&nbsp;<span id="projectName"></span>
                                        <span><button class="btn myIcon hideIcon right_click_icon" id="icon_ji" onClick="OpenFile(this)">???</button></span>
                                        <button class="btn myIcon hideIcon right_click_icon" id="icon_ki" onClick="OpenFile(this)">???</button>
                                        <button class="btn myIcon hideIcon right_click_icon" id="icon_hou" onClick="OpenFile(this)">???</button>
                                        <button class="btn myIcon hideIcon right_click_icon" id="icon_tou" onClick="OpenFile(this)">???</button>
                                        <button class="btn myIcon hideIcon" id="icon_toku" data-toggle="modal" data-target="#myModal">???</button>
                                    </li>
                                        
                                    <li>
                                        <ul id="innerList">
                                            <li>??????????????????<span id="orderer"></span></li>
                                            <li>??????????????????<span id="designer"></span></li>
                                            <li>??????????????????<span id="builder"></span></li>
                                            <li>??????????????????<span id="structure"></span></li>
                                            <li>??????????????????<span id="totalArea"></span>&nbsp;[???]</li>
                                        </ul>
                                    </li>
                                </ul>
                        </div>
    
                            <div id="schedule" class="box2">
                                <div class="cur_date_group">
                                   <span id="cur_date"></span>
                                   <span class=" v-line"></span> 
                                </div>
                                
                                <div>
                                    <span class="schedule-title">?????????????????????<span id="schedule1"></span></span>
                                    <div id="slider1"></div>
                                </div>
                                <div>
                                   <span class="schedule-title">????????????<span id="schedule2"></span></span>
                                   <div id="slider2"></div> 
                                </div>
                                <div>
                                    <span class="schedule-title">??????????????????????????????????????????<span id="schedule3"></span></span>
                                    <div id="slider3"></div>
                                </div>
                                <div>
                                    <span class="schedule-title">?????????????????????<span id="schedule4"></span></span>
                                    <div id="slider4"></div>
                                </div>
                                <div>
                                    <span class="schedule-title">??????????????????<span id="schedule5"></span></span>
                                    <div id="slider5"></div>
                                </div>
                                <div>
                                    <span class="schedule-title">??????<span id="schedule6"></span></span>
                                    <span id="finished" style="color:red;font-weight:bold;float:right;"></span>
                                    <div id="slider6"></div>
                                    
                                </div>
                              
                        </div>
                            
                    </div>
                    <div id="report-item-group" class="col-md-7">
                        <div class="report-header" >
                        <span id="box_login_warning"></span>
                        <div id="btn-group">
                            <!--<input type="button" class="btn btn-primary" id="btnUpload" value="BOX UPLOAD" onclick="UploadImages()"/>-->
                            <input type="button" class="btn btn-primary" id="btnUpload" value="CAPTURE AS JPEG" onclick="MakeScreenShot()"/>
                            <input type="button" class="btn btn-primary" id="btnSave" value="SAVE TEXT" onclick="SaveData()"/>
                        </div>
                    </div>
                        <div id="report-body" >
                         &nbsp;&nbsp;&nbsp;&nbsp;<span id="square">&#9632;</span><span class="title">????????????</span> &nbsp;&nbsp;&nbsp;&nbsp;<span id="todayDate" class="title"></span>
                        <div class="" id="currentWeek">
                        <div class="col-md-12">
                                <div class="img1-div col-md-4">
                                    <div id="img1" class="preview-container box4"></div>
                                    <select id="img1_type" class="form-control input-sm">
                                        <option value=""></option>
                                        <option value="per">?????????</option>
                                        <option value="ext">??????</option>
                                        <option value="int">??????</option>
                                        <option value="sit">??????</option>
                                        <option value="vr">VR</option>
                                        <option value="mr">MR</option>
                                        <option value="mtg">???????????????</option>
                                        <option value="otr">???</option>
                                    </select>
                                    <div id="text1"  class="box3" disabled="disabled">
                                       <!--<textarea id="description1" disabled="disabled"></textarea> -->
                                    </div>
                                </div>    
                                <div class="img2-div col-md-4">
                                    <div id="img2" class="preview-container box4"></div>
                                    <select id="img2_type" class="form-control input-sm">
                                        <option value=""></option>
                                        <option value="per">?????????</option>
                                        <option value="ext">??????</option>
                                        <option value="int">??????</option>
                                        <option value="sit">??????</option>
                                        <option value="vr">VR</option>
                                        <option value="mr">MR</option>
                                        <option value="mtg">???????????????</option>
                                        <option value="otr">???</option>
                                    </select>
                                   <div id="text2"  class="box3" disabled="disabled">
                                        <!--<textarea id="description2" disabled="disabled"></textarea> -->
                                    </div>
                                </div>
                                <div class="img3-div col-md-4">
                                    <div id="img3" class="preview-container box4"></div>
                                    <select id="img3_type" class="form-control input-sm">
                                        <option value=""></option>
                                        <option value="per">?????????</option>
                                        <option value="ext">??????</option>
                                        <option value="int">??????</option>
                                        <option value="sit">??????</option>
                                        <option value="vr">VR</option>
                                        <option value="mr">MR</option>
                                        <option value="mtg">???????????????</option>
                                        <option value="otr">???</option>
                                    </select>
                                   <div id="text3"  class="box3" disabled="disabled">
                                        <!--<textarea id="description2" disabled="disabled"></textarea> -->                                 
                                    </div>
                                </div>
                               <ul class="report_type_list">
                                   <li id="ipd_report_li" class="col-md-6">
                                      <div class="reports_header">iPDC??????????????????</div> 
                                      <div id = "ipd_report" class="reports" contenteditable="true">
                                     </div> 
                                   </li>
                                   <li id="leader_meeting_ipd_part1_li" class="col-md-6">
                                      <div class="reports_header">??????????????????????????????????????????iPDC???1???</div> 
                                      <div id = "leader_meeting_ipd_part1" class="reports" contenteditable="true">
                                     </div> 
                                   </li>
                                   <li id="leader_meeting_ipd_part2_li" class="col-md-6">
                                      <div class="reports_header">??????????????????????????????????????????iPDC???2???</div> 
                                      <div id = "leader_meeting_ipd_part2" class="reports" contenteditable="true">
                                     </div> 
                                   </li>
                                   <li id="leader_meeting_ipd_part3_li" class="col-md-6">
                                      <div class="reports_header">??????????????????????????????????????????iPDC???3???</div> 
                                      <div id = "leader_meeting_ipd_part3" class="reports" contenteditable="true">
                                     </div> 
                                   </li>
                                   <li id="leader_meeting_techno_dept_li" class="col-md-6">
                                      <div class="reports_header">?????????????????????????????????????????????????????????</div> 
                                      <div id = "leader_meeting_techno_dept" class="reports" contenteditable="true">
                                     </div> 
                                   </li>
                                   <li id="architecture_leader_meeting_ipd_part1_li" class="col-md-6">
                                      <div class="reports_header">?????????????????????????????????????????????????????????iPDC???1???</div> 
                                      <div id = "architecture_leader_meeting_ipd_part1" class="reports" contenteditable="true">
                                     </div> 
                                   </li>
                                   <li id="architecture_leader_meeting_ipd_part2_li" class="col-md-6">
                                      <div class="reports_header">?????????????????????????????????????????????????????????iPDC???2???</div> 
                                      <div id = "architecture_leader_meeting_ipd_part2" class="reports" contenteditable="true">
                                     </div> 
                                   </li>
                                   <li id="architecture_leader_meeting_ipd_part3_li" class="col-md-6">
                                      <div class="reports_header">?????????????????????????????????????????????????????????iPDC???3???</div> 
                                      <div id = "architecture_leader_meeting_ipd_part3" class="reports" contenteditable="true">
                                     </div> 
                                   </li>
                                   <li id="leader_meeting_civil_engineer_li" class="col-md-6">
                                      <div class="reports_header">?????????????????????????????????????????????</div> 
                                      <div id = "leader_meeting_civil_engineer" class="reports" contenteditable="true">
                                     </div> 
                                   </li>
                                   <li id="structure_report_li" class="col-md-6">
                                      <div class="reports_header">??????????????????</div> 
                                      <div id="structure_report" class="reports" contenteditable="true">
                                      </div> 
                                   </li>
                                   <li id="design_report_li" class="col-md-6">
                                       <div class="reports_header">??????????????????</div> 
                                       <div id="design_report" class="reports" contenteditable="true">
                                     </div> 
                                   </li>
                                   <li id="estimation_report_li" class="col-md-6">
                                       <div class="reports_header">????????????????????????</div> 
                                       <div id="estimation_report" class="reports" contenteditable=true>
                                     </div> 
                                   </li>
                                   <li id="renewal_report_li" class="col-md-6">
                                       <div class="reports_header">???????????????????????????</div> 
                                       <div id="renewal_report" class="reports" contenteditable=true>
                                     </div> 
                                   </li>
                                   <li id="equipment_design_report_li" class="col-md-6">
                                       <div class="reports_header">??????????????????</div> 
                                       <div id="equipment_design_report" class="reports" contenteditable=true>
                                     </div> 
                                   </li>
                                   <li id="quality_control_report_li" class="col-md-6">
                                         <div class="reports_header">?????????????????????</div> 
                                         <div id="quality_control_report" class="reports" contenteditable="true">
                                         </div> 
                                   </li>
                                   <li id="construction_report_li" class="col-md-6">
                                         <div class="reports_header">???????????????</div> 
                                         <div id="construction_report" class="reports" contenteditable="true">
                                         </div> 
                                   </li>
                                   <li id="production_engineer_report_li" class="col-md-6">
                                         <div class="reports_header">?????????????????????</div> 
                                         <div id="production_engineer_report" class="reports" contenteditable="true">
                                         </div> 
                                   </li>
                                   <li id="production_design_report_li" class="col-md-6">
                                         <div class="reports_header">?????????????????????</div> 
                                         <div id="production_design_report" class="reports" contenteditable="true">
                                         </div> 
                                   </li>
                                   <li id="construction_office_report_li" class="col-md-6">
                                         <div class="reports_header">??????????????????????????????????????????????????????</div> 
                                         <div id="construction_office_report" class="reports" contenteditable="true">
                                         </div> 
                                   </li>
                                   <li id="construction_equipment_report_li" class="col-md-6">
                                         <div class="reports_header">?????????????????????????????????</div> 
                                         <div id="construction_equipment_report" class="reports" contenteditable="true">
                                         </div> 
                                   </li>
                               </ul>

                                
                                <!--<div id="test_hashtag" contenteditable=true class="box1 mar-bottom col-md-12" style="border:1px solid red;height:50px;" >-->
                                <!--</div>   -->
                    
                        </div>
                    </div><!--item-->
                    </div><!--end report-body-->
                    </div>
                 
                </div>
                
                <div id="capture-img" class="col-md-12 hideDiv" style = "min-height:600px;"></div>
                
            </div><!--end report-content-->
            
    </div><!--end parent-->
    
    <div id="image-bar" class="col-md-12" style="margin-left:0;margin-right:0;">
        
        <div class="col-md-12">
            <i id="minimize-bottom" class="fa fa-toggle-up arrow-design" style="float:right;margin:10 -5 0 0 !important;"></i>
        </div>
        <hr>
        <div class="row" id="bottom-content" style="margin-left:5px;">
           <span id="highlight_date" class="col-lg-2 col-md-3"></span>

            <div class="col-md-9">
              <div class="">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                     
                    </div>
                   <div class="swiper-button-prev swiper-custom-button">
                    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                  </div>
                  <div class="swiper-button-next swiper-custom-button">
                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                  </div>  
                  </div>
              </div>
              
           </div>
            <div id="min-max-bottom" class="col-md-1">
                <div class="label-grp">
                    <label id="lated_info" class="imageLabel" onclick="RecallRowClick()" style="width:110px;">????????????</label>
                    <label id="archive_show" class="archiveLabel" onclick="ArchiveDisplay()" >?????????????????????</label>
                    <label id="archive_hide" class="archiveLabel" onclick="HideArchive()" >????????????????????????</label>
                </div>
            </div>
        </div><!--end row-->
        
    </div> 

     <!--???????????????????????? start-->
    <div class="modal fade" id="myModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>??</span></button>
				<h4 class="modal-title cus-popu-title">????????????<span class="cus-popu-title" id="parent-prj"></span></h4>
			</div>
			<div class="modal-body">
				<textarea id="txtASpecialFeature" placeholder="????????????"></textarea>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onClick="SaveSpecialFeature()" data-dismiss="modal">SAVE</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
			</div>
		</div>
	</div>
    </div>
    <!--???????????????????????????end -->
    
    <!--right click content-->
    <div class="right-click-content">
        <div style="display:flex;">
          <h4><span id="icon_header"></span>????????????????????????</h4>
          <input type="button" value="??????" id="btnSaveUrl" onClick="SaveFileLink()" class="btn btn-primary btn-sm" style="margin-left:30px;height:25px;padding:2px 5px 5px 5px;margin-top:10px;"/>  
        </div>
        <hr>
        <textarea id="fileURL" class="form-contro"></textarea>
        
    </div>
    
    <!--hashtag popup-->
    <div id ="hashtag_popup" class="">
        <ul class="list-group"></ul>
    </div>

</main>
@endsection