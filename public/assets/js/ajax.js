function Ajax_UpdatePanel(url, val, id, loading){
	var ajax = new Ajax(url, val, id, loading);
	ajax.UpdatePanel();
}

function Ajax_UpdatePanelSetValue(url, val, id, loading, objId_ToGetValue){
	var ajax = new Ajax(url, val, id, loading);
	ajax.UpdatePanel();
}

function Ajax_UpdatePanelAsync(url, val, id, loading){
	var ajax = new Ajax(url, val, id, loading);
	ajax.UpdatePanelAsync();

}

function Ajax_getResult(url, val){
	var ajax = new Ajax(url, val, "", "");
	return ajax.getResult();
}

function ByName(name){
	return document.getElementsByName(name)
}

function ById(name){
	return document.getElementById(name);
}


function Ajax(url, val, id, loading){
	if (val=='') val = '?nothing';
	this.url = url;
	this.val = val;
	this.id = id;
	try
	{
		if (id != "")
		{
			ById(id).height = 0
			ById(id).height = ById(id).offsetHeight - 5;
		}
	}
	catch (e)
	{}

	this.loading = loading;
	this.progressId = "progress"+ id;
	this.xmlHttp = new Ajax_GetXmlHttpObject(id, loading);

}


Ajax.prototype.UpdatePanel = function(){
			var doc = ById(this.id)
			if (doc == null){
				alert("Ajax_UpdatePanel - Error: "+ this.id + " is not found in document!")
				return
			}

			if (this.xmlHttp==null){
				alert ("Browser does not support HTTP Request")
				return
			}


			this.url = this.url + this.val
			this.url += "&spanId="+ this.id
			var sync
			sync = true
			this.xmlHttp.open("GET",this.url,sync);
			this.xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8;');
			this.xmlHttp.send(null);


}

Ajax.prototype.UpdatePanelAsync = function(){
			var doc = ById(this.id)
			if (doc == null){
				alert("Ajax_UpdatePanel - Error: "+ this.id + " is not found in document!")
				return
			}

			if (this.xmlHttp==null){
				alert ("Browser does not support HTTP Request")
				return
			}



			this.url = this.url + this.val
			this.url += '&spanId='+ this.id
			var sync
			sync = false
			this.xmlHttp.open("GET",this.url,sync);
			this.xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8;');
			this.xmlHttp.send(null);

			if (sync == false) {
					ById(this.id).innerHTML = this.xmlHttp.responseText
			}


}



Ajax.prototype.getResult = function(){

			if (this.xmlHttp==null){
				alert ("Browser does not support HTTP Request")
				return
			}

			this.url = this.url + this.val
			this.url += '&spanId='+ this.id
			var sync
			sync = false
			var result = ""

			this.xmlHttp.open("GET",this.url,sync);
			this.xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8;');
			this.xmlHttp.send(null)
			if (sync == false) {
				result = this.xmlHttp.responseText
			}



			return result

}

function Ajax_GetXmlHttpObject(id, loading){
	var obj;
	try {
		browser = "Other";
		obj = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {}
    try {
    	browser = "IE"
    	obj = new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) {}
    try {
    	browser = "FF"
    	obj = new XMLHttpRequest(); } catch(e) {}

	var isLoading = false
	obj.onreadystatechange = function()
	{
							if (id != "")
							{


								if (obj.readyState==4 || obj.readyState=="complete")
								{
										ById(id).innerHTML=obj.responseText;

								}
								else
								{
									if (!isLoading) {
										isLoading = true;

										switch (loading)
										{
											case 0:
												break;
											case true:
											case 1:
												var str = "<font color=#0066FF size=3>Loading...</font><br>"
												ById(id).innerHTML = str + "<img src='/images/loading6.gif'>" ;
												break;
											case 'table_loading':
												ById(id).innerHTML = "<img src='/images/table_loading01.gif'>" ;
												break;
											case "inline":
												var str = "<font color=#0066FF size=2>Loading...</font>"
												ById(id).innerHTML = "<img src='/images/loading8.gif'> "+ str ;
												break;


										}

									} // if (!isLoading)
								}
							}
	};



	return obj;
} // End GetXmlHttpObject()

function Ajax_getSort(column, tbl){
	try
	{
		var sortDirection
		var oldSortColumn

		sortDirection = ById("hiddenSort"+ tbl +"Direction").value
		oldSortColumn = ById("hiddenSort"+ tbl +"Column").value



		if (column == oldSortColumn)
		{
			if (sortDirection == "ASC")
			{
				sortDirection = "DESC"
			}
			else
			{
				sortDirection = "ASC"
			}
		}
		else if (column == null)
		{
			column = oldSortColumn
		}
		else
		{
			sortDirection = "ASC"
		}
		var sortColumn =""

		sortColumn =  encodeURI(column)
		sortColumn += "&sortDirection="+ sortDirection

		ById("hiddenSort"+ tbl +"Direction").value = sortDirection
		ById("hiddenSort"+ tbl +"Column").value = column


		return (sortColumn)
	}
	catch (e)
	{
		alert("Error in Ajax: getSort\n"+ e.message)
	}
}


function Ajax_SubTableSort(url, spanId, column, tbl, key){

	try
	{
			var initPage
			initPage = ById("hidden"+ tbl +"InitPage").value

	}
	catch (e)
	{
		alert("Error in Ajax: SubTableSort \n"+ e.message)
	}

	Ajax_SubTableNavigation(url,spanId, initPage, column,tbl, key)

}

function Ajax_SubTableNavigation(url, spanId, initPage , sortColumn, tbl, key){
	try
	{
		var submitValue

		if ((key == null) || (key == "")) { key = "key=''" }

		submitValue = "?"+ key
		submitValue += "&initpage="+ initPage
		submitValue += "&sortcolumn="+ Ajax_getSort(sortColumn,tbl)
		submitValue += "&tbl="+ tbl

		Ajax_UpdatePanel(url,submitValue, spanId, true)

	}
	catch (e)
	{
		alert("Error in Ajax: Ajax_SubTableNavigation\n"+ e.message);
	}
}

function Ajax_SubTableNavigationAsync(url, spanId, initPage , sortColumn, tbl, key){
	try
	{
		var submitValue

		if ((key == null) || (key == "")) { key = "key=''" }

		submitValue = "?"+ key
		submitValue += "&initpage="+ initPage
		submitValue += "&sortcolumn="+ Ajax_getSort(sortColumn,tbl)
		submitValue += "&tbl="+ tbl

		Ajax_UpdatePanelAsync(url,submitValue, spanId, 'table_loading')

	}
	catch (e)
	{
		alert("Error in Ajax: Ajax_SubTableNavigationAsync\n"+ e.message);
	}
}





