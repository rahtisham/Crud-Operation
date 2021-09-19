/*
 Template Name: School Management System - Bootstrap 4 Admin Dashboard
 Author: Ahtisham
 Website: www.mahtisham.com
 File: Main js
 */


 jQuery(document).ready(function(){
    jQuery('#classSelect').change(function(){
         var classID = jQuery(this).val();
         var _token = $("#token").val();
        /**Ajax code**/
        jQuery.ajax({
            url:"class-dependent-dropdown",
            type:'post',
            data: {
                "_token": _token,
                "classID": classID
                },
            success:function(result) {
                //console.log(data);
                jQuery('#subject').html(result);
            }
        });
        /**Ajax code ends**/

     });
 });


 $(document).ready(function(){
    $('.btn-classRoutin').click(function(e){
        e.preventDefault();

        var _token = $('#token').val();
        var classSelect = $('#classSelect').val();
        var subject = $('#subject').val();
        var section = $('#section').val();
        var teacher = $('#teacher').val();
        var classroom = $('#classroom').val();
        var days = $('#days').val();
        var statingHour = $('#statingHour').val();
        var startingMinut = $('#startingMinut').val();
        var endingHour = $('#endingHour').val();
        var engdingMinut = $('#engdingMinut').val();

        /** Ajax code */
        $.ajax({
            url: "class-routine-add",
            type: "post",
            data:{
                "_token": _token,
                "classSelect": classSelect,
                "subject": subject,
                "section": section,
                "teacher": teacher,
                "classroom": classroom,
                "days": days,
                "statingHour": statingHour,
                "startingMinut": startingMinut,
                "endingHour": endingHour,
                "engdingMinut": engdingMinut
            },
            success:function(result){
                /** console.log(result) */
                // alert('Ajax working');
                
                // var abc = $('#classSelect').val(result);
                // alert(abc);
                swal("Record Has Submited!");
                // $('#exampleModalCenter').hide();
            },
            error:function(error){
                alert('Pleas! fill these fields');
                // $('#classSelect').html(error);
             }
        });
        /**  End of ajax code **/    
        

    });

});