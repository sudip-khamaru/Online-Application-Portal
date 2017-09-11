// JavaScript Document
$(function() {
var boardtags = [
"Andhra Pradesh  Board Of Intermediate Education Andhra Pradesh",
"Assam Higher Secondary Education Council",
"Bihar Intermediate Education Council",
"Bihar School Examination Board",
"Central Board Of Secondary Education",
"Council For The Indian School Certificate Examinations",
"Goa Board Of Secondary & Higher Secondary Education",
"Gujarat Secondary And Higher Secondary Education Board",
"Haryana Board Of School Education",
"H.P. Board Of School Education",
"J&K State Board Of School Education",
"Government Of Karnataka Dept. Of Pre-University Education",
"Karnataka Secondary Education Examination Board",
"Kerala Board Of Public Examination Pareeksha Bhawan",
"Kerala Board Of Higher Secondary Education",
"Maharashtra State Board Of Secondary And Higher Secondary Education",
"Madhya Pradesh  Board Of Secondary Education ",
"M.P. State Open School Board Of Secondary Education Campus",
"Manipur Board Of Secondary Education",
"Manipur  Council Of Higher Secondary Education ",
"Meghalaya Board Of School Education",
"Mizoram Board Of School Education",
"Nagaland Board Of School Education",
"National Institute Of Open Schooling",
"Council Of Higher Secondary Education Orissa",
"Board Of Secondary Education Orissa",
"Punjab School Education Board",
"Board Of Secondary Education Rajasthan",
"Tamil Nadu Board Of Higher Secondary Education",
"Tripura Board Of Secondary Education",
"U.P. Board Of High School And Intermediate Education",
"West Bengal Council Of Higher Secondary Education",
"West Bengal Board Of Madrasha Education",
"Ravindra Mukta Vidyalaya",
"Chhattisgarh Board Of Secondary Education",
"Uttranchal Shiksha Evm Pariksha Prishad (Nee:- Board Of School Education Uttarakhand)",
"Jharkhand Academic Council Ranchi",
"West Bengal State Council of Vocational Education and Training",
"Others (Only if outside India)"
];
$( "#university" ).autocomplete({
//source: availablesubjects, 

 source: function(req, responseFn) {
        var re = $.ui.autocomplete.escapeRegex(req.term);
        var matcher = new RegExp( "^" + re, "i" );
        var a = $.grep( boardtags, function(item,index){
            return matcher.test(item);
        });
        responseFn( a );
    },  
  change: function( event, ui ) { 
  val = $(this).val();
  exists = $.inArray(val,boardtags);
  if (exists<0) {
    $(this).val("");
    return false;
  }

}
});
});
