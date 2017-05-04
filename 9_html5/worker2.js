onmessage = function(event){
    var message = event.data;
    if(message == "init"){
        postMessage("hello world");
    }else if(message.indexOf("我")>=0){
        postMessage("nice to meet you");
    }
};