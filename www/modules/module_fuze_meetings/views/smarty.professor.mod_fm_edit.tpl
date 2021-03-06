{capture name="_mod_fm_prof_edit"}
{if $_FUZE_PROF_MEETING_EDIT_MEETING.meeting_id}

<div style="height:100%;width:100%;position:relative;" id="_mod_fm_prof_container">
 <div id="_mod_fm_prof_mask" style="position:absolute; top:0px; left:0px; width:100%; height:100%; display:none;">
  <div style="filter:alpha(opacity=35); -moz-opacity:0.35; -khtml-opacity: 0.35; opacity: 0.35; width:100%; height:100%; z-index:100; background:#AAAAAA; position:absolute; top:0px; left:0px; display:inherit;">&nbsp;</div>
  <div style="z-index:101;position:absolute;top:0px;left:0px; width:100%; height:100%; display:inherit;">
   <table cellpadding="0" cellspacing="0" style="width:100%; height:100%;">
    <tr valign="middle">
     <td align="center">
      <img src="{$MOD_FM_BASELINK}images/loader-blue.gif"/>
     </td>
    </tr>
   </table>
  </div>
 </div>
 <div>
  <table cellpadding="5" cellspacing="2" style="width:100%;">
   <tr valign="top">
    <td style="width:125px;">
     {$smarty.const._FUZE_PROF_SCHEDULE_MEETING_NAME}
    </td>
    <td>
     <input type="hidden" id="_mod_fm_prof_schedule_form_meeting_id" value="{$_FUZE_PROF_MEETING_EDIT_MEETING.meeting_id}"/>
     <input type="text" style="width:400px;" id="_mod_fm_prof_schedule_form_meeting_name" name="_mod_fm_prof_schedule_form_meeting_name" value="{$_FUZE_PROF_MEETING_EDIT_MEETING.subject}"/>
    </td>
   </tr>
   <tr valign="top">
    <td style="width:125px;">
     {$smarty.const._FUZE_PROF_SCHEDULE_MEETING_SCHEDULE}
    </td>
    <td>
     {eF_template_html_select_date prefix=starttime_ start_year="+0" end_year="+1" time=$_FUZE_PROF_MEETING_EDIT_MEETING.meeting_date field_order=$T_DATE_FORMATGENERAL} {$smarty.const._TIME}: {html_select_time time=$_FUZE_PROF_MEETING_EDIT_MEETING.meeting_time prefix="starttime_" display_seconds=false}
    </td>
   </tr>
   <tr valign="top">
    <td style="width:125px;">
     {$smarty.const._FUZE_PROF_SCHEDULE_MEETING_LESSON}
    </td>
    <td>
     <select name="_mod_fm_schedule_lesson_list" id="_mod_fm_schedule_lesson_list" style="width:400px;" onchange="javascript:_mod_fm_fetch_students_for_lesson();">
      <option value="0">{$smarty.const._FUZE_PROF_SCHEDULE_MEETING_SELECT}</option>
      {foreach name="lesson_loop" key="lesson_id" item="lesson" from=$_FUZE_PROF_SCHEDULE_LESSON_LIST}
       <option value="{$lesson_id}"{if $lesson_id == $_FUZE_PROF_MEETING_EDIT_MEETING.lesson_id} selected{/if}>{$lesson}</option>
      {foreachelse}

      {/foreach}
     </select>
    </td>
   </tr>
   <tr valign="top">
    <td style="width:125px;">
     {$smarty.const._FUZE_PROF_SCHEDULE_MEETING_PARTICIPANTS}
    </td>
    <td style="padding:2px;">
     <div id="_mod_fm_prof_schedule_student_list">
     {if !$T_SORTED_TABLE || $T_SORTED_TABLE == 'studentListTable'}


<!--ajax:studentListTable-->


       <table style="width:100%;" class="sortedTable" size="{$T_TABLE_SIZE}" sortBy="0" order="desc" id="studentListTable" useAjax="1" rowsPerPage="{$smarty.const.G_DEFAULT_TABLE_SIZE}" url="{$MOD_FM_BASEURL}&action=fetch_users&">
        <tr class="topTitle">
         <td name="login" class="topTitle" style="width:150px;">{$smarty.const._FUZE_PROF_SCHEDULE_MEETING_LOGIN}</td>
         <td name="name" class="topTitle" style="width:230px;">{$smarty.const._FUZE_PROF_SCHEDULE_MEETING_PARTICIPANT_NAME}</td>
         <td name="surname" class="topTitle">{$smarty.const._FUZE_PROF_SCHEDULE_MEETING_PARTICIPANT_SURNAME}</td>
         <td name="selected" class="topTitle noSort" style="width:100px;text-align:center;">{$smarty.const._FUZE_PROF_SCHEDULE_MEETING_PARTICIPANT_SELECTED}</td>
        </tr>
        {foreach name="student_loop" key="student_id" item="student" from=$T_DATA_SOURCE}
         <tr class="{cycle values ="oddRowColor,evenRowColor"} defaultRowHeight">
          <td>{$student.login}</td>
          <td>{$student.name}</td>
          <td>{$student.surname}</td>
          <td align="center"><input type="checkbox" class="fuze_checkbox" id="fuze_student_checkbox_{$student_id}" onchange="{literal}javascript:_mod_fm_toggle_student('{/literal}{$student_id}{literal}');{/literal}"/></td>
         </tr>
        {foreachelse}
         <tr class="defaultRowHeight oddRowColor">
          <td class="emptyCategory" colspan = "100%">{$smarty.const._NODATAFOUND}</td>
         </tr>
        {/foreach}
       </table>


<!--/ajax:studentListTable-->



{/if}
     </div>
    </td>
   </tr>
   <tr valign="top">
    <td>&nbsp;</td>
    <td>
     <table cellpadding="0" cellspacing="0" style="width:100%;">
      <tr>
       <td>
        <input type="checkbox" checked name="_mod_fm_prof_schedule_form_email" id="_mod_fm_prof_schedule_form_email"/> <label for="_mod_fm_prof_schedule_form_email">{$smarty.const._FUZE_PROF_SCHEDULE_MEETING_EDIT_SEND_EMAIL}</label>
       </td>
      </tr>
      <tr>
       <td><input type="checkbox" checked name="_mod_fm_prof_schedule_form_calendar" id="_mod_fm_prof_schedule_form_calendar"/> <label for="_mod_fm_prof_schedule_form_calendar">{$smarty.const._FUZE_PROF_SCHEDULE_MEETING_CALENDAR}</label></td>
      </tr>
      <tr>
       <td style="padding-top:15px;"><input type="button" class="flatButton" id="_mod_fm_prof_schedule_form_btn" name="_mod_fm_prof_schedule_form_btn" value="{$smarty.const._FUZE_PROF_SCHEDULE_MEETING_EDIT_BTN}" onclick="javascript:_mod_fm_prof_edit();"/></td>
      </tr>
     </table>
    </td>
   </tr>
  </table>
 </div>
</div>

{/capture}

{eF_template_printBlock title=$smarty.const._FUZE_MEETINGS data=$smarty.capture._mod_fm_prof_edit image= $T_RSS_MODULE_BASELINK|cat:'images/rss32.png' absoluteImagePath = 1}

<script>
{literal}
 var _mod_fm_student_list_selected = new Array();
{/literal}
{foreach name="student_loop_prepopulate" key="student_id" item="student" from=$_FUZE_PROF_MEETING_EDIT_MEETING.attendees}
{literal}
_mod_fm_student_list_selected.push('{/literal}{$student_id}{literal}');
{/literal}
{/foreach}
{literal}
 function _mod_fm_trim(string) {
  return string.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
 }

 function _mod_fm_prof_mask_on() { $('_mod_fm_prof_mask').show(); }
 function _mod_fm_prof_mask_off() { $('_mod_fm_prof_mask').hide(); }
 function _mod_fm_prof_edit() {
  _mod_fm_prof_mask_on();
  var meeting_id = $('_mod_fm_prof_schedule_form_meeting_id').getValue();
  var meeting_name = _mod_fm_trim($('_mod_fm_prof_schedule_form_meeting_name').getValue());
  var meeting_lesson = $('_mod_fm_schedule_lesson_list').getValue();
  var student_list = _mod_fm_student_list_selected;
  var meeting_year = $('starttime_Year').getValue();
  var meeting_month = $('starttime_Month').getValue();
  var meeting_day = $('starttime_Day').getValue();
  var meeting_hour = $$('select[name=starttime_Hour]')[0].getValue();
  var meeting_minute = $$('select[name=starttime_Minute]')[0].getValue();
  var send_invites = $('_mod_fm_prof_schedule_form_email').checked;
  var add_events = $('_mod_fm_prof_schedule_form_calendar').checked;
  // Check that all necessary fields are here
  if (!meeting_name.length || !meeting_lesson || !meeting_id) {
   alert('{/literal}{$smarty.const._FUZE_PROF_SCHEDULE_ALL_FIELDS_MANDATORY}{literal}');
   _mod_fm_prof_mask_off();
   return false;
  }
  else if (!student_list.length) {
   alert('{/literal}{$smarty.const._FUZE_PROF_SCHEDULE_NO_STUDENTS_ERROR}{literal}');
   _mod_fm_prof_mask_off();
   return false;
  }
  else {
   var url = '{/literal}{$MOD_FM_BASEURL}{literal}&action=validate_date&date='+meeting_year+'-'+meeting_month+'-'+meeting_day+'&time='+meeting_hour+'-'+meeting_minute+'-00';
   new Ajax.Request(url, {
    method: 'get',
    asynchronous: true,
    onFailure: function() {_mod_fm_prof_mask_off();},
    onSuccess: function(response) {
     var response = response.responseText.evalJSON();
     if (response.success) {
      // We proceed to setting up the meeting
      var url = ''
      url += '{/literal}{$MOD_FM_BASEURL}{literal}&action=meeting_edit&';
      url += 'meeting_id='+meeting_id+'&';
      url += 'starttime='+meeting_year+'-'+meeting_month+'-'+meeting_day+' '+meeting_hour+':'+meeting_minute+':00&';
      url += 'subject='+meeting_name+'&';
      url += 'lesson_id='+meeting_lesson+'&';
      url += 'send_invites='+(send_invites ? 1 : 0)+'&';
      url += 'add_events='+(add_events ? 1 : 0)+'&';
      url += 'students='+student_list.toString();
      new Ajax.Request(url, {
       method: 'get',
       asynchronous: true,
       onFailure: function() { /* DO NOTHING */},
       onSuccess: function(response) {
        var response = response.responseText.evalJSON();
        if (response.success) {
         _mod_fm_prof_mask_off();
         window.location = 'professor.php?ctg=control_panel';
         return false;
        }
        else {
         if (response.url) {
          var _mod_fm_user_login_url = response.url;
          popupFullScreenScroll(_mod_fm_user_login_url);
         }
         else {
          alert(response.error_msg);
         }
         _mod_fm_prof_mask_off();
        }
       }
      });
     }
     else {
      alert('{/literal}{$smarty.const._FUZE_PROF_SCHEDULE_DATE_TIME_ERROR}{literal}');
      _mod_fm_prof_mask_off();
     }
    }
   });
  }
 }

 function _mod_fm_toggle_student(id) {
  if (_mod_fm_schedule_is_selected(id)) { _mod_fm_schedule_unselect_student(id); }
  else { _mod_fm_schedule_select_student(id); }
 }

 function _mod_fm_schedule_is_selected(id) {
  for (var i=0; i<_mod_fm_student_list_selected.length; i++) {
   if (_mod_fm_student_list_selected[i] == id) return true;
  }
  return false;
 }

 function _mod_fm_schedule_select_student(id) { _mod_fm_student_list_selected.push(id); }

 function _mod_fm_schedule_unselect_student(id) {
  var tmp_selected = _mod_fm_student_list_selected;
  _mod_fm_student_list_selected = new Array();
  for (var i=0; i<tmp_selected.length; i++) {
   if (tmp_selected[i] != id) {
    _mod_fm_student_list_selected.push(tmp_selected[i]);
   }
  }
 }

 function _mod_fm_fetch_students_for_lesson() {
  // First we need to change the lesson id value in SESSION
  _mod_fm_prof_mask_on();
  var lesson_id = $('_mod_fm_schedule_lesson_list').getValue();
  var url = '{/literal}{$MOD_FM_BASEURL}{literal}&action=set_schedule_lesson&lesson_id='+lesson_id;
  new Ajax.Request(url, {
   method: 'get',
   asynchronous: true,
   onFailure: function() {_mod_fm_prof_mask_off();},
   onSuccess: function(response) {
    _mod_fm_student_list_selected = new Array(); /* Zeroing selected students */
    currentOffset[0] = 0; /* zeroing offset before processing new table data */
    eF_js_redrawPage('studentListTable', true);
    _mod_fm_prof_mask_off();
   }
  });
 }

 function onSortedTableComplete() {
  var ar = $$('input.fuze_checkbox');
  var ids = new Array();
  for (var i=0; i<ar.length; i++) { ids.push(ar[i].id); }
  for (var i=0; i<_mod_fm_student_list_selected.length; i++) {
   if (in_array('fuze_student_checkbox_'+_mod_fm_student_list_selected[i],ids)) {
    try {
     $('fuze_student_checkbox_'+_mod_fm_student_list_selected[i]).checked = true;
    }
    catch (e) { /* DO NOTHING */ }
   }
  }
 }

 function in_array(needle, stack) {
  for (var i=0; i<stack.length; i++) {
   if (stack[i] == needle) return true;
  }
  return false;
 }

 /**

	 * Handles the mass select/unselect.

	 */
 function ajaxPost() {
  var tmp_checkboxes = $$('input.fuze_checkbox');
  var selected_checkboxes = new Array();
  var unselected_checkboxes = new Array();
  for (var i=0; i<tmp_checkboxes.length; i++) {
   if (tmp_checkboxes[i].checked) { selected_checkboxes.push(tmp_checkboxes[i].id.substr(22)); }
   else { unselected_checkboxes.push(tmp_checkboxes[i].id.substr(22)); }
  }
  for (var i=0; i<selected_checkboxes.length; i++) {
   if (!_mod_fm_schedule_is_selected(selected_checkboxes[i])) { _mod_fm_schedule_select_student(selected_checkboxes[i]); }
  }
  for (var i=0; i<unselected_checkboxes.length; i++) {
   if (_mod_fm_schedule_is_selected(unselected_checkboxes[i])) { _mod_fm_schedule_unselect_student(unselected_checkboxes[i]); }
  }
 }
 function popupFullScreenScroll(url) {
  var top = 0;
  var left = 0;
  w = screen.width;
  h = screen.height;
  var target = window.open(url, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
 }
{/literal}
</script>


{else}
{capture name="_mod_fm_prof_edit"}
<div style="height:100px;width:100%;font-size:15px; text-align:center; color:#AA0000;">{$_FUZE_PROF_MEETING_EDIT_ERROR}</div>
{/capture}
{eF_template_printBlock title=$smarty.const._FUZE_MEETINGS data=$smarty.capture._mod_fm_prof_edit image= $T_RSS_MODULE_BASELINK|cat:'images/rss32.png' absoluteImagePath = 1}
{/if}
