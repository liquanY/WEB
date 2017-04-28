$.fn.extend({
    test : function(){
        alert($("button").text());
    }
});
$.fn.getJob = function(job){
    return job;
};
$.fn.changeBack = function(color){
    this.css("background",color);
};