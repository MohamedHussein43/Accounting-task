var mode;
function modeFun(mode)
{
	if(mode===1){
		var newlink = document.getElementById("link1");
		newlink.setAttribute("rel", "stylesheet");
		newlink.setAttribute("href", "hotelbook.css");
	}
	else{
		var newlink = document.getElementById("link1");
		newlink.setAttribute("rel", "stylesheet");
		newlink.setAttribute("href", "hotelbook_Dark.css");
	}
}



var tokio;
function bigImgControlTokio(tokio)
{
	if(tokio===1)
		document.getElementById("bigImgTokio").innerHTML ="<img class='bigImg' src='Tokio\\tokio1.jpg'>"
	else if(tokio===2)
		document.getElementById("bigImgTokio").innerHTML ="<img class='bigImg' src='Tokio\\tokio2.jpg'>"
	else if(tokio===3)
		document.getElementById("bigImgTokio").innerHTML ="<img class='bigImg' src='Tokio\\tokio3.jpg'>"
	else if(tokio===4)
		document.getElementById("bigImgTokio").innerHTML ="<img class='bigImg' src='Tokio\\tokio4.jpg'>"
	else if(tokio===5)
		document.getElementById("bigImgTokio").innerHTML ="<img class='bigImg' src='Tokio\\tokio5.jpg'>"
	else if(tokio===6)
		document.getElementById("bigImgTokio").innerHTML ="<img class='bigImg' src='Tokio\\tokio6.jpg'>"
	else if(tokio===7)
		document.getElementById("bigImgTokio").innerHTML ="<img class='bigImg' src='Tokio\\tokio7.jpg'>"
	
	
}

$(document).ready(function(){
	$("#CkeckButtonTokio").click(function(){
	$("#selectDataTokio").slideToggle("slow");
  });
});


$(document).ready(function(){
	$("#CkeckButtonLondon").click(function(){
	$("#selectDataLondon").slideToggle("slow");
  });
});


$(document).ready(function(){
	$("#CkeckButtonParis").click(function(){
	$("#selectDataParis").slideToggle("slow");
  });
});


  var d=[];
function roomnoTokio()
{

	d[0]=form.chOut.value;
	d[1]=form.chIn.value;
	d[2]=form.singleDouble.value;
	d[3]=form.singleDouble.value;
	d[4]=form.bedno.value;
	d[5]=form.bedno.value;
	var indx=0;
	var arry=[d.length];
	for (var i=0;i<d.length; i++)
	{
		if(d[i]=="")
		{arry[i]=0}
		else
		{arry[i]=1;indx++;}
	}
	for (var i=0;i<d.length; i++)
	{
		if(arry[i]===1)
			{
				if(i<2)
				document.getElementById("in"+i).style.border="1px solid black";
				else
				document.getElementById("in"+i).style.border="none";
			}
		else
			{document.getElementById("in"+i).style.border="2px solid red";}
		if(indx===d.length)
		{document.getElementById("roomNoTokio").innerHTML="Your Room Number :12B<br>You Pay In Hotel";}

}
}

function roomnoLondon()
{

	d[0]=form2.chOut2.value;
	d[1]=form2.chIn2.value;
	d[2]=form2.singleDouble2.value;
	d[3]=form2.singleDouble2.value;
	d[4]=form2.bedno2.value;
	d[5]=form2.bedno2.value;
	var indx=0;
	var arry=[];
	for (var i=0;i<d.length; i++)
	{
		if(d[i]=="")
		{arry[i]=0}
		else
		{arry[i]=1;indx++;}
	}
	for (var i=0;i<d.length; i++)
	{
		if(arry[i]===1)
			{
				if(i<2)
				document.getElementById("inl"+i).style.border="1px solid black";
				else
				document.getElementById("inl"+i).style.border="none";
			}
		else
			{document.getElementById("inl"+i).style.border="2px solid red";}
		if(indx===d.length)
		{document.getElementById("roomNoLondon").innerHTML="Your Room Number :27C<br>You Pay In Hotel";}

}
}

function roomnoParis()
{

	d[0]=form3.chOut3.value;
	d[1]=form3.chIn3.value;
	d[2]=form3.singleDouble3.value;
	d[3]=form3.singleDouble3.value;
	d[4]=form3.bedno3.value;
	d[5]=form3.bedno3.value;
	var indx=0;
	var arry=[];
	for (var i=0;i<d.length; i++)
	{
		if(d[i]=="")
		{arry[i]=0}
		else
		{arry[i]=1;indx++;}
	}
	for (var i=0;i<d.length; i++)
	{
		if(arry[i]===1)
			{
				if(i<2)
				document.getElementById("inp"+i).style.border="1px solid black";
				else
				document.getElementById("inp"+i).style.border="none";
			}
		else
			{document.getElementById("inp"+i).style.border="2px solid red";}
		if(indx===d.length)
		{document.getElementById("roomNoParis").innerHTML="Your Room Number :27C<br>You Pay In Hotel";}

}
}




var rateTokio=7.9,reviewsTokio=2500;
document.getElementById("rateIntTokio").innerHTML =rateTokio;
if(rateTokio>9.2)
	document.getElementById("rateStringTokio").innerHTML = "Excellent"+"<br>"+"reviews"+reviewsTokio;
else if(rateTokio>=8)
	document.getElementById("rateStringTokio").innerHTML = "Very Good"+"<br>"+"reviews"+reviewsTokio;
else if(rateTokio>=5)
	document.getElementById("rateStringTokio").innerHTML="Good"+"<br>"+"reviews"+reviewsTokio;
else if(rateTokio>=3)
	document.getElementById("rateStringTokio").innerHTML="Not Bad"+"<br>"+"reviews"+reviewsTokio;
else if(rateTokio>=0)
	document.getElementById("rateStringTokio").innerHTML="Bad"+"<br>"+"reviews"+reviewsTokio;



var london;
function bigImgControlLondon(london)
{
	if(london===1)
		document.getElementById("bigImgLondon").innerHTML ="<img class='bigImg' src='London\\london1.jpg'>"
	else if(london===2)
		document.getElementById("bigImgLondon").innerHTML ="<img class='bigImg' src='London\\london2.jpg'>"
	else if(london===3)
		document.getElementById("bigImgLondon").innerHTML ="<img class='bigImg' src='London\\london3.jpg'>"
	else if(london===4)
		document.getElementById("bigImgLondon").innerHTML ="<img class='bigImg' src='London\\london4.jpg'>"
	else if(london===5)
		document.getElementById("bigImgLondon").innerHTML ="<img class='bigImg' src='London\\london5.jpg'>"
	else if(london===6)
		document.getElementById("bigImgLondon").innerHTML ="<img class='bigImg' src='London\\london6.jpg'>"
	else if(london===7)
		document.getElementById("bigImgLondon").innerHTML ="<img class='bigImg' src='London\\london7.jpg'>"
}
var rateLondon=9.2,reviewsLondon=1200;
document.getElementById("rateIntLondon").innerHTML =rateLondon;
if(rateLondon>9.2)
	document.getElementById("rateStringParis").innerHTML = "Excellent"+"<br>"+"reviews"+reviewsParis;
else if(rateLondon>=8)
	document.getElementById("rateStringLondon").innerHTML = "Very Good"+"<br>"+"reviews"+reviewsLondon;
else if(rateLondon>=5)
	document.getElementById("rateStringLondon").innerHTML="Good"+"<br>"+"reviews"+reviewsLondon;
else if(rateLondon>=3)
	document.getElementById("rateStringLondon").innerHTML="Not Bad"+"<br>"+"reviews"+reviewsLondon;
else if(rateLondon>=0)
	document.getElementById("rateStringLondon").innerHTML="Bad"+"<br>"+"reviews"+reviewsLondon;



var paris;
function bigImgControlParis(london)
{
	if(london===1)
		document.getElementById("bigImgParis").innerHTML ="<img class='bigImg' src='Paris\\paris1.jpg'>"
	else if(london===2)
		document.getElementById("bigImgParis").innerHTML ="<img class='bigImg' src='Paris\\paris2.jpg'>"
	else if(london===3)
		document.getElementById("bigImgParis").innerHTML ="<img class='bigImg' src='Paris\\paris3.jpg'>"
	else if(london===4)
		document.getElementById("bigImgParis").innerHTML ="<img class='bigImg' src='Paris\\paris4.jpg'>"
	else if(london===5)
		document.getElementById("bigImgParis").innerHTML ="<img class='bigImg' src='Paris\\paris5.jpg'>"
	else if(london===6)
		document.getElementById("bigImgParis").innerHTML ="<img class='bigImg' src='Paris\\paris6.jpg'>"
	else if(london===7)
		document.getElementById("bigImgParis").innerHTML ="<img class='bigImg' src='Paris\\paris7.jpg'>"
}
var rateParis=9.5,reviewsParis=104;
document.getElementById("rateIntParis").innerHTML =rateParis;
if(rateParis>9.2)
	document.getElementById("rateStringParis").innerHTML = "Excellent"+"<br>"+"reviews"+reviewsParis;
else if(rateParis>=8)
	document.getElementById("rateStringParis").innerHTML = "Very Good"+"<br>"+"reviews"+reviewsParis;
else if(rateParis>=5)
	document.getElementById("rateStringParis").innerHTML="Good"+"<br>"+"reviews"+reviewsParis;
else if(rateParis>=3)
	document.getElementById("rateStringParis").innerHTML="Not Bad"+"<br>"+"reviews"+reviewsParis;
else if(rateParis>=0)
	document.getElementById("rateStringParis").innerHTML="Bad"+"<br>"+"reviews"+reviewsParis;


