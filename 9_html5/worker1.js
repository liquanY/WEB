//worker�ļ�

//�������ڼ����ı���
var num = 0;
//���������ۼӼ����ĺ���
function startAdd(){
    postMessage(num);
    num++;
    setTimeout(startAdd,1000);
}
startAdd();