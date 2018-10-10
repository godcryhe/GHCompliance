// $(document).ready(function(){
// 	$('.index-slider ul').carouFredSel({
// 		scroll:{items:1,pauseOnHover:'immediate'},
// 		items:{visible:1},
// 		auto:{timeoutDuration:2500},
// 		prev:'.prev',
// 		next:'.next',
// 	 	pauseOnHover:'immediate',pagination:".pager"});
// 	$(".index-slider").hover(function(){$(this).toggleClass("hover")})
// });
// 
// 以上是扒页面时自带的
// 
// 
// 以下时写的
	m=0;
	//获取img元素对象集合
	list = document.getElementsByName('list1');
	//图片轮播左右按钮
	function func(b){
		//把定时器清除
		clearInterval(mytime);
		//alert(m);
		switch(b){
			case '-':
			m =m-2;
			if(m<-1){
				m=3;
			}
			break;
			case "+":
				//alert(m);
			break;
		}
		running();
		//调用定时器
		mytime = setInterval(running,2200);
	}
	//让图片显示
	function show(m){
		//遍历
		for(var i=0;i<list.length;i++){
			if(i==m){
				list[i].style.display="block";
			}else{
				list[i].style.display="none";
			}
		}
	}
	//让图片滚动
	function running(){
		m++
		if(m==4){
			m=0;
		}
		show(m);
	}
	//定时器
	mytime = setInterval(running,3000);