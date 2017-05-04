//worker文件

//定义用于计数的变量
var num = 0;
//定义用于累加计数的函数
function startAdd(){
    postMessage(num);
    num++;
    setTimeout(startAdd,1000);
}
startAdd();