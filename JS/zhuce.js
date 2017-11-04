function queRenMiMa(num)
{
	var Input=document.getElementsByClassName('input_css');
	var cuoWuTiShi=document.getElementsByClassName('cuoWuTiShi');
     
     	if(Input[num].value==""||Input[num].value==null)
     	{
     		cuoWuTiShi[num].innerHTML=Input[num].placeholder+"不得为空";
     	}
     	else 
     	{
     		cuoWuTiShi[num].innerHTML="";
     		if(num==2&&Input[1].value!==Input[2].value)
     		{
     			cuoWuTiShi[2].innerHTML="两次密码不一致!"
     		}else if(num==2&&Input[1].value===Input[2].value) 
     		{
     			cuoWuTiShi[2].innerHTML=""
     		}
     	}
	
}

function chongZhi()
{
	var Input=document.getElementsByClassName('input_css');
	var cuoWuTiShi=document.getElementsByClassName('cuoWuTiShi');
	for(var i=0;i<=7;i++)
	{
		Input[i].value="";
		cuoWuTiShi[i].innerHTML="";
	}
}
